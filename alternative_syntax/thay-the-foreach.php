<?php

/**
 * 1 Toán tử 3 ngôi
 * 2 Cú pháp thay thế if
 * 3 Cú pháp thay thế for
 * 4 Cú pháp thay thế while
 * 5 Cú pháp thay thế foreach
 */
$myArray = [
    'item 1',
    'item 2',
    'item 3',
];
foreach ($myArray as $item) {
    echo $item . '<br/>';
}

// Cú pháp thay thế 
foreach ($myArray as $item) :
echo $item . '<br/>';
endforeach;
?>