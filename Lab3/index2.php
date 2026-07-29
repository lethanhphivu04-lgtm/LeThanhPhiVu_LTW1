<?php
require "includes/header.php";
require "classes/Student.php";
require "functions/common.php";

$students = [
    new Student("SV001", "Lê Thanh Phi Vũ", "Nam", 2004, 10, 10, 10),
    new Student("SV002", "Nguyễn Văn An", "Nam", 2004, 8.5, 7.5, 8.0),
    new Student("SV003", "Trần Thị Mai", "Nữ", 2005, 9.0, 8.0, 8.5),
    new Student("SV004", "Lê Hoàng Nam", "Nam", 2003, 6.5, 7.0, 6.0),
    new Student("SV005", "Phạm Thu Thảo", "Nữ", 2004, 7.5, 8.0, 7.5),
    new Student("SV006", "Hoàng Quang Duy", "Nam", 2004, 8.0, 8.5, 9.0),
    new Student("SV007", "Nguyễn Thị Lan", "Nữ", 2004, 8.5, 9.0, 8.0),
    new Student("SV008", "Phạm Văn Hùng", "Nam", 2003, 7.0, 6.5, 7.5),
    new Student("SV009", "Trần Hoàng Phúc", "Nam", 2005, 9.5, 8.5, 9.0),
    new Student("SV010", "Lê Thị Diễm", "Nữ", 2004, 8.0, 7.5, 8.5),
    new Student("SV011", "Hoàng Văn Linh", "Nam", 2003, 6.0, 7.0, 6.5),
    new Student("SV012", "Vũ Thị Ngọc", "Nữ", 2004, 9.0, 9.0, 8.5),
    new Student("SV013", "Đặng Minh Tuấn", "Nam", 2005, 5.5, 6.0, 6.5),
    new Student("SV014", "Bùi Thị Yến", "Nữ", 2004, 8.5, 8.0, 8.5),
    new Student("SV015", "Ngô Văn Long", "Nam", 2003, 7.5, 7.5, 8.0),
    new Student("SV016", "Lý Hoàng Yến", "Nữ", 2005, 9.0, 9.5, 9.0),
    new Student("SV017", "Trương Quốc Bảo", "Nam", 2004, 8.0, 8.0, 8.5),
    new Student("SV018", "Hồ Thị Thanh", "Nữ", 2004, 6.5, 7.0, 7.5),
    new Student("SV019", "Đỗ Văn Sơn", "Nam", 2003, 5.0, 6.0, 5.5),
    new Student("SV020", "Nguyễn Mai Anh", "Nữ", 2005, 8.5, 9.0, 9.0),
    new Student("SV021", "Phan Trung Hiếu", "Nam", 2004, 7.5, 8.5, 8.0),
    new Student("SV022", "Võ Thị Quỳnh", "Nữ", 2004, 9.0, 8.5, 8.5),
    new Student("SV023", "Dương Anh Quân", "Nam", 2005, 8.0, 7.0, 7.5),
    new Student("SV024", "Lương Thị Hoa", "Nữ", 2003, 6.5, 6.0, 7.0),
    new Student("SV025", "Trần Kiên Cường", "Nam", 2004, 8.5, 8.0, 8.0),
    new Student("SV026", "Nguyễn Thị Hạnh", "Nữ", 2005, 9.5, 9.0, 9.5)
];
?>

<main class="container my-5">
    <h2 class="mb-4">Danh sách sinh viên</h2>

    <div class="table-responsive mb-5">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Mã SV</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Năm sinh</th>
                    <th>Tuổi</th>
                    <th>HTML</th>
                    <th>CSS</th>
                    <th>PHP</th>
                    <th>Điểm TB</th>
                    <th>Xếp loại</th>
                    <th>Học bổng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                    $student->showInfo();
                }
                ?>
            </tbody>
        </table>
    </div>

    <h4 class="mb-3">Dashboard thống kê lớp học</h4>
    <div class="row g-3 text-center mb-5">
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Tổng số sinh viên</h6>
                <h3 class="mb-0 fw-bold"><?php echo countStudents($students); ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Sinh viên Nam</h6>
                <h3 class="mb-0 fw-bold"><?php echo countMaleStudents($students); ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Sinh viên Nữ</h6>
                <h3 class="mb-0 fw-bold"><?php echo countFemaleStudents($students); ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Đạt học bổng</h6>
                <h3 class="mb-0 fw-bold text-success"><?php echo countScholarshipStudents($students); ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Xếp loại Xuất sắc</h6>
                <h3 class="mb-0 fw-bold text-success"><?php echo countExcellentStudents($students); ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Điểm TB cả lớp</h6>
                <h3 class="mb-0 fw-bold"><?php echo getAverageScore($students); ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Điểm TB cao nhất</h6>
                <h3 class="mb-0 fw-bold text-primary"><?php echo getHighestAverage($students); ?></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm p-3">
                <h6 class="text-muted mb-1">Điểm TB thấp nhất</h6>
                <h3 class="mb-0 fw-bold text-danger"><?php echo getLowestAverage($students); ?></h3>
            </div>
        </div>
    </div>
</main>

<?php
require "includes/footer.php";
?>
