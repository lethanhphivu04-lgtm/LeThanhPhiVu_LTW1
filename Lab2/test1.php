<?php
// Khởi tạo mảng menu
$menus = [
    "Trang chủ",
    "Tin tức",
    "Liên hệ",
    "Giới thiệu"
];

// Khởi tạo mảng chứa danh sách môn học
$subjects = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL"
];

// Khởi tạo mảng chứa danh sách sinh viên
$students = [
    [
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    ]
];

// Khởi tạo các mảng lưu danh sách cho Form
$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];

$classes = [
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
];

$genders = [
    "Nam",
    "Nữ",
    "Khác"
];

$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 2 - Bài 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding: 20px;
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        nav {
            background: rgb(4, 40, 94);
            margin-bottom: 20px;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav li {
            flex: 1;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }
        nav ul li:hover {
            background: #084298;
        }
        .s1 {
            width: 500px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s1 ul {
            list-style: none;
        }
        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }
        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }
        .s2 {
            width: 700px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        .s2 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }
        .s2 th {
            background: rgb(4, 40, 94);
            color: white;
            padding: 12px;
            text-align: left;
        }
        .s2 td {
            padding: 10px 12px;
            border-bottom: 1px solid #dee2e6;
        }
        .s2 tr:hover {
            background: #e7f1ff;
        }
        .s3 {
            width: 500px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        .s3 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s3 div {
            margin-bottom: 15px;
        }
        .s3 label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .s3 .radio-group,
        .s3 .checkbox-group {
            display: flex;
            gap: 15px;
        }
        .s3 button {
            padding: 8px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        .s3 button[type="submit"] {
            background: #0d6efd;
            color: white;
        }
        .s3 button[type="reset"] {
            background: #6c757d;
            color: white;
        }
    </style>
</head>
<body>

    <!-- ===== Menu ===== -->
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#"><?= $menu ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <!-- ===== Danh sách môn học ===== -->
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php
            foreach ($subjects as $subject) {
                echo "<li>$subject</li>";
            }
            ?>
        </ul>
    </section>

    <!-- ===== Bảng sinh viên ===== -->
    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã SV</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $index => $student) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $student["id"] ?></td>
                        <td><?= $student["name"] ?></td>
                        <td><?= $student["gender"] ?></td>
                        <td><?= $student["class"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <!-- ===== Form đăng ký thông tin sinh viên ===== -->
    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">
            <div>
                <label>Họ và tên</label>
                <input type="text" name="fullname">
            </div>
            <div>
                <label>Khoa</label>
                <select name="faculty">
                    <?php foreach ($faculties as $faculty) { ?>
                        <option><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Lớp</label>
                <select name="class">
                    <?php foreach ($classes as $key => $class) { ?>
                        <option value="<?= $key ?>"><?= $class ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Giới tính</label>
                <div class="radio-group">
                    <?php foreach ($genders as $gender) { ?>
                        <label><input type="radio" name="gender" value="<?= $gender ?>"> <?= $gender ?></label>
                    <?php } ?>
                </div>
            </div>
            <div>
                <label>Sở thích</label>
                <div class="checkbox-group">
                    <?php foreach ($hobbies as $key => $hobby) { ?>
                        <label><input type="checkbox" name="hobbies[]" value="<?= $key ?>"> <?= $hobby ?></label>
                    <?php } ?>
                </div>
            </div>
            <div>
                <button type="submit">Đăng ký</button>
                <button type="reset">Làm mới</button>
            </div>
        </form>
    </section>

</body>
</html>
