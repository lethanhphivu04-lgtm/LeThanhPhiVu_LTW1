<?php
require "includes/header.php";
require "classes/Student.php";

$students = [
    new Student("SV001", "Nguyễn Văn An", "Nam", 2003, 9.5, 9.0, 9.5),
    new Student("SV002", "Trần Thị Bích", "Nữ", 2004, 8.5, 8.0, 8.5),
    new Student("SV003", "Lê Hoàng Cường", "Nam", 2003, 7.0, 6.5, 7.5),
    new Student("SV004", "Phạm Minh Đức", "Nam", 2002, 5.0, 5.5, 6.0),
    new Student("SV005", "Vũ Thùy Dung", "Nữ", 2004, 4.0, 4.5, 3.5),
    new Student("SV006", "Đặng Quốc Tấn", "Nam", 2003, 9.0, 9.5, 9.0),
    new Student("SV007", "Hoàng Ngọc Hà", "Nữ", 2004, 8.0, 8.5, 8.0),
    new Student("SV008", "Nông Văn Hùng", "Nam", 2003, 6.5, 7.0, 6.0),
    new Student("SV009", "Đỗ Thị Khánh", "Nữ", 2004, 5.5, 5.0, 5.5),
    new Student("SV010", "Bùi Thanh Long", "Nam", 2002, 3.5, 4.0, 4.5),
    new Student("SV011", "Ngô Bích Mai", "Nữ", 2003, 9.2, 9.0, 9.4),
    new Student("SV012", "Dương Văn Nam", "Nam", 2004, 8.2, 7.8, 8.5),
    new Student("SV013", "Lý Thị Oanh", "Nữ", 2003, 6.8, 6.5, 7.0),
    new Student("SV014", "Mai Văn Phúc", "Nam", 2002, 5.2, 5.0, 5.4),
    new Student("SV015", "Trịnh Thị Quỳnh", "Nữ", 2004, 4.2, 3.8, 4.0),
    new Student("SV016", "Phan Văn Sơn", "Nam", 2003, 9.0, 8.8, 9.2),
    new Student("SV017", "Hồ Thị Trang", "Nữ", 2004, 8.4, 8.2, 8.6),
    new Student("SV018", "Tạ Văn Uy", "Nam", 2003, 7.2, 7.0, 6.8),
    new Student("SV019", "Võ Thị Vân", "Nữ", 2002, 5.8, 5.5, 5.2),
    new Student("SV020", "Lương Văn Xuân", "Nam", 2004, 9.8, 9.5, 9.6)
];

// Thống kê bằng vòng lặp foreach đơn giản
$totalCount = count($students);
$maleCount = 0;
$femaleCount = 0;
$scholarshipCount = 0;
$excellentCount = 0;
$sumAvg = 0;
$maxAvg = 0;
$minAvg = 10;

foreach ($students as $s) {
    if ($s->gender == "Nam") {
        $maleCount++;
    } else {
        $femaleCount++;
    }

    if ($s->getScholarship() == "Có") {
        $scholarshipCount++;
    }

    if ($s->getRank() == "Xuất sắc") {
        $excellentCount++;
    }

    $avg = $s->getAverage();
    $sumAvg += $avg;

    if ($avg > $maxAvg) {
        $maxAvg = $avg;
    }
    if ($avg < $minAvg) {
        $minAvg = $avg;
    }
}

$avgAll = round($sumAvg / $totalCount, 2);
?>

<main class="container my-5">
    <h2 class="mb-4 text-center">Danh sách Sinh viên</h2>

    <!-- Bảng danh sách sinh viên -->
    <div class="table-responsive mb-5">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Mã SV</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Năm sinh</th>
                    <th>Tuổi</th>
                    <th>Điểm HTML</th>
                    <th>Điểm CSS</th>
                    <th>Điểm PHP</th>
                    <th>Tổng điểm</th>
                    <th>ĐTB</th>
                    <th>Xếp loại</th>
                    <th>Học bổng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $index => $student) {
                    $student->showInfo($index + 1);
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Dashboard Thống kê nằm bên dưới bảng -->
    <h3 class="mb-3 text-center">Bảng Thống kê Tổng quan</h3>
    <div class="row mb-4 text-center">
        <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white p-3">
                <h5>Tổng số SV</h5>
                <h3><?php echo $totalCount; ?> (Nam: <?php echo $maleCount; ?>, Nữ: <?php echo $femaleCount; ?>)</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-success text-white p-3">
                <h5>Học bổng / Xuất sắc</h5>
                <h3><?php echo $scholarshipCount; ?> / <?php echo $excellentCount; ?></h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-info text-white p-3">
                <h5>ĐTB Chung</h5>
                <h3><?php echo $avgAll; ?></h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white p-3">
                <h5>ĐTB Cao nhất / Thấp nhất</h5>
                <h3><?php echo $maxAvg; ?> / <?php echo $minAvg; ?></h3>
            </div>
        </div>
    </div>
</main>

<?php
require "includes/footer.php";
?>
