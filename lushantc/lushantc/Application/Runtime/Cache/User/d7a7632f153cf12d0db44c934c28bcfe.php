<?php if (!defined('THINK_PATH')) exit();?>
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
<form id="form1" name="form1">
<div class="center clear">
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
  <div class="cenrt right">
    <div class="OrderStatus clear">
      <ul>
        <li <?php if(($statusid) == "0"): ?>class="lion"<?php endif; ?>><a href="/user">所有订单<span></span></a></li>
        <li <?php if(($statusid) == "1"): ?>class="lion"<?php endif; ?>><a href="/user?statusid=1">待付款<em><?php echo ($count["pay"]); ?></em><span></span></a></li>
        <li <?php if(($statusid) == "3"): ?>class="lion"<?php endif; ?>><a href="/user?statusid=3">待发货<em><?php echo ($count["fahuo"]); ?></em><span></span></a></li>
        <li <?php if(($statusid) == "4"): ?>class="lion"<?php endif; ?>><a href="/user?statusid=4">待收货<em><?php echo ($count["receive"]); ?></em><span></span></a></li>
        <!-- <li ><a href="order.aspx?evatatus=0">待评价<em>0</em><span></span></a></li> -->
        <!-- <li class="last"><a href="order_recycle.aspx">订单回收站</a></li> -->
      </ul>
    </div>
    
    <table width="100%" class="orderlist" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="colname1">
          <th class="leftb">商品</th>
          <th width="90">单价(元)</th>
          <th width="45">数量</th>
          <th width="108">商品操作</th>
          <th width="108">实付款(元)</th>
          <th width="88">
            <select onchange="javascript:location.href=this.options[this.selectedIndex].value">
              <option value="/user">订单状态</option>
              <option value="/user?statusid=1" >待买家付款</option>
              <option value="/user?statusid=3" >待卖家发货</option>
              <option value="/user?statusid=4" >待确认收货</option>
              <!-- <option value="order.aspx?evatatus=0" >待评价</option> -->
            </select>
          </th>
          <th class="rightb" width="108">交易操作</th>
        </tr>
      </thead>
      
      <tbody>
        <tr class="sep_row"><td colspan="7"></td></tr>
        <tr>
          <td colspan="7">
            <div class="ordtop ordtopc">
              <label class="left"><input class="mart inpt" type="checkbox" onclick="checkAll(this)"/>全选</label>
            <!--   <p><a href="javascript:" onclick="ajax_submit('order','order_Merge_batch','form1')">订单合并付款</a></p> -->
              <p><a href="javascript:" onclick="ajax_submit('order','order_confirm_batch','form1')">批量确认收货</a></p>
              <div class="ordtop_page">
                <span class="span1">1/1</span><a class="prev disabled">上一页</a><a class="next disabled">下一页</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
      
      <?php if(is_array($dingdan)): foreach($dingdan as $key=>$dd): ?><tbody>
        <tr class="sep_row"><td colspan="7"></td></tr><!-- 遍历订单 -->
        <tr class="first">
          <td colspan="7">
            <em></em>
            <span><input class="inpt checkall" name="chkNumber[]" value="<?php echo ($dd["sn"]); ?>" type="checkbox"  /></span>
            <span class="dealtime"><?php echo date('Y-m-d H:i:s',$dd['create_time']);?></span>
            <span>订单号：<?php echo ($dd["sn"]); ?></span>
            
          </td>
        </tr>
        
        <tr class="order_pd" >
          <td class="border0" colspan="4">
            <?php if(is_array($chanpin[$dd['sn']])): foreach($chanpin[$dd['sn']] as $key=>$cp): ?><!-- 遍历每个订单中的产品 -->
            
            <table width="100%" class="order_pd_tbl" cellpadding="0" cellspacing="0">

                 <tr>
                <td class="goods">
                  <a href="/product-9750.aspx" target="_blank" class="pic"><img src="<?php echo ($cp["thumb"]); ?>"></a>
                  <div class="goods_desc"><a href="/product-9750.aspx" target="_blank"><?php echo ($cp["p_name"]); ?>-</a></div>
                </td>
                <td width="90" class="price"><?php echo ($cp["price"]); ?></td>
                <td width="45"><?php echo ($cp["num"]); ?></td>
                <td width="108"></td>
              </tr>
            
            </table><?php endforeach; endif; ?>
            
          </td>
          <td class="border1 real_price"><?php echo ($dd["total"]); ?></td>
          <td class="border1">
          <?php if($dd['status'] == 1): ?><a href="javascript::void(0)" target="_blank">待付款</a><?php endif; ?>
          <?php if($dd['status'] == 3): ?><a href="javascript::void(0)" target="_blank">待发货</a><?php endif; ?>
          <?php if($dd['status'] == 4): ?><a href="javascript::void(0)" target="_blank">待收货</a><?php endif; ?>
          <?php if($dd['status'] == 2): ?><a href="javascript::void(0)" target="_blank">付款失败</a><?php endif; ?>
           <?php if($dd['status'] == 6): ?><a href="javascript::void(0)" target="_blank">订单取消</a><?php endif; ?>
           <?php if($dd['status'] == 5): ?><a href="javascript::void(0)" target="_blank">已收货</a><?php endif; ?>
          <a href="/user/index/order_detail?number=<?php echo ($dd["sn"]); ?>" target="_blank">订单详情</a></td>
          <td class="border2 borderbut">
          <?php if($dd['status'] < 2): ?><a class="a1" href="/order_shop_payment.aspx?id=<?php echo ($dd["sn"]); ?>" target="_blank">立即付款</a><a href="javascript:;" onclick="ajax_post('order','order_cancel','<?php echo ($dd["sn"]); ?>')">取消订单</a>
          <?php else: ?>
          		<span style="color:blue">订单进行中</span><?php endif; ?>
          
          </td>
        </tr>
      </tbody><?php endforeach; endif; ?>
      
    </table>
    
    <div class="ordtop ordtopc" style=" height:30px;">
      <label class="left"><input class="mart inpt" type="checkbox" onclick="checkAll(this)"/>全选</label>
      <p><a href="javascript:" onclick="ajax_submit('order','order_confirm_batch','form1')">批量确认收货</a></p><span>共<?php echo ($count["zong"]); ?>记录</span> 
      <div class="page right">
	       
	      <?php echo ($page); ?>
      </div>
    </div>
    
  </div>
  <div class="clear0"></div>
</div>
</form>
<!--主体结束-->

<!--底部开始-->
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