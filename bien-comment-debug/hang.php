<?php 
define('_WEB_HOST_ROOT', 'https://minhtri.net');
echo _WEB_HOST_ROOT;
echo '</br>';
const _WEB_PATH_ROOT = 'C:/wampp/htdocs';
echo _WEB_PATH_ROOT;
echo '</br>';
$checkDefine = defined('_WEB_HOST_ROOT'); //Kiểm tra hằng số có tồn tại không
var_dump($checkDefine);
?>