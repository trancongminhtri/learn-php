<?php 
/**
 * Thứ tự Import;
 * Header
 * Content
 * Footer
 * 
 * Cú pháp include 
 * include 'path_to_php_file';
 * include('path_to_php_file');
 */
$path_dir = __DIR__.'/includes'; //đường dẫn tuyệt đối

// Import header.php
include_once $path_dir.'/header.php'; //chỉ import một lần 
include_once $path_dir.'/header.php';
include $path_dir.'/header.php';
include $path_dir.'/header.php';

// Import content.php
include $path_dir.'/content.php';

// Import footer.php
include $path_dir.'/footer.php';

echo '-----------------require-----------------';

// Import header.php
require_once $path_dir.'/header.php'; //chỉ import một lần 
require_once $path_dir.'/header.php';
require $path_dir.'/header.php';
require $path_dir.'/header.php';

// Import content.php
require $path_dir.'/content.php';

// Import footer.php
require $path_dir.'/footer.php';
echo '-----------------end require-----------------';

/**
 * 1. include, include_once nếu import lỗi => các câu lệnh bên dưới vẫn chạy
 * 2. require, require_once nếu import lỗi => các câu lệnh bên dưới sẽ dừng
 */



?>
