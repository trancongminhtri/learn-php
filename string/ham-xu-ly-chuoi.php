<?php 
// link https://www.php.net/manual/en/ref.strings.php

// Các hàm xử lý chuỗi
$str = 'Trung tâm đào tạo lập trình "Unicode"';

// Xử lý chuỗi
// 1. Thêm ký tự escape vào phía trước các ký tự mong muốn
// addcslashes($str, $listChar)
$str = addcslashes($str, 'Ul"'); //thêm \ trc u và l thì ul
echo $str;
echo '<br/>';

// 2. Thêm ký tự escape vào phía trước dấu ", ', \
$str = 'Trung tâm đào \ tạo lập trình "Unicode"';
$str = addslashes($str);
echo $str;
echo '<br/>';

$str = 'Trung tâm đào tạo lập trình "Unicode"';
$str = addslashes($str);
// 3. Loại bỏ tất cả các ký tự escape có trong chuỗi
$str = stripslashes($str);
echo $str . '<br/>';

// 4. Chuyển chuỗi thành mảng
$str = 'Trung tâm Unicode';
$arr = explode(' ', $str);
print_r($arr);
echo '<br/>';

// 5. Chuyển mảng thành chuỗi
$str = implode('-', $arr);
echo $str;
echo '<br/>';

// 6. Lấy độ dài của chuỗi
$str = 'Trung tâm Unicode';
$lengthStr = strlen($str);
echo 'Độ dài '.$lengthStr;
echo '<br/>';

// 7. Lấy số chữ trong chuỗi
$str = 'Xin chao Unicode';
$wordCount = str_word_count($str);
echo 'Số chữ là: '.$wordCount;
echo '<br/>';

// 8. Lặp chuỗi theo số lần xác định
$str = 'Unicode';
$str = str_repeat($str, 5);
echo $str;
echo '<br/>';

// 9. Tìm kiếm và thay thế
$str = 'C:\xampp\htdocs\hocphp';
// $str = 'Trung tâm đào tạo lập trình "Unicode"';
// $str = str_replace('Unicode', 'PHP', $str); //muốn xóa nó đi thì để trống
// $str = str_replace('Unicode', '', $str);
$str = str_replace('\\', '/', $str);
echo $str;
echo '<br/>';

// 10. Hàm mã hóa 1 chiều (32 ký tự)
$str = '123456';
$str = md5($str);
echo $str. '<br/>';
echo strlen($str). '<br/>';

// 11. Hàm mã hóa 1 chuỗi (40 ký tự)
$str = '123456';
$str = sha1($str);
echo $str.'<br/>';
echo strlen($str).'<br/>';

// 12. Chuyển chuỗi html thành dạng thực thể
$str = '<p>Đào tạo PHP</p>';
$str = htmlentities($str);
echo $str;

// 13. Chuyển từ dạng thực thể sang chuỗi html
$str = html_entity_decode($str);
echo $str;

// 14. Loại bỏ thẻ html
$str = '<p>Trung tâm đào tạo <a href="">lập trình</a><strong> tại Unicode</strong></p>';
$str = strip_tags($str, '<a>'); //loại bỏ các thẻ html, trừ các thẻ mình muốn vd <a>
echo $str.'<br/>';

// 15. Lấy chuỗi con từ chuỗi cha
$str = 'Trung tâm đào tạo Unicode';
$subStr = substr($str, 6, 4);
$subStr = substr($str, -7); //nếu muốn lấy từ đuôi
echo $subStr.'<br/>';

// 16. Tách chuỗi từ ký tự cho trước cho đến hết chuỗi
$str = 'hoanggan.web@gmail.com';
$subStr = strstr($str, '.');
echo $subStr.'<br/>';

// 17. Tìm chuỗi và trả về số thứ tự
$str = 'Trung tam dao tao Unicode';
$position = strpos($str, 'tam'); //nếu không có kết quả thì trả về false
var_dump($position);

// 18. Cắt bỏ và thay thế chuõi
/**
 * Chèn: nếu tham số cuối cùng bằng 0  
 * Đè
 */
$str = 'Trung tam dao tao Unicode';
$str = substr_replace($str, '@', 0, 1);
echo $str.'<br/>';

// 19. Chuyển các ký tự sang dạng viết thường
$str = 'Trung tam dao tao Unicode';
$str = strtolower($str); //Không hỗ trợ tiếng việt
$str = mb_strtolower($str, 'UTF-8'); //Hỗ trợ tiếng việt 
echo $str.'<br/>';

// 20. Chuyển các ký tự thành chữ hoa
$str = 'Trung tam dao tao Unicode';
$str = strtoupper($str); //Không hỗ trợ tiếng việt
$str = mb_strtoupper($str, 'UTF-8'); //Hỗ trợ tiếng việc
echo $str.'<br/>';

// 21. Chuyển chữ cái đầu tiên thành chứ hoa
$str = 'trung tam dao tao Unicode';
$str = ucfirst($str);
echo $str.'<br/>';

// 22. Chuyển chữ cái đầu tiên thành chữ thường
$str = 'Trung tam dao tao Unicode';
$str = lcfirst($str);
echo $str.'<br/>';

// 23. Chuyển ký tự đầu tiên thuộc chữ trong chuỗi thành chữ hoa
$str = 'trung tam dao tao Unicode';
$str = ucwords($str);
echo $str.'<br/>';

// 24. Xóa ký tự đầu cuối
$str = ' Trung tam dao tao Unicode ';
$str = trim($str);
// $str = trim($str, ' T');
var_dump($str);
echo '<br/>';

$url = 'https://unicode.vn/khoa-hoc/khoa-hoc-php/';
$url = trim($url, '/');
echo $url.'<br/>';

// 25. Xóa ký tự bên trái
$str = ' Trung tam dao tao Unicode ';
$str = ltrim($str);
var_dump($str);
echo '<br/>';

// 26. Xóa ký tự bên phải
$str = ' Trung tam dao tao Unicode ';
$str = rtrim($str);
var_dump($str);
echo '<br/>';

// 27. Tách chuỗi lớn thành từng chuỗi nhỏ
$str = '121212';
//tham số thứ 2 là số lượng ký tự của chuỗi con, tham số thứ 3 ký tự sẽ ngăn cách các chuỗi con
$str = chunk_split($str, 2, ':'); 
echo $str.'<br/>';

// 28. Chuyển ký tự xuống dòng (\n) thành thẻ <br/>
// Lưu ý: \n viết trong dấu ""
$str = "Trung tam dao tao \n Unicode";
echo $str.'<br/>';

// 29. Chuyển json thành mảng hoặc object
$strJson = '{"item1":"Value1", "item2":"Value2"}';
echo $strJson.'<br/>';
$jsonArray = json_decode($strJson, true); // nếu thêm true sẽ thành array, ko thêm thì thành object
print_r($jsonArray);
echo '<br/>';

// 30. Chuyển từ mảng, object thành json
$strJson = json_encode($jsonArray);
echo $strJson.'<br/>' ;
?>