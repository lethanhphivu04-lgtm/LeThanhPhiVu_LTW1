<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Bài 3</title>
</head>
<body>
    <h2>Bài 3: Thao tác với chuỗi trong PHP</h2>

    <?php
    // 1. Loại bỏ khoảng trắng ở đầu và cuối bằng trim()
    echo "<h3>1. Loại bỏ khoảng trắng 2 đầu (trim):</h3>";
    $strSpace = "   Lập Trình Web PHP   ";
    echo "Chuỗi ban đầu: [" . $strSpace . "] <br>";
    echo "Sau khi dùng trim(): [" . trim($strSpace) . "] <br><br>";

    // 2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)
    echo "<h3>2. Loại bỏ khoảng trắng trái / phải (ltrim, rtrim):</h3>";
    echo "Dùng ltrim(): [" . ltrim($strSpace) . "] <br>";
    echo "Dùng rtrim(): [" . rtrim($strSpace) . "] <br><br>";

    // 3. Cắt chuỗi bằng substr()
    echo "<h3>3. Cắt chuỗi (substr):</h3>";
    $longText = "Welcome to Web Programming Course with PHP and MySQL!";
    echo "Chuỗi ban đầu (> 30 ký tự): " . $longText . "<br>";
    echo "10 ký tự đầu tiên: " . substr($longText, 0, 10) . "<br>";
    echo "Từ ký tự thứ 5 đến hết: " . substr($longText, 4) . "<br><br>";

    // 4. Thay thế chuỗi bằng str_replace()
    echo "<h3>4. Thay thế chuỗi (str_replace):</h3>";
    echo "Chuỗi ban đầu: " . $longText . "<br>";
    $newText = str_replace("PHP and MySQL", "Python and HTML", $longText);
    echo "Chuỗi sau khi thay thế: " . $newText . "<br>";
    ?>
</body>
</html>
