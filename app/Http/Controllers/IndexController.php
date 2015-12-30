<?php
/**
 * Created by PhpStorm.
 * User: zhouhaotong
 * Date: 15/12/21
 * Time: 上午12:34
 */

namespace App\Http\Controllers;


use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Overtrue\Wechat\Auth;
use Overtrue\Wechat\Js;
use Overtrue\Wechat\LuckMoney;
use Overtrue\Wechat\Payment\Business;

class IndexController extends Controller
{
    private $appid;
    private $secret;
    private $mch_id;
    private $mch_key;
    private $openid;

    public function __construct()
    {
        $this->appid    = 'wx1f1396a63919c6c9';
        $this->secret   = '39abf0fc4db090f669ff3a5a5cee8603';
        $this->mch_id   = '1280632301';
        $this->mch_key  = 'o9I7Djp5h8F0glTJm1Uv2gcPC1zIKc7k';
    }

    /**
     *显示页面
     */
    public function index(){
        session_start();
        //生成微信JSSDK所需参数
        $data = array();
        $data['js'] = new Js($this->appid,$this->secret);

        return view('Index/index',$data);
    }

    /**
     * 微信授权页面
     */
    public function pageShow(){
        //判断用户授权状态
        $auth = new Auth($this->appid,$this->secret);
        if(!empty($_SESSION['logged_user'])){
            $user = $_SESSION['logged_user'];
        }else{
            $user = $auth->authorize($to = 'http://www.tianpengtech.com',$scope = 'snsapi_base'); //返回用户
            $_SESSION['logged_user'] = $user->all();
        }
        //获取用户 openid $user['openid']
        $this->openid = $user['openid'];
        //将用户存入数据库
        $isRegister = DB::table('customers')->where('openid',$this->openid)->first();
        //检查该用户是否已注册
        if(empty($isRegister)) {
            $customer = new Customer();
            $customer->openid = $this->openid;
            $customer->save();
        }
        //跳转到显示页面
        return redirect('/');
    }

    /**
     *红包发送代码
     */
    public function sendRed(){
        //发送红包钱判断用户是否有发送机会
        $customer = Customer::where('openid', $this->openid)->firstOrFail();
        if($customer->chances <= 0){
            $result['return_code']  = 'FAIL';
            $result['return_msg']   = '红包机会已用完';
            return $result;
        }
        //$appId, $appSecret, $mchId, $mchKey
        /**
         * 第 1 步：定义商户
         */
        $business = new Business($this->appid,$this->secret,$this->mch_id,$this->mch_key);
        /**
         * 第 2 步：设置证书路径
         * CLIENTCERT_PATH即证书apiclient_cert.pem的路径
         * CLIENTkey_PATH即证书apiclient_key.pem的路径
         */
        $business->setClientCert(storage_path('cert/apiclient_cert.pem'));
        $business->setClientKey(storage_path('cert/apiclient_key.pem'));
        /**
         * 第 3 步：创建LuckMoney实例
         */
        $luckMoneyServer = new LuckMoney($business);

        /**
         * 第 4 步：要发送的红包相关数据（本代码以发送现金红包为例）
         */
        $luckMoneyData['mch_billno']    = time();  //红包记录对应的商户订单号
        $luckMoneyData['send_name']     = '犟骨头';  //红包发送者名称
        $luckMoneyData['re_openid']     = $this->openid;  //红包接收者的openId
        $luckMoneyData['total_amount']  = 100;  //红包总额（单位为分），现金红包至少100，裂变红包至少300
        $luckMoneyData['total_num']     = 1;  //现金红包时为1，裂变红包时至少为3
        $luckMoneyData['wishing']       = '恭喜发财';
        $luckMoneyData['act_name']      = '关注有礼';
        $luckMoneyData['remark']        = 'test';

        /**
         * 第 5 步：发送红包
         * 第二个参数表示发送的红包类型，有现金红包（'CASH_LUCK_MONEY'）和裂变红包（'GROUP_LUCK_MONEY'）可选，红包工具类中已定义相关常量。
         */
        $result = $luckMoneyServer->send($luckMoneyData);

        //判断红包是否发送成功
        if($result['return_code'] == 'SUCCESS'){
            //将用户存入数据库
            DB::table('customers')->decrement('chances', 1, ['openid'=>$this->openid]);
        }
        return $result;
    }
    /**
     * 分享到朋友圈获取红包机会+1
     */
    public function addChance(){
        //根据openid 获取用户信息
        $customer = Customer::where('openid', $this->openid)->firstOrFail();
        //判断用户是否已经分享过
        if($customer->share == 1){
            $result['return_code']  = 'FAIL';
            $result['return_msg']   = '已经分享过不能再获取红包机会';
            return $result;
        }
        //增加用户抽奖机会
        $customer->chances  += 1;
        $customer->share    = 1;
        $customer->save();
        $result['return_code']  = 'SUCCESS';
        $result['return_msg']   = '已增加获取红包机会';
        return $result;
    }

}