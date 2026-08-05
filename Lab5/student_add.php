<?php
require_once "dao/StudentDAO.php";
$dao = new StudentDAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dao->insert($_POST["studentCode"], $_POST["fullName"], $_POST["phone"], $_POST["gender"]);
    header("Location: student_index.php");
    exit;
}
require_once "includes/header.php";
?>

<div class="container my-4" style="max-width: 500px;">
    <h2>Thêm sinh viên</h2>
    <form method="post" class="mt-3">
        <div class="mb-3">
            <label>Mã sinh viên</label>
            <input type="text" name="studentCode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Họ và tên</label>
            <input type="text" name="fullName" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Số điện thoại</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label>Giới tính</label><br>
            <input type="radio" name="gender" value="Nam" checked> Nam &nbsp;
            <input type="radio" name="gender" value="Nữ"> Nữ
        </div>
        <button class="btn btn-primary">Lưu</button>
        <a href="student_index.php" class="btn btn-secondary">Quay lại</a>
    </form>
</div>

<?php require_once "includes/footer.php"; ?>
