<?php 
$str1 = 'Đào tạo lập trình';
$str2 = 'PHP';

// Nối và hiển thị
echo $str1. ' web với ngôn ngữ ' .$str2. '</br>';

// Nối và gán

$str3 = $str1.$str2;
echo $str3;

$str3 = 'Trung tâm đào tạo lập trình '.$str2;
echo $str3;
echo '</br>';

$str3 = "Trung tâm đào tạo lập trình $str2";
echo $str3;

$str3 = "Trung tâm đào tạo lập trình {$str2}tại Hà Nội</br>";
echo $str3;


$url = 'https://minhtri.net';
$imgURL = 'https://www.thegioinuochoa.com.vn/uploads/galleries/2020/06/uri/1592893990.693.jpg';
//Không muốn phá vở dấu "" chúng ta sử dụng ''
$htmlOutout = '<a href="'. $url .'"><img src="'. $imgURL .'"></img></a>';
echo $htmlOutout;
?>