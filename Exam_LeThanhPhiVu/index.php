<?php
require_once "dao/BookingDAO.php";
require_once "includes/header.php";
require_once "includes/menu.php";

$dao  = new BookingDAO();
$kw   = trim($_GET['kw']   ?? '');
$loai = $_GET['loai'] ?? '';
$tt   = $_GET['tt']   ?? '';
$min  = (int)($_GET['min'] ?? 0);
$max  = (int)($_GET['max'] ?? 0);
$sort = $_GET['sort'] ?? '';

$ds = [];
foreach ($dao->getAll() as $b) {
    if ($kw   && !str_contains(strtolower($b->ma.$b->ten), strtolower($kw))) continue;
    if ($loai && $b->loai != $loai) continue;
    if ($tt   && $b->tt   != $tt)   continue;
    if ($min > 0 && $b->tong < $min) continue;
    if ($max > 0 && $b->tong > $max) continue;
    $ds[] = $b;
}
if ($sort=='asc')  usort($ds, fn($a,$b)=>$a->tong-$b->tong);
if ($sort=='desc') usort($ds, fn($a,$b)=>$b->tong-$a->tong);

$tongTien = array_sum(array_column($ds,'tong'));

function sel($cur,$val){ return $cur==$val?' selected':''; }
function opts($arr,$cur){ foreach($arr as $v) echo "<option value='$v'".sel($cur,$v).">$v</option>"; }
?>
<div class="container my-4">
<h2 class="text-primary fw-bold mb-3">Danh sách Đặt phòng Khách sạn</h2>
<div class="alert alert-info py-2">Tổng: <b><?= count($ds) ?></b> booking | Tổng tiền: <b><?= number_format($tongTien,0,',','.') ?>đ</b></div>

<form method="GET" class="row g-2 mb-3">
    <div class="col-md-2"><input name="kw" class="form-control form-control-sm" placeholder="Tìm mã/tên..." value="<?= htmlspecialchars($kw) ?>"></div>
    <div class="col-md-2"><select name="loai" class="form-select form-select-sm"><option value="">-- Loại phòng --</option><?php opts(['Bình dân','Cao cấp','VIP','Tổng thống'],$loai) ?></select></div>
    <div class="col-md-2"><select name="tt" class="form-select form-select-sm"><option value="">-- Trạng thái --</option><?php opts(['Đã đặt','Đang ở','Đã trả phòng','Hủy'],$tt) ?></select></div>
    <div class="col-md-1"><input type="number" name="min" class="form-control form-control-sm" placeholder="Giá từ..." value="<?= $min?:'' ?>"></div>
    <div class="col-md-1"><input type="number" name="max" class="form-control form-control-sm" placeholder="Giá đến..." value="<?= $max?:'' ?>"></div>
    <div class="col-md-2"><select name="sort" class="form-select form-select-sm" onchange="this.form.submit()"><option value="">-- Sắp xếp --</option><option value="asc" <?= sel($sort,'asc') ?>>Tăng dần</option><option value="desc" <?= sel($sort,'desc') ?>>Giảm dần</option></select></div>
    <div class="col-md-2"><button class="btn btn-sm btn-primary w-100">Lọc</button></div>
</form>

<table class="table table-bordered table-striped align-middle text-center">
<thead class="table-secondary"><tr>
    <th>STT</th><th>Mã ĐP</th><th>Khách hàng</th><th>SĐT</th><th>Ảnh</th>
    <th>Loại phòng</th><th>Nhận phòng</th><th>Trả phòng</th><th>Tổng tiền</th><th>Trạng thái</th><th>Xem</th>
</tr></thead>
<tbody>
<?php $stt=1; foreach ($ds as $b) { ?>
<tr>
    <td><?= $stt++ ?></td>
    <td><b><?= $b->ma ?></b></td>
    <td><?= $b->ten ?></td>
    <td><?= $b->sdt ?></td>
    <td><?php if($b->anh) echo "<img src='{$b->anh}' style='width:90px' class='rounded'>"; ?></td>
    <td><?= $b->loai ?></td>
    <td><?= $b->ngayNhan ?></td>
    <td><?= $b->ngayTra ?></td>
    <td class="text-danger fw-bold"><?= $b->getTienFormat() ?></td>
    <td><span class="badge <?= $b->getMauTT() ?>"><?= $b->tt ?></span></td>
    <td><a href="detail.php?id=<?= $b->id ?>" class="btn btn-sm btn-info text-white">Chi tiết</a></td>
</tr>
<?php } ?>
</tbody></table>
</div>
<?php require_once "includes/footer.php"; ?>
