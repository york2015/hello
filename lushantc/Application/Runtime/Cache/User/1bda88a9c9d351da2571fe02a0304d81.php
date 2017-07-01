<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>已买到的商品 - 土购网</title>
<link rel="stylesheet" type="text/css" href="/Public/css/Home/index.css"/>
<link rel="stylesheet" type="text/css" href="/Public/css/Home/public.css"/>
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
      <li><a href="/" class="red">土购网首页</a></li>
      <li><a class="drop" href="/user/">我的土购</a>
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
      <a class="drop" href="javascript:">帮助中心</a>
        <ul style="display:none; ">
          <li><a target="_blank" href="/help-161.aspx">订购流程</a></li>
          <li><a target="_blank" href="/help-162.aspx">免费注册</a></li>
          <li><a target="_blank" href="/help-166.aspx">密码修改</a></li>
        </ul>
      </li>
      <li><a>电话：400-800-2923</a></li>
      <li><a class="drop" href="javascript:">网站导航</a>
        <ul style="display:none; ">
          <li><a href="/news.aspx">土购网资讯</a></li>
          <li><a href="/company.aspx">企业黄页</a></li>
          <li><a href="/supply.aspx">供求信息</a></li>
          <li><a href="/health.aspx">土产与健康</a></li>
        </ul>
      </li>
     
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
      <ul>
        <li><a href="/user">首页</a></li>
        <li><a href="account.aspx">帐户设置</a></li>
        <li><a href="message.aspx">消息</a></li>
        <li><a href="/seller/">卖家中心</a></li>
      </ul>
    </div>
    <!--搜索开始-->
    <div class="search right">
      <div class="search1">
        <!--下拉框-->
        <div class="selectwrap" onclick="sodis();" onmouseout="hideso();">
          <input type="hidden" id="searchtype" name="searchtype" value="0"/>
          <div id="selectvalue">商品</div>
          <div id="options" style="display:none;overflow:hidden;" onmouseout="hideso();" onmouseover="showso();">
            <a href="javascript:void(0);" onclick="setselect('0','商品');">商品</a>
            <a href="javascript:void(0);" onclick="setselect('1','店铺');">店铺</a>
            <a href="javascript:void(0);" onclick="setselect('2','资讯');">资讯</a>
            <a href="javascript:void(0);" onclick="setselect('3','供求');">供求</a>
            <a href="javascript:void(0);" onclick="setselect('4','黄页');">黄页</a>
          </div>
        </div>
        <!--搜索框-->
        <div class="keyword"><input type="text" name="searchword" id="searchword" value='请输入搜索信息' onBlur="if(this.value=='') this.value='请输入搜索信息';" onFocus="if(this.value=='请输入搜索信息') this.value='';" onkeydown="if(event.keyCode==13){search();return false};" /></div>
        <!--搜索按钮-->
        <div class="search_btn"><button type="button" onclick="search()"></button></div>
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
                else if (url.indexOf("supply") >= 0) {
                    setselect(3, "供求");
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
                searchtype = document.getElementById("searchtype").value;
                word = document.getElementById("searchword").value;
                word = (word == "请输入搜索信息") ? "" : word;
                switch (searchtype) {
                    case "0":
                        parent.location.href = "/category.aspx?wd=" + encodeURI(word);
                        break;
                    case "1":
                        parent.location.href = "/shop.aspx?wd=" + encodeURI(word);
                        break;
                    case "2":
                        parent.location.href = "/news.aspx?wd=" + encodeURI(word);
                        break;
                    case "3":
                        parent.location.href = "/supply.aspx?wd=" + encodeURI(word);
                        break;
                    case "4":
                        parent.location.href = "/company.aspx?wd=" + encodeURI(word);
                        break;
                    default:
                        parent.location.href = "/category.aspx?wd=" + encodeURI(word);
                        break;
                }
            }
      </script>
      </div> 
    </div>
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
    
    <li><a href="/user">评价管理</a></li>
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
    <div class="list_tab">
      <ul>
        <li><a href="/user">已买到的商品</a></li>
        <li class="lions">订单详情</li>
      </ul>
    </div>
    <div class="order_flow" style="width:696px;">       
        <?php if($od['status']==6): ?><div style="text-align:center;line-height:50px; font-size:20px; color:Red;">该订单已关闭交易</div><?php endif; ?>
      <div class="clear0"></div>
    </div>
    <div class="orderdt clear">
      <h2>订单信息</h2>
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <th>订单状态：</th>
              <?php switch($od['status']): case "1": ?><td>待付款</td><?php break;?>
    			<?php case "2": ?><td>付款失败</td><?php break;?>
    			<?php case "3": ?><td>待发货</td><?php break;?>
    			<?php case "4": ?><td>待收货</td><?php break;?>
    			<?php case "5": ?><td>已收货</td><?php break;?>
    			<?php case "6": ?><td>订单取消</td><?php break;?>
    			<?php default: ?>默认情况<?php endswitch;?>
          <th>付款方式：</th>
          <td></td>
        </tr>
        <tr>
          <th>订单编号：</th>
          <td><?php echo ($od['sn']); ?></td>
          <th>交易流水号：</th>
          <td></td>
        </tr>
        <tr>
          <th>应支付金额：</th>
          <td>¥<?php echo ($od['total']); ?></td>
          <th>创建时间：</th>
          <td><?php echo date('Y-m-d H:i:s',$od['create_time']);?></td>
        </tr>
        <tr>
          
          <th>付款时间：</th>
          <td></td>
        </tr>
        <tr>
          <th>物流信息：</th>
          <td colspan="3">还没有任何物流信息</td>
        </tr>
      </table>
    </div>
    <div class="orderdt1 clear">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="2" width="50%"><span>商品信息</span></th>
          <th>单价(元)</th>
          <th>数量</th>
          <th>商品总价(元)</th>
        </tr>
        <?php if(is_array($odp)): foreach($odp as $key=>$ods): ?><tr>
          <td width="60"><a href="/product-9663.aspx" target="_blank"><img src="<?php echo ($ods["thumb"]); ?>" width="60" height="60" /></a></td>
          <td style="text-align:left;"><a href="/product-9663.aspx" target="_blank"><?php echo ($ods["p_name"]); ?></a></td>
            
          <td><b><?php echo ($ods["price"]); ?></b></td>
          <td><?php echo ($ods["num"]); ?></td>
          <td><?php echo ($ods['price']*$ods["num"]); ?></td>
            
        </tr><?php endforeach; endif; ?>
        </table>
      <div class="total">
        <ul>
          <li><span>总商品金额：</span><?php echo ($od["total"]); ?></li>
          
        </ul>
      </div>
    </div>
    <div class="orderdt clear">
      <h2>收货信息</h2>
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <th>顾客姓名：</th>
          <td>卢志明</td>
        </tr>
        <tr>
          <th>收货地址：</th>
          <td><?php echo ($sheng["province"]); echo ($shi["city"]); echo ($qu["area"]); echo ($uad["area"]); echo ($uad["postcode"]); ?></td>
        </tr>
        <tr>
          <th>联系电话：</th>
          <td><?php echo ($uad["mobile"]); ?> <?php echo ($uad["tel"]); ?></td>
        </tr>
        <tr>
          <th>买家留言：</th>
          <td></td>
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
                <p><a href="/help-171.aspx" target="_blank">卖家防骗</a></p><p><a href="/help-170.aspx" target="_blank">配送与运费</a></p><p><a href="/help-187.aspx" target="_blank">土购网默认运费</a></p>
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