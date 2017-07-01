//只允许输入数字    
function checkKeyForInt(e) {
    var isOK = false;
    var key = window.event ? e.keyCode : e.which;
    if ((key > 95 && key < 106) ||                  //小键盘上的0到9  
    (key > 47 && key < 60) ||                   //大键盘上的0到9  
    key == 8 || key == 9 || key == 46 || key == 37 || key == 39     //不影响正常编辑键的使用(8:BackSpace;9:Tab;46:Delete;37:Left;39:Right)  
) {
        isOK = true;
    } else {
        if (window.event) //IE    
        {
            e.returnValue = false;   //event.returnValue=false 效果相同.    
        }
        else //Firefox    
        {
            e.preventDefault();
        }
    }
    return isOK;
}

$(function () {
    //点击加号递增数值
    $(".many .art").click(function () {
        var product_id = $(this).prev("input").attr("productid");
        var count = parseInt($(this).prev("input").val());
        var maxcount = parseInt($(this).prev("input").attr("maxcount"));
        var cart_id = $(this).parent().parent().parent().find("td").eq(0).find(".simple_check").val();
        var LimitCount = parseInt($("#hiLimitCount").val());
        var re = /^[1-9]+[0-9]*]*$/;
        if (!re.test(count)) {
            $.dialog.tips("购买数量请输入数字,不能为0", 2, "32X32/hits.png");
            $(this).prev("input").val(1)
            return;
        }

        if (count <= 0) {
            count = 1;
        }
        else {
            if (count >= maxcount) {
                $.dialog.tips("最多只可购买" + maxcount + "件此商品", 2, "32X32/hits.png");
                count = maxcount;
            }
            else if (count >= LimitCount){
                $.dialog.tips("最多只可购买" + maxcount + "件此商品", 2, "32X32/hits.png");
                count = LimitCount;
            }
            else {
                count = count + 1;
            }
        }
        update_cart_count(product_id, cart_id, count);
        sum();
    })

    //点击减号递减数值
    $(".many .alf").click(function () {
        var product_id = $(this).next("input").attr("productid");
        var count = parseInt($(this).next("input").val());
        var maxcount = parseInt($(this).next("input").attr("maxcount"));
        var cart_id = $(this).parent().parent().parent().find("td").eq(0).find(".simple_check").val();
        var LimitCount = parseInt($("#hiLimitCount").val());
        var re = /^[1-9]+[0-9]*]*$/;
        if (!re.test(count)) {
            $.dialog.tips("购买数量请输入数字,不能为0", 2, "32X32/hits.png");
            $(this).next("input").val(1)
            return;
        }
        if (count <= 1) {
            count = 1;
        }
        else {
            if (count > maxcount) {
                $.dialog.tips("最多只可购买" + maxcount + "件此商品", 2, "32X32/hits.png");
                count = maxcount;
            }
            else if (count >= LimitCount) {
                $.dialog.tips("最多只可购买" + maxcount + "件此商品", 2, "32X32/hits.png");
                count = LimitCount;
            }
            else {
                count = count - 1;
            }
        }
        update_cart_count(product_id, cart_id, count);
        sum();
    })

    //文本框更改数量
    var last;
    $(".many input").keyup(function (event) {
        last = event.timeStamp;//利用event的timeStamp来标记时间，这样每次的keyup事件都会修改last的值，注意last必需为全局变量
        var _this = $(this);
        setTimeout(function () {
            if (last - event.timeStamp == 0)//如果时间差为0（也就是你停止输入1s之内都没有其它的keyup事件发生）则做你想要做的事
            {
                var product_id = _this.attr("productid");
                var count = parseInt(_this.val());
                var maxcount = parseInt(_this.attr("maxcount"));
                var cart_id = _this.parent().parent().parent().find("td").eq(0).find(".simple_check").val();
                var LimitCount = parseInt($("#hiLimitCount").val());
                var re = /^[1-9]+[0-9]*]*$/;
                if (!re.test(count)) {
                    $.dialog.tips("购买数量请输入数字,不能为0", 2, "32X32/hits.png");
                    _this.val(1)
                    return;
                }
                if (count <= 1) {
                    count = 1;
                }
                else {
                    if (count > maxcount) {
                        $.dialog.tips("最多只可购买" + maxcount + "件此商品", 2, "32X32/hits.png");
                        count = maxcount;
                    }
                    else if (count >= LimitCount) {
                        $.dialog.tips("最多只可购买" + maxcount + "件此商品", 2, "32X32/hits.png");
                        count = LimitCount;
                    }
                    else {
                        count = count;
                    }
                }
                update_cart_count(product_id, cart_id, count);
                sum();
            }
        }, 500);

    })

    //购物车单选
    $(".simple_check").click(function () {
       sum()
    })

    //购物车多选
    $(".muticheck").click(function () {
        if ($(this).is(":checked")) {
            $(".muticheck").prop("checked", true);
            $(".simple_check[disabled!=disabled]").each(function () {
                $(this).prop("checked", true);
            })
        }
        else {
            $(".muticheck").prop("checked", false);
            $(".simple_check[disabled!=disabled]").each(function () {
                $(this).prop("checked", false);
            })
        }
        sum();
    })
})

//统计数量和价格
function sum()
{
    var price = 0;
    var i = 0;
    $(".simple_check:checked").each(function () {
        price += parseFloat($(this).parent().parent().find("td").eq(4).find(".totalprice").html());
        i += parseInt($(this).parent().parent().attr("num"));
    })
    $("#total_count").html(i);
    $("#total_price").html(parseFloat(price).toFixed(2));
    //结算按钮
    if (i > 0) {
        $("#buy").removeClass("cartbutno");
        $("#buy").addClass("cartbut");
        $("#buy").removeAttr("disabled");
    }
    else {
        $("#buy").removeClass("cartbut");
        $("#buy").addClass("cartbutno");
        $("#buy").attr("disabled", "disabled");
    }
}

function update_cart_count(product_id, cart_id, count) {
    $.ajax({
        type: "post",
        url: "/Home/Cart/update_cart?product_id=" + product_id + "&cart_id=" + cart_id + "&count=" + count,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，收藏失败！", 2, "32X32/hits.png");
        },
        success: function (data) {
            if (data.status == 0)
            {
                $.dialog.tips(data.msg, 2, "32X32/hits.png");
            }
            else {
                location.href = "/Home/Cart/index";
            }
        }
    });
}

//收藏单个商品
function collect(ProductId) {
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=collect&id=" + ProductId,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，收藏失败！", 2, "32X32/hits.png");
        },
        success: function (data) {
            $.dialog.alert(data.msg);
        }
    });
}

//删除购物车单个商品
function cart_del(cart_id) {
    $.dialog({
        title:"提示",
        content: "确定要删除该产品吗",
        icon: "confirm.gif",
        ok: function () {
            $.ajax({
                type: "post",
                url: "/Home/Cart/cart_del?cart_id=" + cart_id,
                dataType: "json",
                error: function () {
                    $.dialog.tips("服务器异常，删除失败！", 2, "32X32/hits.png");
                },
                success: function (data) {
                    location.href = "/Home/Cart/index";
                }
            });
        },
        cancel:true
    });
}

//删除购物车多个商品
function cart_del_muti() {
    var cart_id_list = "";
    $(".simple_check:checked").each(function () {
        cart_id_list += $(this).val() + ",";
    })
    cart_id_list = cart_id_list.substring(0, cart_id_list.lastIndexOf(','));
    if (cart_id_list == "") {
        $.dialog.tips("请至少选择一个产品进行操作！", 2, "32X32/hits.png");
        return;
    }
    $.dialog({
        title: "提示",
        content: "确定要删除所选产品吗",
        icon: "confirm.gif",
        ok: function () {
            $.ajax({
                type: "post",
                url: "/Home/Cart/cart_del_muti?cart_id=" + cart_id_list,
                dataType: "json",
                error: function () {
                    $.dialog.tips("服务器异常，删除失败！", 2, "32X32/hits.png");
                },
                success: function (data) {
                    location.href = "/Home/Cart/index";
                }
            });
        },
        cancel: true
    });
}

$(function () {
    $("#selcard").change(function () {
        var selval = $(this).val();
        var cardprice, price, productprice, usemoney;
        if (selval == -1) {
            $("#tips").html("")
            $(".bankpay").show();
            $(".cardpay").hide();
        }
        else {
            price = parseFloat($("#price").val());
            productprice = parseFloat($("#productprice").val());
            cardprice = parseFloat(selval.split("|")[1]);
            usemoney = productprice * 0.2;
            if (usemoney < cardprice) {
                $("#tips").html("购物卡抵扣 " + usemoney.toFixed(2) + " 元，您还需支付 " + (price - usemoney).toFixed(2) + " 元")
                $(".cardpay").hide();
                $(".bankpay").show();
            }
            else {
                $("#tips").html("购物卡需要抵扣 " + usemoney.toFixed(2) + " 元，余额不足，无法抵扣！")
                $(".cardpay").hide();
                $(".bankpay").show();
            }
        }
    })
})

$(function () {
    var price = parseFloat($("#price").val()); 
    var user_money = parseFloat($("#chkUseMoney").val());
    if (user_money > 0) { $("#chkUseMoney").prop("checked", true); }
    if (user_money > price) {
        $("#tips").html("支付 " + price.toFixed(2) + " 元")
        $(".bankpay").hide();
    }
    else {
        $("#tips").html("支付 " + user_money.toFixed(2) + " 元，您还需支付 " + (price - user_money).toFixed(2) + " 元")
        $(".bankpay").show();
    }

    $("#chkUseMoney").click(function () {
        if ($(this).is(":checked")) {
            if (user_money > price) {
                $("#tips").html("支付 " + price.toFixed(2) + " 元")
                $(".bankpay").hide();
            }
            else {
                $("#tips").html("支付 " + user_money.toFixed(2) + " 元，您还需支付 " + (price - user_money).toFixed(2) + " 元")
                $(".bankpay").show();
            }
        }
        else {
            $(".bankpay").show();
            $("#tips").html("");
        }
    })

})