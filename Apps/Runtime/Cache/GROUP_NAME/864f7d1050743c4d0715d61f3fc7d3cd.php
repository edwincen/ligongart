<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php echo ($title); ?></title><meta name="keywords" content="<?php echo ($keywords); ?>" /><meta name="description" content="<?php echo ($description); ?>" /><link href="../Public/css/style.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="../Public/js/jquery.form.js"></script><script type="text/javascript" src="../Public/js/common.js"></script><style type="text/css">#nav_<?php echo ($position[0]['id']); ?>{background:url(../Public/images/nav.jpg) no-repeat center;}
</style></head><body id="index_body"><!--百度分享--><div id="header-bg"></div><div id="container"><div id="header"><div class="logo"><a href="__APP__"><img src="__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('logo',1); echo $set;?>" /></a></div><div class="member"><a href="<?php echo U('Member/login');?>">登录</a>&nbsp;|&nbsp;<a href="<?php echo U('Member/register');?>">注册</a></div></div><script type="text/javascript">var t = n = 0, count = $("#play_list a").size();
$(function(){
    
    //幻灯片播放
    $("#play_list a:not(:first-child)").hide();
    $("#play_info").html($("#play_list a:first-child").find("img").attr('alt'));
    $("#play_info").click(function(){window.open($("#play_list a:first-child").attr('href'), "_blank");});
    
    $("#play_text li:first-child").css({"background":"#fff",'color':'#000'});
    $("#play_text li").click(function() {
            var i = $(this).text() - 1;
            n = i;
            if (i >= count) return;
            $("#play_info").html($("#play_list a").eq(i).find("img").attr('alt'));
            $("#play_info").unbind().click(function(){window.open($("#play_list a").eq(i).attr('href'), "_blank");});
            $("#play_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
            $(this).css({"background":"#fff",'color':'#000'}).siblings().css({"background":"#000",'color':'#fff'});
    });
    t = setInterval("showAuto()", 5000);
    $("#play").hover(function(){clearInterval(t);}, function(){t = setInterval("showAuto()", 5000);});
    
    $(".nav ul li:has(ul)").hover(function(){
        $(this).children("ul").stop(true,true).slideDown(400);
    },function(){
        $(this).children("ul").stop(true,true).slideUp("fast");
    });
    
});
function showAuto(){
    n = n >= (count - 1) ? 0 : ++n;
    $("#play_text li").eq(n).trigger('click');
}
</script><div id="main"><div id="infobar"><div id="info_title">                通知: &nbsp;
            </div><ul id="info_content"><?php if(is_array($info_list)): $i = 0; $__LIST__ = $info_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="info_item"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><a style="cursor:pointer" id="left_arrow"></a><a style="cursor:pointer" id="right_arrow"></a><div id="menu_banner"><ul id="menu_banner_list"><li class="nav_tongzhi"><a class="tongzhi" href="<?php echo U('Xinwen/index');?>"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="zhongxingaikuang" href="<?php echo U('Gaikuang/index');?>"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="shiyanjiagou" href="<?php echo U('Jiagou/index');?>"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="zhongxinchengguo" href="<?php echo U('Xiaoguo/index');?>"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="zhongxintese" href="<?php echo U('Tese/index');?>"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="shenbaozhuanlan" href="#"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="shiyanjiaoxue" href="#"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="yuyuepingtai" href="#"></a></li><li class="nav_seprator"></li><li class="nav_tongzhi"><a class="wangshangketang" href="#"></a></li></ul></div></div><div class="clear"></div><script language="javascript">function startmarquee(lh,speed,delay) {
var p=false;
var t;
var o=document.getElementById("info_content");
o.innerHTML+=o.innerHTML;
o.style.marginTop=0;
o.onmouseover=function(){p=true;}
o.onmouseout=function(){p=false;}

function start(){
t=setInterval(scrolling,speed);
if(!p) o.style.marginTop=parseInt(o.style.marginTop)-1+"px";
}
function scrolling(){
if(parseInt(o.style.marginTop)%lh!=0){
o.style.marginTop=parseInt(o.style.marginTop)-1+"px";
if(Math.abs(parseInt(o.style.marginTop))>=o.scrollHeight/2) o.style.marginTop=0;
}else{
clearInterval(t);
setTimeout(start,delay);
}
}
setTimeout(start,delay);
}
startmarquee(51,20,3000);
</script><script type="text/javascript">$(function(){
    $("#left_arrow").click(function(){
        if ($("#menu_banner_list").css("margin-left") == "-1000px") {
            $("#menu_banner_list").animate({
                marginLeft: "0px"
            }, 500);
        }else if ($("#menu_banner_list").css("margin-left") == "-2000px") {
            $("#menu_banner_list").animate({
                marginLeft: "-1000px"
            }, 500);
        }else{}
    });
    $("#right_arrow").click(function(){
        
        if ($("#menu_banner_list").css("margin-left") == "0px") {
            $("#menu_banner_list").animate({
                marginLeft: "-1000px"
            }, 500);
        }else if ($("#menu_banner_list").css("margin-left") == "-1000px") {
            $("#menu_banner_list").animate({
                marginLeft: "-2000px"
            }, 500);
        }else{}
    });
});
</script><div class="clear"></div><div id="footer-index">        浙江理工大学艺术与设计学院&nbsp;&nbsp;&nbsp;Zhejiang Sci-Tech University&nbsp;&nbsp;&nbsp;Art & Design Academy
    </div></div></body></html>