
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

// 导航菜单

$(function () {
	//一级导航事件
	$(".newPriceLinks li p").hover(
	function () {
		$(this).parent("li").children("div").show();
		$(this).parent("li").addClass("sfhover");
	},
	function () {
		$(this).parent("li").children("div").hide();
		$(this).parent("li").removeClass("sfhover");
	}
	);

	//二级导航事件
	$(".newPriceLinks li div").hover(
	function () {
		$(this).show();
		$(this).parent("li").addClass("sfhover");
	},
	function () {
		$(this).hide();
		$(this).parent("li").removeClass("sfhover");
	}
	)
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
    $(".category .categb dt").click(function () {

        $(this).toggleClass("dtbg");
        $(this).next("dd").toggleClass("hidden")
    })
})

function input_tip(obj) {
	var this_value = $(obj).val();
	if (this_value != "") {
	    if (this_value == "请输入搜索信息" || this_value == "请输入搜索信息") { $(obj).val("");}
	    $(obj).parent().find("ul").show()
	}
	else {
	    $(obj).parent().find("ul").hide()
	}
}

function input_val(obj) {
    var this_value = $(obj).find("em").text();
    $(obj).parent().prev("input").val(this_value);
	$(obj).parent().hide();
}

$(function () {
        $(".ewm").hover(function () { $(".gotop em").show(); $(".ewm") }, function () { $(".gotop em").hide(); $(".ewm") })
  })

$(function(){
  $(".tugooFast li a").hover(
  function(){
	$(".tugooFast li em").hide();
	$(this).find("em").show();
	$(".tugooFast li i").show();
	$(this).find("i").hide();
	},
	function(){
	  $(".tugooFast li em").hide();
	  $(".tugooFast li i").show();
  })
})

$(function(){
  $(".wechatpt li").hover(
  function(){
	$(".wechatpt li em").hide();
	$(this).find("em").show();
	},
	function(){
	  $(".wechatpt li em").hide();
  })
})