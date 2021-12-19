<?php

/**
 * 1 Toán tử 3 ngôi
 * 2 Cú pháp thay thế if
 * 3 Cú pháp thay thế for
 * 4 Cú pháp thay thế while
 * 5 Cú pháp thay thế foreach
 */
$number = 10;
if ($number == 10) {
    echo 'Bạn đủ tuổi';
} else {
    echo 'Bạn chưa đủ tuổi';
}

echo '<br/>';
// 1 Toán tử 3 ngôi
echo $number == 10 ? 'Bạn đủ tuổi' : 'Bạn không đủ tuổi';

$printString = $number == 10 ? 'Bạn đủ tuổi' : 'Bạn không đủ tuổi';
echo $printString;

/**
 * Cú pháp:
 * Biểu thức điều kiện ? Kết quả đúng : Kết quả sai
 * 
 * Lưu ý:
 * - Toán tử 3 ngôi phải gán 1 biểu thức (Gán, echo)
 * - Luôn luôn phải có kết quả sai
 * (Nếu không muốn hiển thị thì để là false, null, trống (''))
 */

// Ví dụ không lấy kết quả sai
$printString = $number == 10 ? 'Bạn đủ tuổi' : false;
echo $printString;
