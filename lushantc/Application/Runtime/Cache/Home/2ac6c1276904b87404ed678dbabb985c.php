<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="特产,土特产,农产品,庐山特产网" name="keywords" />
<meta content="庐山特产网（lushantc.com)-专业的农土特产网上购物商城，专注在线销售农产品、土特产行业数万个品牌和类种的优质商品，品质保证、服务放心，便捷、诚信的服务为您提供愉悦的网上商城购物体验！" name="description" />
<meta name="title" content="庐山特产网" />
<meta name="author" content="庐山特产网" />
<meta name="renderer" content="webkit|ie-comp|ie-stand" />
<title>庐山特产网-专业的农产品、土特产网上购物商城</title>
 <link rel="stylesheet" type="text/css" href="/Public/css/Home/2016new.css" />
 <link rel="stylesheet" type="text/css" href="/Public/css/Home/product.css" />
<script type="text/javascript" src="/Public/tools/browser_redirect.ashx"></script>
<script type="text/javascript" src="/Public/js/Home/product.js"></script>
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/js/common.js"></script>
<script type="text/javascript" src="/Public/js/Home/common.js"></script>
<script type="text/javascript" src="/Public/js/Home/flexislider.js"></script>
<script type="text/javascript" src="/Public/js/jquery/jquery.lazyload.js"></script>
    <script type="text/javascript" src="/Public/js/Home/jquery.SuperSlide.js"></script>
<script type="text/javascript">
    $(function () {
        $(".banner").flexislider();
        $(".navl ul li").eq(0).find("a").addClass("on");
        $("img.lazy").lazyload({ effect: "fadeIn" });
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
<!--[if IE 6]>
    <script type="text/javascript" src="/Public/js/DD_belatedPNG.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix( '*');
    </script>
<![endif]-->

<script type="text/javascript">
    function setselect(sval, ihtml) {
        $("#selectvalue").html(ihtml);
        $("#searchtype").val(sval);
    }
    function sodis() {
        if (document.getElementById("options").style.display == "none") {
            document.getElementById("options").style.display = "block";
        } else {
            document.getElementById("options").style.display = "none";
        }
    }
    function showso() { document.getElementById("options").style.display = "block"; }
    function hideso() { document.getElementById("options").style.display = "none"; }
</script>

<div class="tugoobar">
    <ul class="tugoobarc">
        <li class="cspic"><a href="#"><img src="/Public/images/Home/peo.png" /></a></li>
        <li class="lmd"><a href="<?php echo U('Home/Cart/index');?>"><img src="/Public/images/Home/cart.png" /><span>购<br />物<br />车</span></a></li>
        <li class="cspic"><a href="/user/collect.aspx"><img src="/Public/images/Home/col.png" /></a></li>
    </ul>
    <ul class="tugoobarc1">
        <li><a href="tencent://message/?uin=2281917160&amp;Site=&amp;Menu=yes" onclick="return true;mechatClick()"><img src="/Public/images/Home/kf.png" /><span>客<br />服</span></a></li>
        <li class="gotop"><a href="javascript:void(0);" class="ewm"><em><img src="/Public/images/Home/ewm.png" /></em></a></li>
    </ul>
</div>

<!--头部开始-->

<div class="top">
    <div class="top_pc wrap">
        <ul class="right">
            <?php if($_SESSION['user_id']): ?><li>欢迎你，<a href="user"><?php echo ($_SESSION['username']); ?></a></li>
            <li><a href="/Home/Index/logout">退出</a></li>
            <?php else: ?><li><a href="<?php echo U('index/login');?>">登录</a></li><?php endif; ?>
			
            <li><a href="/">庐山特产网首页</a></li>
            <li>
                <a class="drop" href="user">我的特产</a>
                <ul style="display:none; ">
                    <li><a href="user">我的订单</a></li>
                    <!--<li><a href="#">我的积分</a></li>-->
                    <li><a href="/user/comment.aspx">评价商品</a></li>
                </ul>
            </li>
            <li>
                <a href="/Home/Cart/index">购物车 <font id="cart_count"></font></a>
                <script type="text/javascript">
                    $(function () {
                        $.ajax({
                            type: "post",
                            dataType: "json",
                            url: "/Tools/submit_ajax.ashx?action=get_cart_count",
                            success: function (d) {
                                $("#cart_count").html(d.msg);
                            }
                        })
                    })
                </script>
            </li>
            <li><a class="tells">客服热线：<b>4008006868</b></a></li>
            <li><a class="sina_weibo" title="关注庐山特产网微博" target="_blank" href="#">关注庐山特产网微博</a></li>
            <li><a class="wxs" href="javascript:;" onmouseover="$('.sa').show()" onmouseout="$('.sa').hide()" style="position:relative;">微信<img class="sa" style="position:absolute; top:29px; left:-90px; z-index:120000; display:none;" src="/Public/images/Home/APP.png" width="120" height="120" /></a></li>
        </ul>
        <em id="login_str">
        </em>
        <script type="text/javascript">
            $(function () {
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "/Tools/submit_ajax.ashx?action=get_login_str",
                    success: function (d) {
                        $("#login_str").html(d.msg);
                    }
                })
            })
        </script>

    </div>
   
    <div class="wrap clear">
        <div class="logo left"><h1><a href="/"><img src="/Public/images/Home/hailin.png" width="200" height="70" title="" alt="" /></a></h1></div>
        <!--搜索开始-->
        <div class="search left">
            <div class="search1">
                <!--下拉框-->
                <div class="selectwrap" onclick="sodis();" onmouseout="hideso();">
                    <div id="selectvalue">商品</div>
                    <input type="hidden" id="searchtype" name="searchtype" value="0" />
                    <div id="options" style="display:none;overflow:hidden;" onmouseout="hideso();" onmouseover="showso();">
                        <a href="javascript:void(0);" onclick="setselect('0','商品');">商品</a>
                        
                    </div>
                </div>
                
                <div class="keyword" >
                    <input type="text" name="searchword" value="<?php echo (cookie('words')); ?>" id="searchword" onclick="if ($(this).val() == '请输入搜索信息') $(this).val('')" onblur="if ($(this).val() == '') $(this).val('请输入搜索信息')" onkeyup="input_tip(this)" placehoher="请输入搜索信息" />

                </div>
                <!--搜索按钮-->
                <div class="search_btn"><button type="button" onclick="search()">搜索</button></div>

            </div>
            <!-- <p>
                
                <a href="/category.aspx?wd=苹果" target="_blank">苹果</a>
                <a href="/category.aspx?wd=榴莲" target="_blank">榴莲</a>
                <a href="/category.aspx?wd=脐橙" target="_blank">脐橙</a>
                <a href="/category.aspx?wd=有机蔬菜" target="_blank">有机蔬菜</a>
                <a href="/category.aspx?wd=牛肉" target="_blank">牛肉</a>
                <a href="/category.aspx?wd=散养土鸡" target="_blank">散养土鸡</a>
                <a href="/category.aspx?wd=三文鱼" target="_blank">三文鱼</a>
                <a href="/category.aspx?wd=开心果" target="_blank">开心果</a>
                <a href="/category.aspx?wd=葡萄干" target="_blank">葡萄干</a>
                <a href="/category.aspx?wd=曲奇" target="_blank">曲奇</a>
            </p> -->
        </div>
        <!--搜索结束-->
        <!--微信开始-->
<style>.htwx{ width:160px; text-align:right; padding-top:18px;}
.htwx em{ float:right; display:inline-block; text-align:center; border:0px;}
.htwx em img{ width:72px; height:72px; border:1px solid #ddd; display:block; margin-bottom:5px; padding:3px;}
.htwx span{ color:#d52629; line-height:18px; padding-top:64px; display:inline-block; background:url(/Public/images/Home/icon.png) 30px -420px no-repeat; margin-right:12px;}
   </style> 
        <!--微信结束-->
        <div class="clear0"></div>
    </div>
    <script type="text/javascript">
        $(function () {
            var url = window.location.href;
            if (url.indexOf("category") >= 0) {
                setselect(0, "商品");
            }
            else if (url.indexOf("shop.aspx") >= 0) {
                setselect(1, "店铺");
            }
            else if (url.indexOf("news") >= 0) {
                setselect(2, "资讯");
            }
            else if (url.indexOf("item") >= 0) {
                setselect(0, "商品");
            }
            else if (url.indexOf("company") >= 0) {
                setselect(4, "黄页");
            }
            else {
                setselect(0, "商品");
            }
        })

        function setselect(sval, ihtml) {
            document.getElementById("selectvalue").innerHTML = ihtml;
            document.getElementById("searchtype").value = sval;
        }
        function sodis() {
            if (document.getElementById("options").style.display == "none") {
                document.getElementById("options").style.display = "block";
            } else {
                document.getElementById("options").style.display = "none";
            }
        }
        function showso() { document.getElementById("options").style.display = "block"; }
        function hideso() { document.getElementById("options").style.display = "none"; }

        function search() {
            var searchtype = document.getElementById("searchtype").value;
            var word = document.getElementById("searchword").value;
            word = (word == "请输入搜索信息") ? "" : word;
            switch (searchtype) {
                case "0":
                    location.href = "/Home/category/index?wd=" + encodeURI(word);
                    break;
                case "1":
                    location.href = "/shop.aspx?wd=" + encodeURI(word);
                    break;
                case "2":
                    location.href = "/news.aspx?wd=" + encodeURI(word);
                    break;
                case "3":
                    location.href = "/supply.aspx?wd=" + encodeURI(word);
                    break;
                case "4":
                    location.href = "/company.aspx?wd=" + encodeURI(word);
                    break;
                default:
                    location.href = "/category.aspx?wd=" + encodeURI(word);
                    break;
            }
        }
    </script>

</div>
<!--  头部导航-->
<div class="nav clear">
    <div class="navbg"></div>
    <div class="wrap clear">
        <div class="siderlf left">
            <div class="nav clear">
    <div class="navbg"></div>
    <div class="wrap clear">
        <div class="siderlf left" id="hid_category">
            <h2><a href="/category.aspx">全部商品分类</a></h2>
            <div class="sort" style=" display:none">
                <div id="newPriceLinks" class="newPriceLinks">
                    <ul>
                        <?php if(is_array($categories)): foreach($categories as $key=>$category): ?><li><!-- 一级分类 -->
                            <p class="tit"><strong><i class="i<?php echo ($key+1); ?>" ></i><a><?php echo ($category['name']); ?></a></strong>
                            <font>
                            	<?php $cate_word = $cate_words[$key]; ?>
                                <?php if(is_array($cate_word)): foreach($cate_word as $key=>$word): ?><!--分类预览  -->
                                <a><?php echo ($word["name"]); ?></a><?php endforeach; endif; ?>
                             </font>
                            </p>
                            <p class="arrow" style=" top:1px;"></p>
                            <div style="background: url(Public/images/Home/pic<?php echo ($key+1); ?>.jpg) #fff right bottom no-repeat; ">
                                <span>
                                    <?php if(is_array($category['child'])): foreach($category['child'] as $key=>$cate): ?><dl><!-- 二级分类（水果，蔬菜等） -->
                                        <dt> <a><?php echo ($cate['name']); ?></a> </dt>
                                 <!--   <dt> <a href="<?php echo U('Home/Category/index',array('cid'=>$cate['id']));?>"><?php echo ($cate['name']); ?></a> </dt> -->
                                        <dd>
                                        <?php if(is_array($cate['child'])): foreach($cate['child'] as $key=>$cate_son): ?><!--分类详情  -->
                                            <em><a href="<?php echo U('Home/Category/index',array('cid'=>$cate_son['id']));?>"><?php echo ($cate_son['name']); ?></a></em><?php endforeach; endif; ?> 
                                        </dd>
                                    </dl><?php endforeach; endif; ?>
                                </span>
                            </div>
                        </li><?php endforeach; endif; ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--<div class="navl left">
            <ul>
                <li><a href="index.html" class="on">首页</a></li>
                <li><a href="http://www.lushantc.com/tongcheng.aspx">土购生鲜</a></li>
                <li><a href="#">母婴专场</a></li>
                <li><a href="#">微信拼团<img class="imgs" src="Public/images/Home/hot.png" /></a></li>
                <li><a href="http://www.lushantc.com/procure.aspx">企业直采</a></li>
                <li><a class="shop" href="#">商家入驻</a></li>
            </ul>
        </div>-->
    </div>
</div>
<script>
	$('#hid_category').hover(function () {
	    $('.sort').find("li").removeClass("sfhover");
	    $('.sort').find("li").children("div").hide();
	    $(this).find(".sort").show();
	}, function () {
	    $(this).find(".sort").hide();
	});
    //二级导航事件
    $(".newPriceLinks li p").hover(
	function () {
	    $(this).parent("li").children("div").show();
	    $(this).parent("li").addClass("sfhover");
	},
	function () {
	    $(this).parent("li").children("div").hide();
	    $(this).parent("li").removeClass("sfhover"); //alert('ok');
	}
	);
</script>


        </div>
        <div class="navl left">
            <ul>
                <li><a href="/" class="on">首页</a></li>
            </ul>
        </div>
    </div>
</div>
<!--头部结束-->
<!--头部结束-->
<script type="text/javascript" src="/Public/js/Home/seed-min.js"></script>
<script type="text/javascript" src="/Public/js/Home/lhgdialog/lhgdialog.js"></script>
<script type="text/javascript" src="/Public/js/Home/cart.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/css/Home/cart.css"/>
<!--购物车开始-->
<div class="wrap wpos clear">
        <div class="location clear">您所在的位置：<a href="/">土购网</a><em>&gt;</em><a href="/news.aspx">新闻资讯</a><em>&gt;</em><a href="#">本站动态</a></div>
        <!-- <div class="newstab">
            <em><a class="" href="/news.aspx">全部信息</a></em>
            <em><a class="" href="/news.aspx?cid=592">养生保健</a></em>
            <em><a class="" href="/news.aspx?cid=593">价格走势</a></em>
            <em><a class="aon" href="/news.aspx?cid=590">行业新闻</a></em>
            <em><a class="" href="/news.aspx?cid=591">本站动态</a></em>
            <em><a href="/health.aspx">营养课堂</a></em>
        </div> -->
        <div class="newslslf left">
            <div class="newsdtc clear">
                <div class="newstit">
                    <h2><?php echo ($article["title"]); ?></h2>
                    <p>时间：2017年03月16日 </p>
                </div>
                <!-- <div class="takeaway">
                    <em class="ems">导读</em>
                    帮你更快吃到美味菠萝的方法来啦，两分钟内就切好一整个菠萝，真的是简单快手!鲜菠萝切好后时，最好先用盐水泡上一段时间，就可以抑制菠萝酶对我们口腔粘膜和嘴唇的刺激，同时也会感到菠萝更加香甜了~-- 快速切菠萝攻略---- 用料 --菠萝 1只刀 1把纯净盐水 适量-- 做法 -
                </div> -->
                <div class="newsdtcon">
                   <?php echo ($article["content"]); ?>
                </div>
               
                <!-- <div class="updown clear">
                    <p>上一篇：<a>没有了</a></p>
                    <p>下一篇：<a href="/news_show.aspx?id=4556">我和你缠缠绵绵，丝丝入味</a></p>
                </div> -->
            </div>
            <!-- <div class="clear">
                <img src="/template/platform_default/new/images/ads/ads8.jpg" /></div>
 -->
            
            <!-- <div class="relatedcon relatedconb clear">
                <h2>我要发表评论:</h2>
                <div class="clear">
                    <form id="feedback_form" name="feedback_form" method="post" url="/Tools/submit_ajax.ashx?action=topic_comment&id=4557&TopicType=1">         TopicType=1 为土购资讯，为了和营养课堂区分
                        <textarea name="txtContent" id="txtContent" class="textareas" style="width: 878px;" onfocus="if(this.value=='随便说点什么吧...')this.value=''">随便说点什么吧...</textarea>
                        <div class="slogin slogin1 clear">
                            <span>网友评论<font>(0)</font></span>
                            <input id="btnSubmit" name="btnSubmit" class="loinb right" type="button" value="发表评论"  onclick="SubmitComment()"/>                            
                            <input name="txtEmail" id="txtEmail"  type="text" class="loinp right" onfocus="if(this.value=='( 邮箱信息不会公开）')this.value=''" value="( 邮箱信息不会公开）"/>
                            <em class="right"><a href="/login.aspx?url=/show-4557.aspx#comment">登录</a> | <a href="/reg.aspx?url=/show-4557.aspx#comment">注册</a> | 匿名评论请填写邮箱：</em>
                        </div>
                    </form>

                    <div class="reply1 clear">
                        <ul>
                            
                        </ul>
                    </div>
                    <div class="replyms clear"><a href="#">更多精彩评论</a></div>
                </div>
            </div> -->
        </div>
        <div class="newslsrt right">
           <!--  <div class="newslsrtc">
                <h2>热销产品</h2>
                <div class="newspro">

                    
                    <dl>
                        <dt><a href="/tcproduct-6792.aspx">
                            <img src="/UploadFile/product/1197/201605121038386743_100_100.jpg" width="55" height="55" title="" alt="赣南安远新鲜橙子纯天然农家水果 安远脐橙原产地现摘现发10斤特价 包邮" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-6792.aspx">赣南安远新鲜橙子纯天然农家水果 安远脐橙原产地现摘现发10斤特价 包邮</a></p>
                            <em><a href="/tcproduct-6792.aspx">去看看</a><font>￥100.00</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-6652.aspx">
                            <img src="/UploadFile/product/317/201611120828292186_100_100.jpg" width="55" height="55" title="" alt="【土购网】农家土鸡蛋 柴鸡蛋笨鸡蛋20枚" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-6652.aspx">【土购网】农家土鸡蛋 柴鸡蛋笨鸡蛋20枚</a></p>
                            <em><a href="/tcproduct-6652.aspx">去看看</a><font>￥19.90</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-6715.aspx">
                            <img src="/UploadFile/product/317/201603231352203903_100_100.jpg" width="55" height="55" title="" alt="【土购网】 树上熟海南芒果贵妃芒约5斤装" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-6715.aspx">【土购网】 树上熟海南芒果贵妃芒约5斤装</a></p>
                            <em><a href="/tcproduct-6715.aspx">去看看</a><font>￥80.00</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-2304.aspx">
                            <img src="/UploadFile/product/317/201612231007151705_100_100.jpg" width="55" height="55" title="" alt="江西特产干货 上犹银鱼干250g 海鲜水产干货" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-2304.aspx">江西特产干货 上犹银鱼干250g 海鲜水产干货</a></p>
                            <em><a href="/tcproduct-2304.aspx">去看看</a><font>￥48.00</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-2062.aspx">
                            <img src="/UploadFile/product/317/201611261612585986_100_100.jpg" width="55" height="55" title="" alt="赣南脐橙血橙5斤装 江西特产红橙子新鲜水果 九省包邮" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-2062.aspx">赣南脐橙血橙5斤装 江西特产红橙子新鲜水果 九省包邮</a></p>
                            <em><a href="/tcproduct-2062.aspx">去看看</a><font>￥68.00</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-2058.aspx">
                            <img src="/UploadFile/product/317/201412091801566303_100_100.jpg" width="55" height="55" title="" alt="南康白心甜柚7个装  南康蜜柚柚子" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-2058.aspx">南康白心甜柚7个装  南康蜜柚柚子</a></p>
                            <em><a href="/tcproduct-2058.aspx">去看看</a><font>￥80.00</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-2136.aspx">
                            <img src="/UploadFile/product/317/201512281032174079_100_100.jpg" width="55" height="55" title="" alt="绍坤世家 黄元米果 250g袋装 江西赣南田村客家特产" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-2136.aspx">绍坤世家 黄元米果 250g袋装 江西赣南田村客家特产</a></p>
                            <em><a href="/tcproduct-2136.aspx">去看看</a><font>￥6.00</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-6759.aspx">
                            <img src="/UploadFile/product/317/201704061151189701_100_100.jpg" width="55" height="55" title="" alt="【土购网】新鲜农家土猪肉500g  养殖1年土猪" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-6759.aspx">【土购网】新鲜农家土猪肉500g  养殖1年土猪</a></p>
                            <em><a href="/tcproduct-6759.aspx">去看看</a><font>￥30.00</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-6132.aspx">
                            <img src="/UploadFile/product/317/201611041123062285_100_100.jpg" width="55" height="55" title="" alt="寻乌蜜桔橘子3斤  新鲜水果蜜橘" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-6132.aspx">寻乌蜜桔橘子3斤  新鲜水果蜜橘</a></p>
                            <em><a href="/tcproduct-6132.aspx">去看看</a><font>￥26.80</font></em></dd>
                    </dl>
                    
                    <dl>
                        <dt><a href="/tcproduct-6653.aspx">
                            <img src="/UploadFile/product/317/201603041017385206_100_100.jpg" width="55" height="55" title="" alt="【土购网】农家散家土鸡青脚母鸡 约2斤" /></a></dt>
                        <dd>
                            <p><a href="/tcproduct-6653.aspx">【土购网】农家散家土鸡青脚母鸡 约2斤</a></p>
                            <em><a href="/tcproduct-6653.aspx">去看看</a><font>￥98.00</font></em></dd>
                    </dl>
                    

                </div>
            </div> -->
            <!-- <div class="newslsrtc">
                <div class="hd"><em>水果蔬菜</em><em>肉类海鲜</em><em>休闲食品</em></div>
                <div class="bd clear">
                    <ul class="newsclass">
                        
                        <li><a href="/category-424.aspx">山楂</a></li>
                        
                        <li><a href="/category-426.aspx">菠萝/凤梨</a></li>
                        
                        <li><a href="/category-427.aspx">*芒果</a></li>
                        
                        <li><a href="/category-428.aspx">香蕉</a></li>
                        
                        <li><a href="/category-429.aspx">*苹果</a></li>
                        
                        <li><a href="/category-430.aspx">奇异果/猕猴桃</a></li>
                        
                        <li><a href="/category-431.aspx">火龙果</a></li>
                        
                        <li><a href="/category-433.aspx">柠檬</a></li>
                        
                        <li><a href="/category-434.aspx">龙眼/荔枝</a></li>
                        
                        <li><a href="/category-435.aspx">梨</a></li>
                        
                        <li><a href="/category-436.aspx">瓜类</a></li>
                        
                        <li><a href="/category-437.aspx">提子/葡萄</a></li>
                        
                        <li><a href="/category-438.aspx">榴莲</a></li>
                        
                        <li><a href="/category-439.aspx">*车厘子/樱桃</a></li>
                        
                        <li><a href="/category-440.aspx">*脐橙</a></li>
                        
                        <li><a href="/category-442.aspx">鲜蛋/土鸡蛋</a></li>
                        
                        <li><a href="/category-443.aspx">咸蛋</a></li>
                        
                        <li><a href="/category-444.aspx">皮蛋</a></li>
                        
                        <li><a href="/category-445.aspx">猪肉</a></li>
                        
                        <li><a href="/category-446.aspx">牛羊肉</a></li>
                        
                        <li><a href="/category-447.aspx">家禽类</a></li>
                        
                        <li><a href="/category-448.aspx">鱼类</a></li>
                        
                        <li><a href="/category-449.aspx">虾类</a></li>
                        
                        <li><a href="/category-450.aspx">蟹类</a></li>
                        
                        <li><a href="/category-451.aspx">贝类</a></li>
                        
                        <li><a href="/category-457.aspx">枇杷</a></li>
                        
                        <li><a href="/category-458.aspx">圣女果</a></li>
                        
                        <li><a href="/category-459.aspx">草莓</a></li>
                        
                        <li><a href="/category-468.aspx">山竹</a></li>
                        
                        <li><a href="/category-480.aspx">石榴</a></li>
                        
                        <li><a href="/category-486.aspx">竹笋类</a></li>
                        
                        <li><a href="/category-487.aspx">花菜类</a></li>
                        
                        <li><a href="/category-488.aspx">叶菜类</a></li>
                        
                        <li><a href="/category-489.aspx">豆荚类</a></li>
                        
                        <li><a href="/category-490.aspx">*茄类/瓜果类</a></li>
                        
                        <li><a href="/category-491.aspx">块茎类</a></li>
                        
                        <li><a href="/category-492.aspx">根菜类</a></li>
                        
                        <li><a href="/category-493.aspx">水生菜类</a></li>
                        
                        <li><a href="/category-494.aspx">野生菜类</a></li>
                        
                        <li><a href="/category-495.aspx">其他新鲜蔬菜</a></li>
                        
                        <li><a href="/category-502.aspx">杨桃</a></li>
                        
                        <li><a href="/category-503.aspx">青枣</a></li>
                        
                        <li><a href="/category-506.aspx">其他</a></li>
                        
                        <li><a href="/category-524.aspx">软体类</a></li>
                        
                        <li><a href="/category-525.aspx">藻类</a></li>
                        
                        <li><a href="/category-526.aspx">龟鳖类</a></li>
                        
                        <li><a href="/category-527.aspx">其他</a></li>
                        
                        <li><a href="/category-528.aspx">柚子</a></li>
                        
                        <li><a href="/category-529.aspx">桃</a></li>
                        
                        <li><a href="/category-530.aspx">杨梅</a></li>
                        
                        <li><a href="/category-532.aspx">李子</a></li>
                        
                        <li><a href="/category-552.aspx">宅配套餐</a></li>
                        
                        <li><a href="/category-553.aspx">宅配套餐</a></li>
                        
                        <li><a href="/category-557.aspx">柑类</a></li>
                        
                        <li><a href="/category-558.aspx">蒜葱类</a></li>
                        
                        <li><a href="/category-559.aspx">*菌菇类</a></li>
                        
                        <li><a href="/category-560.aspx">有机蔬菜</a></li>
                        
                    </ul>
                    <ul class="newsclass">
                        
                        <li><a href="/category-787.aspx">其他</a></li>
                        
                        <li><a href="/category-779.aspx">皮/咸蛋</a></li>
                        
                        <li><a href="/category-780.aspx">其他</a></li>
                        
                        <li><a href="/category-564.aspx">猪肉</a></li>
                        
                        <li><a href="/category-565.aspx">牛肉</a></li>
                        
                        <li><a href="/category-566.aspx">羊肉</a></li>
                        
                        <li><a href="/category-567.aspx">*鸡肉</a></li>
                        
                        <li><a href="/category-568.aspx">鸭肉</a></li>
                        
                        <li><a href="/category-569.aspx">鹅/鸽</a></li>
                        
                        <li><a href="/category-570.aspx">鲜/土鸡蛋</a></li>
                        
                        <li><a href="/category-571.aspx">进口肉</a></li>
                        
                        <li><a href="/category-572.aspx">香/腊肠</a></li>
                        
                        <li><a href="/category-573.aspx">肉类礼盒</a></li>
                        
                        <li><a href="/category-575.aspx">*鱼类</a></li>
                        
                        <li><a href="/category-576.aspx">虾类</a></li>
                        
                        <li><a href="/category-577.aspx">蟹/贝类</a></li>
                        
                        <li><a href="/category-578.aspx">龟鳖类</a></li>
                        
                        <li><a href="/category-579.aspx">藻类</a></li>
                        
                        <li><a href="/category-580.aspx">软体类</a></li>
                        
                        <li><a href="/category-581.aspx">*海产干货</a></li>
                        
                        <li><a href="/category-582.aspx">海鲜礼盒</a></li>
                        
                        <li><a href="/category-586.aspx">*腌/腊肉</a></li>
                        
                        <li><a href="/category-592.aspx">鸭鹅蛋</a></li>
                        
                    </ul>
                    <ul class="newsclass">
                        
                        <li><a href="/category-782.aspx">脱水蔬菜</a></li>
                        
                        <li><a href="/category-783.aspx">酱腌菜</a></li>
                        
                        <li><a href="/category-784.aspx">蔬菜制品</a></li>
                        
                        <li><a href="/category-256.aspx">*核桃</a></li>
                        
                        <li><a href="/category-257.aspx">碧根果/长寿果</a></li>
                        
                        <li><a href="/category-258.aspx">*杏仁/巴旦木</a></li>
                        
                        <li><a href="/category-259.aspx">夏威夷果</a></li>
                        
                        <li><a href="/category-260.aspx">*开心果</a></li>
                        
                        <li><a href="/category-261.aspx">*腰果</a></li>
                        
                        <li><a href="/category-262.aspx">无花果</a></li>
                        
                        <li><a href="/category-263.aspx">鲍鱼果</a></li>
                        
                        <li><a href="/category-264.aspx">松子</a></li>
                        
                        <li><a href="/category-265.aspx">榛子</a></li>
                        
                        <li><a href="/category-266.aspx">瓜子</a></li>
                        
                        <li><a href="/category-267.aspx">花生</a></li>
                        
                        <li><a href="/category-268.aspx">栗类</a></li>
                        
                        <li><a href="/category-269.aspx">其他</a></li>
                        
                        <li><a href="/category-270.aspx">胡桃</a></li>
                        
                        <li><a href="/category-271.aspx">兰花豆/蚕豆</a></li>
                        
                        <li><a href="/category-272.aspx">青豆</a></li>
                        
                        <li><a href="/category-273.aspx">白果/银杏果</a></li>
                        
                        <li><a href="/category-274.aspx">枣类制品</a></li>
                        
                        <li><a href="/category-275.aspx">*葡萄干</a></li>
                        
                        <li><a href="/category-276.aspx">梅类制品</a></li>
                        
                        <li><a href="/category-277.aspx">山楂类制品</a></li>
                        
                        <li><a href="/category-278.aspx">芒果干</a></li>
                        
                        <li><a href="/category-279.aspx">笋类制品</a></li>
                        
                        <li><a href="/category-280.aspx">蓝莓</a></li>
                        
                        <li><a href="/category-281.aspx">杏仁干</a></li>
                        
                        <li><a href="/category-282.aspx">无花果干</a></li>
                        
                        <li><a href="/category-283.aspx">凤梨/菠萝蜜干</a></li>
                        
                        <li><a href="/category-284.aspx">*香蕉片</a></li>
                        
                        <li><a href="/category-285.aspx">蔬果干</a></li>
                        
                        <li><a href="/category-286.aspx">圣女果干</a></li>
                        
                        <li><a href="/category-287.aspx">猕猴桃干</a></li>
                        
                        <li><a href="/category-288.aspx">橄榄</a></li>
                        
                        <li><a href="/category-289.aspx">桑果</a></li>
                        
                        <li><a href="/category-290.aspx">薯类制品</a></li>
                        
                        <li><a href="/category-291.aspx">糖果</a></li>
                        
                        <li><a href="/category-292.aspx">果冻/布丁</a></li>
                        
                        <li><a href="/category-293.aspx">罐头</a></li>
                        
                        <li><a href="/category-294.aspx">口香糖</a></li>
                        
                        <li><a href="/category-295.aspx">其他食品</a></li>
                        
                        <li><a href="/category-296.aspx">牛羊类</a></li>
                        
                        <li><a href="/category-297.aspx">猪肉类</a></li>
                        
                        <li><a href="/category-299.aspx">禽类</a></li>
                        
                        <li><a href="/category-300.aspx">鱼虾制品</a></li>
                        
                        <li><a href="/category-301.aspx">豆干制品</a></li>
                        
                        <li><a href="/category-306.aspx">其他</a></li>
                        
                        <li><a href="/category-307.aspx">果味派</a></li>
                        
                        <li><a href="/category-308.aspx">薯片/薯条</a></li>
                        
                        <li><a href="/category-309.aspx">巧克力派</a></li>
                        
                        <li><a href="/category-310.aspx">面点</a></li>
                        
                        <li><a href="/category-311.aspx">茶点</a></li>
                        
                        <li><a href="/category-312.aspx">其他</a></li>
                        
                        <li><a href="/category-313.aspx">*饼干</a></li>
                        
                        <li><a href="/category-314.aspx">传统糕点</a></li>
                        
                        <li><a href="/category-315.aspx">西式糕点</a></li>
                        
                        <li><a href="/category-316.aspx">甜甜圈</a></li>
                        
                        <li><a href="/category-317.aspx">月饼</a></li>
                        
                        <li><a href="/category-318.aspx">*曲奇</a></li>
                        
                        <li><a href="/category-455.aspx">杏干</a></li>
                        
                        <li><a href="/category-461.aspx">李柰干</a></li>
                        
                        <li><a href="/category-466.aspx">蟹贝制品</a></li>
                        
                        <li><a href="/category-470.aspx">其他蔬菜制品</a></li>
                        
                        <li><a href="/category-471.aspx">脱水蔬菜</a></li>
                        
                        <li><a href="/category-472.aspx">冷冻蔬菜</a></li>
                        
                        <li><a href="/category-473.aspx">酱腌菜</a></li>
                        
                        <li><a href="/category-481.aspx">柠檬片</a></li>
                        
                        <li><a href="/category-482.aspx">其他</a></li>
                        
                        <li><a href="/category-483.aspx">笋类制品</a></li>
                        
                    </ul>
                </div>
            </div> -->
            <!-- <div class="newslsrtc">
                <h2><a href="news.html">更多>></a>热销品牌</h2>
                <ul class="newslogo">
                    <li><a href="/member/Ads_click_Mamage.aspx?id=7149&page=http%3a%2f%2f" target="_blank"><img src="/UploadFile/ggs/201605261838187358.jpg" alt=""/></a></li>
                    <li><a href="/Shop848/index.aspx" target="_blank"><img src="/UploadFile/ggs/201605301716443453.jpg" alt=""/></a></li>
                    <li><a href="/" target="_blank"><img src="/UploadFile/ggs/201605301702219649.jpg" alt=""/></a></li>
                    <li><a href="/" target="_blank"><img src="/UploadFile/ggs/201605301702386119.jpg" alt=""/></a></li>
                    <li><a href="/" target="_blank"><img src="/UploadFile/ggs/201605301702597631.jpg" alt=""/></a></li>
                    <li><a href="/" target="_blank"><img src="/UploadFile/ggs/201605301703155120.jpg" alt=""/></a></li>
                </ul>
            </div> -->
            <!-- <div class="newslsrtc">
                <h2><a href="news.html">更多>></a>最新文章</h2>
                <dl class="newslsrtc2">
                    <dt>
                        
                        <em  class="em1"><a href="/news_show-4557.aspx">
                        
                        <img src="/UploadFile/news/201703161501147628_830_400.jpg" width="120" height="58" /><span>两分钟内切整个菠萝，这方法太好用!</span></a></em>
                        
                        <em ><a href="/news_show-4556.aspx">
                        
                        <img src="/UploadFile/news/201703161456055234_830_400.jpg" width="120" height="58" /><span>我和你缠缠绵绵，丝丝入味</span></a></em>
                        
                    </dt>
                   

                    
                    <dd>
                        <p><a href="/news_show-4555.aspx">4款春季减肥食品 多吃不胖</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4554.aspx">豆浆的5大误解，你上当没？</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4553.aspx">天气变化太快，预防感冒入侵，春季吃这道菜</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4552.aspx">云南一个充满神秘色彩的地方</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4551.aspx">吃完水果核别扔，变成杯中森林</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4550.aspx">来到青岛，一定要尝过这些，才不枉此行</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4549.aspx">台湾特产——是否有你忘不掉的美味</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4548.aspx">兴国鱼丝，与你相思的赣州特产</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4547.aspx">赣州特产还看“赣南脐橙”</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4546.aspx">“花”一“生”时间爱你</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4545.aspx">“苹”水相逢，果然大不同</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4544.aspx">赣南脐橙，给你一个妙不可言的冬天</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4543.aspx">白茶是什么茶，一起涨姿势吧</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4542.aspx">唯美食与爱不可“菇”负</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4541.aspx">红莲子的营养价值有哪些呢？</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4540.aspx">“椪”上你我心“柑”情愿</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4539.aspx">生活也需要美食来“鸭鸭”惊</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4538.aspx">了解玫瑰花茶的功效和作用，享受健康生活</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4537.aspx">葵瓜子的营养价值会有哪些呢？</a></p>
                    </dd>
                    
                    <dd>
                        <p><a href="/news_show-4536.aspx">莲子心的功效与作用有哪些，一起来看看！</a></p>
                    </dd>
                    
                </dl>
            </div> -->
            <!-- <div class="newslsrtc born"><a href="#">
                <img src="/template/platform_default/new/images/ads/ads7.jpg" /></a></div> -->
        </div>
        <div class="clear0"></div>
    </div>
<!--购物车结束-->
<meta charset='UTF-8'>
<div class="security margin10 clear">
    <ul class="wrap">
        <li><i class="i1"></i>土的自然 买得放心</li>
        <li><i class="i2"></i>买卖特产 全程服务</li>
        <li><i class="i3"></i>正品保障 精致生活</li>
        <li><i class="i4"></i>天天特价 特惠体验</li>
    </ul>
</div>
<div class="wrap service clear">
    <dl>
        <dt><img src="/Public/images/Home/hailin.jpg" width="227" height="180" /><p>400-800-0000</p></dt>
        <dd>
            <h3><i class="i1"></i><a href="#">新手指南</a></h3>
            <p><a href="#" target="_blank">免费注册</a></p><p><a href="#" target="_blank">密码修改</a></p><p><a href="#" target="_blank">订购流程</a></p><p><a href="#" target="_blank">忘记密码</a></p>
        </dd>
        <dd>
            <h3><i class="i2"></i><a href="#">消费者保障</a></h3>
            <p><a href="#" target="_blank">食品安全承诺</a></p><p><a href="#" target="_blank">买家防骗</a></p>
        </dd>
        <dd>
            <h3><i class="i3"></i><a href="#">配送方式</a></h3>
            <p><a href="#" target="_blank">卖家防骗</a></p><p><a href="#" target="_blank">配送与运费</a></p><p><a href="#" target="_blank">庐山特产网默认运费</a></p>
        </dd>
        <dd>
            <h3><i class="i4"></i><a href="#">售后服务</a></h3>
            <p><a href="#" target="_blank">验货签收</a></p><p><a href="#" target="_blank">退换须知</a></p><p><a href="#" target="_blank">投诉中心</a></p>
        </dd>
       
    </dl>
</div>
<div class="foot wrap clear">
    <em class="left"><a href="http://union.xns315.com/lm/xns017341.html"><img src="/Public/images/Home/xns315.gif" /></a><a href="#"><img src="/Public/images/Home/baiqiang.gif" /></a>
 <a href="#"><img src="http://www.hao123.com/static/images//Public/logo.jpg" alt=“hao123上网导航” /></a>
    </em>
    <p><a href="#">关于我们</a><a href="#">联系我们</a><a href="#">隐私声明</a><a href="#">服务条款</a><a href="#">招贤纳士</a><a href="#">商家入驻</a></p>
    <p>增值电信业务经营许可证赣B2-2012052  赣ICP备12003095-5号  Copyright 2013-2016  版权所有 lushantc.com</p>
    		 	<div style="width:300px;margin:0 auto; padding:20px 0;">
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/Public/images/Home/beian.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">赣公网安备 36070202000号</p></a>
		 	</div>
		 
</div>

<script>
    (function () {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?cef4671349fac47e4ecca66da503f015";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script type="text/javascript" src="/Public/js/Home/return_top.js"></script>


<!--底部结束--> 

    <script type="text/javascript">
        //$().ready(function () {
        //    var prevUrl = document.referrer;
        //    //   alert(prevUrl.indexOf("localhost"));
        //    if (prevUrl.indexOf("lushantc.com") < 0 && prevUrl.indexOf("localhost") < 0 && !getCookie("showA")) {
        //        $(".newuesr").show();
        //        $("#TB_overlay").show();
        //        setCookie("showA", "1");
        //    }
        //});

        //function tb_close() {
        //    $(".newuesr").hide();
        //    $("#TB_overlay").hide();
        //}
        $(function () {
            $(window).scroll(function () {
                //$("span", "div").each(function (i) {
                  var win_h = $(window).height();
                  var win_t = $(window).scrollTop();
                //    var span_t = $(this).offset().top;
                //    if (win_h / 2 + win_t >= span_t)
                //        $(this).css("background", "url(green.gif) left center no-repeat");
                //});
                  $('#tugooFast').show();
            })
        });
        jQuery(".slideBox").slide({ mainCell: ".bd", autoPlay: false });
        //获取cookie
        function getCookie(name) {
            var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
            if (arr = document.cookie.match(reg))
                return unescape(arr[2]);
            else
                return null;
        }
        //设置cookie 10分钟
        function setCookie(name, value) {
            var exp = new Date();
            exp.setTime(exp.getTime() + 10 * 60 * 1000);
            document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
        }


    </script>
</body>
</html>