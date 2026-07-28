<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Bài 1</title>
</head>
<body>
    <h2>Bài 1: Khai báo biến và hằng số trong PHP</h2>

    <?php
    // 1. In trực tiếp thông tin
    echo "<h3>1. In thông tin trực tiếp:</h3>";
    echo "Họ và tên: Lê Thanh Phi Vũ <br>";
    echo "Ngày sinh: 01/01/2004 <br>";
    echo "Mã số sinh viên: 17_2123110178 <br><br>";

    // 2. Khai báo biến và in giá trị
    echo "<h3>2. In thông tin từ biến:</h3>";
    $hoTen = "Lê Thanh Phi Vũ";
    $mssv = "17_2123110178";
    $sdt = "0901234567";
    $ngaySinh = "01/01/2004";

    echo "Họ và tên: " . $hoTen . "<br>";
    echo "MSSV: " . $mssv . "<br>";
    echo "Số điện thoại: " . $sdt . "<br>";
    echo "Ngày sinh: " . $ngaySinh . "<br><br>";

    // 3. Khai báo hằng số kết nối CSDL
    echo "<h3>3. Hằng số CSDL:</h3>";
    define("HOST", "localhost");
    define("DATABASE", "ql_sinhvien");
    define("USERNAME", "root");
    define("PASSWORD", "");

    echo "HOST: " . HOST . "<br>";
    echo "DATABASE: " . DATABASE . "<br>";
    echo "USERNAME: " . USERNAME . "<br>";
    echo "PASSWORD: " . PASSWORD . "<br><br>";

    // 4. Sự khác nhau giữa nháy kép (" ") và nháy đơn (' ')
    // Nháy kép: giải mã biến bên trong chuỗi.
    // Nháy đơn: coi mọi thứ bên trong là chuỗi văn bản thuần túy.
    echo "<h3>4. Phân biệt nháy kép và nháy đơn:</h3>";
    echo "Dấu nháy kép: Xin chào $hoTen <br>";
    echo 'Dấu nháy đơn: Xin chào $hoTen <br>';
    ?>
</body>
</html>
