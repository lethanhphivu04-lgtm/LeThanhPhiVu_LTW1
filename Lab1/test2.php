<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Bài 2</title>
</head>
<body>
    <h2>Bài 2: Kiểu dữ liệu, toán tử và chuỗi trong PHP</h2>

    <?php
    // 1. Phép toán số học với 2 số nguyên
    $a = 15;
    $b = 4;
    echo "Cộng: " . ($a + $b) . "<br>";
    echo "Trừ: " . ($a - $b) . "<br>";
    echo "Nhân: " . ($a * $b) . "<br>";
    echo "Chia: " . ($a / $b) . "<br>";
    echo "Chia lấy dư: " . ($a % $b) . "<br><br>";

    // 2. So sánh biến số nguyên và chuỗi số
    // Note: == chỉ so sánh giá trị; === so sánh cả giá trị lẫn kiểu dữ liệu.
    $numInt = 10;
    $numStr = "10";

    echo "== : "; var_dump($numInt == $numStr); echo "<br>";
    echo "=== : "; var_dump($numInt === $numStr); echo "<br>";
    echo "!= : "; var_dump($numInt != $numStr); echo "<br>";
    echo "<> : "; var_dump($numInt <> $numStr); echo "<br>";
    echo "!== : "; var_dump($numInt !== $numStr); echo "<br><br>";

    // 3. Phép tăng trước (++$x) và tăng sau ($x++)
    // Note: ++$x tăng trước rồi trả về giá trị; $x++ trả về giá trị trước rồi mới tăng.
    $x1 = 5;
    echo "Tăng trước (++\$x1): " . (++$x1) . "<br>";

    $x2 = 5;
    echo "Tăng sau (\$x2++): " . ($x2++) . " (sau phép tính x2 = $x2)<br><br>";

    // 4. Toán tử nối chuỗi . và .=
    // Note: . dùng để ghép 2 chuỗi; .= dùng để nối thêm chuỗi vào biến hiện tại.
    $str1 = "Lập trình ";
    $str2 = "Web PHP";
    echo "Toán tử . : " . ($str1 . $str2) . "<br>";

    $strTarget = "Lập trình ";
    $strTarget .= "Web PHP";
    echo "Toán tử .= : " . $strTarget . "<br><br>";

    // 5. Đếm số lượng ký tự với strlen() và mb_strlen()
    // Note: strlen() đếm số byte; mb_strlen() đếm số ký tự tiếng Việt (UTF-8).
    $strNoDau = "Hello World";
    $strCoDau = "Lập trình Web";
    echo "strlen (không dấu): " . strlen($strNoDau) . "<br>";
    echo "strlen (có dấu): " . strlen($strCoDau) . " bytes<br>";
    echo "mb_strlen (có dấu): " . mb_strlen($strCoDau) . " ký tự<br><br>";

    // 6. Chuyển chữ hoa và chữ thường
    // Note: strtoupper/strtolower cho ASCII; mb_strtoupper/mb_strtolower hỗ trợ tiếng Việt có dấu.
    $text = "Lập trình PHP";
    echo "strtoupper: " . strtoupper("hello") . "<br>";
    echo "strtolower: " . strtolower("HELLO") . "<br>";
    echo "mb_strtoupper: " . mb_strtoupper($text) . "<br>";
    echo "mb_strtolower: " . mb_strtolower($text) . "<br><br>";

    // 7. Ép kiểu chuỗi về int
    $s1 = (int)"123 abc";
    $s2 = (int)"abc 123";
    echo 'Ép kiểu "123 abc": '; var_dump($s1); echo "<br>";
    echo 'Ép kiểu "abc 123": '; var_dump($s2); echo "<br><br>";

    // 8. Hiển thị kiểu dữ liệu bằng var_dump()
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
