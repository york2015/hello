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
<meta http-equiv="Conten-Type" charset="utf-8"/>
<div class="tugooFast">
        <ul>
            <li class="li1"><a href="#floor1"><i></i><em>水果蔬菜</em></a></li>
            <li class="li2"><a href="#floor2"><i></i><em>肉类海鲜</em></a></li>
            <li class="li3"><a href="#floor3"><i></i><em>休闲食品</em></a></li>
            <li class="li4"><a href="#floor4"><i></i><em>粮油副食</em></a></li>
            <li class="li5"><a href="#floor5"><i></i><em>茶叶冲饮</em></a></li>
           
        </ul>
    </div>
<!--banner开始-->
<div class="banner wgt-slide">
<div class="wgt-slide-container">
<ul>
<li class="item current" style="opacity:1; z-index:1; background:url(/Upload/home/201703311428316915.jpg) #ffffff center no-repeat"></li>
<li class="item " style="opacity:; z-index:; background:url(/Upload/Home/201703311413165627.jpg) #ffffff center no-repeat"></li>
<li class="item " style="opacity:; z-index:; background:url(/Upload/Home/201703311502238255.jpg) #ffffff center no-repeat"></li>
<li class="item " style="opacity:; z-index:; background:url(/Upload/Home/201703311444282179.jpg) #ffffff center no-repeat"></li>
<li class="item " style="opacity:; z-index:; background:url(/Upload/Home/201703291414158089.jpg) #ffffff center no-repeat"></li>
<li class="item " style="opacity:; z-index:; background:url(/Upload/Home/201612171638406580.jpg) #ffffff center no-repeat"></li>
</ul>
</div>
<div class="g-grid">
<a rel="0" href="http://www.lushantc.com" class="btn-banner" target="_blank" style="display:block;">查看详情</a>
<a rel="1" href="http://www.lushantc.com" class="btn-banner" target="_blank" style="display:;">查看详情</a>
<a rel="2" href="http://www.lushantc.com" class="btn-banner" target="_blank" style="display:;">查看详情</a>
<a rel="3" href="http://www.lushantc.com" class="btn-banner" target="_blank" style="display:;">查看详情</a>
<a rel="4" href="http://www.lushantc.com" class="btn-banner" target="_blank" style="display:;">查看详情</a>
<a rel="5" href="http://www.lushantc.com" class="btn-banner" target="_blank" style="display:;">查看详情</a>
 <div class="wgt-slide-trigger">
<a href="javascript:;" class="item current"></a>
<a href="javascript:;" class="item "></a>
<a href="javascript:;" class="item "></a>
<a href="javascript:;" class="item "></a>
<a href="javascript:;" class="item "></a>
<a href="javascript:;" class="item "></a>
</div>

    
    </div>
</div>
<!--banner结束-->

<!--今日推荐-->
    <div class="wrap clear">
        <div class="titc clear"><b>特产推荐</b><img src="/Public/images/Home/txt2.png" /></div>
        <div class="con1f left">
            <ul id="tuijie">
            <?php if(is_array($a)): foreach($a as $key=>$b): ?><li>
               		<div class="pic">
               			<a href="home/item?id=<?php echo ($b["p_id"]); ?>" target="_blank">
               				<img src="<?php echo ($b["thumb"]); ?>" height="200px;" width="200px"/>
               			</a>
               		</div>
               		<a href="/product-5915.aspx"><?php echo ($b["p_name"]); ?></a>
               		<p>￥<?php echo ($b["sale_price"]); ?></p><!-- 打折价格 -->
               		<del>0.00</del>
               		<em><a href="home/item?id=<?php echo ($b["p_id"]); ?>">立即抢购</a></em>
               	</li><?php endforeach; endif; ?>
            </ul>
        </div>
       
        <div class="con1rt right">
            <div><a href="http://www.lushantc.com/tongcheng.aspx" target="_blank"><img src="/Upload/product/201609161637356343.jpg" alt=""/></a></div>
            <div class="dynamic clear">
                <h3><a href="/news.aspx">更多>></a><b>本站动态</b></h3>
                <ul>
                    
                    <li>
                        <span>[<a>行业新闻</a>]</span>
                        <a href="/news_show-4557.aspx" title="两分钟内切整个菠萝，这方法太好用!" target="_blank">两分钟内切整个菠萝，这方法太好用!</a>
                        
                    </li>
                    
                    <li>
                        <span>[<a>养生保健</a>]</span>
                        <a href="/news_show-4556.aspx" title="我和你缠缠绵绵，丝丝入味" target="_blank">我和你缠缠绵绵，丝丝入味</a>
                        
                    </li>
                    
                    <li>
                        <span>[<a>养生保健</a>]</span>
                        <a href="/news_show-4555.aspx" title="4款春季减肥食品 多吃不胖" target="_blank">4款春季减肥食品 多吃不胖</a>
                        
                    </li>
                    
                    <li>
                        <span>[<a>养生保健</a>]</span>
                        <a href="/news_show-4554.aspx" title="豆浆的5大误解，你上当没？" target="_blank">豆浆的5大误解，你上当没？</a>
                        
                    </li>
                    
                    
                </ul>
            </div>
        </div>
        <div class="clear0"></div>
    </div>
 <!--今日推荐结束-->

  <!--水果蔬菜-->
    <div class="wrap clear" id="floor1">
        <div class="titc tit1 clear"><em class="right">
                                         
                                         <a href="http://www.lushantc.com//category-429.aspx" target="_blank">苹果</a>
                                         <a href="http://www.lushantc.com//category-438.aspx" target="_blank">榴莲</a>
                                         <a href="http://www.lushantc.com//category-431.aspx" target="_blank">火龙果</a>
                                         <a href="http://www.lushantc.com//category-468.aspx" target="_blank">山竹</a>
                                         <a href="http://www.lushantc.com//category-439.aspx" target="_blank">樱桃</a>
                                         <a href="http://www.lushantc.com//category-491.aspx" target="_blank">块茎类</a>
                                         <a href="http://www.lushantc.com//category-488.aspx" target="_blank">叶菜类</a>
                                         <a href="http://www.lushantc.com//category-490.aspx" target="_blank">茄果瓜类</a>
                                         <a href="http://www.lushantc.com/http://www.lushantc.com/category-31.aspx" target="_blank">更多</a>
                                         <a href="http://www.lushantc.com//category-437.aspx" target="_blank">葡萄/提子</a>
                                         <a href="http://www.lushantc.com//category-31.aspx" target="_blank">更多选项</a>
            </em><i></i><b>水果蔬菜</b></div>
        <div class="FruitVeg">
            <div class="FruitVeglf left">
                <div class="FruitVegpic lfcomc clear"><a href="home/category/index?wd=水果蔬菜" target="_blank"><img src="/Upload/product/201605261726149325.jpg" alt=""/></a><p>
                    <em><i class="i1"></i><a href="home/category/index?wd=水果" target="_blank">水果</a></em>
                    <em><i class="i2"></i><a href="home/category/index?wd=蔬菜" target="_blank">蔬菜</a></em>
                    </p></div>
                <div class="FruitVegtxt clear">
                    <div class="left">
                        <h3><a href="#"><a href="/tcproduct-6287.aspx" target="_blank">预售赣南脐橙</a>   >></a></h3>
                        <p><em><a href="/tcproduct-6771.aspx" target="_blank">山东苹果</a></em>
                        <em><a href="/tcproduct-6198.aspx" target="_blank">柚子</a></em>
                        <em><a href="/tcproduct-6762.aspx" target="_blank">金枕榴莲</a></em>
                        <em><a href="/category-468.aspx" target="_blank">山竹</a></em>
                        <em><a href="/category-430.aspx" target="_blank">奇异果</a></em>
                         <em><a href="/category-439.aspx" target="_blank">车厘子</a></em></p>
                    </div>
                    <div class="left">
                        <h3><a href="#"><a href="/tcproduct-6993.aspx" target="_blank">新鲜蔬菜套餐</a>   >></a></h3>
                        <p><em><a href="/category-552.aspx" target="_blank">有机蔬菜</a></em>
                        <em><a href="/category-490.aspx" target="_blank">瓜果类</a></em>
                        <em><a href="/category-488.aspx" target="_blank">叶菜类</a></em>
                        <em><a href="/category-492.aspx" target="_blank">根茎类</a></em>
                        <em><a href="/category-558.aspx" target="_blank">葱姜蒜椒</a></em>
                        <em><a href="/category-559.aspx" target="_blank">菌菇类</a></em></p>
                    </div>
                </div>
                <div class="botp clear"><a href="home/category?wd=菜" target="_blank"><img src="/Upload/product/201605271117384118.jpg" alt=""/></a></div>
            </div>
            <div class="FruitVegrt right">
                <ul>
                    <li class="lbig">
                        <p><a href="#" target="_blank"><img src="/Upload/product/201610261625495442.jpg" alt=""/></a></p>
                        <div id="slideBox" class="slideBox botp slidepic1">
                            <div class="hd"><em>1</em></div><div class="bd"><p><a href="#" target="_blank"><img src="/Upload/product/201701191646028728.jpg"/></a></p></div>
                        </div>
                        <p class="botp"><a href="#" target="_blank"><img src="/Upload/product/201605271150499545.jpg" alt=""/></a></p>
                    </li>
                    <li>
                    <?php if(is_array($c)): foreach($c as $key=>$s): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>><a href="home/item?id=<?php echo ($s["p_id"]); ?>" target="_blank"><img src="<?php echo ($s["thumb"]); ?>" alt=""/></a></p><?php endforeach; endif; ?> 
                    </li>
                    <li>
                    <?php if(is_array($d)): foreach($d as $key=>$e): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>><a href=""><a href="home/item?id=<?php echo ($s["p_id"]); ?>" target="_blank"><img src="<?php echo ($e["thumb"]); ?>" alt=""/></a></a></p><?php endforeach; endif; ?> 
                    </li>
                </ul>
            </div>

            <div class="clear0"></div>
        </div>
        <div class="brand clear">
          <ul>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605261838187358.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301716443453.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301702219649.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301702386119.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301702597631.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301703155120.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301703473738.jpg" alt=""/></a></li>
            </ul> 
        </div>
    </div>
    <!--水果蔬菜结束-->


   <!--肉蛋禽类-->
    <div class="wrap clear" id="floor2">
        <div class="titc tit2 clear"><em class="right">
                                         <a href="http://www.lushantc.com/category-565.aspx" target="_blank">牛肉</a>
                                         <a href="http://www.lushantc.com/category-564.aspx" target="_blank">猪肉</a>
                                         <a href="http://www.lushantc.com/category-567.aspx" target="_blank">鸡</a>
                                         <a href="http://www.lushantc.com/category-575.aspx" target="_blank">鱼</a>
                                         <a href="http://www.lushantc.com/category-576.aspx" target="_blank">虾</a>
                                         <a href="http://www.lushantc.com/category-568.aspx" target="_blank">鸭</a>
                                         <a href="http://www.lushantc.com/category-561.aspx" target="_blank">更多选项</a></em><i></i><b>肉类海鲜</b></div>
        <div class="con3">
            <div class="con3lf left">
                <div class="con3lfpic clear"><a href="home/category?wd=肉" target="_blank"><img src="/Upload/product/201605261734515161.jpg" alt=""/></a>
                <p><em><i class="i1"></i><a href="home/category?wd=蛋" target="_blank">蛋禽肉类</a></em>
                    <em><i class="i2"></i><a href="home/category?wd=鱼" target="_blank">海鲜水产</a></em></p></div>
                <div class="con3lftxt clear">
                    <div class="left">
                        <h3><em><a href="/tcproduct-6653.aspx" target="_blank">农家散养土鸡</a>   >></em>
                        <em><a href="/product-4636.aspx" target="_blank">野生鲜活黄鳝</a>  >></em></h3>
                        <p><em><a href="/category-564.aspx" target="_blank">猪肉</a></em>
                        <em><a href="/category-566.aspx" target="_blank">羊肉</a></em>
                        <em class="em1"><a href="/category-568.aspx" target="_blank">鸭肉</a></em>
                        <em><a href="/category-565.aspx" target="_blank">牛肉</a></em>
                        <em><a href="/category-567.aspx" target="_blank">鸡肉</a></em>
                        <em class="em1"><a href="#000000" target="_blank">鸭肉</a></em>
                        <em><a href="/category-570.aspx" target="_blank">土鸡蛋</a></em>
                        <em><a href="/category-572.aspx" target="_blank">香辣肠</a></em>
                        <em class="em1"><a href="/category-582.aspx" target="_blank">海鲜礼盒</a></em></p>
                    </div>
                </div>
            </div>
            <div class="con3rt right">
                <ul>
                    <li class="lbig">
                        <div id="slideBox" class="slideBox slidepic2">
                            <div class="hd"><em>1</em></div><div class="bd"><p><a href="home/category?wd=牛排" target="_blank"><img src="/Upload/product/201701031412059418.jpg"/></a></p></div>
                        </div>
                        <p class="botp"><a href="home/category?wd=肉" target="_blank"><img src="/Upload/product/201611160932280389.jpg" alt=""/></a></p>
                    </li>
                    <?php if(is_array($r1)): foreach($r1 as $key=>$rou): ?><li>
                       
                        <p class="botp"><a href="home/item?id=<?php echo ($rou["p_id"]); ?>" target="_blank"><img src="<?php echo ($rou["thumb"]); ?>" alt=""/></a></p>
                    </li><?php endforeach; endif; ?>
                    <?php if(is_array($r2)): foreach($r2 as $key=>$rou2): ?><li>
  						 <p><a href="home/item?id=<?php echo ($rou2["p_id"]); ?>" target="_blank"><img src="<?php echo ($rou2["thumb"]); ?>" alt=""/></a></p>
                    </li><?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="clear0"></div>
        </div>
 
    </div>
    <div class="wrap ads clear"><a href="#" target="_blank"><img src="/Upload/product/201612140915369482.jpg" alt=""/></a></div>

    <!--肉蛋禽类结束-->

    <!--休闲食品-->
    <div class="wrap clear" id="floor3">
        <div class="titc tit3 clear">
            <em class="right">
                <a href="http://www.lushantc.com/category.aspx?wd=巧克力" target="_blank">巧克力</a>
                <a href="http://www.lushantc.com/category.aspx?wd=进口零食" target="_blank">进口零食</a>
                <a href="http://www.lushantc.com/category-291.aspx" target="_blank">糖果</a>
                <a href="http://www.lushantc.com/category-168.aspx" target="_blank">蜜饯果干</a>
                <a href="http://www.lushantc.com/category-171.aspx" target="_blank">蛋糕饼干</a>
                <a href="http://www.lushantc.com/category-167.aspx" target="_blank">坚果炒货</a>
                <a href="http://www.lushantc.com/category-34.aspx" target="_blank">更多选项</a></em><i></i><b>休闲食品</b>
        </div>
        <div class="FruitVeg">
            <div class="FruitVeglf left">
                <div class="con4lfpic lfcomc clear">
                    <a href="home/category?wd=干" target="_blank"><img src="/Upload/product/201701031434210389.jpg" alt=""/></a>
                    <p>
                        <em><i class="i1"></i><a href="home/category?wd=果" target="_blank">蜜饯果干</a></em>
                        <em><i class="i2"></i><a href="home/category?wd=坚果" target="_blank">坚果炒货</a></em>
                        <em><i class="i3"></i><a href="home/category?wd=豆" target="_blank">肉类豆干</a></em>
                        <em><i class="i4"></i><a href="home/category?wd=膨化" target="_blank">膨化食品</a></em>
                    </p>
                </div>
                <div class="con4lftxt clear">
                    <div class="left">
                        <h3><em><a href="/Shop1238/index.aspx" target="_blank">法丽兹办公休闲小吃</a>   >></em><em><a href="/product-5841.aspx" target="_blank">百丈泉南酸枣糕</a>   >></em><em><a href="/product-6371.aspx" target="_blank">采味园东北松子</a>   >></em></h3>
                        <p><em><a href="/category-260.aspx" target="_blank">开心果</a></em><em><a href="/category-275.aspx" target="_blank">葡萄干</a></em><em><a href="/category-318.aspx" target="_blank">曲奇</a></em><em><a href="/category-284.aspx" target="_blank">香蕉片</a></em><em><a href="/category-309.aspx" target="_blank">巧克力</a></em><em><a href="/category-256.aspx" target="_blank">核桃</a></em><em><a href="/category-291.aspx" target="_blank">糖果</a></em><em><a href="/category-313.aspx" target="_blank">饼干</a></em><em><a href="/category-308.aspx" target="_blank">薯条</a></em></p>
                    </div>
                    <div class="left">
                        <h3><em><a href="/product-6150.aspx" target="_blank">蓝百蓓蓝莓干</a>   >></em><em><a href="/product-5952.aspx" target="_blank">东北开口松子</a>   >></em><em><a href="/product-5731.aspx" target="_blank">小香驴纯香驴肉</a>   >></em></h3>
                        <p><em><a href="/category-296.aspx" target="_blank">牛羊类</a></em><em><a href="/category-483.aspx" target="_blank">笋制品</a></em><em><a href="/category-261.aspx" target="_blank">腰果</a></em><em><a href="/category-281.aspx" target="_blank">杏仁干</a></em><em><a href="/category-284.aspx" target="_blank">香蕉片</a></em><em><a href="/category-310.aspx" target="_blank">面点</a></em><em><a href="/category-267.aspx" target="_blank">花生</a></em><em><a href="/category-277.aspx" target="_blank">山楂</a></em><em><a href="/category-289.aspx" target="_blank">桑果</a></em></p>
                    </div>
                </div>
            </div>
            <div class="FruitVegrt right">
                <ul>
         <li class="lbig">
                        <div id="slideBox" class="slideBox slidepic3">
                            <div class="hd"><em>1</em></div><div class="bd"><p><a href="home/category?wd=旺" target="_blank"><img src="/Upload/product/201605271455419034.jpg"/></a></p></div>
                        </div>
                        <p class="botp">
                         <?php if(is_array($ls1)): foreach($ls1 as $key=>$lingshi1): ?><span <?php if(($key) == "0"): ?>class="bort"<?php endif; ?>> <a href="home/item?id=<?php echo ($lingshi1["p_id"]); ?>" target="_blank"><img src="<?php echo ($lingshi1["thumb"]); ?>" alt=""/></a></span><?php endforeach; endif; ?>
                         </p>
                        
                    </li>
                   
                    <li>
                        <?php if(is_array($ls2)): foreach($ls2 as $key=>$lingshi2): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>><a href="home/item?id=<?php echo ($lingshi2["p_id"]); ?>" target="_blank"><img src="<?php echo ($lingshi2["thumb"]); ?>" alt=""/></a></p><?php endforeach; endif; ?> 
                    </li> 
                         <li>
                       <?php if(is_array($ls3)): foreach($ls3 as $key=>$lingshi3): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>> <a href="home/item?id=<?php echo ($lingshi3["p_id"]); ?>" target="_blank"><img src="<?php echo ($lingshi3["thumb"]); ?>" alt=""/></a>
                       </p><?php endforeach; endif; ?>
                    </li>
                      
                </ul>
            </div>
            <div class="clear0"></div>
        </div>
        <div class="brand clear">
            <ul>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301714546390.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301719022312.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301719403413.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201606211456141381.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301722156212.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301723164967.jpg" alt=""/></a></li>
                <li><a href="#" target="_blank"><img src="/Upload/product/201605301724389134.jpg" alt=""/></a></li>
            </ul>
        </div>
    </div>
    <!--休闲食品结束-->
    
    <!--粮油副食-->
    <div class="wrap clear" id="floor4">
        <div class="titc tit4 clear"><em class="right">
                                         <a href="http://www.lushantc.com/category-242.aspx" target="_blank">干货</a>
                                         <a href="http://www.lushantc.com/category-245.aspx" target="_blank">食用油</a>
                                         <a href="http://www.lushantc.com/category-183.aspx" target="_blank">厨房调料</a>
                                         <a href="http://www.lushantc.com/category-244.aspx" target="_blank">粗粮</a>
                                         <a href="http://www.lushantc.com/category-590.aspx" target="_blank">调味酱</a>
                                         <a href="http://www.lushantc.com/category-243.aspx" target="_blank">米面</a>
                                         <a href="http://www.lushantc.com/category-33.aspx" target="_blank">更多选项</a></em><i></i><b>粮油副食</b></div>
        <div class="con3">
            <div class="con5lf left">
                <div class="con3lfpic con5lfpic clear">
                    <a href="home/category?wd=粮油" target="_blank"><img src="/Upload/product/201605261728481343.jpg" alt=""/></a><p>
                    <em><i class="i1"></i><a href="home/category?wd=油" target="_blank">食用油</a></em>
                    <em><i class="i2"></i><a href="home/category?wd=厨" target="_blank">厨房调料</a></em>
                    <em><i class="i3"></i><a href="home/category?wd=米" target="_blank">米面杂粮</a></em>
                    <em><i class="i4"></i><a href="home/category?wd=干货" target="_blank">干货速食</a>></em></p></div>
                <div class="con3lftxt con5lftxt clear">
                    <div class="left">
                        <h3><em><a href="/product-6316.aspx" target="_blank">润心有机山茶油</a>   >></em><em><a href="/tcproduct-6788.aspx" target="_blank">预售菲尔雪新鲜龙粽</a>  >></em></h3>
                        <p><em><a href="/category-350.aspx" target="_blank">山茶油</a></em>
                        <em><a href="/category-351.aspx" target="_blank">橄榄油</a></em>
                        <em><a href="/category-584.aspx" target="_blank">大豆油</a></em>
                        <em><a href="/category-334.aspx" target="_blank">国产米</a></em>
                        <em><a href="/category-335.aspx" target="_blank">泰国米</a></em>
                        <em><a href="/category-331.aspx" target="_blank">面制品</a></em>
                        <em><a href="/category-322.aspx" target="_blank">食用菌</a></em>
                        <em><a href="/category-597.aspx" target="_blank">速食饭</a></em><em><a href="/category-590.aspx" target="_blank">调味酱</a></em></p>
                    </div>
                </div>
            </div>
            <div class="con5rt right">
                <ul>
                    <li>
			 <?php if(is_array($ly1)): foreach($ly1 as $key=>$liangyou1): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>><a href="home/item?id=<?php echo ($liangyou1["p_id"]); ?>" target="_blank"><img src="<?php echo ($liangyou1["thumb"]); ?>" alt=""/></a></p><?php endforeach; endif; ?>     
                    </li>
                    <li class="lbig">
 			<?php if(is_array($ly2)): foreach($ly2 as $key=>$liangyou2): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>><a href="home/item?id=<?php echo ($liangyou2["p_id"]); ?>" target="_blank"><img src="<?php echo ($liangyou2["thumb"]); ?>" alt=""/></a></p><?php endforeach; endif; ?>
                    </li>
                    <li>
                       <?php if(is_array($ly3)): foreach($ly3 as $key=>$liangyou3): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>><a href="home/item?id=<?php echo ($liangyou3["p_id"]); ?>" target="_blank"><img src="<?php echo ($liangyou3["thumb"]); ?>" alt=""/></a></p><?php endforeach; endif; ?>
                    </li>
                    <li>
			<?php if(is_array($ly4)): foreach($ly4 as $key=>$liangyou4): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>><a href="home/item?id=<?php echo ($liangyou4["p_id"]); ?>" target="_blank"><img src="<?php echo ($liangyou4["thumb"]); ?>" alt=""/></a></p><?php endforeach; endif; ?>
                    </li>
                </ul>
            </div>
            <div class="clear0"></div>
        </div>
        <div class="brand clear">
            <ul>
                <li><a href="/Shop1236/index.aspx" target="_blank"><img src="/Upload/product/201605301730127325.jpg" alt=""/></a></li>
                <li><a href="/Shop728/index.aspx" target="_blank"><img src="/Upload/product/201605301732522626.jpg" alt=""/></a></li>
                <li><a href="/Shop967/index.aspx" target="_blank"><img src="/Upload/product/201605301734392177.jpg" alt=""/></a></li>
                <li><a href="/Shop302/index.aspx" target="_blank"><img src="/Upload/product/201605301735412983.jpg" alt=""/></a></li>
                <li><a href="/Shop289/index.aspx" target="_blank"><img src="/Upload/product/201605301737013649.jpg" alt=""/></a></li>
                <li><a href="/" target="_blank"><img src="/Upload/product/201605301739107903.jpg" alt=""/></a></li>
                <li><a href="/" target="_blank"><img src="/Upload/product/201605301738322591.jpg" alt=""/></a></li>
            </ul>
        </div>
    </div>
    <div class="wrap ads clear"><a href="#"><a href="#" target="_blank"><img src="/Upload/product/201605261835490333.jpg" alt=""/></a></a></div>
    <!--粮油副食结束-->

    <!--茶叶冲饮-->
    <div class="wrap clear" id="floor5">
        <div class="titc tit5 clear"><em class="right">  
                                         <a href="http://www.lushantc.com/category.aspx?wd=蜂蜜" target="_blank">蜂蜜</a>
                                         <a href="http://www.lushantc.com/category-381.aspx" target="_blank">红茶</a>
                                         <a href="http://www.lushantc.com/category.aspx?wd=铁观音" target="_blank">铁观音</a>
                                         <a href="http://www.lushantc.com/category.aspx?wd=牛奶" target="_blank">牛奶</a>
                                         <a href="http://www.lushantc.com/category.aspx?wd=麦片" target="_blank">麦片</a>
                                         <a href="http://www.lushantc.com/category.aspx?wd=咖啡" target="_blank">咖啡</a>
                                         <a href="http://www.lushantc.com/category.aspx?wd=普洱" target="_blank">普洱</a>
                                         <a href="http://www.lushantc.com/category-35.aspx" target="_blank">更多选项</a></em><i></i><b>茶叶冲饮</b></div>
        <div class="FruitVeg">
            <div class="FruitVeglf left">
                <div class="con5lfpic lfcomc clear">
                    <a href="home/category?wd=茶" target="_blank"><img src="/Upload/product/201605261715365840.jpg" alt=""/></a><p>
                    <em><i class="i1"></i><a href="home/category?wd=茶" target="_blank">国产茶</a></em>
                    <em><i class="i2"></i><a href="home/category?wd=茶" target="_blank">进口茶</a></em>
                    <em><i class="i3"></i><a href="home/category?wd=茶" target="_blank">冲调饮品</a></em></p></div>
                <div class="FruitVegtxt cylftxt clear">
                    <div class="left">
                        <h3><a href="/product-6803.aspx" target="_blank">特级狗牯脑绿茶</a>  >></h3>
                        <p><em><a href="/category-381.aspx" target="_blank">红茶</a></em><em><a href="/category-599.aspx" target="_blank">乌龙茶</a></em>
                        <em><a href="/category-382.aspx" target="_blank">花果茶</a></em>
                        <em><a href="/category-602.aspx" target="_blank">进口绿茶</a></em>
                        <em><a href="/category-383.aspx" target="_blank">保健茶</a></em>
                        <em><a href="/category.aspx?wd=%E6%99%AE%E6%B4%B1%E8%8C%B6" target="_blank">普洱茶</a></em></p>
                    </div>
                    <div class="left">
                        <h3><a href="/product-6331.aspx" target="_blank">庐山云雾红茶</a>   >></h3>
                        <p><em><a href="/category-388.aspx" target="_blank">芝麻糊</a></em>
                        <em><a href="/category-395.aspx" target="_blank">速溶茶</a></em>
                        <em><a href="/category-389.aspx" target="_blank">核桃粉</a></em>
                        <em><a href="/category-397.aspx" target="_blank">豆奶粉</a></em>
                        <em><a href="/category-667.aspx" target="_blank">纯牛奶</a></em>
                        <em><a href="/category-666.aspx" target="_blank">婴儿奶粉</a></em></p>
                    </div>
                </div>
                <div class="botp clear"><a href="home/item?id=34" target="_blank"><img src="/Upload/product/201605261614359756.jpg" alt="武夷山金骏眉红茶"/></a></div>
            </div>
            <div class="FruitVegrt right">
                <ul>
                    <li class="lbig">
         				<?php if(is_array($cy2)): foreach($cy2 as $key=>$chaye2): if(($key) == "1"): ?><div id="slideBox" class="slideBox botp slidepic1">
                            <div class="hd"><em>1</em></div>
						<div class="bd"><?php endif; ?>
                        <p <?php if(($key) == "2"): ?>class="botp"<?php endif; ?>>
                        <a href="home/item?id=<?php echo ($chaye2["p_id"]); ?>" target="_blank"><img src="<?php echo ($chaye2["thumb"]); ?>" alt="斯里兰卡红茶"/></a></p>
                    <?php if(($key) == "1"): ?></div></div><?php endif; endforeach; endif; ?>
                    </li>
                   <!--第三层-->
                    <li>
       				<?php if(is_array($cy3)): foreach($cy3 as $key=>$chaye3): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>>
        <a href="home/item?id=<?php echo ($chaye3["p_id"]); ?>" target="_blank"><img src="<?php echo ($chaye3["thumb"]); ?>" alt="庐山云雾茶"/></a>
        </p><?php endforeach; endif; ?>
                    </li>
                    <li>
					<?php if(is_array($cy4)): foreach($cy4 as $key=>$chaye4): ?><p <?php if(($key) != "0"): ?>class="botp"<?php endif; ?>>
                        <a href="home/item?id=<?php echo ($chaye4["p_id"]); ?>" target="_blank"><img src="<?php echo ($chaye4["thumb"]); ?>" alt="小粒咖啡（混）"/></a>
                        </p><?php endforeach; endif; ?>
                    </li>
                </ul>
            </div>
            <div class="clear0"></div>
        </div>
        <!--<div class="brand clear">
            <ul>
                <li><a href="/member/Ads_click_Mamage.aspx?id=7212&page=%23" target="_blank"><img src="/Upload/product/201605231454474502.jpg" alt=""/></a></li>
                <li><a href="/member/Ads_click_Mamage.aspx?id=7213&page=%23" target="_blank"><img src="/Upload/product/201605231456091539.jpg" alt=""/></a></li>
                <li><a href="/member/Ads_click_Mamage.aspx?id=7214&page=%23" target="_blank"><img src="/Upload/product/201605231457045590.jpg" alt=""/></a></li>
                <li><a href="/member/Ads_click_Mamage.aspx?id=7215&page=http%3a%2f%2f" target="_blank"><img src="/Upload/product/201605231457454654.jpg" alt=""/></a></li>
                <li><a href="/member/Ads_click_Mamage.aspx?id=7216&page=%23" target="_blank"><img src="/Upload/product/201605231458313380.jpg" alt=""/></a></li>
                <li><a href="/member/Ads_click_Mamage.aspx?id=7217&page=%23" target="_blank"><img src="/Upload/product/201605231459102062.jpg" alt=""/></a></li>
                <li><a href="/member/Ads_click_Mamage.aspx?id=7218&page=%23" target="_blank"><img src="/Upload/product/201605231500002101.jpg" alt=""/></a></li>
            </ul>
        </div>-->
    </div>
    <!--茶叶冲饮结束-->

  


    


    <div class="wrap ads clear"><a href="#" target="_blank"><img src="/Upload/product/201605261836461755.jpg" alt=""/></a></div>
    <div class="wrap clear">
        <div class="inews inewsr left">
            <div class="titn clear"><a class="right" href="#">更多＞＞</a><i class="i1"></i><b>营养课堂</b></div>
            <div class="clear">
                <img class="inewspic left" src="/Public/images/Home/npic.jpg" width="175" height="102" />
                <ul class="inewsmd inewstxt right">
                    
                    <li>
                        <a href="#" title="你所不知道的鸡西特产有哪些呢？" target="_blank">你所不知道的鸡西特产有哪些呢？</a>
                    </li>
                    
                    <li>
                        <a href="#" title="绥化特产美食，带给你不一样的东北风味" target="_blank">绥化特产美食，带给你不一样的东北风</a>
                    </li>
                    
                    <li>
                        <a href="#" title="物阜民丰焕然一新，当然少不了美味的阜新特产小吃！" target="_blank">物阜民丰焕然一新，当然少不了美味的</a>
                    </li>
                    
                    <li>
                        <a href="#" title="关外上海的惬意生活怎少的了营口特产！" target="_blank">关外上海的惬意生活怎少的了营口特产</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="inews left">
            <div class="titn clear"><a class="right">更多＞＞</a><i class="i2"></i><b>资讯</b></div>
            <ul class="inewsmd">
                
                <li>
                    <a>两分钟内切整个菠萝，这方法太好用!</a>
                </li>
                
                <li>
                    <a>我和你缠缠绵绵，丝丝入味</a>
                </li>
                
                <li>
                    <a>4款春季减肥食品 多吃不胖</a>
                </li>
                
                <li>
                    <a>豆浆的5大误解，你上当没？</a>
                </li>
                
            </ul>
        </div>
        <div class="inews right">
            <div class="titn clear"><a class="refresh right" href="#">换一换</a><i class="i3"></i><b>商家推荐</b></div>
            <div class="malllogo clear">
                <ul>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301747173161.jpg" alt=""/></a></li>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301748087520.jpg" alt=""/></a></li>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301749031702.jpg" alt=""/></a></li>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301749582723.jpg" alt=""/></a></li>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301750312272.jpg" alt=""/></a></li>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301751292385.jpg" alt=""/></a></li>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301752157742.jpg" alt=""/></a></li>
                    <li><a href="#" target="_blank"><img src="/Upload/product/201605301747024973.jpg" alt=""/></a></li>
                </ul>
            </div>
        </div>
        <div class="clear0"></div>
    </div>
<!--底部开始-->
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