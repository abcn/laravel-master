<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    wx.config(<?php echo $js->config(array('checkJsApi','onMenuShareQQ', 'onMenuShareTimeline','onMenuShareAppMessage'), false, true) ?>);

    wx.ready(function(){
        wx.onMenuShareTimeline({// 分享到朋友圈
            title: '传说中的人傻钱多红包群', // 分享标题
            link: 'http://www.tianpengtech.com/', // 分享链接
            imgUrl: "{{asset('image/sharepop.png')}}", // 分享图标
            success: function () {
                //成功分享后 获取红包机会+1 仅此一次
                $.get('share');
            },
            cancel: function () {
            }
        });

        wx.onMenuShareAppMessage({// 分享给微信好友
            title: '传说中的人傻钱多红包群', // 分享标题
            desc: '马云邀请你加入中国顶级土豪群，进入查看详情。', // 分享描述
            link: 'http://www.tianpengtech.com/', // 分享链接
            imgUrl: "{{asset('image/sharepop.png')}}", // 分享图标
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
    <title>传说中的人傻钱多红包群</title>
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
    <script type="text/javascript" src="js/main2.js"></script>
</head>
<body>

<div class="main hide">
    <div class="page" id="page">
        <!--<div class="enterpage"></div>-->
        <div class="longpage hide">
            <div class="groupinfo radioBox"><div class="cont" style="color:white;">马云 阿里 邀请王健林 万达，王思聪 国民老公，马化腾 腾讯，李彦宏 百度，雷军 小米，刘强东 京东，周鸿祎 360，王石 万科  加入了群聊</div></div>

            <div id="msg1" class="massge hide" style="height: 140px;">
                <div class="headimg"><img src="image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent" >
                    <div class="mcla radioBox" >朋友们，你们知道犟骨头么？</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
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
                    <div class="mcla radioBox">撕聪，你真是为娱乐圈操碎了心啊！中国的未来怎么放心交给你，我很失望，我对你粉转路人了！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg6" class="massge hide" style="height: 150px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">王思聪 国民老公 已退出了群聊</div></div>
            </div>

            <div id="msg7" class="massge hide" style="height: 120px;">
                <div class="headimg"><img src="./image/lqd.jpg" /></div>
                <div class="mname">刘强东 京东</div>
                <div class="mcontent">
                    <div class="mcla radioBox">...</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg8" class="massge hide" style="height: 150px;">
                <div class="headimg"><img src="./image/lyh.jpg" /></div>
                <div class="mname">李彦宏 百度</div>
                <div class="mcontent">
                    <div class="mcla radioBox">...</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg9" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/wjl.jpg" /></div>
                <div class="mname">王健林 万达</div>
                <div class="mcontent">
                    <div class="mcla radioBox">年轻人，还是沉不住气啊。马总，你继续说，犟骨头是干毛线的？</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg10" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox">一家餐饮公司，最近听说挺火的，所以和老周和小马一起去尝了尝，本宝宝感觉不错！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg11" class="massge hide" style="height: 200px;">
                <div class="headimg"><img src="./image/zhy.jpg" /></div>
                <div class="mname">周鸿祎 360</div>
                <div class="mcontent">
                    <div class="mcla radioBox">马总，这事其实你就不能让小马知道，他们家那抄袭能力，就连卡卡西也甘拜下风啊，看来犟骨头凶多吉少了...
                    </div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg12" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/mht.jpg" /></div>
                <div class="mname">马化腾 腾讯</div>
                <div class="mcontent">
                    <div class="mcla radioBox">老周，你又想撕逼了？这叔能忍婶也不能忍！走出去！私聊！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg13" class="massge hide" style="height: 120px;">
                <div class="headimg"><img src="./image/zhy.jpg" /></div>
                <div class="mname">周鸿祎 360</div>
                <div class="mcontent">
                    <div class="mcla radioBox">谁怕谁？走！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg14" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">马化腾 腾讯 已退出群聊</div></div>
            </div>

            <div id="msg15" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">周鸿祎 360  已退出群聊</div></div>
            </div>

            <div id="msg16" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox">大家还能不能一起愉快的玩耍了？说正事，我想大家一起收购犟骨头！王石你怎么看？</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg17" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/ws.jpg" /></div>
                <div class="mname">王石 万科</div>
                <div class="mcontent">
                    <div class="mcla radioBox">老马，我现在最受不了就是收购2字，你太不会聊天了，走了！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg18" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">王石 万科 已退出群聊</div></div>
            </div>

            <div id="msg19" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox">对了，强东你不是也干奶茶么？也算是餐饮，给点意见呗！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg20" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/lqd.jpg" /></div>
                <div class="mname">刘强东 京东</div>
                <div class="mcontent">
                    <div class="mcla radioBox">老马，你说话怎么这么污呢？唉，话不投机半句多，再见！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg21" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">刘强东 京东 已退出群聊</div></div>
            </div>

            <div id="msg22" class="massge hide" style="height: 170px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox">唉，今天是怎么了？该退群的没退群， 不该退的全退了。</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg23" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">刘雷军 小米 已退出群聊</div></div>
            </div>

            <div id="msg24" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">李彦宏 百度 已退出群聊</div></div>
            </div>

            <div id="msg25" class="massge hide" style="height: 120px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">王健林 万达  已退出群聊</div></div>
            </div>

            <div id="msg26" class="massge hide" style="height: 120px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox">哈哈哈，我太机智了！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg27" class="massge hide" style="height: 150px;">
                <div class="groupinfo radioBox"><div class="cont" style="color:white;">马云邀请七惑加入了群聊</div></div>
            </div>

            <div id="msg28" class="massge hide" style="height: 180px;">
                <div class="headimg"><img src="./image/my.jpg" /></div>
                <div class="mname">马云 阿里</div>
                <div class="mcontent">
                    <div class="mcla radioBox">我终于把他们都弄走了，咱2个单独谈谈合作的事吧！你可能年轻，没见过这么多钱，这1个亿拿去挥霍吧！</div>
                    <div class="jb"><img src="./image/pdj.png" /></div>
                </div>
            </div>

            <div id="msg29" class="massge hide" style="height: 220px;">
                <div class="headimg"><img src="./image/tx3.jpg" /></div>
                <div class="mname">七惑</div>
                <div class="redpick" id="redpick2">
                    <img src="./image/redpick.png" />
                </div>
                <!--                <img class="circle"  src="images/circle.png" />
                                <img class="hand"  src="images/hand.png" />-->
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

</div>
</body>
</html>