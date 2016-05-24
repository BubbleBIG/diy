$(document).ready(function() {
    var OLeft = $(".searchBar").offset().left;
    var Otop = $(".searchBar").offset().top + $(".searchBar").height() - 3;
    $("#KsmanDisp").css({left: OLeft,top: Otop});//搜索联想的DIV被幻灯片图片盖住。
    $("#cardname").addClass("cardnameV");
    $("#cardname").focus(function() {
        if ($(this).val() != "") {
            $(this).removeClass("cardnameV");
        } else {
            $(this).addClass("cardnameV");
        }
    })
    $("#cardname").keyup(function() {
        $(this).removeClass("cardnameV");
    })
    $("#cardname").blur(function() {
        if ($(this).val() != "") {
            $(this).removeClass("cardnameV");
        } else {
            $(this).addClass("cardnameV");
        }
    })
    $(".mainProNav dl dt").mouseover(function() {
        $(".mainProNav dl").removeClass("dlHover");
        $(this).parent().addClass("dlHover");
    })
    $(".mainProNav").hover(function() {
        $(this).addClass("mainProNavHover");
    },function() {
        $(this).removeClass("mainProNavHover");
        $(".mainProNav dl").removeClass("dlHover");
    })
});/**
 * Created by Bubble on 2016-05-23.
 */
