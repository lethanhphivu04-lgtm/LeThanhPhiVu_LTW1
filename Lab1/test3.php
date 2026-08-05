<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Bài 3</title>
</head>
<body>
    <h2>Bài 3: Thao tác xử lý chuỗi trong PHP</h2>

    <?php
    // 1. Loại bỏ khoảng trắng ở đầu và cuối chuỗi bằng trim()
    $strSpace = "   Lập Trình Web PHP   ";
    echo "Chuỗi ban đầu: [" . $strSpace . "] <br>";
    echo "Sau khi dùng trim(): [" . trim($strSpace) . "] <br><br>";

    // 2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)
    echo "Dùng ltrim() (bên trái): [" . ltrim($strSpace) . "] <br>";
    echo "Dùng rtrim() (bên phải): [" . rtrim($strSpace) . "] <br><br>";

    // 3. Cắt chuỗi bằng substr()
    $longText = "Welcome to Web Programming Course with PHP and MySQL!";
    echo "Chuỗi ban đầu (> 30 ký tự): " . $longText . "<br>";
    echo "10 ký tự đầu tiên: " . substr($longText, 0, 10) . "<br>";
    echo "Từ ký tự thứ 5 đến hết: " . substr($longText, 4) . "<br><br>";

    // 4. Thay thế chuỗi bằng str_replace()
    $newText = str_replace("PHP and MySQL", "Python and HTML", $longText);
    echo "Chuỗi sau khi dùng str_replace(): " . $newText . "<br>";
    ?>
</body>
</html>
