<?php if (!defined('THINK_PATH')) exit();?><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>已买到的商品 - 庐山特产网</title>
<link rel="stylesheet" type="text/css" href="/Public/css/user/index.css"/>
<link rel="stylesheet" type="text/css" href="/Public/css/User/public.css"/>
<script type="text/javascript" src="/Public/js/Home/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/js/Home/lhgdialog/lhgdialog.js"></script>
<script type="text/javascript" src="/Public/js/Home/public.js"></script>
<script type="text/javascript" src="/Public/js/Home/order.js"></script>
<script type="text/javascript">
    $(function () {
        $(".sider li").eq(1).find("a").addClass("aon")
        $(".nav li").eq(0).addClass("aons");
    })
</script>
</head>
<body>
<!--头部开始-->
<div class="top">
 <div class="top">
  <div class="top_pc wrap">
    <ul class="right">
      <li><a href="/" class="red">庐山特产网首页</a></li>
      <li><a class="drop" href="/user/">我的庐山特产</a>
        <ul style="display:none; ">
          <li><a href="/user">我的订单</a></li>
        </ul>
      </li>
      <li>
          <a href="/home/cart.aspx">购物车 <font id="cart_count"></font></a>
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
      <!-- <li><a href="/seller/">卖家中心</a></li> -->
      <li>
      
        <ul style="display:none; ">
          
          <li><a target="_blank" href="/help-162.aspx">免费注册</a></li>
          <li><a target="_blank" href="/help-166.aspx">密码修改</a></li>
        </ul>
      </li>
      <li><a>电话：400-800-2923</a></li>
    
     
    </ul>
    <em id="login_str">
        <!--{logoutStr}-->
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
    </em>
  </div>
</div>

<div class="wrap clear">
    <div class="logo left"><a href="#"><img src="/Public/images/Home/logo.png" height="40" title="" alt=""/></a></div>
    <div class="nav left">
     
    </div>
    <!--搜索开始-->
    
    <!--搜索结束-->
    <div class="clear0"></div>
  </div>
</div>

</div>
<!--头部结束-->
<!--主体开始-->


 <script type="text/javascript">
            $(function () {
                $("#ddlProvinceID").change(function () {
                    var province_id = $(this).val();
                    get_city(province_id);
                })
                $("#ddlCityID").change(function () {
                    var city_id = $(this).val();
                    get_country(city_id);
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
                        $("#ddlCityID").empty();
                        $("#ddlCityID").append(d.msg);
                    }
                })
            }
			
            function get_country(city_id) {
                $.ajax({
                    type: "post",
                    url: "/Home/Areas/getArea?city_id=" + city_id,
                    dataType: "json",
                    success: function (d) {
                        $("#ddlCountryID").empty();
                        $("#ddlCountryID").append(d.msg);
                    }
                })
            }

           

       </script>
<form id="form1" name="form1" action="/user/index/address_edit" method='post'>
<div class="center clear">
  <div class="sider left">
   <?php $check = time();$_SESSION['check_id'] = $check ; ?>
  <input type="hidden" name='check_id' value='<?php echo ($check); ?>'/> 
  <input type="hidden" name='id' value='<?php echo ($pid); ?>'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<div class="sider left">
  <h2><img src="/Public/images/Home/buy.jpg" width="40" height="40" align="absmiddle" />买家中心管理</h2>
<div class="sider1 clear">
  <ul>
    <li><a href="/home/cart" target="_blank">我的购物车</a></li>
    <li><a href="/user">已买到的商品</a></li>
    
    <li><a href="/user/index/address">我的地址</a></li>
    <!-- <li><a href="voucher.aspx">我的优惠券</a></li> -->
    <li>
        <dl>
        <dt><a class="a1" href="javascript:">退款维权</a></dt>
        <dd>
            <ul>
            <li><a href="refund.aspx">退款退货管理</a></li>
            <li><a href="javascript:" style="color:#ccc;">售后管理(敬请期待)</a></li>
            <li><a href="javascript:" style="color:#ccc;">投诉管理(敬请期待)</a></li>
            </ul>
        </dd>
        </dl>
    </li>
    <li>
        <dl>
        <dt><a class="a1" href="javascript:">顾客中心</a></dt>
        <dd>
            <!-- <ul>
            <li><a href="pay.aspx">提现账户</a></li>
            
            <li><a href="applyagent.aspx">代理申请</a></li>
            </ul> -->
        </dd>
        </dl>
    </li>
  </ul>
</div>
  </div>
  </div>
  <div class="cenrt right">
    <div class="list_tab">
      <ul>
        <li><a href="/user/index/address">我的收货地址（2）</a></li>
        <li class="lions">添加收货地址</li>
      </ul>
    </div>
    <div class="iplist clear">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <th><font class="red">*</font>所在地区：</th>
          <td>
              <select id="ddlProvinceID" name="ddlProvinceID" class="ipbgc selbg">
              <option value="-1">--请选择--</option>
              <?php if(is_array($sheng)): foreach($sheng as $key=>$po): ?><option <?php if(($po['provinceid']) == $xg["province"]): ?>selected='selected'<?php endif; ?> value="<?php echo ($po["provinceid"]); ?>" ><?php echo ($po["province"]); ?></option><?php endforeach; endif; ?>
              </select>
              
              <select id="ddlCityID" name="ddlCityID" class="ipbgc selbg">
              <option value="-1">--请选择--</option>
               <?php if(is_array($shi)): foreach($shi as $key=>$chengshi): ?><option <?php if(($chengshi['cityid']) == $xg["city"]): ?>selected='selected'<?php endif; ?> value="<?php echo ($chengshi["cityid"]); ?>" ><?php echo ($chengshi["city"]); ?></option><?php endforeach; endif; ?>
              </select>
              
              <select id="ddlCountryID" name="ddlCountryID" class="ipbgc selbg" datatype="*" sucmsg=" ">
              <option value="-1">--请选择--</option>
              <?php if(is_array($qu)): foreach($qu as $key=>$town): ?><option <?php if(($town['areaid']) == $xg["region"]): ?>selected='selected'<?php endif; ?> value="<?php echo ($town["areaid"]); ?>" ><?php echo ($town["area"]); ?></option><?php endforeach; endif; ?>
              </select>
              
              </select>
              
          </td>
        </tr>
        <tr>
          <th><font class="red">*</font>详细地址：</th>
          <td><textarea class="ipbgc ipbg textarea" id="txtShortAddress" name="txtShortAddress" datatype="*" sucmsg=" " placeholder="建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息"><?php echo ($xg["area"]); ?></textarea></td>
        </tr>
        <tr>
          <th><font class="red">*</font>邮政编码：</th>
          <td><input class="ipbgc ipbg" type="text" id="txtPostCode" name="txtPostCode" datatype="*" sucmsg=" " value="<?php echo ($xg["postcode"]); ?>" placeholder="如不清楚邮递区号，请填写000000"/></td>
        </tr>
        <tr>
          <th><font class="red">*</font>收货人姓名：</th>
          <td><input class="ipbgc ipbg" type="text" id="txtName" name="txtName" datatype="s2-25" sucmsg=" " value="<?php echo ($xg["deliver"]); ?>" placeholder="长度不超过25个字符"/></td>
        </tr>
        <tr>
          <th><font class="red">*</font>手机号码：</th>
          <td><input class="ipbgc ipbg" type="text" id="txtMoblie" name="txtMoblie" datatype="m" sucmsg=" " ignore="ignore" value="<?php echo ($xg["mobile"]); ?>" placeholder="电话号码、手机号码必须填一项"/></td>
        </tr>
        <tr>
          <th><font class="red">*</font>电话号码：</th>
          <td><input class="ipbgc ipbg" type="text" id="txtTel" name="txtTel" value="<?php echo ($xg["tel"]); ?>" datatype="*0-25" sucmsg=" " placeholder="区号+电话号码(如:0797-0000000)"/></td>
        </tr>
        <tr>
          <th></th>
          <td><input id="rblIsDefault" name="rblIsDefault" value="1" type="checkbox"  /><label for="rblIsDefault">设置为默认收货地址</label></td>
        </tr>
        <tr>
          <th></th>
          <td><input class="ipbutc ipbut1" type="submit" id="btnSubmit" value="保存" /></td>
        </tr>
      </table>
    </div>

  </div>
  <div class="clear0"></div>
</div>
</form>
<!--主体结束-->

<div class="service clear">
    <div class="servicec wrap">
        <dl class="fore1">
            <dt>新手指南</dt>
            <b></b>
            <dd>
                <p><a href="/help-162.aspx" target="_blank">免费注册</a></p><p><a href="/help-166.aspx" target="_blank">密码修改</a></p><p><a href="/help-161.aspx" target="_blank">订购流程</a></p><p><a href="/help-185.aspx" target="_blank">忘记密码</a></p>
            </dd>
        </dl>

        <dl class="fore2">
            <dt>消费者保障</dt>
            <b></b>
            <dd>
                <p><a href="/baozhang.aspx" target="_blank">7天无理由退货</a></p>
                <p><a href="/help-173.aspx" target="_blank">食品安全承诺</a></p><p><a href="/help-168.aspx" target="_blank">买家防骗</a></p>
            </dd>
        </dl>

        <dl class="fore3">
            <dt>配送方式</dt>
            <b></b>
            <dd>
                <p><a href="/help-171.aspx" target="_blank">卖家防骗</a></p><p><a href="/help-170.aspx" target="_blank">配送与运费</a></p><p><a href="/help-187.aspx" target="_blank">庐山特产网默认运费</a></p>
            </dd>
        </dl>

        <dl class="fore4">
            <dt>售后服务</dt>
            <b></b>
            <dd>
                <p><a href="/help-175.aspx" target="_blank">验货签收</a></p><p><a href="/help-174.aspx" target="_blank">退换须知</a></p><p><a href="/help-182.aspx" target="_blank">投诉中心</a></p>
            </dd>
        </dl>


        <div class="clear0"></div>
    </div>
</div>

<div class="foot clear">
  <p><a href="/about.aspx?wd=privacy" target="_blank">隐私声明</a><a>|</a><a href="/about.aspx?wd=service" target="_blank">服务条款</a><a>|</a><a href="/about.aspx?wd=ad" target="_blank">广告服务</a><a>|</a><a href="/about.aspx?wd=job" target="_blank">招贤纳士</a><a>|</a><a href="/about.aspx?wd=welcome" target="_blank">欢迎合作</a><a>|</a><a href="/about.aspx?wd=contact" target="_blank">联系我们</a><a>|</a><a href="/about.aspx?wd=license" target="_blank">经营许可证</a></p>
  <p>地址：赣州市。&nbsp;&nbsp;联系电话：0791-8335678 &nbsp;&nbsp; </p>
  <p>客服QQ:2281917160(<a href="http://wpa.qq.com/msgrd?v=3&uin=3064244831&site=qq&menu=yes" target="_blank" class="red">点击咨询</a>)&nbsp;&nbsp;
      3129361963(<a href="http://wpa.qq.com/msgrd?v=3&uin=2075263211&site=qq&menu=yes" target="_blank" class="red">点击咨询</a>)&nbsp;&nbsp;
  <img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="江西土特产交流群" title="江西土特产交流群" /></a></p>
  <p>增值电信业务经营许可证赣B2-2012052&nbsp;&nbsp;赣ICP备12003335-1号&nbsp;&nbsp;Copyright 2013-2015&nbsp;&nbsp;版权所有</p>
  <p><img src="/Public/images/Home/zfb.jpg"/><a href="http://union.xns315.com/lm/xns017341.html" rel="nofollow" target="_blank" alt="中国农业网站诚信联盟"><img src="/Public/images/Home/xns315.gif"/></a><a href="/about.aspx?wd=zhengshu" rel="nofollow" target="_blank"><img src="/Public/images/Home/baiqiang.gif" alt="中国农业百强网站"/></a></p>
    <div class="hidden">
	<script type="text/javascript">
	    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcef4671349fac47e4ecca66da503f015' type='text/javascript'%3E%3C/script%3E"));
    </script>
    </div>
</div>


<!--底部结束-->
</body>
</html>