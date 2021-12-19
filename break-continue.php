<?php
// ---------------BREAK
    for($i = 0; $i <= 10; $i++) {
        echo $i . '<br/>';
        if($i == 5) {
            break; //Thoát khỏi vòng lặp khi thỏa mãn điều kiện
        }
    };


// ---------------COUNTINUE
    for($i = 0; $i <= 10; $i++) {
        if($i == 5) continue; //Bỏ qua vòng lặp, các đoạn sau continue
        echo $i . '<br/>';
    }

// ---------------DIE EXIT dừng các chương trình ở bên dưới die hoặc exit
// die
die('Kết thúc'); //có thể truyền vào câu thông báo
// exit
// exit('Kết thúc');
/**
 * Sự khác nhau
 * exit có nguồn gốc từ ngôn ngữ lập trình c++
 * die có nguồn gốc từ ngôn ngữ lập trình Perl
 */
echo '<p>Học Lập Trình PHP</p>'
?>

<h1>Dừng cả ngoài này</h1>