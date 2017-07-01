var lastScrollY = 0;
$(function () {
    $("body").prepend("<script src=\"//meiqia.com/js/mechat.js?unitid=55adada74eae35d669000019&btn=hide\" charset=\"UTF-8\" async=\"async\"></script>");
    
});
function gotop() {
    var diffY;
    if (document.documentElement && document.documentElement.scrollTop)
        diffY = document.documentElement.scrollTop;
    else if (document.body)
        diffY = document.body.scrollTop
    else
    {/*Netscape stuff*/ }
    percent = .1 * (diffY - lastScrollY);
    if (percent > 0) percent = Math.ceil(percent);
    else percent = Math.floor(percent);
    lastScrollY = lastScrollY + percent;
    if (lastScrollY < 770) {
        document.getElementById("return_top").style.display = "none";
    } else {
        document.getElementById("return_top").style.display = "block";
    }
}

$(function () {
    $(".ewm").hover(function () { $(".gotop em").show(); $(".ewm") }, function () { $(".gotop em").hide(); $(".ewm") })
})