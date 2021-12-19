<?php

/**
 * 1 Toán tử 3 ngôi
 * 2 Cú pháp thay thế if
 * 3 Cú pháp thay thế for
 * 4 Cú pháp thay thế while
 * 5 Cú pháp thay thế foreach
 */
$i = 0;
while ($i <= 10) {
    echo $i . '<br/>';
    $i++;
}

// Cú pháp thay thế
$i = 0;
while ($i <= 10) :
echo $i . '<br/>';
$i++;
endwhile;
?>