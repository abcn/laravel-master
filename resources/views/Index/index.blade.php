<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    wx.config(<?php echo $js->config(array('checkJsApi','onMenuShareQQ', 'onMenuShareTimeline','onMenuShareAppMessage'), false, true) ?>);

    wx.ready(function(){
        wx.onMenuShareTimeline({//分享到朋友圈
            title: '马云邀请你加入群聊', // 分享标题
            link: 'http://www.haipago.com/', // 分享链接
            imgUrl: "{{asset('image/sharepop.jpg')}}", // 分享图标
            success: function () {
                //成功分享后 获取红包机会+1 仅此一次
                window.location.href = 'share';
            },
            cancel: function () {
            }
        });

        wx.onMenuShareAppMessage({// 分享给微信好友
            title: '马云邀请你加入群聊', // 分享标题
            desc: '马云邀请你加入中国顶级土豪群，进入查看详情。', // 分享描述
            link: 'http://www.haipago.com/', // 分享链接
            imgUrl: "{{asset('image/sharepop.jpg')}}", // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                //成功分享后 获取红包机会+1 仅此一次
            },
            cancel: function () {
            }
        });

    });

</script><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>马云和你聊聊犟骨头</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <script type="text/javascript" src="js/setviewport.js"></script>
    <script type="text/javascript" src="js/preloadjs-0.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/soundjs-0.6.0.min.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
    <!--<script type="text/javascript" src="js/getnickname.js"></script>-->
    <script type="text/javascript" src="http://static.udache.com/gulfstream/webapp/js/didi.base.js"></script>

    <script type="text/javascript" src="http://js.miaozhen.com/wx.1.0.js"></script>
</head>
<body>

<div class="main hide">
    <div class="page" id="page">
        <!--<div class="enterpage"></div>-->
        <div class="longpage hide">
            <div class="groupinfo radioBox"><div class="cont" style="color:white;">马云 阿里 邀请王健林 万达，王思聪 国民老公，马化腾 腾讯，李彦宏 百度，雷军 小米，刘强东 京东，周鸿祎 360，王石 万科  加入了群聊</div></div>

            <div id="msg1" class="massge hide" style="height: 140px;">
                <div class="headimg"><img src="{{asset('image/my.jpg')}}" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent" >
                    <div class="mcla radioBox" style="background-color: #62b900">朋友们，你们知道犟骨头么？</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg2" class="massge hide" style="height: 120px;">
                <div class="headimg"><img src="./image/wjl.jpg" /></div>
                <div class="mname">王健林 万达</div>
                <div class="mcontent">
                    <div class="mcla radioBox">不知道，我只知道安利...</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg3" class="massge hide" style="height: 140px;">
                <div class="headimg"><img src="./image/lj.jpg" /></div>
                <div class="mname">雷军 小米</div>
                <div class="mcontent">
                    <div class="mcla radioBox">I 不知道 too!<img src="./image/bq1.png" style="margin-top: 10px;" /></div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg4" class="massge hide" style="height: 150px;">
                <div class="headimg"><img src="./image/wsc.jpg" /></div>
                <div class="mname">王思聪 国民老公</div>
                <div class="mcontent">
                    <div class="mcla radioBox">犟骨头？是娱乐圈的哪位女明星？</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg5" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">撕聪，你真是为娱乐圈操碎了心啊！中国的未来怎么放心交给你，我很失望，我对你粉转路人了！</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg6" class="massge hide" style="height: 150px;">
                <div class="headimg"><img src="./image/wsc.jpg" /></div>
                <div class="mname">王思聪 国民老公</div>
                <div class="mcontent">
                    <div class="mcla radioBox">呵呵</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg7" class="massge hide" style="height: 150px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">王思聪 国民老公 已退出了群聊</div></div>
            </div>

            <div id="msg8" class="massge hide" style="height: 120px;">
                <div class="headimg"><img src="./image/lqd.jpg" /></div>
                <div class="mname">刘强东 京东</div>
                <div class="mcontent">
                    <div class="mcla radioBox">...</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg9" class="massge hide" style="height: 150px;">
                <div class="headimg"><img src="./image/lyh.jpg" /></div>
                <div class="mname">李彦宏 百度</div>
                <div class="mcontent">
                    <div class="mcla radioBox">...</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg10" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/wjl.jpg" /></div>
                <div class="mname">王健林 万达</div>
                <div class="mcontent">
                    <div class="mcla radioBox">年轻人，还是沉不住气啊。马总，你继续说，犟骨头是干毛线的？</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg11" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">一家餐饮公司，最近听说挺火的，所以和老周和小马一起去尝了尝，本宝宝感觉不错！</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg12" class="massge hide" style="height: 200px;">
                <div class="headimg"><img src="./image/zhy.jpg" /></div>
                <div class="mname">周鸿祎 360</div>
                <div class="mcontent">
                    <div class="mcla radioBox">马总，这事其实你就不能让小马知道，他们家那抄袭能力，就连卡卡西也甘拜下风啊，看来犟骨头凶多吉少了...
                    </div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg13" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/mht.jpg" /></div>
                <div class="mname">马化腾 腾讯</div>
                <div class="mcontent">
                    <div class="mcla radioBox">老周，你又想撕逼了？这叔能忍婶也不能忍！走出去！私聊！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg14" class="massge hide" style="height: 120px;">
                <div class="headimg"><img src="./image/zhy.jpg" /></div>
                <div class="mname">周鸿祎 360</div>
                <div class="mcontent">
                    <div class="mcla radioBox">谁怕谁？走！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg15" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">马化腾 腾讯 已退出群聊</div></div>
            </div>

            <div id="msg16" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">周鸿祎 360  已退出群聊</div></div>
            </div>

            <div id="msg17" class="massge hide" style="height: 220px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">大家还能不能一起愉快的玩耍了？说正事，我想大家一起商量下收购犟骨头的事！我怕今天我对他们爱答不理,明天他们让我高攀不起啊!王石,收购的事你怎么看？</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg18" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/ws.jpg" /></div>
                <div class="mname">王石 万科</div>
                <div class="mcontent">
                    <div class="mcla radioBox">老马，我现在最受不了就是收购2字，你太不会聊天了，走了！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg19" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">王石 万科 已退出群聊</div></div>
            </div>

            <div id="msg20" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">对了，强东你不是也干奶茶么？也算是餐饮，给点意见呗！</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg21" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/lqd.jpg" /></div>
                <div class="mname">刘强东 京东</div>
                <div class="mcontent">
                    <div class="mcla radioBox">老马，你说话怎么这么污呢？唉，话不投机半句多，再见！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg22" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">刘强东 京东 已退出群聊</div></div>
            </div>

            <div id="msg23" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">唉，今天是怎么了？该退群的没退群， 不该退的全退了。</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg24" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">雷军 小米 已退出群聊</div></div>
            </div>

            <div id="msg25" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">李彦宏 百度 已退出群聊</div></div>
            </div>

            <div id="msg26" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">王健林 万达  已退出群聊</div></div>
            </div>

            <div id="msg27" class="massge hide" style="height: 120px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">哈哈哈，我太机智了！</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg28" class="massge hide" style="height: 150px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">马云邀请七惑加入了群聊</div></div>
            </div>

            <div id="msg29" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">我终于把他们都弄走了，咱2个单独谈谈合作的事吧！你可能年轻，没见过这么多钱，这1个亿拿去挥霍吧！</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg30" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/tx3.jpg" /></div>
                <div class="mname">七惑</div>
                <div class="mcontent">
                    <div class="mcla radioBox">对不起小马哥!我们不开淘宝店!这一个亿还是拿去给喜欢犟骨头的朋友吧</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                </div>
            </div>

            <div id="msg31" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox" style="background-color: #62b900">果然是犟骨头！我喜欢</div>
                    {{--<div class="jb"><img src="./image/pdj.png" /></div>--}}
                    <div class="redpick" id="redpick2">
                        <img src="./image/redpick.png" />
                    </div>
                </div>
            </div>

            <div class="di"><img src="./image/di.jpg"/></div>

        </div>
    </div>

    <div id="hongbao" class="hongbao hide">
        <img id="hb1" class="hide" src="./image/hb1.jpg" />
        <img id="hb2" class="hide" src="./image/hb2.jpg" />
        <img id="hb1Open" class="hide" src="./image/hb1_open.jpg" />
        <div id="btn1"></div>
        <div id="btn2"></div>
        <div id="btn3" class="hide"></div>
        <img class="circle hide"  src="./image/circle.png" />
        <img class="hand hide"  src="./image/hand.png" />
    </div>

    <div id="hbnull" class="hbnull hide">
        <img id="null1" class="hide" src="./image/hb1_null.jpg" />
        <img id="null2" class="hide" src="./image/hb2_null.jpg" />
        <div id="btn4" class="hide"></div>
        <div id="btn5" class="hide"></div>
        <div class="sharepop hide"><img src="./image/sharepop.png" /></div>
        <img class="circle hide"  src="./image/circle.png" />
        <img class="hand hide"  src="./image/hand.png" />
    </div>

</div>
<script type="text/javascript">
    _mwx=window._mwx||{};
    _mwx.siteId=8000292;
    //_mwx.openId=xxxxxxxxxxx; //OpenID为微信提供的用户唯一标识,需要开发者传入，如果没有OpenID，去掉该代码即可。
</script>
<div style="display:none">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?cc5846458b43dd45e8a6e7071691d4f9";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        $(function(){
            var mobile   = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
            var touchstart = mobile ? "touchstart" : "mousedown";
            var touchend = mobile ? "touchend" : "mouseup";
            var touchmove = mobile ? "touchmove" : "mousemove";
            var tap = mobile ? "tap" : "click";

            //阻止屏幕滑动
            $('html,body').on(touchmove,function(e){
                e.preventDefault()
            });

            _mz_wx_view (1);//秒针检测


            var motionObj = {};
            var loadingPath='images/';
            var stageH=$(window).height();
            var stageW=$(window).width();

            //定义时间动画：
            for(var i=0; i<10; i++){
                motionObj["page"+(i+1)] = new TimelineMax();
            };

            //修改微信用户信息
            //$('#msg15 .mname').text(nickname);
            //$('.cont').text(nickname+'邀请你加入了“亿万富豪”群聊，群聊参与人还有：滴滴CEO -程维、京东－刘强东、万科-王石、联想-柳传志、SOHO中国－潘石屹、全民老公-王思聪……');
            //$('#msg15 .headimg>img').attr('src',headimgurl);
            //wxDefault['desc'] = nickname+'邀请你加入群聊亿万富豪红包群，点击查看详情。'
            //wxShare();

            //初始化音乐
            var _music;
            function intsound(){
                var sounds = [
                    {src: "../image/bg1.mp3", id: 1}
                ];
                createjs.Sound.alternateExtensions = ["ogg"];
                createjs.Sound.registerSounds(sounds, loadingPath);
            }
            intsound();

            //初始化阻止屏幕双击，当有表单页的时候，要关闭阻止事件，否则不能输入文字了，请传入false值，再次运行即可
            initPreventPageDobuleTap(true);
            initPageMotion();
            //initButtons();

            //初始化动画
            function initPageMotion(){

                $(".main").fadeIn(300,function(){
                    setTimeout(function(){
                        $('.longpage').show();
                        document.title='传说中的人傻钱多红包群';
                        //setTimeout(function(){
                        //    motionObj['page'+1].play();
                        //},1000)
                        messages1();
                    },2000)
                });
            }

            //产生随机姓名
            function GetRandomNum(Min,Max)
            {
                var Range = Max - Min;
                var Rand = Math.random();
                return(Min + Math.round(Rand * Range));
            }
            var userNamesArray = ['程维','刘强东','王石','柳传志','潘石屹','王思聪'];
            var _uid = GetRandomNum(0,5);
            var _userName = userNamesArray[_uid];
            console.log(_userName);

            function getUrlParam (name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                var r = window.location.search.substr(1).match(reg);
                if (r != null) return decodeURIComponent(r[2]); return "";
            }
            var nameParameter = getUrlParam('id');
            //alert(nameParameter)
            if(nameParameter !='' && nameParameter != null && nameParameter != undefined){
                //alert(userNamesArray[parseInt(_uid)])
                //alert(userNamesArray[parseInt(nameParameter)])
                $('.cont').text(userNamesArray[parseInt(nameParameter)]+'邀请你加入了“传说中的人傻钱多红包群”群聊，群聊参与人还有：程维 滴滴、刘强东 京东、王石 万科、柳传志 联想、潘石屹 SOHO中国、王思聪 国民老公-……');
            }


            /*wxdata['title'] = _userName+'邀请你加入群聊';

             wxdata['desc'] = _userName+'邀请你加入群聊传说中的人傻钱多红包群，进入查看详情。'
             wxdata['link'] = wxdata['link']+'?id='+_uid;
             setShare();  //微信分享*/


            var _DIST = 0
            var _space = stageH/2-520;
            var _space2 = 0;

            var _timer;
            var msgID;
            var dist;
            //显示消息1
            function messages1(){
                msgID=1;
                //dist = -150+_space;
                dist = -150;
                _timer = setInterval(setMS1,2000)
            }

            //显示消息2
            function messages2(){
                //$('#msg'+15).fadeIn();
                //msgID=7;
                dist = 0;
                //dist = _space;
                clearInterval(_timer);
                _timer = setInterval(setMS2,2000)
            }

            //播放消息声音
            function playmessagesSound(){
                _music = createjs.Sound.play('1');
                _music.volume = 0.1;
            }

            function setMS1(){
                if(msgID<=6){
                    if(msgID==4){
                        console.log(_space)
                        TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':dist+100+_space+'px'},ease:Linear.easeNone});
                        dist += -50+_space;
                        _DIST = dist;

                    }else if(msgID>4){
                        if(msgID == 6){
                            goNextAnimation();
                        }else{
                            TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':dist+50+'px'},ease:Linear.easeNone});
                            dist += -100;
                            _DIST = dist;
                        }
                    }
                    if(msgID==4) receiveMoney();
                    $('#msg'+msgID).fadeIn();
                    playmessagesSound();
                }else{
                    clearInterval(_timer);
                }
                msgID++;
            }

            function setMS2(){
                if(msgID<=31){
                    if(msgID==9){
                        _btn1 = 2;
                        _btn2 = 2;
                        _btn3 = 2;
                    }

                    if(msgID==11) {
                        TweenMax.to($(".longpage>div").not($('.di')), .5, { css: {'top': _DIST + dist - 130 + 'px'}, ease: Linear.easeNone });
                        dist += -280;
                    }else if(msgID>=11 && msgID<=14){
                        TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist+'px'},ease:Linear.easeNone});
                        dist += -100;
                        if(msgID==14){
                            clearInterval(_timer);
                            _timer = setInterval(setMS2,1000);
                        }
                    }else if(msgID==15){
                        TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist-50+'px'},ease:Linear.easeNone});
                        dist += -150;
                        clearInterval(_timer);
                        _timer = setInterval(setMS2,1500);
                    }else if(msgID==18){
                        TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist-100+'px'},ease:Linear.easeNone});
                        dist += -250;
                    }else if(msgID==29){
                        TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist-150+'px'},ease:Linear.easeNone});
                        dist += -300;
                    }else{
                        TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist+'px'},ease:Linear.easeNone});
                        dist += -150;
                    }
                    //}else if(msgID>11 && msgID<16){
                    //    TweenMax.to($(".longpage>div").not($('.di')),.4, {css:{'top':_DIST+dist+'px'},ease:Linear.easeNone});
                    //    dist += -100;
                    //    if(msgID==13){
                    //        clearInterval(_timer);
                    //        _timer = setInterval(setMS2,1300);
                    //    }
                    //}else if(msgID==16){
                    //    TweenMax.to($(".longpage>div").not($('.di')),.4, {css:{'top':_DIST+dist-50+'px'},ease:Linear.easeNone});
                    //    dist += -100;
                    //}else if(msgID==18){
                    //    TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist-120+'px'},ease:Linear.easeNone});
                    //    //dist += -280;
                    //}else if(msgID==17){
                    //    TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist-200+'px'},ease:Linear.easeNone});
                    //    dist += -350;
                    //    clearInterval(_timer);
                    //    _timer = setInterval(setMS2,1500);
                    //}else{
                    //    TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+dist+'px'},ease:Linear.easeNone});
                    //    dist += -150;
                    //}

                    if(msgID==9) msgID =msgID+1;
                    $('#msg'+msgID).fadeIn();
                    playmessagesSound();
                }else{
                    clearInterval(_timer);
                }
                msgID++;
            }

            var _btn1 = 1;
            var _btn2 = 1;
            var _btn3 = 1;

            //打开红包
            var isTheFirstReceive = true;
            var ct = true;
            function receiveMoney(){
                $('#redpick1, #msg6 .hand').one(touchstart, function(){
                    $('#msg6 .circle').css({'animation':'none','-webkit-animation':'none'});
                    $('#msg6 .circle,#msg6 .hand').fadeOut();
                    _mz_wx_view (2);//马云红包页
                    _mz_wx_custom(1);
                    if(isTheFirstReceive){
                        if(ct){
                            $('.hongbao,#hb1').show();
                            TweenMax.to('#hb1',.5, {alpha:1, scale:1, ease:Bounce.easeOut});
                        }else{
                            $('.hongbao,#hb1Open,#btn3').show();
                            TweenMax.to('#hb1Open',.5, {alpha:1, scale:1, ease:Bounce.easeOut});
                        }
                    }else{
                        $('.hbnull,#null1').show();
                    }
                })
            }

            //拆红包：
            var canRemoveMoney = true;
            $('#btn2').on(touchstart, function(){
                if(_btn2==1){
                    if(canRemoveMoney){
                        _mz_wx_view (3);//马云红包派完页
                        _mz_wx_custom(2);
                        $('#hb1Open,#btn3').show();
                        $('#hb1').hide();
                        TweenMax.to('#hb1',{scale:0.5, alpha:0});
                        setTimeout(function(){
                            $('#hongbao .circle').show();
                            $('#hongbao .hand').show();
                        },2000);
                        //canRemoveMoney = false;
                        //第一次拆红包，设置关闭按钮为第二页的关闭
                        isTheFirstClose = false;
                    }else{
                        alert('已经拆过红包了');
                    }
                }else{
                    //CEO的红包
                    _mz_wx_view (6);//滴滴程维领红包
                    _mz_wx_custom(5);
                    $('.hbnull').css('transform','scale('+stageW/640+','+stageH/1039+')');
                    $('.hbnull').css('-webkit-transform','scale('+stageW/640+','+stageH/1039+')');
                    $('.hbnull').css('top',stageH/2-520+'px');

                    $('.hongbao,#hb2').hide();
                    TweenMax.set('#hb2',{alpha:0, scale:0.5});
                    //$('.hbnull,#null2,#btn4,#btn5').show();
                    //alert($('#btn5'))
                    //TODO 执行 ajax请求红包
//                    $.ajax({
//                        type: "GET",
//                        url: 'send',
//                        dataType: 'json',
//                        success: function(data){
//                            alert(data.return_msg);
//                        }
//                    })
                    window.location.href = 'pocket';
                    goshare();
                }
            })

            //看手气：
            $('#btn3').on(touchstart, function(){
                $('.hbnull,#null1').show();
                $('#hb1Open').hide();
                _mz_wx_view (4);//马云红包看手气页
                _mz_wx_custom(3);
                setTimeout(function(){
                    $('#hbnull .circle').show();
                    $('#hbnull .hand').show();
                },2000);
            })

            //详情页：
            //var isTheFirst = true;
            $('#null1').on(touchstart, function(){
                $('#null1,.hbnull').fadeOut();
                $('.hongbao').hide();
                $('#hbnull .circle').remove();
                $('#hbnull .hand').remove();
                $('#hongbao .circle').remove();
                $('#hongbao .hand').remove();
                isTheFirstReceive = false;
                goNextAnimation();
            })

            //关闭
            var isTheFirstClose = true;
            $('#btn1').on(touchstart, function(){
                if(_btn1 == 1){
                    if(isTheFirstClose){
                        //拆红包页关闭
                        $('.hongbao,#hb1').hide();
                        $('#hongbao .circle').remove();
                        $('#hongbao .hand').remove();
                        TweenMax.set('#hb1', {alpha:0, scale:0.5});
                        goNextAnimation();
                        //isTheFirstClose = false;
                    }else{
                        $('.hongbao,#hb1Open,#btn3').hide();
                        $('#hongbao .circle').remove();
                        $('#hongbao .hand').remove();
                        TweenMax.to('#hb1Open',.5, {alpha:0, scale:0.5, ease:Bounce.easeOut});
                        //第二页点击关闭按钮：
                        ct = false;
                        goNextAnimation();
                    }
                }else{

                }
            })

            //继续下面的动画：
            var cangoNext = true;
            function goNextAnimation(){
                if(cangoNext){
                    //$('.iputmessage').show();
                    //TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+60+'px'},ease:Linear.easeNone});
                    //TweenMax.from('#imessage',1, {y:530, ease:Expo.easeOut,onStart:function(){ $('#imessage').show();  }})
                    //sendMessages();
                    //cangoNext = false;
                    messages2();
                }
            }

            //发送自己的消息
            function sendMessages(){
                $('.send').on(touchstart, function(){
                    //TweenMax.to($(".longpage>div").not($('.di')),.5, {css:{'top':_DIST+150+'px'},ease:Linear.easeNone});
                    //TweenMax.to('#imessage',.6, {y:0, ease:Linear.easeNone,onComplete:function(){
                    //    $('#imessage,.iputmessage').hide();
                    //    //motionObj['page'+2].play();
                    //    messages2();
                    //}})
                    //messages2();
                })
            }

            //打开CEO的红包
            $('#redpick2, #msg19 .hand').on(touchstart, function(){
                $('.hongbao,#hb2').show();
                _mz_wx_view (5);//打开滴滴程CEO红包
                _mz_wx_custom(4);
                TweenMax.to('#hb2',.5, {alpha:1, scale:1, ease:Bounce.easeOut});
            })

            function goshare(){
                $('#btn4,#btn5').show();
                $('#btn4').on(touchstart, function(){
                    _mz_wx_custom(6);

                    setTimeout(function(){

                        location.href='http://m.pthola.com/Account/Register';

                    },500);

                });
                $('#btn5').on(touchstart, function(){
                    _mz_wx_custom(7);

                    $('.sharepop').fadeIn(300,function(){
                        setTimeout(function(){
                            $('.sharepop').fadeOut(300);
                        },1500)
                    })
                });
            }

            //阻止屏幕双击以后向上位移,当有表单页的时候，要关闭阻止事件，否则不能输入文字了
            function initPreventPageDobuleTap(isPreventPageDobuleTap){
                if(isPreventPageDobuleTap){
                    $('.page').on(touchstart,function(e){
                        e.preventDefault();
                    })
                }else{
                    $('.page').off(touchstart);
                }
            }

            //关闭浮层
            $('.sharemask').on(touchstart,function(){
                $(this).hide();
            })
        });
    </script>

</div>
</body>
</html>