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
?>
    <h3>Tiêu đề 1</h3>
    <h4>Tiêu đề 2</h4>
    <p>Nội dung đoạn văn</p>
<?php
} else {
?>
    <p>Không hợp lệ</p>
<?php }

if ($number == 10) :
?>
    <h3>Tiêu đề 1</h3>
    <h4>Tiêu đề 2</h4>
    <p>Nội dung đoạn văn</p>
<?php
else :
?>
    <p>Không hợp lệ</p>
<?php endif; ?>