<?php 
/**
 * Chuỗi là gì?
 * Chuỗi là danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép
 */
$exStr = 'Học lập trình PHP';
var_dump($exStr);
echo '<br/>';
$exStr = "Học lập trình php";
var_dump($exStr);
echo '<br/>';
$exHtml = '<p><a href="https://www.youtube.com/watch?v=Q0n21LQoapw&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=24">Unicode</a></p>';
echo $exHtml;

const _EX_HTML_ = '<h3>Học Lập Trình PHP</h3>';
echo _EX_HTML_;
// Nguyên tắt làm việc với chuỗi 
$exStr = "Trung tâm đào tạo \"Unicode\" – Đào tạo lập trình PHP";
echo $exStr;
$exHtml = "<p><a href=\"https://www.youtube.com/watch?v=Q0n21LQoapw&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=24\">Unicode</a></p>";
echo $exHtml;





?>