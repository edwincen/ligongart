<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel='stylesheet' type="text/css" href="../Public/css/style.css" /><script type="text/javascript" src="../Public/js/jquery-1.7.1.min.js"></script><script type="text/javascript" src="../Public/js/common.js"></script><script type="text/javascript" src="../Public/js/jquery-yufu5.js"></script><script type="text/javascript">            $(function(){
                if($.browser.msie&&$.browser.version=="6.0"&&$("html")[0].scrollHeight>$("html").height())
                    $("html").css("overflowY","scroll");
            });
        </script><script language="JavaScript"><!--
        //指定当前组模块URL地址 
        var URL = '__URL__';
        var APP	 = '__APP__';
        var SELF='__SELF__';
        var PUBLIC='__PUBLIC__';
        var Public = '../Public/';
        //--></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>修改栏目</h2></div><div class="form_list"><form method='post' id="form1" name="form1" action="<?php echo U('Category/update');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt> 选择模型：</dt><dd><select name="modelname"><?php if(is_array($mdldata)): $i = 0; $__LIST__ = $mdldata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mvo): $mod = ($i % 2 );++$i; if($mvo['table'] == $vo['modelname']): ?><option value="<?php echo ($mvo['table']); ?>" selected="selected"><?php else: ?><option value="<?php echo ($mvo['table']); ?>"><?php endif; echo ($mvo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></dd></dl><dl><dt> 上级栏目：</dt><dd><select name="pid"><option value="0">≡ 作为一级栏目 ≡</option><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cvo): $mod = ($i % 2 );++$i; if($cvo['id'] == $vo['pid']): ?><option value="<?php echo ($cvo['id']); ?>" selected="selected"><?php else: ?><option value="<?php echo ($cvo['id']); ?>"><?php endif; $__FOR_START_79133298__=1;$__FOR_END_79133298__=$cvo['level'];for($i=$__FOR_START_79133298__;$i < $__FOR_END_79133298__;$i+=1){ ?>&nbsp;&nbsp;<?php } if($cvo['level'] > 1): ?>├&nbsp;<?php endif; echo ($cvo['catname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></dd></dl><dl><dt> 栏目名称：</dt><dd><input type="text" class="ipt3" name="catname" value="<?php echo ($vo["catname"]); ?>" /></dd></dl><dl><dt> 排序值：</dt><dd><input type="text" class="ipt1" name="listorder" value="<?php echo ($vo["listorder"]); ?>" /></dd></dl><dl><dt> 状态：</dt><dd><select name="status"><option value="1" <?php if(($vo["status"]) == "1"): ?>selected="selected"<?php endif; ?>>显示</option><option value="0" <?php if(($vo["status"]) == "0"): ?>selected="selected"<?php endif; ?>>不显示</option></select></dd></dl><dl><dt>栏目标题：</dt><dd><input type="text" class="ipt6" name="title" value="<?php echo ($vo["title"]); ?>" /><span class="fontcolor">title（栏目标题）针对搜索引擎设置的标题</span></dd></dl><dl><dt>栏目关键词：</dt><dd><input type="text" class="ipt6" name="keywords" value="<?php echo ($vo["keywords"]); ?>" /><span class="fontcolor">meta keywords（栏目关键词）关键字中间用半角逗号隔开</span></dd></dl><dl><dt>栏目描述：</dt><dd><textarea name="description" style="width:400px; height:60px; padding-left: 3px; float: left;"><?php echo ($vo["description"]); ?></textarea><span class="fontcolor" style="width: 260px; float: left;">meta description（栏目描述）针对搜索引擎设置的网页描述</span></dd></dl></div><div class="form_b"><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div></body></html>