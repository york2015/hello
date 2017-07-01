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
                        o.obj.parent().append("<span class='Validform_checktip'></span>");
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

/*************************************************
描述：设定为全选状态
应用：列表页面的全选按钮
*************************************************/
function CheckAllNew(obj) {
    obj = eval(obj);
    for (var i = 0; i < obj.elements.length; i++) {
        if (obj.elements[i].type == "checkbox" && obj.elements[i].name == "CheckBoxID" && obj.elements[i].disabled == false) {
            if (obj.elements[i].checked == true)
                obj.elements[i].checked = false;
            else
                obj.elements[i].checked = true;
        }
    }
}

function Hidden(id)
{
    document.getElementById(id).style.display = "none";
}

function Show(id) {
    document.getElementById(id).style.display = "block";
}

// 最顶部
$(function () {
	$(".top_pc > ul > li").hover(function () {
		$(this).children("ul").show();
	},
function () {
	$(this).children("ul").hide();
});
})

// 购物车
$(function () {
  $(".cars_i ").hover(
  function () {
	  $(this).children(".cars_y").show();
  },
  function () {
	  $(this).children(".cars_y").hide();
  });
})

// 导航菜单

$(function () {
	$(".sider > ul > li").hover(function () {
		$(this).children(".chart").show();
	},
function () {
	$(this).children(".chart").hide();
});
})

// 切换

function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"active":"";
		con.style.display=i==cursel?"block":"none";
	}
}

// 图文切换

$(document).ready(function()
{
	$("dl.accshowlist").each(function()
	{
		var self = this;
		var classname = "showpic";
		//$("dd:last", self).show();
		//$("dt:last", self).addClass(classname);
		$("dt", self).mouseover(function()
		{
			if (!$(this).hasClass(classname))
			{
				$("dt", self).removeClass(classname);
				$(this).addClass(classname);
				$("dd", self).hide();
				$(this).next().show();
				}
			});
	});	
});

//鼠标滑过图片往左移动
jQuery(function () {
    $(".floorbotlf ul li .onhos").hover(
        function () { jQuery(this).stop().animate({ left: '-5px' }, 100) },
        function () { jQuery(this).stop().animate({ left: '0px' }, 100); }
        );
});

function addFavorite() {
    var b = window.location.href;
    var a = document.title;
    try {
        window.external.addFavorite(b, a);
    }
    catch (c) {
        try {
            window.sidebar.addPanel(a, b, "");
        }
        catch (c) {
            alert("对不起，您的浏览器不支持此操作！\n请您使用菜单栏或Ctrl+D收藏本站。");
        }
    }
}

$(function () {
    $("#hid_category").mouseover(function () { $(this).find(".sider").show(); })
    $("#hid_category").mouseout(function () { $(this).find(".sider").hide(); })
})

$(document).ready(function () {
    $('.more').hide();
    $('.settings').click(function () {
        $('.more').slideToggle();
        $(this).find("i").toggleClass("cerrar");
        $(this).parent("").toggleClass("slider_more");
    });

    $(".lsmore li a").click(function () {
        $(".lsmore li a").removeClass("lion");
        $(this).addClass("lion");
    });

    $(window).bind("scroll", function () {
        if ($(window).scrollTop() >= 907) {
            $(".lsmore").addClass("lsmore_fixed");
        }
        else {
            $(".lsmore").removeClass("lsmore_fixed");
        }
    })

});

//内页产品分类切换
$(function () {
    $(".category .categ").click(function () {
        $(".category .categ").children("span").html("+");
        $(this).children("span").html("-");
        $(".category .categb").addClass("hidden");
        $(this).next(".categb").removeClass("hidden");
    })
    $(".category .categb dt").click(function () {

        $(this).toggleClass("dtbg");
        $(this).next("dd").toggleClass("hidden")
    })
})

//控制字体大小
function SetFontSize(divTgs, fontSize) {
    $(divTgs).css("font-size", fontSize + "px");
    $(divTgs + " a").css("font-size", fontSize + "px");
    $(divTgs + " b").css("font-size", fontSize + "px");
    $(divTgs + " span").css("font-size", fontSize + "px");
    $(divTgs + " p").css("font-size", fontSize + "px");
    $(divTgs + " div").css("font-size", fontSize + "px");
}

//土产与健康顶一下
function update_good_count(obj,id)
{
    $.ajax({
        type: "post",
        url: "/tools/submit_ajax.ashx?action=update_good_count&id=" + id,
        dataType: "json",
        error: function () {
            $.dialog.alert("服务器异常，操作失败！");
        },
        success: function (data) {
            var good_count = parseInt($(obj).find("span").text());
            good_count = good_count + 1;
            $(obj).find("span").text(good_count)
        }
    });
}

//土产与健康回复
function topic_reply(obj, id, topic_id, user_id, pre_id)
{
    var str;
    $(".reply_adm").html("");

    str = "<form id=\"reply_form\" name=\"reply_form\" method=\"post\" url=\"/Tools/submit_ajax.ashx?action=topic_reply&id=" + id + "&topic_id=" + topic_id + "&user_id=" + user_id + "&pre_id=" + pre_id + "\">";
    str += "<textarea name=\"txtReplyContent\" class=\"textareas\"></textarea>";
    str += "<div class=\"slogin slogin1 clear\"><input id=\"btnReplySubmit\" name=\"btnReplySubmit\" class=\"loinb right\" type=\"submit\" value=\"回复\" /></div>";
    str += "</form>";
    str += "<script type=\"text/javascript\">$(function () { AjaxInitForm('reply_form', 'btnReplySubmit', 0);})</script>";

    $(obj).parent().next(".reply_adm").html(str);
}

/*表单AJAX提交封装(包含验证)*/
function AjaxInitForm(formId, btnId, isDialog, urlId) {
    var formObj = $("#" + formId); //表单元素
    var btnObj = $("#" + btnId); //按钮元素
    var urlObj = $("#" + urlId); //隐藏域元素

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


//加入购物车
function cart(product_id, product_count) {
    $.ajax({
        type: "post",
        url: "/Home/Cart/add?id=" + product_id + "&count=" + product_count + "&url=/for_sale.aspx",
        dataType: "json",
        error: function () { $.dialog.tips("服务器异常，设置失败！", 2, "32X32/fail.png"); },
        success: function (data) {
            if (data.flag == 0) {
                if (data.url != "") {
                    location.href = data.url;
                }
                else {
                    $.dialog.tips(data.msg, 2, "32X32/hits.png");
                }
            }
            else {
                $.dialog.tips("商品已成功添加到购物车！", 2, "32X32/succ.png");
            }
        }
    });
}
$(function () {
    $(".ewm").hover(function () { $(".gotop em").show(); $(".ewm") }, function () { $(".gotop em").hide(); $(".ewm") })
})

