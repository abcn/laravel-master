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
use Overtrue\Wechat\LuckMoney;
use Overtrue\Wechat\Payment\Business;

class IndexController extends Controller
{
    private $appid;
    private $secret;

    public function __construct()
    {
        $this->appid = 'wx1f1396a63919c6c9';
        $this->secret = '39abf0fc4db090f669ff3a5a5cee8603';
    }

    /**
     *
     */
    public function index(Request $request){
        //判断用户授权状态
        if(Session::has('logged_user')){
            $user = Session::get('logged_user');
        }else{
            $auth = new Auth($this->appid,$this->secret);
            $user = $auth->authorize($to = 'http://192.168.31.156'); //返回用户
            Session::put(['logged_user' => $user]);
        }

        //获取用户 openid $user['openid']
        $openid = $user['openid'];
        //将用户存入数据库
        $isRegister = DB::table('customers')->where('openid',$openid)->first();
        //检查该用户是否已注册
        if(empty($isRegister)) {
            $customer = new Customer();
            $customer->openid = $openid;
            $customer->save();
        }


        $data = array();

        return view('Index/index',$data);
    }
    /**
     *红包发送代码
     */
    public function sendRed(){

        //$appId, $appSecret, $mchId, $mchKey
        /**
         * 第 1 步：定义商户
         */

        $business = new Business($this->appid,$this->secret,$mch_id);
        /**
         * 第 2 步：设置证书路径
         * CLIENTCERT_PATH即证书apiclient_cert.pem的路径
         * CLIENTkey_PATH即证书apiclient_key.pem的路径
         */

        /**
         * 第 3 步：创建LuckMoney实例
         */
        $luckMoneyServer = new LuckMoney($business);

        /**
         * 第 4 步：要发送的红包相关数据（本代码以发送现金红包为例）
         */
        $luckMoneyData['mch_billno'] = time();  //红包记录对应的商户订单号
        $luckMoneyData['send_name'] = '某某公司';  //红包发送者名称
        $luckMoneyData['re_openid'] = 'oJCvDjjQKx5LMtM_1kjK0gGQLsew';  //红包接收者的openId
        $luckMoneyData['total_amount'] = 100;  //红包总额（单位为分），现金红包至少100，裂变红包至少300
        $luckMoneyData['total_num'] = 1;  //现金红包时为1，裂变红包时至少为3
        $luckMoneyData['wishing'] = '祝福语';
        $luckMoneyData['act_name'] = '活动名称';
        $luckMoneyData['remark'] = '红包备注';

        /**
         * 第 5 步：发送红包
         * 第二个参数表示发送的红包类型，有现金红包（'CASH_LUCK_MONEY'）和裂变红包（'GROUP_LUCK_MONEY'）可选，红包工具类中已定义相关常量。
         */
        $result = $luckMoneyServer->send($luckMoneyData);

        //判断红包是否发送成功
        if($result){
            //抽奖次数-1

        }

    }

}