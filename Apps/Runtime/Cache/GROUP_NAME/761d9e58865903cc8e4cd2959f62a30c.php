<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php echo ($title); ?></title><meta name="keywords" content="<?php echo ($keywords); ?>" /><meta name="description" content="<?php echo ($description); ?>" /><link href="../Public/css/style.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="../Public/js/jquery.form.js"></script><script type="text/javascript" src="../Public/js/common.js"></script><style type="text/css"></style></head><body id="other_body"><!--百度分享--><div id="header-bg"></div><div id="container"><div id="header"><div class="logo"><a href="__APP__"><img src="__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('logo',1); echo $set;?>" /></a></div><div class="nav"><ul><li id="nav_0"><a href="__APP__" style="text-align:right">首页&nbsp;&nbsp;|</a></li><?php if(is_array($nav_list)): $i = 0; $__LIST__ = $nav_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="nav_<?php echo ($vo["id"]); ?>"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["catname"]); ?>&nbsp;|</a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="member"><?php if($_SESSION['account']!= null): ?>欢迎您！<a href="<?php echo U('Member/index');?>"><?php echo (session('account')); ?></a>&nbsp;&nbsp;<a href="<?php echo U('Member/logout');?>" target='_top'>退出</a>&nbsp;&nbsp;<a href="<?php echo U('Shopcart/index');?>">购物车</a><?php else: ?><a href="<?php echo U('Member/register');?>">注册</a>&nbsp;|&nbsp;<a href="<?php echo U('Member/login');?>">登录</a><?php endif; ?></div></div><div id="main"><div id="breadcrumb"><span>首页&nbsp;/&nbsp;中心特色&nbsp;/&nbsp;辐射作用</span></div><div class="xiaoguo_content" ><div class="xiaoguo_nav"><a class="xiaoguoblock" href="<?php echo U('Tese/index');?>" >中心特色</a><a class="xiaoguoblock" href="<?php echo U('Tese/fushe');?>" style="color:white">辐射作用</a><div class="remainblock"></div></div><div class="xiaoguo_body"><div class="title">
                辐射作用
            </div><div class="content"><?php echo ($data["content"]); ?></div></div></div></div><div class="clear"></div><div id="footer">        浙江理工大学艺术与设计学院&nbsp;&nbsp;&nbsp;Zhejiang Sci-Tech University&nbsp;&nbsp;&nbsp;Art & Design Academy
    </div></div></body></html>