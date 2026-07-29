<?php
require "includes/header.php";
require "classes/Student.php";

$students = [
    new Student("SV001", "Lê Thanh Phi Vũ", "Nam", 2004, 10, 10, 10),
    new Student("SV002", "Nguyễn Văn An", "Nam", 2004, 8.5, 7.5, 8.0),
    new Student("SV003", "Trần Thị Mai", "Nữ", 2005, 9.0, 8.0, 8.5),
    new Student("SV004", "Lê Hoàng Nam", "Nam", 2003, 6.5, 7.0, 6.0),
    new Student("SV005", "Phạm Thu Thảo", "Nữ", 2004, 7.5, 8.0, 7.5),
    new Student("SV006", "Hoàng Quang Duy", "Nam", 2004, 8.0, 8.5, 9.0)
];

$totalStudents = count($students);
$maleCount = 0;
$femaleCount = 0;
$scholarshipCount = 0;
$maxAvg = 0;
$minAvg = 10;

foreach ($students as $st) {
    if ($st->gender == "Nam") {
        $maleCount++;
    } else {
        $femaleCount++;
    }

    if ($st->isScholarship()) {
        $scholarshipCount++;
    }

    $avg = $st->calculateAverage();
    if ($avg > $maxAvg) {
        $maxAvg = $avg;
    }
    if ($avg < $minAvg) {
        $minAvg = $avg;
    }
}
?>

<main class="container my-5">
    <h2 class="mb-4">Danh sách Sinh viên</h2>

    <div class="table-responsive mb-5">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>MSSV</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Tuổi</th>
                    <th>HTML</th>
                    <th>CSS</th>
                    <th>PHP</th>
                    <th>Điểm TB</th>
                    <th>Học bổng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                    $student->displayInfo();
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="card bg-light border-0 shadow-sm">
        <div class="card-body">
            <h4 class="card-title mb-3">Thống kê tổng quan</h4>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <strong>Tổng sinh viên:</strong> <?php echo $totalStudents; ?>
                </div>
                <div class="col-md-3 mb-2">
                    <strong>Nam / Nữ:</strong> <?php echo $maleCount . " / " . $femaleCount; ?>
                </div>
                <div class="col-md-3 mb-2">
                    <strong>Đạt học bổng:</strong> <?php echo $scholarshipCount; ?>
                </div>
                <div class="col-md-3 mb-2">
                    <strong>Điểm TB cao nhất / thấp nhất:</strong> <?php echo $maxAvg . " / " . $minAvg; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require "includes/footer.php";
?>
