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
            <?php if($_SESSION['user_id']): ?><li>欢迎你，<a href="/"><?php echo ($_SESSION['username']); ?></a></li>
            <li><a href="/Home/Index/logout">退出</a></li>
            <?php else: ?><li><a href="<?php echo U('index/login');?>">登录</a></li><?php endif; ?>
			
            <li><a href="/">庐山特产网首页</a></li>
            <li>
                <a class="drop" href="/user/">我的特产</a>
                <ul style="display:none; ">
                    <li><a href="/user/order.aspx">我的订单</a></li>
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
        <div class="logo left"><h1><a href="/"><img src="/Public/images/Home/logo.png" width="217" height="41" title="" alt="" /></a></h1></div>
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
                            <p class="tit"><strong><i class="i<?php echo ($key+1); ?>" ></i><a href="<?php echo U('Home/Category/index',array('cid'=>$category['id']));?>"><?php echo ($category['name']); ?></a></strong>
                            <font>
                            	<?php $cate_word = $cate_words[$key]; ?>
                                <?php if(is_array($cate_word)): foreach($cate_word as $key=>$word): ?><!--分类预览  -->
                                <a href="<?php echo U('Home/Category/index',array('cid'=>$word['cid']));?>" target="_blank"><?php echo ($word["name"]); ?></a><?php endforeach; endif; ?>
                             </font>
                            </p>
                            <p class="arrow" style=" top:1px;"></p>
                            <div style="background: url(Public/images/Home/pic<?php echo ($key+1); ?>.jpg) #fff right bottom no-repeat; ">
                                <span>
                                    <?php if(is_array($category['child'])): foreach($category['child'] as $key=>$cate): ?><dl><!-- 二级分类（水果，蔬菜等） -->
                                        <dt> <a href="<?php echo U('Home/Category/index',array('cid'=>$cate['id']));?>"><?php echo ($cate['name']); ?></a> </dt>
                                        <dd>
                                        <?php if(is_array($cate['child'])): foreach($cate['child'] as $key=>$cate_son): ?><em><a href="<?php echo U('Home/Category/index',array('cid'=>$cate_son['id']));?>"><?php echo ($cate_son['name']); ?></a></em><!--分类详情  --><?php endforeach; endif; ?> 
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
                <li><a href="/tongcheng.aspx">土购生鲜</a></li>
                <li><a href="/materchild.aspx">母婴专场</a></li>
                <li><a href="/WeChat.aspx">微信拼团</li>
                <li><a href="/tejia.aspx">特价商品</a></li>
                <li><a href="/procure.aspx">企业直采</a></li>
                <li><a class="shop" href="/tenants.aspx">商家入驻</a></li>
            </ul>
        </div>
    </div>
</div>
<!--头部结束-->
<link rel="stylesheet" type="text/css" href="/Public/css/Home/cart.css"/>
<script type="text/javascript" src="/Public/js/Home/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/js/Home/lhgdialog/lhgdialog.js"></script>
<script type="text/javascript" src="/Public/js/Home/order.js"></script>
<!--购物车开始-->
<div class="ShopCart">
  
  <div class="addlist">
    <h2><a href="/user/address.aspx" target="_blank">管理收货地址</a>确认收货地址</h2>
    <ul>
      <?php if(is_array($ep)): foreach($ep as $key=>$exp): ?><li class="selecton" id="24904">
        <strong style="display:inline-block">送至</strong>
        <input type="radio" name="chkAddress" value="<?php echo ($exp["id"]); ?>" <?php if(($exp["default"]) == "1"): ?>checked="checked"<?php endif; ?>/>
        									  
        <label><?php echo ($exp["province"]); ?> <?php echo ($exp["city"]); ?> <?php echo ($exp["region"]); echo ($exp["area"]); ?>(<?php echo ($exp["deliver"]); ?> 收) <em class="marrt"><?php echo ($exp["mobile"]); ?></em></label>
        <?php if(($exp["default"] == 1 )): ?><a class="marrt " href="javascript:" id="24904">默认收货地址</a><?php endif; ?>
      </li><?php endforeach; endif; ?>
    </ul>
    <div><a href="javascript:;" class="fb2">使用新地址</a></div>
    <div class="addad hidden">
        <script type="text/javascript">
            $(function () {
                $("#form1").initValidform();
                $("#selProvince").change(function () {
                    var province_id = $(this).val();
                    get_city(province_id);
                })
                $("#selCity").change(function () {
                    var city_id = $(this).val();
                    get_country(city_id);
                })
                $("#selCountry").change(function () {
                    var country_id = $(this).val();
                    get_town(country_id);
                })
                
                
                $("input[name='chkAddress']").click(function(){
					var address_id = $(this).val();
					$("input[name='address_id']").val(address_id);
                })
            })
		
            function get_city(province_id){
                $.ajax({
                    type: "post",
                    url: "/Home/Areas/getCity?province_id=" + province_id,
                    dataType: "json",
                    success: function (d) {
                        $("#selCity").empty();
                        $("#selCity").append(d.msg);
                    }
                })
            }
			
            function get_country(city_id) {
                $.ajax({
                    type: "post",
                    url: "/Home/Areas/getArea?city_id=" + city_id,
                    dataType: "json",
                    success: function (d) {
                        $("#selCountry").empty();
                        $("#selCountry").append(d.msg);
                    }
                })
            }

           /*  function get_town(country_id) {
                $.ajax({
                    type: "post",
                    url: "/Home/Areas/getArea?country_id=" + country_id,
                    dataType: "json",
                    success: function (d) {
                        $("#selTown").empty();
                        $("#selTown").append(d.msg);
                    }
                })
            } */

       </script>
      <form id="form1" name="form1" method="post" action="/Home/Order/get_addr">
      <input id="action" name="action" type="hidden" value="edit_address" />
      <table width="100%" border="0" cellpadding="0" cellspacing="1" id="addad_table">
       <tr>
         <th width="90"><span class="red">*</span>收货人姓名：</th>
         <td><input id="txtName" name="txtName" type="text" value="" maxlength="64" datatype="s2-50" sucmsg=" "/></td>
       </tr>
       <tr>
         <th><span class="red">*</span>所在地区：</th>
         <td>
             省：<select id="selProvince" name="selProvince">
                 <option value="">-请选择-</option>
                 <?php if(is_array($p)): foreach($p as $key=>$pro): ?><option value="<?php echo ($pro["provinceid"]); ?>"><?php echo ($pro["province"]); ?></option><?php endforeach; endif; ?>
               	 </select>
             市：<select id="selCity" name="selCity">
           	 <option value="">-请选择-</option>
            </select>
             区：<select id="selCountry" name="selCountry" datatype="*" sucmsg=" ">
             <option value="">-请选择-</option>
             </select>
            <!--  镇：<select id="selTown" name="selTown" datatype="*" sucmsg=" =">
             <option value="">-请选择-</option>
             </select> -->
         </td>
       </tr>
       <tr>
         <th><span class="red">*</span>街道地址：</th>
         <td><textarea id="txtAddress" name="txtAddress" cols="70" rows="2" datatype="*" sucmsg=" "></textarea></td>
       </tr>
       <tr>
         <th><span class="red">*</span>邮政编码：</th>
         <td><input id="txtPostCode" name="txtPostCode" type="text" value="" maxlength="10" datatype="p" sucmsg=" " ignore="ignore"/></td>
       </tr>
       <tr>
         <th>电话号码：</th>
         <td><input id="txtTel" name="txtTel" type="text" maxlength="30" value=""/></td>
       </tr>
       <tr>
         <th>手机号码：</th>
         <td><input id="txtMobile" name="txtMobile" type="text" value="" maxlength="15" datatype="m" ignore="ignore"/><span>电话和手机至少填写一项</span></td>
       </tr>
       <tr>
         <th>设置默认：</th>
         <td><input id="chkIsDefult" name="chkIsDefult" type="checkbox" value="1"/> 设置为默认地址</td>
       </tr>
       <tr><td colspan="2"><div class="submitd" style=" padding-left:130px"><input id="btnSubmit" type="submit" class="submit" hidefocus="true" value="确认提交"/></div></td></tr>
     </table>
      </form>
     </div>
  </div>
  <div class="orderssubmit clear">
     <form id="form2" name="form2" method="post" action="add_order">
    <input id="Hidden1" name="action" type="hidden" value="order_submit" />
    <input id="hid_address_id" name="address_id" type="hidden" value="<?php echo ((isset($b) && ($b !== ""))?($b):0); ?>" />
    <h2>确认订单信息</h2>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
      <thead>
        <tr>
          <th width="350">商品信息</th>
          <th width="150">单价(元)</th>
          <th width="120">数量</th>
          <th width="165">小计(元)</th>
        </tr>
      </thead>
      
      <tbody>
        <!-- <tr>
          <td colspan="5" class="trname">
            <div class="cartls1t">
              <em>店铺：<a href="/shop164/index.aspx" target="_blank">福建小李水果行</a> </em>
            </div>
          </td>
        </tr> -->
        <?php if(is_array($jiesuan)): foreach($jiesuan as $key=>$j): ?><tr>
          <td>
            <dl>
              <dt><a href="#" target="_blank"><img src="<?php echo ($j['thumb']); ?>" width="72" height="72" /></a></dt>
              <dd><a href="#" target="_blank"><?php echo ($j['p_name']); ?></a></dd>
            </dl>
          </td>
          <td><?php echo ($j['price']); ?></td>
          <td><?php echo ($j['num']); ?></td>
          <td><strong><?php echo ($j['price']*$j['num']); ?></strong></td>        
        </tr><?php endforeach; endif; ?>
         
          
        <tr class="trzfn">
          <td style="text-align:left;padding-top:20px;">补充说明：<textarea name="remark_164" style="width:350px; border: 1px solid #8AB6DD;"></textarea></td>
          <td style="text-align:right;" colspan="3">
            
            <p><em>配送方式：</em><select name="fee_164" onchange="change_fee(this,164)"><option value="0.00" DeliveryName="快递">快递 0.00元</option></select></p>
          </td>        
        </tr>
      </tbody>
      
      <tfoot>
         
         <tr  style="display:none">
          <td colspan="5">
              
              <div class="voucherstop1"><a href="javascript:" onclick="promotion_toggle(this)"><i class="i1"></i><!--i1为加号 i2为减号-->使用购物卡</a></div>
              <div class="clear" style="display:none">
                
                <div class="voucherstop">
                  <ul>
                    <li> <a class="active" id="two1" href="javascript:void(0)" onclick="setTab('two',1,1)">可用购物卡<b>(0)</b></a></li>
                  </ul>
                </div>
                <div id="con_two_1" class="voucherbot clear">
                  <p class="p1">以下是此订单可用的购物卡。</p>
                  <ul>
                    
                  </ul>
                  <input type="hidden" id="hid_card_id" value="0" name="hid_card_id" />
                  <input type="hidden" id="hid_card_money" value="0" name="hid_card_money"/>
                  <p class="p2">共使用了<font id="card_count">0</font>张购物卡　可以优惠<font id="card_total_money">0</font>元</p>
                </div>
              </div>
          </td>
        </tr>
        
        <tr>
          <td colspan="5" style="text-align:right; padding-bottom:40px;">
            
            <div class="paytotalsubmit">
              <p>商品总金额：<span>¥<?php echo ($tpt); ?></span><span id="total_product_price"></span><input type="hidden" name="total_product_price" value="<?php echo ($tpt); ?>"/></p>
              <!-- <p>优惠券优惠：<span>- ¥</span><span id="total_vocher_price">0.00</span></p>
              <p>购物卡优惠：<span>- ¥</span><span id="total_card_price">0.00</span></p> -->
              <p><font color="#005EA7">运  费：</font> <span>¥</span><span class="red" id="total_fee">0.00</span></p>
              <p>实付款： <span>¥</span><span id="total_price"><?php echo ($tpt); ?></span></p>
              
            </div>
            <div class="paybuts"><input id="Submit1" type="submit" value="提交订单" class="cartbut right" style="border:none" /><em><a href="/Home/order">返回购物车</a></em></div>
            <p>若价格变动，请在提交订单后联系卖家改价，并查看已买到的宝贝</p>
          </td>
        </tr>
      </tfoot>
    </table>
    </form>
  </div>
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
        <dt><img src="/Public/images/Home/logo.png" width="186" height="35" /><p>400-800-2923</p></dt>
        <dd>
            <h3><i class="i1"></i><a href="#">新手指南</a></h3>
            <p><a href="/help-162.aspx" target="_blank">免费注册</a></p><p><a href="/help-166.aspx" target="_blank">密码修改</a></p><p><a href="/help-161.aspx" target="_blank">订购流程</a></p><p><a href="/help-185.aspx" target="_blank">忘记密码</a></p>
        </dd>
        <dd>
            <h3><i class="i2"></i><a href="#">消费者保障</a></h3>
            <p><a href="/help-173.aspx" target="_blank">食品安全承诺</a></p><p><a href="/help-168.aspx" target="_blank">买家防骗</a></p>
        </dd>
        <dd>
            <h3><i class="i3"></i><a href="#">配送方式</a></h3>
            <p><a href="/help-171.aspx" target="_blank">卖家防骗</a></p><p><a href="/help-170.aspx" target="_blank">配送与运费</a></p><p><a href="/help-187.aspx" target="_blank">庐山特产网默认运费</a></p>
        </dd>
        <dd>
            <h3><i class="i4"></i><a href="#">售后服务</a></h3>
            <p><a href="/help-175.aspx" target="_blank">验货签收</a></p><p><a href="/help-174.aspx" target="_blank">退换须知</a></p><p><a href="/help-182.aspx" target="_blank">投诉中心</a></p>
        </dd>
       
    </dl>
</div>
<div class="foot wrap clear">
    <em class="left"><a href="http://union.xns315.com/lm/xns017341.html"><img src="/Public/images/Home/xns315.gif" /></a><a href="/about.aspx?wd=zhengshu"><img src="/Public/images/Home/baiqiang.gif" /></a>
 <a href="#"><img src="http://www.hao123.com/static/images//Public/logo.jpg" alt=“hao123上网导航” /></a>
    </em>
    <p><a href="/about.aspx?wd=about">关于我们</a><a href="/about.aspx?wd=contact">联系我们</a><a href="/about.aspx?wd=privacy">隐私声明</a><a href="/about.aspx?wd=service">服务条款</a><a href="/about.aspx?wd=job">招贤纳士</a><a href="/tenants.aspx">商家入驻</a></p>
    <p>增值电信业务经营许可证赣B2-2012052  赣ICP备12003095-5号  Copyright 2013-2016  版权所有 lushantc.com</p>
    		 	<div style="width:300px;margin:0 auto; padding:20px 0;">
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=36070202000100" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/Public/images/Home/beian.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">赣公网安备 36070202000100号</p></a>
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