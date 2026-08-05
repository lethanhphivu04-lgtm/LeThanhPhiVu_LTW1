<?php require "includes/header.php"; ?>

<?php
$students = [
    ["fullname" => "Nguyễn Văn An", "age" => 20, "gender" => "Nam", "mclass" => "C25A", "email" => "an@example.com"],
    ["fullname" => "Trần Thị Bình", "age" => 21, "gender" => "Nữ", "mclass" => "C25E", "email" => "binh@example.com"],
    ["fullname" => "Lê Văn Cường", "age" => 19, "gender" => "Nam", "mclass" => "C25F", "email" => "cuong@example.com"],
    ["fullname" => "Phạm Thị Duyên", "age" => 20, "gender" => "Nữ", "mclass" => "C25A", "email" => "duyen@example.com"],
    ["fullname" => "Hoàng Văn Dung", "age" => 22, "gender" => "Nam", "mclass" => "C25E", "email" => "dung@example.com"],
    ["fullname" => "Đặng Thị Hoa", "age" => 20, "gender" => "Nữ", "mclass" => "C25F", "email" => "hoa@example.com"],
    ["fullname" => "Vũ Văn Giang", "age" => 21, "gender" => "Nam", "mclass" => "C25A", "email" => "giang@example.com"],
    ["fullname" => "Bùi Thị Hằng", "age" => 19, "gender" => "Nữ", "mclass" => "C25E", "email" => "hang@example.com"],
    ["fullname" => "Nông Văn Hùng", "age" => 20, "gender" => "Nam", "mclass" => "C25F", "email" => "hung@example.com"],
    ["fullname" => "Dương Thị Kim", "age" => 22, "gender" => "Nữ", "mclass" => "C25A", "email" => "kim@example.com"],
    ["fullname" => "Lý Văn Long", "age" => 21, "gender" => "Nam", "mclass" => "C25E", "email" => "long@example.com"],
    ["fullname" => "Trương Thị Mai", "age" => 20, "gender" => "Nữ", "mclass" => "C25F", "email" => "mai@example.com"],
    ["fullname" => "Hồ Văn Nam", "age" => 19, "gender" => "Nam", "mclass" => "C25A", "email" => "nam@example.com"],
    ["fullname" => "Đỗ Thị Oanh", "age" => 20, "gender" => "Nữ", "mclass" => "C25E", "email" => "oanh@example.com"],
    ["fullname" => "Ngô Văn Phúc", "age" => 21, "gender" => "Nam", "mclass" => "C25F", "email" => "phuc@example.com"],
    ["fullname" => "Phan Thị Quỳnh", "age" => 22, "gender" => "Nữ", "mclass" => "C25A", "email" => "quynh@example.com"],
    ["fullname" => "Tạ Văn Sơn", "age" => 20, "gender" => "Nam", "mclass" => "C25E", "email" => "son@example.com"],
    ["fullname" => "Lâm Thị Trang", "age" => 19, "gender" => "Nữ", "mclass" => "C25F", "email" => "trang@example.com"],
    ["fullname" => "Đoàn Văn Tuấn", "age" => 21, "gender" => "Nam", "mclass" => "C25A", "email" => "tuan@example.com"],
    ["fullname" => "Cao Thị Yến", "age" => 20, "gender" => "Nữ", "mclass" => "C25E", "email" => "yen@example.com"]
];

$keyword = trim($_GET['keyword'] ?? '');
$genderFilter = $_GET['gender'] ?? '';
$classFilter = $_GET['mclass'] ?? '';

$results = [];
foreach ($students as $st) {
    $matchName = empty($keyword) || (mb_stripos($st['fullname'], $keyword) !== false);
    $matchGender = empty($genderFilter) || ($st['gender'] == $genderFilter);
    $matchClass = empty($classFilter) || ($st['mclass'] == $classFilter);

    if ($matchName && $matchGender && $matchClass) {
        $results[] = $st;
    }
}
?>

<main class="container my-4">
    <h2 class="mb-3">Tìm kiếm sinh viên</h2>
    <form action="student-search.php" method="get" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="keyword" class="form-control" placeholder="Tên sinh viên..." value="<?= htmlspecialchars($keyword) ?>">
        </div>
        <div class="col-md-3">
            <select name="gender" class="form-select">
                <option value="">-- Tất cả giới tính --</option>
                <option value="Nam" <?= ($genderFilter == 'Nam') ? 'selected' : '' ?>>Nam</option>
                <option value="Nữ" <?= ($genderFilter == 'Nữ') ? 'selected' : '' ?>>Nữ</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="mclass" class="form-select">
                <option value="">-- Tất cả các lớp --</option>
                <option value="C25A" <?= ($classFilter == 'C25A') ? 'selected' : '' ?>>Lớp C25A</option>
                <option value="C25E" <?= ($classFilter == 'C25E') ? 'selected' : '' ?>>Lớp C25E</option>
                <option value="C25F" <?= ($classFilter == 'C25F') ? 'selected' : '' ?>>Lớp C25F</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            <a href="student-search.php" class="btn btn-secondary">Làm lại</a>
        </div>
    </form>

    <h4>Kết quả tìm kiếm (<?= count($results) ?> sinh viên)</h4>
    <?php if (count($results) > 0): ?>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Tuổi</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $i => $st): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= htmlspecialchars($st['fullname']) ?></td>
                        <td><?= $st['age'] ?></td>
                        <td><?= $st['gender'] ?></td>
                        <td><?= $st['mclass'] ?></td>
                        <td><?= htmlspecialchars($st['email']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">Không tìm thấy sinh viên phù hợp.</div>
    <?php endif; ?>
</main>

<?php require "includes/footer.php"; ?>
