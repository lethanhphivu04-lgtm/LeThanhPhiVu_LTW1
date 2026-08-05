<?php
require_once "dao/StudentDAO.php";
$dao = new StudentDAO();
$list = $dao->getAll();
require_once "includes/header.php";
?>

<div class="container my-4">
    <div class="d-flex justify-content-between mb-3">
        <h4>Danh sách sinh viên</h4>
        <a href="student_add.php" class="btn btn-primary">Thêm sinh viên</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>STT</th><th>Mã SV</th><th>Họ tên</th><th>SĐT</th><th>Giới tính</th><th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $i => $s): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $s->studentcode ?></td>
                <td><?= $s->fullname ?></td>
                <td><?= $s->phone ?></td>
                <td><?= $s->gender ?></td>
                <td><a href="student_detail.php?id=<?= $s->id ?>" class="btn btn-info btn-sm">Chi tiết</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "includes/footer.php"; ?>
