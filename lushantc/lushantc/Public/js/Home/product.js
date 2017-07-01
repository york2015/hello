
//收藏单个商品
function collect(ProductId)
{
    var skuid = "0";
    if ($("#selsku").length > 0) {
        skuid = $("input[name='selsku']:checked").val();
        if (skuid == null) {
            $.dialog.tips("请选择商品规格", 2, "32X32/hits.png"); return false;
        }
    }
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=collect&id=" + ProductId+"&skuid="+skuid,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，购买失败！", 2, "32X32/fail.png");
        },
        success: function (data) {
            if (data.status == "0") { $.dialog.tips(data.msg, 2, "32X32/hits.png"); }
            if (data.status == "1") { $.dialog.tips(data.msg, 2, "32X32/succ.png"); }
        }
    });
}

function selsku(storage, Price, Num,id) {
    $('.protype label').removeClass('lon');
    $('#selsku'+id).addClass('lon'); //alert($(this).val());
    $('#hid_storage').val(Num); //$('#NowPrice').html(Price);
    $('#NowNum').html(Num);
}
//套餐的重载2016/03/16 add
function cart(ProductId) {
    cart(ProductId, 0);
}

//平台加入购物车2016/03/16 edti
function cart(ProductId, ComboId) {
    
    var storage = parseInt($("#hid_storage").val());//获取该商品的库存
    var ProductId = $("#hid_id").val();//获取产品id
    var ProductCount = parseInt($("#product_count").val());//获取购买产品数量
    var skuid = "0";
    /*if ($("#selsku").length > 0) {
        skuid = $("input[name='selsku']:checked").val();
        if (skuid == null) {
            $.dialog.tips("请选择商品规格", 2, "32X32/hits.png"); return false;
        }
    }*/
    if (storage <= 0) 
    {
        $.dialog.tips("当前商品库存不足，请选择其它商品！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount > storage)
    {
        $.dialog.tips("当前商品库存不足，请选择其它商品！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount <= 0)
    {
        $.dialog.tips("请输入正确的购买数量！", 2, "32X32/hits.png");
        return false;
    } 
    $.ajax({
        type: "post",
        url: "/Home/Cart/add?id=" + ProductId + "&count=" + ProductCount + "&combo=" + ComboId+"&skuid="+skuid,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，购买失败！", 2, "32X32/fail.png");
        },
        success: function (data) {
            if (data.flag == 0) {
                if (data.msg != "") {$.dialog.tips(data.msg, 2, "32X32/hits.png"); }
                if (data.url != "") { location.href = data.url; }
            }
            if (data.flag == 1) { $("#theLayer").show(); }
            if (data.flag ==2 ) {//2016/03/17 add
                $.dialog.tips("加入购物车成功！", 2, "32X32/succ.png");
            }
        }
    });
}

//平台加入购物车
function cart_quick(obj, ProductId) {

    var storage = parseInt($(obj).attr("storage"));//获取该商品的库存
    var ProductCount = 1;
    if (storage <= 0) 
    {
        $.dialog.tips("当前商品库存不足，请选择其它商品！", 2, "32X32/hits.png");
        return false;
    }
    
    
    $.ajax({
    	type: "post",
        url: "/Home/Cart/add?id=" + ProductId + "&count=" + ProductCount ,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，购买失败！", 2, "32X32/fail.png");
        },
        success: function (data) {
            if (data.flag == "0") { $.dialog.tips(data.msg == "" ? "请先登录再进行操作" : data.msg, 2, "32X32/hits.png"); }
            if (data.flag == "1") { $.dialog.tips("加入购物车成功！", 2, "32X32/succ.png");  location.href = "/Home/Cart/index";}
        }
    });
}

function buy(ProductId)
{ 
    buy(ProductId, 0);
}

function buy(ProductId,skuid,ComboId)
{
    var storage = parseInt($("#hid_storage").val());//获取该商品的库存
    var ProductId = $("#hid_id").val();//获取产品id
    var ProductCount = parseInt($("#product_count").val());//获取购买产品数量
    var skuid = "0";
    /*if ($("#selsku").length > 0) {
        skuid = $("input[name='selsku']:checked").val();
        if (skuid == null) {
            $.dialog.tips("请选择商品规格", 2, "32X32/hits.png"); return false;
        }
    }*/
   // alert(skuid);
    if (storage <= 0) {
        $.dialog.tips("当前商品库存不足！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount > storage) {
        $.dialog.tips("购买数量不能超过商品库存！！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount <= 0) {
        $.dialog.tips("请输入正确的购买数量！", 2, "32X32/hits.png");
        return false;
    }
    /*$.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=buy&id=" + ProductId + "&count=" + ProductCount + "&combo=" + ComboId + "&skuid="+skuid,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，购买失败！", 2, "32X32/fail.png");
        },
        success: function (data) {
            if (data.flag == 0) {
                if (data.msg != "") { alert(data.msg); }
                if (data.url != "") { location.href = data.url; }
            }
            if (data.flag == 1) { location.href = "/order_submit_now.aspx"; }
        }
    });*/
    location.href = "/Home/Order/order_submit?id=" + ProductId + "&count=" + ProductCount+ "&type=1";
}

//土购商城加入购物车
function tgcart(ProductId) {

    var storage = parseInt($("#hid_storage").val());//获取该商品的库存
    var ProductId = $("#hid_id").val();//获取产品id
    var ProductCount = parseInt($("#product_count").val());//获取购买产品数量
    if (storage <= 0) {
        $.dialog.tips("当前商品库存不足，请选择其它商品！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount > storage) {
        $.dialog.tips("购买数量不能超过商品库存！！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount <= 0) {
        $.dialog.tips("请输入正确的购买数量！", 2, "32X32/hits.png");
        return false;
    }
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=tgcart&id=" + ProductId + "&count=" + ProductCount,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，购买失败！", 2, "32X32/fail.png");
        },
        success: function (data) {
            if (data.flag == 0)
            {
                if (data.msg != "") { $.dialog.alert(data.msg); }
                if (data.url != "") {location.href = data.url; }
            }
            if (data.flag == 1) { $("#theLayer").show(); }
        }
    });
}

function tgbuy(ProductId) {
    var storage = parseInt($("#hid_storage").val());//获取该商品的库存
    var ProductId = $("#hid_id").val();//获取产品id
    var ProductCount = parseInt($("#product_count").val());//获取购买产品数量
    if (storage <= 0) {
        $.dialog.tips("当前商品库存不足，请选择其它商品！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount > storage) {
        $.dialog.tips("购买数量不能超过商品库存！！", 2, "32X32/hits.png");
        return false;
    }
    if (ProductCount <= 0) {
        $.dialog.tips("请输入正确的购买数量！", 2, "32X32/hits.png");
        return false;
    }
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=tgbuy&id=" + ProductId + "&count=" + ProductCount,
        dataType: "json",
        error: function () {
            $.dialog.tips("服务器异常，购买失败！", 2, "32X32/fail.png");
        },
        success: function (data) {
            if (data.flag == 0) {
                if (data.msg != "") { $.dialog.alert(data.msg); }
                if (data.url != "") { location.href = data.url; }
            }
            if (data.flag == 1) { location.href = "/tgorder_submit_now.aspx"; }
        }
    });
}

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
        var ProductId = $("#hid_id").val();//获取产品id
        var country_id = $("#current_country_id").val();//获取地区ID
        var ProductId = $("#hid_id").val();//获取产品id
        var count = parseInt($(this).prev("input").val());
        var shopid = parseInt($("#hid_shopid").val());
        var freight_type = $("#hid_freight_type").val();
        var re = /^[1-9]+[0-9]*]*$/;
        if (!re.test(count)) {
            $(this).prev("input").val(1)
            alert("购买数量请输入数字,不能为0！");
            return;
        }

        if (count <= 0) {
            count = 1;
        }
        else {
            count = count + 1;
        }
        $(this).prev("input").val(count);

        change_count_area(ProductId, freight_type, shopid, count, country_id, "");
    })

    //点击减号递减数值
    $(".many .alf").click(function () {
        var ProductId = $("#hid_id").val();//获取产品id
        var country_id = $("#current_country_id").val();//获取地区ID
        var count = parseInt($(this).next("input").val());
        var shopid = parseInt($("#hid_shopid").val());
        var freight_type = $("#hid_freight_type").val();
        var re = /^[1-9]+[0-9]*]*$/;
        if (!re.test(count)) {
            $(this).next("input").val(1)
            alert("购买数量请输入数字,不能为0！");
            return;
        }
        if (count <= 1) {
            count = 1;
        }
        else {
            count = count - 1;
        }
        $(this).next("input").val(count);
        change_count_area(ProductId, freight_type, shopid, count, country_id, "")
    })

    //文本框更改值
    $(".many input").blur(function () {
        var ProductId = $("#hid_id").val();//获取产品id
        var country_id = $("#current_country_id").val();//获取地区ID
        var count = parseInt($(this).val());
        var shopid = parseInt($("#hid_shopid").val());
        var freight_type = $("#hid_freight_type").val();
        var re = /^[1-9]+[0-9]*]*$/;
        if (!re.test(count)) {
            $(this).val(1)
            alert("购买数量请输入数字,不能为0！");
            return;
        }
        if (count <= 1) {
            count = 1;
        }
        change_count_area(ProductId, freight_type, shopid, count, country_id, "");
    })

})

function change_count_area(pid, freight_type, shopid, count, area_id, title) {
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=change_count_area_freight&area_id=" + area_id + "&shopid=" + shopid + "&p_id=" + pid + "&freight_type=" + freight_type + "&count=" + count + "&title=" + encodeURI(title),
        dataType: "json",
        success: function (d) {
            if (d.status == 0) {
                $("#p_freight").empty();
                $("#p_freight").append("<b>无货</b>&nbsp;&nbsp;&nbsp;");
                $(".buy_carts").hide();
                $(".wuhuo").show();
            }
            else {
                $("#p_freight").empty();
                $("#p_freight").append(d.msg);
                $(".buy_carts").show();
                $(".wuhuo").hide();
            }
        }
    })
}

function get_city(province_id, title) {
    $("#ten1").empty();
    $("#ten1").append(title);
    setTab('ten', 2, 3);
    $("#ten2").empty();
    $("#ten2").append("请选择");
    $("#con_ten_2").empty();
    $("#con_ten_2").append("<div class=\"iloading\">正在加载数据，请稍候...</div>");
    $("#ten3").hide();
    $("#current_province_id").val(province_id);
    $("#current_province_title").val(title);
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=get_city_for_product&province_id=" + province_id + "&title=" + encodeURI(title),
        dataType: "html",
        success: function (d) {
            $("#con_ten_2").empty();
            $("#con_ten_2").append(d);
        }
    })
}

function get_country(city_id, title) {
    $("#ten2").empty();
    $("#ten2").append(title);
    setTab('ten', 3, 3);
    $("#ten3").empty();
    $("#ten3").append("请选择");
    $("#con_ten_3").empty();
    $("#con_ten_3").append("<div class=\"iloading\">正在加载数据，请稍候...</div>");
    $("#ten3").show();
    $("#current_city_id").val(city_id);
    $("#current_city_title").val(title);
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=get_country_for_product&city_id=" + city_id + "&title=" + encodeURI(title),
        dataType: "html",
        success: function (d) {
            $("#con_ten_3").empty();
            $("#con_ten_3").append(d);
        }
    })
}



/*显示AJAX分页列表*/
function AjaxPageList(listDiv, pageDiv, pageSize, pageCount, sendUrl, method) {
    //pageIndex -页面索引初始值
    //pageSize -每页显示条数初始化
    //pageCount -取得总页数
    InitComment(0);//初始化评论数据
    $(pageDiv).pagination(pageCount, {
        callback: pageselectCallback,
        prev_text: "上一页",
        next_text: "下一页",
        items_per_page: pageSize,
        num_display_entries: 3,
        current_page: 0,
        num_edge_entries: 5,
        link_to: "javascript:;"
    });

    //分页点击事件
    function pageselectCallback(page_id, jq) {
        switch (method)
        {
            case "comment_list":
                InitComment(page_id);
                break;
            case "deal_list":
                InitDeal(page_id);
                break;
        }
        
    }

    //请求评论数据
    function InitComment(page_id) {
        page_id++;
        $.ajax({
            type: "POST",
            cache: false,
            dataType: "json",
            url: sendUrl + "&page_size=" + pageSize + "&page_index=" + page_id,
            beforeSend: function (XMLHttpRequest) {
                $(".comentlist").html('');
            },
            success: function (data) {
                var strHtml = "<ul>";
                for (var i in data) {
                    strHtml += "<li>";
                    strHtml += "<div class=\"comment-user\"><img src=\"" + data[i].Photo + "\" alt=\"\"/><span>" + data[i].UserName + "</span></div>";
                    strHtml += "<div class=\"comment-detail\">";
                    strHtml += "<b class=\"contentbox-arrow\"></b>";
                    strHtml += "<h4>";
                    strHtml += "<span class=\"n-buylog\">购买过<a>" + data[i].ProductName + "</a></span>";
                    strHtml += "<span class=\"n-source\"></span>";
                    strHtml += "<span class=\"n-datetime\">" + data[i].Date + "</span>";
                    strHtml += "</h4>";
                    strHtml += "<div class=\"comment-content\">" + unescape(data[i].Contents) + "</div>";
                    if (data[i].IsReply == "1") {
                        strHtml += "<div class=\"comtxt\">回复：" + unescape(data[i].ReplyContent) + "</div>";
                    }
                    strHtml += unescape(data[i].EvaluationPic);
                    strHtml += "</div>";
                    strHtml += "</li>";
                }
                strHtml += "<div class=\"clear\"></div>";
                strHtml += "</ul>";
                $(".comentlist").html(strHtml);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $(".comentlist").html('<p style="line-height:35px;">暂无评论，快来抢沙发吧！</p>');
            }
        });
    }

    //请求交易记录数据
    function InitDeal(page_id) {
        
        page_id++;
        $.ajax({
            type: "POST",
            cache: false,
            dataType: "json",
            url: sendUrl + "&page_size=" + pageSize + "&page_index=" + page_id,
            beforeSend: function (XMLHttpRequest) {
                $(".orderRecord").html('');
            },
            success: function (data) {
                var strHtml1 = "<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">";
                strHtml1 += "<tr>";
                strHtml1 += "<th width=\"130\">买家</th>";
                strHtml1 += "<th width=\"300\">商品名称</th>";
                strHtml1 += "<th width=\"90\">购买数量</th>";
                strHtml1 += "<th width=\"150\">成交时间</th>";
                strHtml1 += "<th width=\"95\">状态</th>";
                strHtml1 +="</tr>";
                for (var i in data) {
                    strHtml1 += "<tr class=\"" + ((i + 1) % 2 == 0 ? "trbg" : "") + "\">";
                    strHtml1 += "<td>" + data[i].UserName + "</td>";
                    strHtml1 += "<td>" + data[i].Name + "</td>";
                    strHtml1 += "<td>" + data[i].count + "</td>";
                    strHtml1 += "<td>" + data[i].CreateDate + "</td>";
                    strHtml1 += "<td>成交</td>";
                    strHtml1 += "</tr>";
                }
                strHtml1 += '</table>';
                $(".orderRecord").html(strHtml1);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $(".orderRecord").html('<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\"><tr><td colspan=\"6\">暂无交易记录！</td></tr></table>');
            }
        });
    }
}

function CloseWebPage() {
    if (navigator.userAgent.indexOf("MSIE") > 0) {
        if (navigator.userAgent.indexOf("MSIE 6.0") > 0) {
            window.opener = null;
            window.close();
        } else {
            window.open('', '_top');
            window.top.close();
        }
    }
    else if (navigator.userAgent.indexOf("Firefox") > 0) {
        window.location.href = 'about:blank ';
    } else {
        window.opener = null;
        window.open('', '_self', '');
        window.close();
    }
}

function evaluation_pic(obj)
{
    var this_value = $(obj).attr("bigsrc");
    var new_obj = $(obj).parent().parent().next(".bigpic");

    if ($(obj).parent().attr("class").indexOf("ddon") == 0) {
        $(obj).parent().removeClass("ddon");
        new_obj.hide();
    }
    else {
        $(obj).parent().parent().find("dd").removeClass("ddon");
        $(obj).parent().addClass("ddon");
        new_obj.show();
    }
    new_obj.find("img").attr("src", this_value);
}

function selCondition(lb, val, val2, id, order) {
    if (lb == 'Brand') {
        $('#selBrand').html(val);
    }
    else if (lb == 'Place') {
        $('#selPlace').html(val);
    }
    else if (lb == 'Varieties') {
        $('#selVarieties').html(val);
    }
    else if (lb == 'Price') {
        if(val=='')
            $('#selPriceFrom').hide();
        else
            $('#selPriceFrom').show();
        $('#selPriceFrom').html(val);; $('#selPriceTo').html(val2);;
    }
    var brand = $('#selBrand').html();
    var place = $('#selPlace').html();
    var varieties = $('#selVarieties').html();
    var start_price = $('#selPriceFrom').html();
    var end_price = $('#selPriceTo').html();
    //转向搜索
    window.location.href = '/category.aspx?id=' + id + '&order=' + order + "&page=1&brand=" + brand + '&place=' + place + '&varieties=' + varieties + "&start_price=" + start_price + "&end_price=" + end_price;

}
