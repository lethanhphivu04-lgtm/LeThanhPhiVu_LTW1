<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Bài 2</title>
</head>
<body>
    <h2>Bài 2: Toán tử và các hàm xử lý chuỗi cơ bản</h2>

    <?php
    // 1. Phép toán số học
    echo "<h3>1. Phép toán số học:</h3>";
    $a = 15;
    $b = 4;
    echo "Tổng: " . ($a + $b) . "<br>";
    echo "Hiệu: " . ($a - $b) . "<br>";
    echo "Tích: " . ($a * $b) . "<br>";
    echo "Thương: " . ($a / $b) . "<br>";
    echo "Chia lấy dư: " . ($a % $b) . "<br><br>";

    // 2. So sánh bằng các toán tử
    // Comment: == và != chỉ so sánh giá trị. === và !== so sánh cả giá trị và kiểu dữ liệu.
    echo "<h3>2. So sánh hai biến (int và string):</h3>";
    $numInt = 10;
    $numStr = "10";

    echo "numInt == numStr: "; var_dump($numInt == $numStr); echo "<br>";
    echo "numInt === numStr: "; var_dump($numInt === $numStr); echo "<br>";
    echo "numInt != numStr: "; var_dump($numInt != $numStr); echo "<br>";
    echo "numInt <> numStr: "; var_dump($numInt <> $numStr); echo "<br>";
    echo "numInt !== numStr: "; var_dump($numInt !== $numStr); echo "<br><br>";

    // 3. Phép tăng trước và tăng sau
    // Comment: ++$x tăng giá trị trước rồi mới trả về. $x++ trả về giá trị trước rồi mới tăng.
    echo "<h3>3. Phép tăng ++$x và $x++:</h3>";
    $x1 = 5;
    echo "Ban đầu x1 = 5 <br>";
    echo "Giá trị khi dùng ++x1: " . (++$x1) . "<br>";
    echo "Giá trị x1 sau đó: " . $x1 . "<br><br>";

    $x2 = 5;
    echo "Ban đầu x2 = 5 <br>";
    echo "Giá trị khi dùng x2++: " . ($x2++) . "<br>";
    echo "Giá trị x2 sau đó: " . $x2 . "<br><br>";

    // 4. Toán tử nối chuỗi . và .=
    // Comment: . dùng để ghép 2 chuỗi lại. .= dùng để nối thêm chuỗi vào biến hiện tại.
    echo "<h3>4. Nối chuỗi với . và .= :</h3>";
    $str1 = "Lập trình ";
    $str2 = "Web PHP";
    $strCombined = $str1 . $str2;
    echo "Kết quả dùng toán tử . : " . $strCombined . "<br>";

    $strTarget = "Lập trình ";
    $strTarget .= "Web PHP";
    echo "Kết quả dùng toán tử .= : " . $strTarget . "<br><br>";

    // 5. Đếm số lượng ký tự
    // Comment: strlen() đếm theo số byte. mb_strlen() đếm số ký tự chuẩn tiếng Việt UTF-8.
    echo "<h3>5. Đếm số lượng ký tự (strlen và mb_strlen):</h3>";
    $strNoDau = "Hello World";
    $strCoDau = "Lập trình Web";
    echo "strlen(Hello World): " . strlen($strNoDau) . "<br>";
    echo "strlen(Lập trình Web): " . strlen($strCoDau) . " (bytes) <br>";
    echo "mb_strlen(Lập trình Web): " . mb_strlen($strCoDau) . " (ký tự) <br><br>";

    // 6. Chuyển chữ hoa và chữ thường
    // Comment: strtoupper/strtolower chỉ hoạt động với ASCII. mb_strtoupper/mb_strtolower hỗ trợ tiếng Việt có dấu.
    echo "<h3>6. Chuyển chữ hoa và chữ thường:</h3>";
    $text = "lập trình php";
    echo "strtoupper: " . strtoupper("hello") . "<br>";
    echo "strtolower: " . strtolower("HELLO") . "<br>";
    echo "mb_strtoupper: " . mb_strtoupper($text) . "<br>";
    echo "mb_strtolower: " . mb_strtolower("LẬP TRÌNH PHP") . "<br><br>";

    // 7. Ép kiểu chuỗi về int
    echo "<h3>7. Ép kiểu chuỗi về int:</h3>";
    $s1 = (int)"123 abc";
    $s2 = (int)"abc 123";
    echo 'var_dump((int)"123 abc"): '; var_dump($s1); echo "<br>";
    echo 'var_dump((int)"abc 123"): '; var_dump($s2); echo "<br><br>";

    // 8. Hiển thị kiểu dữ liệu bằng var_dump()
    echo "<h3>8. Hiển thị giá trị và kiểu dữ liệu (var_dump):</h3>";
    $varInt = 100;
    $varFloat = 10.5;
    $varString = "Xin chào";
    $varBool = true;

    var_dump($varInt); echo "<br>";
    var_dump($varFloat); echo "<br>";
    var_dump($varString); echo "<br>";
    var_dump($varBool); echo "<br>";
    ?>
</body>
</html>
