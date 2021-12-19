<?php 
/**
 * Chuỗi là gì?
 * Chuỗi là danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép
 */

/**
 * Nỗi chuỗi 
 * Để nối chuỗi trong PHP, chúng ta sẽ dùng dấu chấm (.)
 */
$selectHTML = '<select name="category">';
for ($i = 2000; $i <=2021; $i++) {
    $selectHTML.= '<option value="'.$i.'">Năm '.$i.'</option>';
}
$selectHTML.='</select>';
echo $selectHTML





?>