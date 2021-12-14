<?php 
    $customerName = 'Minh Trí';
    $customerDetailEmail = 'trancongminhtri@gmail.com';
    $customerAge = 30;

    echo $customerName;
    echo '</br>'; //làm cho echo xuống dòng
    echo 'Học lập trình </br>';
    echo $customerDetailEmail;
    // Gán lại
    echo $customerAge;
    echo '</br>';
    $customerAge = 29; //biến có thể đổi giá trị khi bị gán sau cùng
    echo $customerAge;

    // echo có thể hiện ra một số một chuỗi một biến

    var_dump($customerAge); //int(29)

?>