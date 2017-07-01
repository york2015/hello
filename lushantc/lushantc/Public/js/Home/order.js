$(function () {
   /* $(".addlist li").click(function () {
        $(".addlist li input").prop("checked", false);
        $(".addlist li strong").hide();
        $(".addlist li").removeClass("selecton");
        $(".addlist li").find("a.marrt").hide()
        $(this).find("strong").show();
        $(this).addClass("selecton");
        $(this).find("input").prop("checked", true);
        $(this).find("a.marrt").show();
        $("#hid_address_id").val($(this).attr("id"));
        $("#pay_address").html($(this).find("label").html());
       
        $.ajax({
            type: "post",
            url: "/tools/submit_ajax.ashx?action=change_user_address&id=" + $(this).attr("id"),
            dataType: "html",
            error: function () { $.dialog.alert("服务器异常，设置失败！"); },
            success: function (data) {
                window.location.href = window.location.href;
            }
        });
    })*/

    $(".addlist li a.marrt").click(function () {
        var id = $(this).attr("id");
        $.ajax({
            type: "post",
            url: "/tools/submit_ajax.ashx?action=set_useraddress_default&id=" + id,
            dataType: "json",
            error: function () { $.dialog.alert("服务器异常，设置失败！"); },
            success: function (data) {
                $(".addlist li a.marrt").addClass("blue")
                $(".addlist li a.marrt").html("设置为默认收货地址")
                $(".addlist li a.marrt").removeClass("blue")
            }
        });
    })

    $(".fb2").click(function () {
        $.dialog({
            title: "编辑收货地址",
            content: $(".addad").html()
        })
    })
})

//平台订单更改运费
function change_fee(obj, shopid)
{
    var current_shop_fee = $(obj).val();//获取当前店铺所选择配送方式的运费
    var current_delivery_name = $(obj).find("option:selected").attr("DeliveryName")//获取当前店铺所选择配送方式
    var total_product_price = parseFloat($("#total_product_price").text());//获取订单产品总金额

    $(obj).next("span").html(current_shop_fee);
    $(obj).nextAll(".hid_shop_fee").val(current_shop_fee);
    var total_fee = 0;
    $(".hid_shop_fee").each(function(){
        total_fee += parseFloat($(this).val());
    });

    var total_voucher = 0;
    $(".hid_shop_voucher").each(function () {
        total_voucher += parseFloat($(this).val());
    });

    $("#total_fee").html(total_fee.toFixed(2));
    $("#hid_deliver_" + shopid).val(current_delivery_name);
    $("#total_price").html((total_fee + total_product_price - total_voucher).toFixed(2));

}

//平台订单更改店铺优惠
function change_voucher(obj, shopid) {
    var current_shop_voucher = $(obj).val();//获取当前店铺所选择的店铺优惠
    var current_voucher_id = $(obj).find(" option:selected").attr("voucher_id");//获取当前店铺所选择的店铺优惠ID
    var total_product_price = parseFloat($("#total_product_price").text());//获取订单 产品总金额

    var total_fee = 0;
    $(".hid_shop_fee").each(function () {
        total_fee += parseFloat($(this).val());
    });

    $(obj).next("span").find("font").html(current_shop_voucher);
    $(obj).nextAll(".hid_shop_voucher").val(current_shop_voucher);
    $(obj).nextAll(".hid_voucher_id").val(current_voucher_id);
    var total_voucher = 0;
    $(".hid_shop_voucher").each(function () {
        total_voucher += parseFloat($(this).val());
    });
    
    $("#total_fee").html(total_fee.toFixed(2)); 
    $("#total_vocher_price").html(total_voucher.toFixed(2)); 
    $("#total_price").html((total_fee + total_product_price - total_voucher).toFixed(2));

}

function promotion_toggle(obj) {
    if ($(obj).find("i").attr("class") == "i1") {
        $(obj).find("i").addClass("i2"); $(obj).find("i").removeClass("i1")
        $(obj).parent().next(".clear").show();
    }
    else {
        $(obj).find("i").removeClass("i2"); $(obj).find("i").addClass("i1")
        $(obj).parent().next(".clear").hide();
    }
}

//土购网平台使用购物卡
function use_card(id) {
    var total_fee = parseFloat($("#total_fee").text());//获取订单运费
    var total_product_price = parseFloat($("#total_product_price").text());//获取订单产品总金额

    var card_money = parseFloat($("#card_money_" + id).val());//获取购物卡余额
    var use_card_money = parseFloat((total_product_price * 0.2));//购物卡抵扣订单产品金额的20%
    use_card_money = (use_card_money > card_money) ? card_money : use_card_money;//如果购物卡余额抵扣不到20%则把该购物卡余额清零

    $("#hid_card_id").val(id);
    $("#hid_card_money").val(card_money.toFixed(2));
    $("#card_count").html("1");
    $("#card_total_money").html(use_card_money.toFixed(2));
    $("#total_card_price").html(use_card_money.toFixed(2));

    var total_vocher_price = parseFloat($("#total_vocher_price").text());//获取订单优惠券优惠金额
    var total_card_price = parseFloat($("#total_card_price").text());//获取订单购物卡优惠金额
    var finaily_total_price = total_fee + total_product_price - total_vocher_price - total_card_price;

    $("#total_price").html((finaily_total_price).toFixed(2));
}



