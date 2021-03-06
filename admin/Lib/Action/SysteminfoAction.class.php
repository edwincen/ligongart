<?php

class SysteminfoAction extends CommonAction {
    public function index() {
        $info = array(
            '鱼福CMS企业版'=>'3.0 [ <a href="http://www.yufu5.net" target="_blank">查看最新版本</a> ]',
            '完全开发手册'=>'<a href="http://www.yufu5.net/doc" target="_blank">在线阅读或下载</a>',
            '基础标签说明'=>'<a href="http://www.yufu5.net/doc" target="_blank">在线阅读或下载</a>',
            '当前操作系统'=>PHP_OS,
            '当前运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式'=>php_sapi_name(),
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
            );
        $this->assign('info',$info);
        $this->display();
    }
    
}

?>
