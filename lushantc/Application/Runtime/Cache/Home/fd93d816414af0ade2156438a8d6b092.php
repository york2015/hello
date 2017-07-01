<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="特产,土特产,农产品,海林特产网" name="keywords" />
<meta content="海林特产网（lushantc.com)-专业的农土特产网上购物商城，专注在线销售农产品、土特产行业数万个品牌和类种的优质商品，品质保证、服务放心，便捷、诚信的服务为您提供愉悦的网上商城购物体验！" name="description" />
<meta name="title" content="海林特产网" />
<meta name="author" content="海林特产网" />
<meta name="renderer" content="webkit|ie-comp|ie-stand" />
<title>海林特产网-专业的农产品、土特产网上购物商城</title>
 <link rel="stylesheet" type="text/css" href="/Public/css/Home/2016new.css" />
 <link rel="stylesheet" type="text/css" href="/Public/css/Home/product.css" />
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
        <li class="cspic"><a href="<?php echo U('User/index/index');?>"><img src="/Public/images/Home/peo.png" /></a></li>
        <li class="lmd"><a href="<?php echo U('Home/Cart/index');?>"><img src="/Public/images/Home/cart.png" /><span>购<br />物<br />车</span></a></li>
        <!-- <li class="cspic"><a href="/user/collect.aspx"><img src="/Public/images/Home/col.png" /></a></li> -->
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
			
            <li><a href="/">海林特产网首页</a></li>
            <li>
                <a class="drop" href="user">我的特产</a>
                <ul style="display:none; ">
                    <li><a href="<?php echo U('User/index/index');?>">我的订单</a></li>
                    <!--<li><a href="#">我的积分</a></li>-->
                    <!-- <li><a href="/user/comment.aspx">评价商品</a></li> -->
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
            <li><a class="sina_weibo" title="关注海林特产网微博" target="_blank" href="#">关注海林特产网微博</a></li>
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
            <h2><a href="<?php echo U('Home/Category/index');?>">全部商品分类</a></h2>
            <div class="sort" style=" display:none">
                <div id="newPriceLinks" class="newPriceLinks">
                    <ul>
                        <?php if(is_array($categories)): foreach($categories as $key=>$category): ?><li><!-- 一级分类 -->
                            <p class="tit"><strong><i class="i<?php echo ($key+1); ?>" ></i><a href="<?php echo U('Home/Category/index',array('cid'=>$category['id']));?>" ><?php echo ($category['name']); ?></a></strong>
                            <font>
                            	<?php $cate_word = $cate_words[$key]; ?>
                                <?php if(is_array($cate_word)): foreach($cate_word as $key=>$word): ?><!--分类预览  -->
                                <a href="<?php echo U('Home/Category/index',array('cid'=>$word['cid']));?>" ><?php echo ($word["name"]); ?></a><?php endforeach; endif; ?>
                             </font>
                            </p>
                            <p class="arrow" style=" top:1px;"></p>
                            <div style="background: url(Public/images/Home/pic<?php echo ($key+1); ?>.jpg) #fff right bottom no-repeat; ">
                                <span>
                                    <?php if(is_array($category['child'])): foreach($category['child'] as $key=>$cate): ?><dl><!-- 二级分类（水果，蔬菜等） -->
                                        <dt> <a href="<?php echo U('Home/Category/index',array('cid'=>$cate['id']));?>"><?php echo ($cate['name']); ?></a> </dt>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="/Public/js/Home/product.js"></script>
<script type="text/javascript" src="/Public/js/Home/lhgdialog/lhgdialog.js?skin=idialog"></script>
<!--切换热门开始-->
<div class="wrap clear">
  <div class="location clear">您所在的位置：<a href="/">庐山特产网</a><em>&gt;</em><a href="">产品中心</a> > 特产分类</div>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="productlf left">
<div class="category clear">
<div class="categ"><a id="cid_31" href="/category-31.aspx" level="1">水果蔬菜</a><span>-</span></div>
      <div class="categb  clear">
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_142" level="2" href="/category-142.aspx">水果</a></dt>
          <dd class="">
              
              <em><a id="cid_480" level="3" href="/category-480.aspx">石榴</a></em>
              
              <em><a id="cid_429" level="3" href="/category-429.aspx">*苹果</a></em>
              
              <em><a id="cid_435" level="3" href="/category-435.aspx">梨</a></em>
              
              <em><a id="cid_440" level="3" href="/category-440.aspx">*脐橙</a></em>
              
              <em><a id="cid_557" level="3" href="/category-557.aspx">柑类</a></em>
              
              <em><a id="cid_436" level="3" href="/category-436.aspx">瓜类</a></em>
              
              <em><a id="cid_433" level="3" href="/category-433.aspx">柠檬</a></em>
              
              <em><a id="cid_428" level="3" href="/category-428.aspx">香蕉</a></em>
              
              <em><a id="cid_431" level="3" href="/category-431.aspx">火龙果</a></em>
              
              <em><a id="cid_426" level="3" href="/category-426.aspx">菠萝/凤梨</a></em>
              
              <em><a id="cid_430" level="3" href="/category-430.aspx">奇异果/猕猴桃</a></em>
              
              <em><a id="cid_437" level="3" href="/category-437.aspx">提子/葡萄</a></em>
              
              <em><a id="cid_427" level="3" href="/category-427.aspx">*芒果</a></em>
              
              <em><a id="cid_434" level="3" href="/category-434.aspx">龙眼/荔枝</a></em>
              
              <em><a id="cid_439" level="3" href="/category-439.aspx">*车厘子/樱桃</a></em>
              
              <em><a id="cid_438" level="3" href="/category-438.aspx">榴莲</a></em>
              
              <em><a id="cid_424" level="3" href="/category-424.aspx">山楂</a></em>
              
              <em><a id="cid_457" level="3" href="/category-457.aspx">枇杷</a></em>
              
              <em><a id="cid_458" level="3" href="/category-458.aspx">圣女果</a></em>
              
              <em><a id="cid_459" level="3" href="/category-459.aspx">草莓</a></em>
              
              <em><a id="cid_530" level="3" href="/category-530.aspx">杨梅</a></em>
              
              <em><a id="cid_468" level="3" href="/category-468.aspx">山竹</a></em>
              
              <em><a id="cid_503" level="3" href="/category-503.aspx">青枣</a></em>
              
              <em><a id="cid_502" level="3" href="/category-502.aspx">杨桃</a></em>
              
              <em><a id="cid_532" level="3" href="/category-532.aspx">李子</a></em>
              
              <em><a id="cid_529" level="3" href="/category-529.aspx">桃</a></em>
              
              <em><a id="cid_528" level="3" href="/category-528.aspx">柚子</a></em>
              
              <em><a id="cid_553" level="3" href="/category-553.aspx">宅配套餐</a></em>
              
              <em><a id="cid_506" level="3" href="/category-506.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_485" level="2" href="/category-485.aspx">蔬菜</a></dt>
          <dd class="">
              
              <em><a id="cid_560" level="3" href="/category-560.aspx">有机蔬菜</a></em>
              
              <em><a id="cid_488" level="3" href="/category-488.aspx">叶菜类</a></em>
              
              <em><a id="cid_492" level="3" href="/category-492.aspx">根菜类</a></em>
              
              <em><a id="cid_559" level="3" href="/category-559.aspx">*菌菇类</a></em>
              
              <em><a id="cid_490" level="3" href="/category-490.aspx">*茄类/瓜果类</a></em>
              
              <em><a id="cid_487" level="3" href="/category-487.aspx">花菜类</a></em>
              
              <em><a id="cid_491" level="3" href="/category-491.aspx">块茎类</a></em>
              
              <em><a id="cid_489" level="3" href="/category-489.aspx">豆荚类</a></em>
              
              <em><a id="cid_558" level="3" href="/category-558.aspx">蒜葱类</a></em>
              
              <em><a id="cid_486" level="3" href="/category-486.aspx">竹笋类</a></em>
              
              <em><a id="cid_493" level="3" href="/category-493.aspx">水生菜类</a></em>
              
              <em><a id="cid_494" level="3" href="/category-494.aspx">野生菜类</a></em>
              
              <em><a id="cid_552" level="3" href="/category-552.aspx">宅配套餐</a></em>
              
              <em><a id="cid_495" level="3" href="/category-495.aspx">其他新鲜蔬菜</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
      </div>
      
      <div class="categ"><a id="cid_561" href="/category-561.aspx" level="1">肉类海鲜</a><span>-</span></div>
      <div class="categb  clear">
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_563" level="2" href="/category-563.aspx">蛋禽肉类</a></dt>
          <dd class="">
              
              <em><a id="cid_564" level="3" href="/category-564.aspx">猪肉</a></em>
              
              <em><a id="cid_565" level="3" href="/category-565.aspx">牛肉</a></em>
              
              <em><a id="cid_566" level="3" href="/category-566.aspx">羊肉</a></em>
              
              <em><a id="cid_567" level="3" href="/category-567.aspx">*鸡肉</a></em>
              
              <em><a id="cid_568" level="3" href="/category-568.aspx">鸭肉</a></em>
              
              <em><a id="cid_569" level="3" href="/category-569.aspx">鹅/鸽</a></em>
              
              <em><a id="cid_592" level="3" href="/category-592.aspx">鸭鹅蛋</a></em>
              
              <em><a id="cid_570" level="3" href="/category-570.aspx">鲜/土鸡蛋</a></em>
              
              <em><a id="cid_779" level="3" href="/category-779.aspx">皮/咸蛋</a></em>
              
              <em><a id="cid_586" level="3" href="/category-586.aspx">*腌/腊肉</a></em>
              
              <em><a id="cid_572" level="3" href="/category-572.aspx">香/腊肠</a></em>
              
              <em><a id="cid_571" level="3" href="/category-571.aspx">进口肉</a></em>
              
              <em><a id="cid_573" level="3" href="/category-573.aspx">肉类礼盒</a></em>
              
              <em><a id="cid_787" level="3" href="/category-787.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_562" level="2" href="/category-562.aspx">海鲜水产</a></dt>
          <dd class="">
              
              <em><a id="cid_575" level="3" href="/category-575.aspx">*鱼类</a></em>
              
              <em><a id="cid_576" level="3" href="/category-576.aspx">虾类</a></em>
              
              <em><a id="cid_577" level="3" href="/category-577.aspx">蟹/贝类</a></em>
              
              <em><a id="cid_578" level="3" href="/category-578.aspx">龟鳖类</a></em>
              
              <em><a id="cid_579" level="3" href="/category-579.aspx">藻类</a></em>
              
              <em><a id="cid_580" level="3" href="/category-580.aspx">软体类</a></em>
              
              <em><a id="cid_581" level="3" href="/category-581.aspx">*海产干货</a></em>
              
              <em><a id="cid_582" level="3" href="/category-582.aspx">海鲜礼盒</a></em>
              
              <em><a id="cid_780" level="3" href="/category-780.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
      </div>
      
      <div class="categ"><a id="cid_34" href="/category-34.aspx" level="1">休闲食品</a><span>-</span></div>
      <div class="categb  clear">
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_167" level="2" href="/category-167.aspx">坚果炒货</a></dt>
          <dd class="">
              
              <em><a id="cid_256" level="3" href="/category-256.aspx">*核桃</a></em>
              
              <em><a id="cid_257" level="3" href="/category-257.aspx">碧根果/长寿果</a></em>
              
              <em><a id="cid_258" level="3" href="/category-258.aspx">*杏仁/巴旦木</a></em>
              
              <em><a id="cid_259" level="3" href="/category-259.aspx">夏威夷果</a></em>
              
              <em><a id="cid_260" level="3" href="/category-260.aspx">*开心果</a></em>
              
              <em><a id="cid_261" level="3" href="/category-261.aspx">*腰果</a></em>
              
              <em><a id="cid_262" level="3" href="/category-262.aspx">无花果</a></em>
              
              <em><a id="cid_263" level="3" href="/category-263.aspx">鲍鱼果</a></em>
              
              <em><a id="cid_273" level="3" href="/category-273.aspx">白果/银杏果</a></em>
              
              <em><a id="cid_264" level="3" href="/category-264.aspx">松子</a></em>
              
              <em><a id="cid_265" level="3" href="/category-265.aspx">榛子</a></em>
              
              <em><a id="cid_266" level="3" href="/category-266.aspx">瓜子</a></em>
              
              <em><a id="cid_267" level="3" href="/category-267.aspx">花生</a></em>
              
              <em><a id="cid_268" level="3" href="/category-268.aspx">栗类</a></em>
              
              <em><a id="cid_271" level="3" href="/category-271.aspx">兰花豆/蚕豆</a></em>
              
              <em><a id="cid_272" level="3" href="/category-272.aspx">青豆</a></em>
              
              <em><a id="cid_270" level="3" href="/category-270.aspx">胡桃</a></em>
              
              <em><a id="cid_269" level="3" href="/category-269.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_168" level="2" href="/category-168.aspx">蜜饯果干</a></dt>
          <dd class="">
              
              <em><a id="cid_481" level="3" href="/category-481.aspx">柠檬片</a></em>
              
              <em><a id="cid_274" level="3" href="/category-274.aspx">枣类制品</a></em>
              
              <em><a id="cid_275" level="3" href="/category-275.aspx">*葡萄干</a></em>
              
              <em><a id="cid_278" level="3" href="/category-278.aspx">芒果干</a></em>
              
              <em><a id="cid_276" level="3" href="/category-276.aspx">梅类制品</a></em>
              
              <em><a id="cid_277" level="3" href="/category-277.aspx">山楂类制品</a></em>
              
              <em><a id="cid_279" level="3" href="/category-279.aspx">笋类制品</a></em>
              
              <em><a id="cid_280" level="3" href="/category-280.aspx">蓝莓</a></em>
              
              <em><a id="cid_290" level="3" href="/category-290.aspx">薯类制品</a></em>
              
              <em><a id="cid_281" level="3" href="/category-281.aspx">杏仁干</a></em>
              
              <em><a id="cid_282" level="3" href="/category-282.aspx">无花果干</a></em>
              
              <em><a id="cid_283" level="3" href="/category-283.aspx">凤梨/菠萝蜜干</a></em>
              
              <em><a id="cid_284" level="3" href="/category-284.aspx">*香蕉片</a></em>
              
              <em><a id="cid_285" level="3" href="/category-285.aspx">蔬果干</a></em>
              
              <em><a id="cid_286" level="3" href="/category-286.aspx">圣女果干</a></em>
              
              <em><a id="cid_287" level="3" href="/category-287.aspx">猕猴桃干</a></em>
              
              <em><a id="cid_288" level="3" href="/category-288.aspx">橄榄</a></em>
              
              <em><a id="cid_289" level="3" href="/category-289.aspx">桑果</a></em>
              
              <em><a id="cid_455" level="3" href="/category-455.aspx">杏干</a></em>
              
              <em><a id="cid_461" level="3" href="/category-461.aspx">李柰干</a></em>
              
              <em><a id="cid_482" level="3" href="/category-482.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_170" level="2" href="/category-170.aspx">肉类豆干</a></dt>
          <dd class="">
              
              <em><a id="cid_483" level="3" href="/category-483.aspx">笋类制品</a></em>
              
              <em><a id="cid_296" level="3" href="/category-296.aspx">牛羊类</a></em>
              
              <em><a id="cid_297" level="3" href="/category-297.aspx">猪肉类</a></em>
              
              <em><a id="cid_299" level="3" href="/category-299.aspx">禽类</a></em>
              
              <em><a id="cid_300" level="3" href="/category-300.aspx">鱼虾制品</a></em>
              
              <em><a id="cid_466" level="3" href="/category-466.aspx">蟹贝制品</a></em>
              
              <em><a id="cid_301" level="3" href="/category-301.aspx">豆干制品</a></em>
              
              <em><a id="cid_306" level="3" href="/category-306.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_171" level="2" href="/category-171.aspx">膨化食品</a></dt>
          <dd class="">
              
              <em><a id="cid_313" level="3" href="/category-313.aspx">*饼干</a></em>
              
              <em><a id="cid_314" level="3" href="/category-314.aspx">传统糕点</a></em>
              
              <em><a id="cid_315" level="3" href="/category-315.aspx">西式糕点</a></em>
              
              <em><a id="cid_316" level="3" href="/category-316.aspx">甜甜圈</a></em>
              
              <em><a id="cid_317" level="3" href="/category-317.aspx">月饼</a></em>
              
              <em><a id="cid_318" level="3" href="/category-318.aspx">*曲奇</a></em>
              
              <em><a id="cid_307" level="3" href="/category-307.aspx">果味派</a></em>
              
              <em><a id="cid_308" level="3" href="/category-308.aspx">薯片/薯条</a></em>
              
              <em><a id="cid_309" level="3" href="/category-309.aspx">巧克力派</a></em>
              
              <em><a id="cid_310" level="3" href="/category-310.aspx">面点</a></em>
              
              <em><a id="cid_311" level="3" href="/category-311.aspx">茶点</a></em>
              
              <em><a id="cid_312" level="3" href="/category-312.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_169" level="2" href="/category-169.aspx">其他</a></dt>
          <dd class="">
              
              <em><a id="cid_291" level="3" href="/category-291.aspx">糖果</a></em>
              
              <em><a id="cid_292" level="3" href="/category-292.aspx">果冻/布丁</a></em>
              
              <em><a id="cid_294" level="3" href="/category-294.aspx">口香糖</a></em>
              
              <em><a id="cid_293" level="3" href="/category-293.aspx">罐头</a></em>
              
              <em><a id="cid_783" level="3" href="/category-783.aspx">酱腌菜</a></em>
              
              <em><a id="cid_782" level="3" href="/category-782.aspx">脱水蔬菜</a></em>
              
              <em><a id="cid_784" level="3" href="/category-784.aspx">蔬菜制品</a></em>
              
              <em><a id="cid_295" level="3" href="/category-295.aspx">其他食品</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
      </div>
      
      <div class="categ"><a id="cid_33" href="/category-33.aspx" level="1">米面粮油</a><span>-</span></div>
      <div class="categb  clear">
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_245" level="2" href="/category-245.aspx">食用油</a></dt>
          <dd class="">
              
              <em><a id="cid_350" level="3" href="/category-350.aspx">*山茶油</a></em>
              
              <em><a id="cid_351" level="3" href="/category-351.aspx">橄榄油</a></em>
              
              <em><a id="cid_352" level="3" href="/category-352.aspx">调和油</a></em>
              
              <em><a id="cid_354" level="3" href="/category-354.aspx">葵花籽油</a></em>
              
              <em><a id="cid_353" level="3" href="/category-353.aspx">菜籽油</a></em>
              
              <em><a id="cid_585" level="3" href="/category-585.aspx">花生油</a></em>
              
              <em><a id="cid_584" level="3" href="/category-584.aspx">大豆油</a></em>
              
              <em><a id="cid_355" level="3" href="/category-355.aspx">亚麻籽油</a></em>
              
              <em><a id="cid_356" level="3" href="/category-356.aspx">玉米油</a></em>
              
              <em><a id="cid_357" level="3" href="/category-357.aspx">葡萄籽油</a></em>
              
              <em><a id="cid_358" level="3" href="/category-358.aspx">核桃油</a></em>
              
              <em><a id="cid_359" level="3" href="/category-359.aspx">椰子油</a></em>
              
              <em><a id="cid_349" level="3" href="/category-349.aspx">动物油</a></em>
              
              <em><a id="cid_360" level="3" href="/category-360.aspx">其他食用油</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_243" level="2" href="/category-243.aspx">米面杂粮</a></dt>
          <dd class="">
              
              <em><a id="cid_589" level="3" href="/category-589.aspx">黑豆/黄豆</a></em>
              
              <em><a id="cid_588" level="3" href="/category-588.aspx">红豆/绿豆</a></em>
              
              <em><a id="cid_587" level="3" href="/category-587.aspx">红薯/玉米</a></em>
              
              <em><a id="cid_334" level="3" href="/category-334.aspx">国产大米</a></em>
              
              <em><a id="cid_335" level="3" href="/category-335.aspx">泰国香米</a></em>
              
              <em><a id="cid_336" level="3" href="/category-336.aspx">小米/薏仁米</a></em>
              
              <em><a id="cid_338" level="3" href="/category-338.aspx">糙米/糯米</a></em>
              
              <em><a id="cid_339" level="3" href="/category-339.aspx">黑米/红米</a></em>
              
              <em><a id="cid_331" level="3" href="/category-331.aspx">面/面制品</a></em>
              
              <em><a id="cid_583" level="3" href="/category-583.aspx">有机杂粮</a></em>
              
              <em><a id="cid_523" level="3" href="/category-523.aspx">米粉/米糊/汤粥</a></em>
              
              <em><a id="cid_342" level="3" href="/category-342.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_242" level="2" href="/category-242.aspx">干货速食</a></dt>
          <dd class="">
              
              <em><a id="cid_319" level="3" href="/category-319.aspx">银耳/白木耳</a></em>
              
              <em><a id="cid_320" level="3" href="/category-320.aspx">*莲子</a></em>
              
              <em><a id="cid_479" level="3" href="/category-479.aspx">鱼干</a></em>
              
              <em><a id="cid_321" level="3" href="/category-321.aspx">黑木耳</a></em>
              
              <em><a id="cid_322" level="3" href="/category-322.aspx">香菇/食用菌</a></em>
              
              <em><a id="cid_323" level="3" href="/category-323.aspx">灰树花</a></em>
              
              <em><a id="cid_324" level="3" href="/category-324.aspx">竹荪</a></em>
              
              <em><a id="cid_325" level="3" href="/category-325.aspx">猴头菇</a></em>
              
              <em><a id="cid_326" level="3" href="/category-326.aspx">*松茸</a></em>
              
              <em><a id="cid_327" level="3" href="/category-327.aspx">桂圆干/龙眼</a></em>
              
              <em><a id="cid_328" level="3" href="/category-328.aspx">百合</a></em>
              
              <em><a id="cid_329" level="3" href="/category-329.aspx">荔枝干</a></em>
              
              <em><a id="cid_453" level="3" href="/category-453.aspx">笋干</a></em>
              
              <em><a id="cid_454" level="3" href="/category-454.aspx">石耳</a></em>
              
              <em><a id="cid_460" level="3" href="/category-460.aspx">腐竹</a></em>
              
              <em><a id="cid_593" level="3" href="/category-593.aspx">速食面/粉</a></em>
              
              <em><a id="cid_594" level="3" href="/category-594.aspx">速食米粉</a></em>
              
              <em><a id="cid_595" level="3" href="/category-595.aspx">速食米线</a></em>
              
              <em><a id="cid_596" level="3" href="/category-596.aspx">速食罐头</a></em>
              
              <em><a id="cid_597" level="3" href="/category-597.aspx">速食盒饭</a></em>
              
              <em><a id="cid_330" level="3" href="/category-330.aspx">其他干货</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_183" level="2" href="/category-183.aspx">厨房调料</a></dt>
          <dd class="">
              
              <em><a id="cid_363" level="3" href="/category-363.aspx">醋</a></em>
              
              <em><a id="cid_364" level="3" href="/category-364.aspx">酱油</a></em>
              
              <em><a id="cid_365" level="3" href="/category-365.aspx">食糖</a></em>
              
              <em><a id="cid_366" level="3" href="/category-366.aspx">鸡精/味精</a></em>
              
              <em><a id="cid_367" level="3" href="/category-367.aspx">料酒</a></em>
              
              <em><a id="cid_368" level="3" href="/category-368.aspx">花椒/八角/桂皮</a></em>
              
              <em><a id="cid_590" level="3" href="/category-590.aspx">调味酱</a></em>
              
              <em><a id="cid_369" level="3" href="/category-369.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
      </div>
      
      <div class="categ"><a id="cid_35" href="/category-35.aspx" level="1">茶叶冲饮</a><span>-</span></div>
      <div class="categb  clear">
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_184" level="2" href="/category-184.aspx">国产茶</a></dt>
          <dd class="">
              
              <em><a id="cid_381" level="3" href="/category-381.aspx">*红茶</a></em>
              
              <em><a id="cid_380" level="3" href="/category-380.aspx">*绿茶</a></em>
              
              <em><a id="cid_378" level="3" href="/category-378.aspx">白茶</a></em>
              
              <em><a id="cid_377" level="3" href="/category-377.aspx">黑茶</a></em>
              
              <em><a id="cid_376" level="3" href="/category-376.aspx">青茶</a></em>
              
              <em><a id="cid_379" level="3" href="/category-379.aspx">黄茶</a></em>
              
              <em><a id="cid_599" level="3" href="/category-599.aspx">乌龙茶</a></em>
              
              <em><a id="cid_382" level="3" href="/category-382.aspx">花果茶</a></em>
              
              <em><a id="cid_383" level="3" href="/category-383.aspx">*药用保健茶</a></em>
              
              <em><a id="cid_384" level="3" href="/category-384.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_598" level="2" href="/category-598.aspx">进口茶</a></dt>
          <dd class="">
              
              <em><a id="cid_601" level="3" href="/category-601.aspx">进口红茶</a></em>
              
              <em><a id="cid_602" level="3" href="/category-602.aspx">进口绿茶</a></em>
              
              <em><a id="cid_603" level="3" href="/category-603.aspx">进口乌龙茶</a></em>
              
              <em><a id="cid_604" level="3" href="/category-604.aspx">进口花茶/果茶</a></em>
              
              <em><a id="cid_605" level="3" href="/category-605.aspx">*斯里兰卡茶</a></em>
              
              <em><a id="cid_600" level="3" href="/category-600.aspx">其他进口茶</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
          
        <dl class="none">
          <dt class="dtbg"><a id="cid_187" level="2" href="/category-187.aspx">冲调饮品</a></dt>
          <dd class="">
              
              <em><a id="cid_607" level="3" href="/category-607.aspx">蜂蜜</a></em>
              
              <em><a id="cid_484" level="3" href="/category-484.aspx">红糖</a></em>
              
              <em><a id="cid_387" level="3" href="/category-387.aspx">麦片谷物</a></em>
              
              <em><a id="cid_388" level="3" href="/category-388.aspx">芝麻糊</a></em>
              
              <em><a id="cid_389" level="3" href="/category-389.aspx">核桃粉</a></em>
              
              <em><a id="cid_390" level="3" href="/category-390.aspx">藕粉</a></em>
              
              <em><a id="cid_391" level="3" href="/category-391.aspx">咖啡</a></em>
              
              <em><a id="cid_392" level="3" href="/category-392.aspx">咖啡伴侣/辅料</a></em>
              
              <em><a id="cid_393" level="3" href="/category-393.aspx">可可/巧克力粉</a></em>
              
              <em><a id="cid_394" level="3" href="/category-394.aspx">奶茶</a></em>
              
              <em><a id="cid_395" level="3" href="/category-395.aspx">速溶茶</a></em>
              
              <em><a id="cid_396" level="3" href="/category-396.aspx">柚子茶</a></em>
              
              <em><a id="cid_606" level="3" href="/category-606.aspx">菊花茶</a></em>
              
              <em><a id="cid_397" level="3" href="/category-397.aspx">豆奶粉</a></em>
              
              <em><a id="cid_398" level="3" href="/category-398.aspx">果味冲饮</a></em>
              
              <em><a id="cid_385" level="3" href="/category-385.aspx">姜汤</a></em>
              
              <em><a id="cid_386" level="3" href="/category-386.aspx">其他</a></em>
              
            <div class="clear0"></div>
          </dd>
        </dl>
       </div>
      
      <script type="text/javascript">
          $(function () {
              var cid = "0";
              var level = $("#cid_0").attr("level");
              var obj = $("#cid_0");
              if (cid != "0") {
                  $("#cid_" + cid).addClass("hover");
                  switch (level) {
                      case "1":
                          $(".productlf .category .categ").find("span").html("+");obj.next("span").html("-");$(".productlf .category .categb").addClass("hidden");obj.parent().next(".categb").removeClass("hidden");
                          break;
                      case "2":
                          $(".productlf .category dt").removeClass("dtbg"); obj.parent().addClass("dtbg"); $(".productlf .category dd").addClass("hidden"); obj.parent().next("dd").removeClass("hidden"); $(".productlf .category .categb").addClass("hidden"); obj.parent().parent().parent().removeClass("hidden");$(".productlf .category .categ").find("span").html("+");obj.parent().parent().parent().prev().find("span").html("-");
                          break;
                      case "3":
                          $(".productlf .category dd").addClass("hidden");obj.parent().parent("dd").removeClass("hidden");$(".productlf .category dt").removeClass("dtbg");obj.parent().parent().prev("dt").addClass("dtbg");$(".productlf .category .categb").addClass("hidden");obj.parent().parent().parent().parent().removeClass("hidden");
                          break;
                  }
              }
          })
      </script>
    </div>
</div>  

  <div class="prolsrt right">
    <div class="classify clear">
        <div class="ch_cons clear">
</div>
    </div>
    <div class="list_sort margin10 clear">
      <div class="list_sortA">
        <ul>
          <li class='on'><a href="javascript::void(0);">全部</a></li>

        </ul>
        
      </div>
      <div class="list_sortB clear">
        <ul class="ullf">
          <li class='<?php if(!isset($get['order'])): ?>on<?php endif; ?>'><a href="?wd=<?php echo ($zz); ?>" class='<?php if(!isset($get['order'])): ?>desc<?php endif; ?>'>默认</a></li>
          <li class='<?php if(isset($get['order']) && $get['order'] == 'sale_num'): ?>on<?php endif; ?>'><a href="?wd=<?php echo ($zz); ?>&order=sale_num&sort=<?php if(isset($get['sort']) && $get['sort']=='desc' && $get['order']=='sale_num'): ?>asc"  class='desc'<?php else: ?>desc"   class='asc'<?php endif; ?>>销量</a></li>
          <li class='<?php if(isset($get['order']) && $get['order'] == 'price'): ?>on<?php endif; ?>'><a href="?wd=<?php echo ($zz); ?>&order=price&sort=<?php if(isset($get['sort']) && $get['sort']=='desc' && $get['order']=='price'): ?>asc"   class='desc'<?php else: ?>desc"  class='asc'<?php endif; ?>>价格</a></li>
          
          <!-- <li class=''><a href="?wd=<?php echo ($zz); ?>" class=''>最新</a></li> -->
        </ul>
        <div class="pig_pic">大图</div>
       
       
        <script type="text/javascript">
            $(function () {
                var url = window.location.href; 
                url = url.replace(/&page=(\w+)/g, '');		//获取当前url  
                $(".choose").hover(function () { $(".choose dl").show(); }, function () { $(".choose dl").hide(); })
                $("input[name='free']").click(function () {
                    var freeurl = '?id=0?type=0?order=?wd=<?php echo ($zz); ?>';
                    if ($(this).prop("checked") == true) {
                        window.location.href = freeurl + '&free=1';
                    } else {
                        window.location.href = freeurl + '&free=0';
                    }
                })
            })
        </script>
      </div>
    </div>
    <div class="product clear margin10">
    <?php if(count($wds) > 0): ?><ul>
        <?php if(is_array($wds)): foreach($wds as $key=>$wd1): ?><li>
          <div class="pic"><a href="/Home/item?id=<?php echo ($wd1["p_id"]); ?>" target="_blank"><img src="<?php echo ($wd1["thumb"]); ?>" alt="<?php echo ($wd1["p_name"]); ?>" width="203" height="203" /></a></div>
          <div class="infor">
            <span><a href="#" title="<?php echo ($wd1["p_name"]); ?>" target="_blank"><?php echo ($wd1["p_name"]); ?></a></span>
            <p>
                <em>¥<?php echo ($wd1["price"]); ?></em> / 件</p>
          </div>
          <div class="infor1">
            <p class="inforc"><!--评价：<b></b>人气：0--></p>
            <div class="buts"><a storage="<?php echo ($wd1["stock"]); ?>"  onclick="cart_quick(this,<?php echo ($wd1["p_id"]); ?>)" class="a1">加入购物车</a></div>
          </div>
        </li><?php endforeach; endif; ?>
        <?php else: ?>
        <center><span style="color:red;font-size:16px;">没有查到记录</span></center><?php endif; ?>
        
        <div class="clear0"></div>
      </ul>
    </div>
    <center></center><div class="Pagination" >
    <?php echo ($page); ?>
    </div>
<style type="text/css">
.Pagination a:hover,.current{background-color: #f54281;border: 1px solid #f54281;color: #ffffff; }
.Pagination{float: right;height: auto;_height: 45px; line-height: 20px;margin-right: 15px;_margin-right: 5px; color:#565656;margin-top: 10px;_margin-top: 20px; clear:both;}
.Pagination a,.Pagination span{ font-size: 14px;text-decoration: none;display: block;float: left;color: #565656;border: 1px solid #ccc;height: 34px;line-height: 34px;margin: 0 2px;width: 34px;text-align: center;}  
 </style> 
</div>

  <div class="clear0"></div>
</div>
<!--切换热门结束-->

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

<!--底部结束-->
</body>
</html>