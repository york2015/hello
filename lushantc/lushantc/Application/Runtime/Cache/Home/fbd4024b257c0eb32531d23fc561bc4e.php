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
<title>水溪农庄腊猪舌 300g_*腌/腊肉_蛋禽肉类_肉类海鲜_庐山特产网-专业的农产品、土特产网上购物商城</title>
 <link rel="stylesheet" type="text/css" href="/Public/css/Home/tipsy.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/Home/tcproduct.css"/>
<script type="text/javascript" src="/Public/js/Home/lhgdialog/lhgdialog.js?skin=idialog"></script>
<script type="text/javascript" src="/Public/js/Home/product.js"></script>
<script type="text/javascript" src="/Public/js/jquery/jquery.jqzoom.js"></script>
<script type="text/javascript" src="/Public/js/Home/tcpicture.js"></script>
<script type="text/javascript" src="/Public/js/jquery/jquery.pagination.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/js/lrscroll.js"></script>
<script type="text/javascript" src="/Public/js/jquery/jquery.tipsy.js"></script>
<script type="text/javascript">
    $(function () {
        $(".navl ul li").eq(2).find("a").addClass("on");
        $(".tip").tipsy({ fade: false, html: true, gravity: "s" });
        setInterval("scroll()",1000);
    })
    function scroll(){
        var title=document.title ;
        var firstch=title.charAt (0);
        var leftstar=title.substring (1,title.length );
        document.title =leftstar +firstch ;
    }
</script>
    <script type="text/javascript">
        $(function () {
            $(".banner").flexislider();
        })
</script>
<style type="text/css">
        .backshop {
            display: inline-block;
            padding: 0 110px 0 130px;
            background: url(images/fanhui.png) #d52629 90px center no-repeat;
            font-size: 18px;
            color: #fff;
            border-radius: 5px;
            height: 40px;
            line-height: 40px;
            margin: 15px 0 0 10px;
        }

            .backshop:hover {
                color: #fff;
            }
            

    </style>



<!--切换热门开始-->
<div class="wrap clear">
  <div class="location clear">您所在的位置：<a href="/">庐山特产网</a>
  <?php if(is_array($cate_postion)): foreach($cate_postion as $key=>$b): ?><em>&gt;</em><a href="/category-586.aspx"><?php echo ($b); ?></a><?php endforeach; endif; ?>
  </div>
  <div class="proShow_con clear">
    <div class="pictureDIV">
      <div id="preview" class="spec-preview">
      <span class="jqzoom"><img /></span>
      </div>
      <!--缩图开始-->
      <div class="spec-scroll">
        <div class="items">
          <ul>
            <?php if(is_array($larou)): foreach($larou as $key=>$LR): ?><li><img bimg="<?php echo ($LR["pic"]); ?>" src="<?php echo ($LR["pic"]); ?>" onmousemove="preview(this);"></li><?php endforeach; endif; ?>
            
          </ul>
        </div>
      </div>
      <!--缩图结束-->
    </div>
    <div class="drt">
      
      <h1><?php echo ($zhongliang["p_name"]); ?></h1>
      
      
      <p><em>市场价：</em><del>0.00</del> 元/件&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo ($zhongliang['weight']/1000); ?>kg/件)</p>
     
      <input type="hidden" name="hiLimitCount" id="hiLimitCount" value="0" />
      
      <p><em>零售价：</em>
     
      <b><?php echo ($zhongliang["sale_price"]); ?></b> 元/件&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo ($zhongliang['weight']/1000); ?>)kg/件</p>
       
      <p><em>评  价：</em><a href="javascript:" class="red"> 2</a> 条评价</p>
      <div class="freight clear">
       
        
        <div class="freight2">&nbsp;&nbsp;<span id="p_freight"></span></div>
         
          <script type="text/javascript">
              $(function(){
                
                  $(".freight1").hover(
                      
                function(){
                    
                    $("#select_address").css("border-bottom","none");
                    $(".dtregion").show();
                },
                function(){
                    if(($("#con_ten_2").is(":visible") || $("#con_ten_3").is(":visible")) && $("#current_fee_display").val()==1)
                    {
                        $("#select_address").css("border-bottom","none")
                        $(".dtregion").show();
                    }
                    else
                    {
                        $("#select_address").css("border-bottom","1px solid #cecbce")
                        $(".dtregion").hide();
                    }
                }
            );
                get_city($("#current_province_id").val(), $("#current_province_title").val());
                get_country($("#current_city_id").val(), $("#current_city_title").val());
                $("#ten3").empty();
                $("#ten3").append($("#current_country_title").val());
            })
            function set_country(country_id,title)
            {
                $("#current_fee_display").val(0);
                $("#ten3").empty();
                $("#ten3").append(title);
                $("#current_country_title").val(title);
                $("#current_country_id").val(country_id);
                var city_ida = $("#current_city_id").val();
                var province_name = $("#current_province_title").val();
                var city_name = $("#current_city_title").val();
                var country_name = $("#current_country_title").val();
                var count =$("#product_count").val();
                $(".dtregion").hide();
                $("#select_address").empty();
                $("#select_address").append(province_name+city_name+country_name);
                      
                change_count_area(6629,1,317,count,country_id,country_name);
            }
       </script>
        </div>
        <p><em>服  务：</em>由 庐山特产网 发货并提供售后服务。赣州同城当日下单，次日送达&nbsp;<a class="tip t_indent tip_help">16:00之前的订单次日送达，16:00之后的订单第三日送达</a></p>
        
        <div class="cart_col clear">
            
            <!-- <dl>
                <dd class="many">
                    <p class="protype">
                        <em class="left">
                            选择规格：
                        </em>
                        
                        <label id="selsku5382"><input class="hidden" type="radio" name="selsku" id="selsku" value="5382" onclick="selsku(814,48.00,814,5382)" />默认规格</label>
                        
                    </p>
                </dd>
                <div class="clear"></div>
            </dl> -->
            
          <dl>
            <dd class="many"><span>选择数量：</span>
              <a class="alf" href="javascript:">-</a>
              <input type="text" id="product_count" name="product_count" value="1" title="请输入购买量" onkeydown="return checkKeyForInt(event)"/>
              <a class="art" href="javascript:">﹢</a>
              <span>&nbsp;&nbsp;(库存)<b id=$zhongliang['id']><?php echo ($zhongliang["stock"]); ?></b>件)</span>
            </dd>
            <div class="clear"></div>
          </dl>
          
          <div class="buy_carts clear">
            <input id="hid_id" name="hid_id" type="hidden" value="<?php echo ($zhongliang['p_id']); ?>" />
            <input id="hid_storage" name="hid_storage" type="hidden" value="<?php echo ($zhongliang["stock"]); ?>" />
            <input type="button" class="newbutbuy left" value="立即购买" onclick="return buy(<?php echo ($zhongliang['p_id']); ?>)" />
            <input id="btn_buy" class="newbutcart left" type="button" value="加入购物车" onclick="return cart(<?php echo ($zhongliang['p_id']); ?>)"/>
            <!-- <input id="btn_collect"  class="newsbutcol left" type="image" src="/Public/images/Home/col.jpg" onclick="collect(<?php echo ($zhongliang['p_id']); ?>)" /> -->
            <div id="theLayer" style="position:absolute;width:408px;display:none; left:-0px;top:-50px; _left:-78px; border:1px solid #4DBF00; background:#F0FFE5; padding:10px;">
              <table border="0" width="100%" cellspacing="0" cellpadding="0" height="36" class="carttb">
                <tr>
                  <td width="42"><img src="/Public/images/Home/cartok.gif" /></td>
                  <td><b face="Arial" style=" font-size:14px;">宝贝已成功添加到购物车！</b></td>
                  <td width="45" style="cursor:pointer"><a href="javascript:" onclick="$('#theLayer').hide()"><img src="/Public/images/Home/gb.gif" /></a></td>
                </tr>
                <tr>
                  <td width="42"> </td>
                  <td>
                    <a class="buycartbt" href="/home/cart" title="去购物车结算">去购物车结算</a>
                    <!-- <a href="javascript:" class="ClosePage" onclick="CloseWebPage()">关闭宝贝页面</a> -->
                  </td>
                  <td width="45"></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="buy_carts wuhuo hidden clear">
            <a class="newbutnone left">该地区无货</a>
          </div>
          
        </div>
        
      
        <!-- <div class="bdsharebuttonbox"><a style="background:none;padding:0;">分享到：</a><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div> --><script>window._bd_share_config={"common":{"bdSnsKey":{
          },"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{
          }};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
    </div>
    <div class="featureContainer right">
      <h3>大家都在买</h3>
      <div class="feature">
      <a class="prev prev1" href="javascript:void();">Previous</a>
        <div class="block">
          <div id="botton-scroll1" class="botton-scroll">
            <ul class="featureul">
              
              <li><em>¥95.00/件</em><a href="#" title="纯天然 精选黄豆 纯手工制作 上等腐竹约5斤"><img src="/Upload/product/201412291508172127_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-2117.aspx"  title="纯天然 精选黄豆 纯手工制作 上等腐竹约5斤">纯天然 精选黄豆 纯手工制作 上等腐竹约5斤</a></p></li>
              
              <li><em>¥38.00/箱</em><a href="#" title="【庐山特产网】新鲜圣女果约3斤装小番茄  包邮"><img src="/Upload/product/201604120843541101_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-6749.aspx"  title="【庐山特产网】新鲜圣女果约3斤装小番茄  包邮">【庐山特产网】新鲜圣女果约3斤装小番茄  包邮</a></p></li>
              
              <li><em>¥9.90/件</em><a href="#" title="龙岩咸香花生500g   带壳花生 坚果炒货"><img src="/Upload/product/201610210908211832_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-7335.aspx"  title="龙岩咸香花生500g   带壳花生 坚果炒货">龙岩咸香花生500g   带壳花生 坚果炒货</a></p></li>
              
              <li><em>¥88.00/件</em><a href="#" title="碧根果500g+夏威夷果500g  超值 奶油味 休闲零食"><img src="/Upload/product/201610270911087680_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-7437.aspx"  title="碧根果500g+夏威夷果500g  超值 奶油味 休闲零食">碧根果500g+夏威夷果500g  超值 奶油味 休闲零食</a></p></li>
              
              <li><em>¥39.90/箱</em><a href="#" title="山东红富士苹果5kg  个头稍小 果味浓郁 甜脆回甘"><img src="/Upload/product/201703311426062993_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-7754.aspx"  title="山东红富士苹果5kg  个头稍小 果味浓郁 甜脆回甘">山东红富士苹果5kg  个头稍小 果味浓郁 甜脆回甘</a></p></li>
              
              <li><em>¥39.90/件</em><a href="#" title="农家小香薯约5斤  储谭乡红薯 新鲜红心地瓜番薯 个小均匀"><img src="/Upload/product/201609281659466222_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-7242.aspx"  title="农家小香薯约5斤  储谭乡红薯 新鲜红心地瓜番薯 个小均匀">农家小香薯约5斤  储谭乡红薯 新鲜红心地瓜番薯 个小均匀</a></p></li>
              
              <li><em>¥18.00/件</em><a href="#" title="江西特产阳埠腐竹  精选黄豆 纯手工制作上等腐竹200g"><img src="/Upload/product/201608310915103060_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-6221.aspx"  title="江西特产阳埠腐竹  精选黄豆 纯手工制作上等腐竹200g">江西特产阳埠腐竹  精选黄豆 纯手工制作上等腐竹200g</a></p></li>
              
              <li><em>¥2.60/盒</em><a href="#" title="新鲜秋葵 洋辣椒200g"><img src="/Upload/product/201608091054000010_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-7104.aspx"  title="新鲜秋葵 洋辣椒200g">新鲜秋葵 洋辣椒200g</a></p></li>
              
              <li><em>¥2.80/件</em><a href="#" title="【庐山特产网】 时令新鲜蔬菜白萝卜约5斤"><img src="/Upload/product/201602231041323594_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-6641.aspx"  title="【庐山特产网】 时令新鲜蔬菜白萝卜约5斤">【庐山特产网】 时令新鲜蔬菜白萝卜约5斤</a></p></li>
              
              <li><em>¥23.00/包</em><a href="#" title="食用百合干百合片150g*2  无硫百合干货特产"><img src="/Upload/product/201608201352228681_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-7123.aspx"  title="食用百合干百合片150g*2  无硫百合干货特产">食用百合干百合片150g*2  无硫百合干货特产</a></p></li>
              
              <li><em>¥15.00/盒</em><a href="#" title="【庐山特产网】四川安岳柠檬 4个装"><img src="/Upload/product/201602241038232418_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-6660.aspx"  title="【庐山特产网】四川安岳柠檬 4个装">【庐山特产网】四川安岳柠檬 4个装</a></p></li>
              
              <li><em>¥156.00/盒</em><a href="#" title="仰山茶油 纯天然有机山茶油（茶籽油）两瓶礼盒装"><img src="/Upload/product/201412021617336978_203_203.jpg" width="140" height="140"></a><p><a href="tcproduct-2051.aspx"  title="仰山茶油 纯天然有机山茶油（茶籽油）两瓶礼盒装">仰山茶油 纯天然有机山茶油（茶籽油）两瓶礼盒装</a></p></li>
              
            </ul>
          </div>
        </div>
        <a class="next next1" href="javascript:void();">Next</a>
      </div>
    </div>
    <div class="clear"></div>
  
    
  </div>

  <div class="productlf left">
    <div class="category margin10 clear"><div class="categ"><a href="/Shop317/product-259.aspx">新鲜水果</a><span>-</span></div><div class="categb clear"><dl class="none"><dt class="dtbg"><a href="/Shop317/product-397.aspx">国产水果</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-396.aspx">进口水果</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-398.aspx">水果组合</a></dt></dl></div><div class="categ"><a href="/Shop317/product-260.aspx">新鲜蔬菜</a><span>-</span></div><div class="categb clear"><dl class="none"><dt class="dtbg"><a href="/Shop317/product-434.aspx">蔬菜组合</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-399.aspx">叶菜类</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-400.aspx">茄果类</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-401.aspx">根茎类</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-402.aspx">菌菇类</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-443.aspx">豆制品</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-407.aspx">葱姜蒜椒</a></dt></dl></div><div class="categ"><a href="/Shop317/product-262.aspx">肉禽蛋品</a><span>-</span></div><div class="categb clear"></div><div class="categ"><a href="/Shop317/product-382.aspx">粮油干货</a><span>-</span></div><div class="categb clear"><dl class="none"><dt class="dtbg"><a href="/Shop317/product-405.aspx">米面杂粮</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-406.aspx">油</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-432.aspx">调味品</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-419.aspx">南北干货</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-408.aspx">特色腊味</a></dt></dl></div><div class="categ"><a href="/Shop317/product-431.aspx">休闲食品</a><span>-</span></div><div class="categb clear"><dl class="none"><dt class="dtbg"><a href="/Shop317/product-433.aspx">休闲零食</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-435.aspx">坚果炒货</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-437.aspx">肉脯豆干</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-436.aspx">饼干糕点</a></dt></dl><dl class=""><dt class="dtbg"><a href="/Shop317/product-444.aspx">牛奶/茶/冲饮</a></dt></dl></div></div>

    <div class="ranking clear margin10">
      <h3>商品销量排行</h3>
      <ul>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-6715.aspx" title="【庐山特产网】 树上熟海南芒果贵妃芒约5斤装" target="_blank"><img src="/Upload/product/201603231352203903_100_100.jpg" width="90" height="90" alt="【庐山特产网】 树上熟海南芒果贵妃芒约5斤装"/></a></div>
          <div class="picrt right"><a href="/tcproduct-6715.aspx" title="【庐山特产网】 树上熟海南芒果贵妃芒约5斤装" target="_blank">【庐山特产网】 树上熟海南芒果贵妃芒约5斤装</a><p>庐山特产价：<em>¥80.00</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>2263</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-6652.aspx" title="【庐山特产网】农家土鸡蛋 柴鸡蛋笨鸡蛋20枚" target="_blank"><img src="/Upload/product/201611120828292186_100_100.jpg" width="90" height="90" alt="【庐山特产网】农家土鸡蛋 柴鸡蛋笨鸡蛋20枚"/></a></div>
          <div class="picrt right"><a href="/tcproduct-6652.aspx" title="【庐山特产网】农家土鸡蛋 柴鸡蛋笨鸡蛋20枚" target="_blank">【庐山特产网】农家土鸡蛋 柴鸡蛋笨鸡蛋20枚</a><p>庐山特产价：<em>¥11.90</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>2261</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-2304.aspx" title="江西特产干货 上犹银鱼干250g 海鲜水产干货" target="_blank"><img src="/Upload/product/201612231007151705_100_100.jpg" width="90" height="90" alt="江西特产干货 上犹银鱼干250g 海鲜水产干货"/></a></div>
          <div class="picrt right"><a href="/tcproduct-2304.aspx" title="江西特产干货 上犹银鱼干250g 海鲜水产干货" target="_blank">江西特产干货 上犹银鱼干250g 海鲜水产干货</a><p>庐山特产价：<em>¥48.00</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>2062</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-2062.aspx" title="赣南脐橙血橙5斤装 江西特产红橙子新鲜水果 九省包邮" target="_blank"><img src="/Upload/product/201611261612585986_100_100.jpg" width="90" height="90" alt="赣南脐橙血橙5斤装 江西特产红橙子新鲜水果 九省包邮"/></a></div>
          <div class="picrt right"><a href="/tcproduct-2062.aspx" title="赣南脐橙血橙5斤装 江西特产红橙子新鲜水果 九省包邮" target="_blank">赣南脐橙血橙5斤装 江西特产红橙子新鲜水果 九省包邮</a><p>庐山特产价：<em>¥68.00</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>1376</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-2058.aspx" title="南康白心甜柚7个装  南康蜜柚柚子" target="_blank"><img src="/Upload/product/201412091801566303_100_100.jpg" width="90" height="90" alt="南康白心甜柚7个装  南康蜜柚柚子"/></a></div>
          <div class="picrt right"><a href="/tcproduct-2058.aspx" title="南康白心甜柚7个装  南康蜜柚柚子" target="_blank">南康白心甜柚7个装  南康蜜柚柚子</a><p>庐山特产价：<em>¥80.00</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>1369</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-2136.aspx" title="绍坤世家 黄元米果 250g袋装 江西赣南田村客家特产" target="_blank"><img src="/Upload/product/201512281032174079_100_100.jpg" width="90" height="90" alt="绍坤世家 黄元米果 250g袋装 江西赣南田村客家特产"/></a></div>
          <div class="picrt right"><a href="/tcproduct-2136.aspx" title="绍坤世家 黄元米果 250g袋装 江西赣南田村客家特产" target="_blank">绍坤世家 黄元米果 250g袋装 江西赣南田村客家特产</a><p>庐山特产价：<em>¥6.00</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>1075</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-6759.aspx" title="【庐山特产网】新鲜精品瘦肉土猪肉300g/份" target="_blank"><img src="/Upload/product/201604201029311840_100_100.jpg" width="90" height="90" alt="【庐山特产网】新鲜精品瘦肉土猪肉300g/份"/></a></div>
          <div class="picrt right"><a href="/tcproduct-6759.aspx" title="【庐山特产网】新鲜精品瘦肉土猪肉300g/份" target="_blank">【庐山特产网】新鲜精品瘦肉土猪肉300g/份</a><p>庐山特产价：<em>¥8.90</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>835</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-6771.aspx" title="【庐山特产网】山东红富士苹果15斤/箱  新鲜水果" target="_blank"><img src="/Upload/product/201611120924073592_100_100.jpg" width="90" height="90" alt="【庐山特产网】山东红富士苹果15斤/箱  新鲜水果"/></a></div>
          <div class="picrt right"><a href="/tcproduct-6771.aspx" title="【庐山特产网】山东红富士苹果15斤/箱  新鲜水果" target="_blank">【庐山特产网】山东红富士苹果15斤/箱  新鲜水果</a><p>庐山特产价：<em>¥45.00</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>800</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-6132.aspx" title="寻乌蜜桔橘子3斤  新鲜水果蜜橘" target="_blank"><img src="/Upload/product/201611041123062285_100_100.jpg" width="90" height="90" alt="寻乌蜜桔橘子3斤  新鲜水果蜜橘"/></a></div>
          <div class="picrt right"><a href="/tcproduct-6132.aspx" title="寻乌蜜桔橘子3斤  新鲜水果蜜橘" target="_blank">寻乌蜜桔橘子3斤  新鲜水果蜜橘</a><p>庐山特产价：<em>¥26.80</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>794</em></p></div>
          <div class="clear"></div>
        </li>
        
        <li>
          <div class="piclf left"><a href="/tcproduct-6653.aspx" title="【庐山特产网】农家散家土鸡青脚母鸡 约2斤" target="_blank"><img src="/Upload/product/201603041017385206_100_100.jpg" width="90" height="90" alt="【庐山特产网】农家散家土鸡青脚母鸡 约2斤"/></a></div>
          <div class="picrt right"><a href="/tcproduct-6653.aspx" title="【庐山特产网】农家散家土鸡青脚母鸡 约2斤" target="_blank">【庐山特产网】农家散家土鸡青脚母鸡 约2斤</a><p>庐山特产价：<em>¥98.00</em></p><p>销&nbsp; &nbsp;&nbsp;量：<em>745</em></p></div>
          <div class="clear"></div>
        </li>
        
      </ul>
    </div>
  </div>
  <div class="prodetail right">
      
      <div style="margin-top:20px;"></div>
    <div class="psbor03" id="lib_Tab1">
      <ul class="scrollUl">
        <li id="one1" class="active" onclick="setTab('one',1,3)">商品详情</li>
        <li id="one2" onclick="setTab('one',2,3);evaluation(0);">累计评价<span>(2)</span>条</li>
        <li id="one3" onclick="setTab('one',3,3)">售后保障</li>
      </ul>
      <!--第一层内容开始-->
        
      <div id="con_one_1">
        <div class="attribute">
          <p style="height:3px; font-size:0px;"></p>
          <h2>产品属性</h2>
          <ul>
       <?php if(is_array($shuxing)): foreach($shuxing as $key=>$sx): ?><li title="属性"><?php echo ($sx["attr_name"]); ?>：<?php echo ($sx["attr_value"]); ?></li><?php endforeach; endif; ?>
            
          </ul>
          <div class="clear"></div>
        </div>
        <div class="prodet clear">
  			<?php echo ($zhongliang['content']); ?>
           <a href="" target="_blank"><img src="/Upload/ggs/201702021324582984.png" alt=""/></a>
        </div>
      </div>
      <!--第二层内容开始-->
      <div id="con_one_2" style="display:none">
        <div class="attribute">
          <p style="height:3px; font-size:0px;"></p>
          <h3>商品与描述相符<b>5.0</b>分 <span>共0次打分</span></h3>
        </div>
        <div class="evalTop">
          <ul>
            <li onclick="evaluation(0)" class="lions">全部评价</li>
            <li onclick="evaluation(1)">好评（2）</li>
            <li onclick="evaluation(2)">中评（0）</li>
            <li onclick="evaluation(3)">差评（0）</li>
          </ul>
        </div>
        <script type="text/javascript">
            function evaluation(level)
            {
                switch(level)
                {
                    case 0:
                        $(".evalTop ul li").removeClass("lions");
                        $(".evalTop ul li").eq(0).addClass("lions");
                        AjaxPageList('.comentlist', '#comment_page', 10, 2, '/tools/submit_ajax.ashx?action=comment_list&id=6629&level=0',"comment_list");
                        break;
                    case 1:
                        $(".evalTop ul li").removeClass("lions");
                        $(".evalTop ul li").eq(1).addClass("lions");
                        AjaxPageList('.comentlist', '#comment_page', 10, 2, '/tools/submit_ajax.ashx?action=comment_list&id=6629&level=1',"comment_list");
                        break;
                    case 2:
                        $(".evalTop ul li").removeClass("lions");
                        $(".evalTop ul li").eq(2).addClass("lions");
                        AjaxPageList('.comentlist', '#comment_page', 10, 0, '/tools/submit_ajax.ashx?action=comment_list&id=6629&level=2',"comment_list");
                        break;
                    case 3:
                        $(".evalTop ul li").removeClass("lions");
                        $(".evalTop ul li").eq(3).addClass("lions");
                        AjaxPageList('.comentlist', '#comment_page', 10, 0, '/tools/submit_ajax.ashx?action=comment_list&id=6629&level=3',"comment_list");
                        break;
                }
            }
        </script>
        <div class="comentlist clear">
          <ul>
            <div class="clear"></div>
          </ul>
        </div>
        <div id="comment_page" class="page clear"></div>
      </div>
      <!--第三层内容开始-->
      <div id="con_one_3" style="display:none">
        <div class="attribute">
          <p style="height:3px; font-size:0px;"></p>
          
          <dl>
              <dt class="zhengpin">安全食品</dt>
              <dd>
                  1、本店铺为庐山特产网自营店铺，同时向您保证所售商品均为安全食品，由庐山特产网提供一切售后服务，如需开具机打发票或电子发票，请下单前与庐山特产网客服联系：400-8002923。<br />
                  2、本店铺商品与您亲临商场选购的商品享受相同的质量保证。庐山特产网还为您提供具有竞争力的商品价格和运费政策，请您放心购买！
              </dd>
              <dt class="lianbao">权利声明</dt>
              <dd>
                  1、本店铺涉及到的生鲜食品不接受7天无理由退货，请确认后下单。<br />
                  2、可能店铺会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致，但能保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
              </dd>
          </dl>
          
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="ProS_hot">
        <!-- Save for Web Slices (关联.jpg) -->

      <div class="ps_hotTOP"><em></em><span>推荐商品</span></div>
        <ul>
           
           <li>
             <div class="por_pic"><a href="/tcproduct-7675.aspx" target="_blank"  title="5斤脐橙坚果套餐 买脐橙加9.9元可选坚果一份"><img src="/Upload/product/201611171720513168.jpg" width="195" height="195" /></a></div>
             <span><a href="/tcproduct-7675.aspx" target="_blank" title="5斤脐橙坚果套餐 买脐橙加9.9元可选坚果一份">5斤脐橙坚果套餐 买脐橙加9.9元可选坚果一份</a></span>
            
               <em>庐山特产价：<b>￥35.00</b></em>
            
           </li>
          
           <li>
             <div class="por_pic"><a href="/tcproduct-7263.aspx" target="_blank"  title="新疆阿克苏糖心苹果2个  大果约550g  新鲜水果"><img src="/Upload/product/201610121540391117.jpg" width="195" height="195" /></a></div>
             <span><a href="/tcproduct-7263.aspx" target="_blank" title="新疆阿克苏糖心苹果2个  大果约550g  新鲜水果">新疆阿克苏糖心苹果2个  大果约550g  新鲜水果</a></span>
            
               <em>庐山特产价：<b>￥9.90</b></em>
            
           </li>
          
           <li>
             <div class="por_pic"><a href="/tcproduct-7238.aspx" target="_blank"  title="新嫩山东大冬枣2kg 新鲜 枣子"><img src="/Upload/product/201609271625281086.jpg" width="195" height="195" /></a></div>
             <span><a href="/tcproduct-7238.aspx" target="_blank" title="新嫩山东大冬枣2kg 新鲜 枣子">新嫩山东大冬枣2kg 新鲜 枣子</a></span>
            
               <em>庐山特产价：<b>￥12.90</b></em>
            
           </li>
          
           <li>
             <div class="por_pic"><a href="/tcproduct-7215.aspx" target="_blank"  title="赣南特产 南康红柚2个装 红心柚子"><img src="/Upload/product/201611111028123820.jpg" width="195" height="195" /></a></div>
             <span><a href="/tcproduct-7215.aspx" target="_blank" title="赣南特产 南康红柚2个装 红心柚子">赣南特产 南康红柚2个装 红心柚子</a></span>
            
               <em>庐山特产价：<b>￥39.00</b></em>
            
           </li>
          
         </ul>
      </div>
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