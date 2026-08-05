<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Bài 1</title>
</head>
<body>
    <h2>Bài 1: Khai báo biến và hằng số trong PHP</h2>

    <?php
    // 1. In thông tin trực tiếp bằng echo
    echo "Họ và tên: Nguyễn Văn A <br>";
    echo "Ngày sinh: 01/01/2005 <br>";
    echo "Mã số sinh viên: SV001 <br><br>";

    // 2. Khai báo biến và in giá trị
    $hoTen = "Nguyễn Văn A";
    $mssv = "SV001";
    $sdt = "0901234567";
    $ngaySinh = "01/01/2005";

    echo "Họ và tên: " . $hoTen . "<br>";
    echo "MSSV: " . $mssv . "<br>";
    echo "Số điện thoại: " . $sdt . "<br>";
    echo "Ngày sinh: " . $ngaySinh . "<br><br>";

    // 3. Khai báo hằng số CSDL
    define("HOST", "localhost");
    define("DATABASE", "ql_sinhvien");
    define("USERNAME", "root");
    define("PASSWORD", "");

    echo "HOST: " . HOST . "<br>";
    echo "DATABASE: " . DATABASE . "<br>";
    echo "USERNAME: " . USERNAME . "<br>";
    echo "PASSWORD: " . PASSWORD . "<br><br>";

    // 4. Phân biệt nháy kép (" ") và nháy đơn (' ')
    /*
      Multi-line comment:
      - Nháy kép: Cho phép in giá trị của biến đính kèm bên trong.
      - Nháy đơn: Coi mọi thứ bên trong là chuỗi văn bản thuần túy.
    */
    echo "Dấu nháy kép: Xin chào $hoTen <br>";
    echo 'Dấu nháy đơn: Xin chào $hoTen <br>';
    ?>
</body>
</html>
