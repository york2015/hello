<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="特产,土特产,农产品,庐山特产网" name="keywords" />
<meta content="庐山特产网（tugoo.net)-专业的农土特产网上购物商城，专注在线销售农产品、土特产行业数万个品牌和类种的优质商品，品质保证、服务放心，便捷、诚信的服务为您提供愉悦的网上商城购物体验！" name="description" />
<title>会员登录 - 庐山特产网</title>
<link rel="stylesheet" type="text/css" href="/Public/css/Home/2016new.css" />
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/js/Home/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/js/Home/lhgdialog/lhgdialog.js"></script>
<script type="text/javascript" src="/Public/js/common.js"></script>
<script type="text/javascript">
    $(function () {
        $(".navl ul li").eq(0).find("a").addClass("on");
    })
</script>
<script type="text/javascript">
    $(function () {
        $("#loginForm").initValidform();
    })
</script>
<!--[if IE 6]>
    <script type="text/javascript" src="/template/platform_default/js/DD_belatedPNG.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix( '*');
    </script>
<![endif]-->
</head>
<body>

    <!--头部开始-->
    <div class="wrap clear">
        <div class="logo"><h1><a href="/index.html"><img src="/Public/images/Home/logo.png" width="217" height="41" title="" alt="" /></a></h1><em>欢迎登录</em></div>
    </div>
    <!--头部结束-->
    <div style=" background: url(/Public/images/Home/login.jpg) top center no-repeat; height: 470px;">
        <div class="wrap">
            <div class="login">
                <form id='loginForm' name='loginForm' method='post'>
                    <input type="hidden" name="act" value="login" />
                    <div class="loginc">
                        <h2><a href="<?php echo U('index');?>">返回首页</a>用户登录</h2>
                        <div class="lgtxt0 clear">
                            <input type="text" id="username" name="username" class="txtinput lgintxt lgintxt1" datatype="*" sucmsg=" " nullmsg="请填写账户名" placeholder="用户名/手机/邮箱" />
                        </div>
                        <input type="hidden" name='referer' value="<?php echo ($_SERVER['HTTP_REFERER']); ?>" />                        <div class="lgtxt0 clear">
                        <input type="password" id="password" name="password" class="txtinput lgintxt lgintxt2" datatype="*" sucmsg=" " nullmsg="请填写登录密码" />
                        </div>
                        <div class="lginbutc clear"><a href="<?php echo U('Home/Index/register');?>" class="lginbut right">注册</a>
                            <input type="submit" id="btnLogin" name="btnLogin" value="登 录" class="lginbut lginbut1" />
                        </div>
                    </div>
                    <div class="lgtxt">
                        <!--<p>使用合作网站账号登录庐山特产网：</p>-->
                        
                    </div>
                </form></div>
        </div>
    </div>

<!--底部开始-->
<div class="foot wrap clear">
    <em class="left"><a href="http://union.xns315.com/lm/xns017341.html"><img src="/Public/images/Home/xns315.gif" /></a><a href="/about.aspx?wd=zhengshu"><img src="/Public/images/Home/baiqiang.gif" /></a></em>
    <p><a href="/about.aspx?wd=about">关于我们</a><a href="/about.aspx?wd=contact">联系我们</a><a href="/about.aspx?wd=privacy">隐私声明</a><a href="/about.aspx?wd=service">服务条款</a><a href="/about.aspx?wd=job">招贤纳士</a><a href="/tenants.aspx">商家入驻</a></p>
    <p>增值电信业务经营许可证赣B2-2012052  赣ICP备12003095-2号  Copyright 2013-2016  版权所有 tugoo.net</p>
</div>
<!--底部结束-->
</body>
</html>