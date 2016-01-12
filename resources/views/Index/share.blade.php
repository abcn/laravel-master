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
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body>
    <img src="{{asset('image/share.jpg')}}" width="100%" height="100%"/>
</body>