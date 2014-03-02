<?php
if(!defined('THINK_PATH')) exit();
return $array = array (
  'DB_TYPE' => 'mysql',
  'DB_HOST' => '192.168.1.21',
  'DB_NAME' => 'ligongart',
  'DB_USER' => 'root',
  'DB_PWD' => '',
  'DB_PORT' => '3306',
  'DB_PREFIX' => 'ligong_',
  'DB_BACKUP' => '../Data/backup',
  'RBAC_ROLE_TABLE' => 'ligong_role',
  'RBAC_USER_TABLE' => 'ligong_user',
  'RBAC_ACCESS_TABLE' => 'ligong_access',
  'RBAC_NODE_TABLE' => 'ligong_node',
  'URL_CASE_INSENSITIVE' => true,
  'SITE_NAME' => '鱼福CMS企业网站系统',
  'SITE_TITLE' => '鱼福CMS企业网站系统',
  'SITE_KEYWORDS' => '鱼福网 鱼福CMS 企业网站建设 CMS系统',
  'SITE_DESCRIPTION' => '鱼福CMS企业网站系统，针对个人完全开源免费。',
  'URL_MODEL' => 0,
  'DEFAULT_THEME' => 'default',
  'WX_QRCODE' => NULL,
);
?>