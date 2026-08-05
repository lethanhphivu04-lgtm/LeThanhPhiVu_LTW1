<?php
require "includes/header.php";
require_once "classes/Student.php";
require_once "functions/common.php";

$students = [
    new Student("SV001", "Nguyễn Văn A", "Nam", 2005, 8.5, 9.0, 7.5),
    new Student("SV002", "Trần Thị B", "Nữ", 2004, 9.0, 8.0, 9.5),
    new Student("SV003", "Lê Văn C", "Nam", 2005, 7.5, 8.0, 8.5),
    new Student("SV004", "Phạm Thị D", "Nữ", 2004, 6.5, 7.5, 8.0),
    new Student("SV005", "Hoàng Văn E", "Nam", 2005, 8.0, 8.5, 9.0),
    new Student("SV006", "Đặng Thị F", "Nữ", 2004, 5.0, 5.5, 6.0),
    new Student("SV007", "Vũ Văn G", "Nam", 2005, 9.5, 9.5, 9.0),
    new Student("SV008", "Bùi Thị H", "Nữ", 2004, 4.0, 4.5, 5.0),
    new Student("SV009", "Nông Văn I", "Nam", 2005, 7.0, 7.0, 7.5),
    new Student("SV010", "Dương Thị K", "Nữ", 2004, 8.5, 8.0, 8.5),
    new Student("SV011", "Lý Văn L", "Nam", 2003, 6.0, 6.5, 6.0),
    new Student("SV012", "Trương Thị M", "Nữ", 2004, 9.0, 9.0, 9.5),
    new Student("SV013", "Hồ Văn N", "Nam", 2005, 5.5, 6.0, 5.0),
    new Student("SV014", "Đỗ Thị O", "Nữ", 2004, 8.5, 8.5, 8.5),
    new Student("SV015", "Ngô Văn P", "Nam", 2003, 7.5, 7.0, 8.0),
    new Student("SV016", "Phan Thị Q", "Nữ", 2005, 9.0, 9.5, 9.5),
    new Student("SV017", "Tạ Văn R", "Nam", 2004, 8.0, 8.0, 8.0),
    new Student("SV018", "Lâm Thị S", "Nữ", 2004, 6.5, 7.0, 6.5),
    new Student("SV019", "Đoàn Văn T", "Nam", 2003, 4.5, 5.0, 4.5),
    new Student("SV020", "Cao Thị U", "Nữ", 2005, 8.5, 9.0, 8.5)
];
?>

<!-- main -->
<main class="container my-5">
    <section class="mb-5">
        <h3 class="mb-3">Danh sách sinh viên</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Mã SV</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Năm sinh</th>
                    <th>Tuổi</th>
                    <th>HTML</th>
                    <th>CSS</th>
                    <th>PHP</th>
                    <th>ĐTB</th>
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
    </section>

    <!-- Dashboard thống kê -->
    <section class="mb-5">
        <h3 class="mb-3">Dashboard Thống kê</h3>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Tổng sinh viên</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo countStudents($students); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h5 class="card-title">Sinh viên Nam</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo countMaleStudents($students); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">Sinh viên Nữ</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo countFemaleStudents($students); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Đạt học bổng</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo countScholarshipStudents($students); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Xuất sắc</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo countExcellentStudents($students); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">ĐTB cả lớp</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo getAverageScore($students); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">ĐTB cao nhất</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo getHighestAverage($students); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">ĐTB thấp nhất</h5>
                        <p class="card-text fs-4 fw-bold"><?php echo getLowestAverage($students); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require "includes/footer.php"; ?>

