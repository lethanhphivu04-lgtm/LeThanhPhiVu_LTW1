<?php
require_once "dao/StudentDAO.php";
$dao = new StudentDAO();
$s = $dao->getById($_GET["id"]);
require_once "includes/header.php";
?>

<div class="container my-4" style="max-width: 500px;">
    <h2>Chi tiết sinh viên</h2>
    <?php if (!$s): ?>
        <div class="alert alert-warning">Không tìm thấy sinh viên!</div>
    <?php else: ?>
        <table class="table table-bordered mt-3">
            <tr><th>Mã SV</th><td><?= $s->studentcode ?></td></tr>
            <tr><th>Họ tên</th><td><?= $s->fullname ?></td></tr>
            <tr><th>SĐT</th><td><?= $s->phone ?></td></tr>
            <tr><th>Giới tính</th><td><?= $s->gender ?></td></tr>
        </table>
    <?php endif; ?>
    <a href="student_index.php" class="btn btn-secondary">Quay lại</a>
</div>

<?php require_once "includes/footer.php"; ?>
