//========================基于Validform插件========================
//初始化验证表单
$.fn.initValidform = function () {
    var checkValidform = function (formObj) {
        $(formObj).Validform({
            tiptype: function (msg, o, cssctl) {
                /*msg：提示信息;
                o:{obj:*,type:*,curform:*}
                obj指向的是当前验证的表单元素（或表单对象）；
                type指示提示的状态，值为1、2、3、4， 1：正在检测/提交数据，2：通过验证，3：验证失败，4：提示ignore状态；
                curform为当前form对象;
                cssctl:内置的提示信息样式控制函数，该函数需传入两个参数：显示提示信息的对象 和 当前提示的状态（既形参o中的type）；*/
                //全部验证通过提交表单时o.obj为该表单对象;
                if (!o.obj.is("form")) {
                    //页面上不存在提示信息的标签时，自动创建;
                    if (o.obj.parent().find(".Validform_checktip").length == 0) {
                        o.obj.parent().append("<span class='Validform_checktip' />");
                        o.obj.parent().next().find(".Validform_checktip").remove();
                    }
                    var objtip = o.obj.parent().find(".Validform_checktip");
                    cssctl(objtip, o.type);
                    objtip.text(msg);
                }
            },
            showAllError: true
        });
    };
    return $(this).each(function () {
        checkValidform($(this));
    });
}
//======================以上基于Validform插件======================

/*表单AJAX提交封装(包含验证)*/
function AjaxInitForm(formId, btnId, isDialog, urlId) {
    var formObj = $(formId); //表单元素
    var btnObj = $(btnId); //按钮元素
    var urlObj = $(urlId); //隐藏域元素

    formObj.Validform({
        tiptype: 3,
        callback: function (form) {
            $.ajax({
                type: "post",
                url: form.attr("url"),
                data: form.serialize(),
                dataType: "json",
                beforeSend: function (formData, jqForm, options) {
                    btnObj.prop("disabled", true);
                    btnObj.val("请稍候...");
                },
                success: function (data, textStatus) {
                    if (data.status == 1) {
                        //btnObj.val("提交成功");
                        //是否提示，默认不提示
                        if (isDialog == 1) {
                            $.dialog.tips(data.msg, 2, "32X32/succ.png", function () {
                                if (data.url) {
                                    location.href = data.url;
                                } else if (urlObj.length > 0 && urlObj.val() != "") {
                                    location.href = urlObj.val();
                                } else {
                                    location.reload();
                                }
                            });
                        } else {
                            if (data.url) {
                                location.href = data.url;
                            } else if (urlObj) {
                                location.href = urlObj.val();
                            } else {
                                location.reload();
                            }
                        }
                    } else {
                        $.dialog.tips(data.msg, 2, "32X32/hits.png")
                        btnObj.prop("disabled", false);
                        btnObj.val("重新提交");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $.dialog.tips("状态：" + textStatus + "；出错提示：" + errorThrown, 2, "32X32/fail.png")
                    btnObj.prop("disabled", false);
                    btnObj.val("重新提交");
                }
            });
            return false;
        }
    });
}

//ajax的post提交(不提交form)
function ajax_post(type, action, param) {
    $.ajax({
        type: "post",
        url: ajax_url(type, action, param),
        dataType: "json",
        error: function () { $.dialog.tips("服务器异常，设置失败！", 2, "32X32/fail.png"); },
        success: function (data) {
            if (data.status == 0) {
                $.dialog.tips(data.msg, 2, "32X32/hits.png");
            }
            else {
                if (data.msg == "") {
                    location.href = (data.url == "") ? location.href : data.url;
                }
                else {
                    $.dialog.tips(data.msg, 2, "32X32/succ.png", function () { location.href = (data.url == "" ? location.href : data.url); });
                }
            }
        }
    });
}

//ajax的post提交(不提交form，有confirm操作)
function ajax_post_confirm(type, action, param, title, content) {
    $.dialog({
        title: title,
        content: content,
        icon: "confirm.gif",
        ok: function () {
            $.ajax({
                type: "post",
                url: ajax_url(type, action, param),
                dataType: "json",
                error: function () { $.dialog.tips("服务器异常，设置失败！", 2, "32X32/fail.png"); },
                success: function (data) {
                    if (data.status == 0) {
                        $.dialog.tips(data.msg, 2, "32X32/hits.png");
                    }
                    else {
                        if (data.msg == "") {
                            location.href = (data.url == "") ? location.href : data.url;
                        }
                        else {
                            $.dialog.tips(data.msg, 2, "32X32/succ.png", function () { location.href = (data.url == "" ? location.href : data.url); });
                        }
                    }
                }
            });
        },
        cancel: true
    });
}

//ajax的post提交(提交form)
function ajax_submit(type, action, formid, param) {
    $.ajax({
        cache: true,
        type: "post",
        url: ajax_url(type, action, param),
        data: $("#" + formid).serialize(),
        dataType: "json",
        error: function () { $.dialog.tips("服务器异常，设置失败！", 2, "32X32/fail.png"); },
        success: function (data) {
            if (data.status == 0) {
                $.dialog.tips(data.msg, 2, "32X32/hits.png");
            }
            else {
                if (data.msg == "") {
                    location.href = (data.url == "") ? location.href : data.url;
                }
                else {
                    $.dialog.tips(data.msg, 2, "32X32/succ.png", function () { location.href = (data.url == "" ? location.href : data.url); });
                }
            }
        }
    });
}

//ajax的post提交(提交form，有confirm操作)
function ajax_submit_confirm(type, action, formid, title, content, param) {
    $.dialog({
        title: title,
        content: content,
        icon: "confirm.gif",
        ok: function () {
            $.ajax({
                cache: true,
                type: "post",
                url: ajax_url(type, action, param),
                data: $("#" + formid).serialize(),
                dataType: "json",
                error: function () { $.dialog.tips("服务器异常，设置失败！", 2, "32X32/fail.png"); },
                success: function (data) {
                    if (data.status == 0) {
                        $.dialog.tips(data.msg, 2, "32X32/hits.png");
                    }
                    else {
                        if (data.msg == "") {
                            location.href = (data.url == "") ? location.href : data.url;
                        }
                        else {
                            $.dialog.tips(data.msg, 2, "32X32/succ.png", function () { location.href = (data.url == "" ? location.href : data.url); });
                        }
                    }
                }
            });
        },
        cancel: true
    });
}

//ajax的post提交url
function ajax_url(type, action, param) {
    var url = "";
    var temp = "";
    switch (type) {
        case "order":
            temp = (param == null || param == "") ? "" : "?id=" + param;
            url = "/Home/Order/"+action+temp;
            break;
        case "tgorder":
            temp = (param == null || param == "") ? "" : "&id=" + param;
            url = "handler/tgorder_submit_ajax.aspx?action=" + action + temp;
            break;
        case "user":
            temp = (param == null || param == "") ? "" : "?id=" + param;
            url = "/User/Index/" + action + temp;
            break;
        case "common":
            temp = (param == null || param == "") ? "" : "&id=" + param;
            url = "handler/common_submit_ajax.aspx?action=" + action + temp;
            break;
        default:
            temp = (param == null || param == "") ? "" : "&id=" + param;
            url = "handler/user_submit_ajax.aspx?action=" + action + temp;
            break;
    }
    return url;
}

//全选取消按钮函数
function checkAll(chkobj) {
    if ($(chkobj).is(":checked")) {
        $(".checkall:enabled").prop("checked", true);
    } else {
        $(".checkall:enabled").prop("checked", false);
    }
}

//Tab切换
function setTab(name, cursel, n) {
    for (i = 1; i <= n; i++) {
        var menu = document.getElementById(name + i);
        var con = document.getElementById("con_" + name + "_" + i);
        menu.className = i == cursel ? "hover" : "";
        con.style.display = i == cursel ? "block" : "none";
    }
}

function get_city(province_id) {
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=get_city&province_id=" + province_id,
        dataType: "json",
        success: function (d) {
            $("#ddlCityID").empty();
            $("#ddlCityID").append(d.msg);
            $("#ddlCountryID").empty();
            $("#ddlCountryID option").remove();
        }
    })
}

function get_country(city_id) {
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=get_country&city_id=" + city_id,
        dataType: "json",
        success: function (d) {
            $("#ddlCountryID").empty();
            $("#ddlCountryID option").remove()
            $("#ddlCountryID").append(d.msg);
            $("#ddlTownID").empty();
            $("#ddlTownID option").remove()
        }
    })
}

function get_town(country_id) {
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=get_town&country_id=" + country_id,
        dataType: "json",
        success: function (d) {
            $("#ddlTownID").empty();
            $("#ddlTownID option").remove()
            $("#ddlTownID").append(d.msg);
        }
    })
}


$(function () {
    // 头部下拉效果
    $(".top_pc > ul > li").hover(function () {
        $(this).children("ul").show();
    }, function () {
        $(this).children("ul").hide();
    });

    //头部获取购物车数量
    $.ajax({
        type: "post",
        dataType: "json",
        url: "handler/common_ajax.aspx?action=get_user_cart_count",
        success: function (d) {
            $("#cart_count").html(d.msg);
        }
    })

    //获取登录状态
    $.ajax({
        type: "post",
        dataType: "json",
        url: "handler/common_ajax.aspx?action=get_lgoin_str",
        success: function (d) {
            $(".top em").html(d.msg);
        }
    })
})