<?php 
// -------------------------------------Kiểu number
$age = 21;
var_dump($age);

// Ép kiểu
$soThuc = 22.5;
var_dump($soThuc);
$soNguyen = (int)$soThuc;
var_dump($soNguyen);

// Kiểm tra kiểu số nguyên
// $check = is_int($age);
$check = is_integer($age);
var_dump($check);

// -------------------------------------Kiểu boolean

$check = 0;
$check = (bool)$check;

// Ép kiểu
$checkBoolean = is_bool($check);
var_dump($check);

// -------------------------------------Kiểu số thực
$fee = 10.5;
var_dump($fee);

// Ép kiểu
$fee = 10;
$fee = (float)$fee;
var_dump($fee);
$checkFloat = is_float($fee);
var_dump($checkFloat);

// -------------------------------------Kiểu chuỗi
$message = 'Đây là thông báo';
var_dump($message);

// Ép kiểu
$message = 10;
var_dump($message);
$message = (string)$message;
$checkString = is_string($message);
var_dump($checkString);

// -------------------------------------Kiểu mảng
$carArray = [];
// Ép kiểu 
$carArray = (array)$carArray;
$checkArray = is_array($carArray);
var_dump($carArray);
var_dump($checkArray);

// -------------------------------------Kiểu rỗng NULL
$total = null;
$total = (int)$total;
$total = (string)$total;
$total = (bool)$total;
$total = (array)$total;
var_dump($total);

$checkNull = is_null($total);
var_dump($checkNull);

// -------------------------------------Kiểu resource
$curl = curl_init();
$checkType = get_resource_type($curl); // https://www.php.net/manual/en/resource.php
var_dump($curl);
var_dump($checkType);

// -------------------------------------Kiểu đối tượng Object

$dataCustom = [
    'Minh Trí'
];
// Ép kiểu
$dataCustom = (object)$dataCustom;
$checkObject = is_object($dataCustom);
var_dump($dataCustom);
var_dump($checkObject);

$customerObject = new stdClass();
$customerObject->age = 30;

/**
 * Phân biệt empty và null
 * Đều được khai báo biến bằng một giá trị ban đầu
 * $message1 = null; rỗng 
 * $message2 = ''; trống thuộc type string, hệ thống vẫn phải cấp phát bộ nhớ 
 * /
?>