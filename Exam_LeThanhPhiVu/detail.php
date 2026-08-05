<?php
require_once "dao/BookingDAO.php";
require_once "includes/header.php";
require_once "includes/menu.php";

$b = (new BookingDAO())->findById((int)($_GET['id'] ?? 0));
?>
<div class="container my-4">
<a href="index.php" class="btn btn-secondary btn-sm mb-3">← Quay lại danh sách</a>

<?php if (!$b) { ?>
    <div class="alert alert-danger">Không tìm thấy booking này!</div>
<?php } else { ?>
<div class="card">
    <div class="card-header bg-primary text-white fw-bold">Chi tiết: <?= $b->ma ?></div>
    <div class="card-body row">
        <div class="col-md-4 text-center">
            <?php if($b->anh) echo "<img src='{$b->anh}' class='img-fluid rounded mb-3' style='max-height:200px'>"; ?>
            <div><span class="badge <?= $b->getMauTT() ?> fs-6"><?= $b->tt ?></span></div>
        </div>
        <div class="col-md-8">
            <table class="table table-borderless">
                <tr><th width="200">Mã đặt phòng:</th><td><b><?= $b->ma ?></b></td></tr>
                <tr><th>Khách hàng:</th>   <td><?= $b->ten ?></td></tr>
                <tr><th>Số điện thoại:</th><td><?= $b->sdt ?></td></tr>
                <tr><th>Loại phòng:</th>   <td><span class="badge bg-secondary"><?= $b->loai ?></span></td></tr>
                <tr><th>Ngày nhận:</th>    <td><?= $b->ngayNhan ?></td></tr>
                <tr><th>Ngày trả:</th>     <td><?= $b->ngayTra ?></td></tr>
                <tr><th>Tổng tiền:</th>    <td><span class="text-danger fw-bold fs-5"><?= $b->getTienFormat() ?></span></td></tr>
            </table>
        </div>
    </div>
</div>
<?php } ?>
</div>
<?php require_once "includes/footer.php"; ?>
