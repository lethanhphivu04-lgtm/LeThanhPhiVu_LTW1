<?php require "includes/header.php"; ?>

<main class="container my-4" style="max-width: 500px;">
    <h2>Thông tin</h2>
    <form action="form-get.php" method="get">
        <div class="mb-3">
            <label>Họ tên</label>
            <input type="text" class="form-control" name="fullname" required>
        </div>
        <div class="mb-3">
            <label>Tuổi</label>
            <input type="number" class="form-control" name="birthyear" required>
        </div>
        <div class="mb-3">
            <label>Giới tính: </label>
            <input type="radio" name="gender" value="1" checked> Nam
            <input type="radio" name="gender" value="2"> Nữ
            <input type="radio" name="gender" value="3"> Khác
        </div>
        <div class="mb-3">
            <label>Lớp</label>
            <select name="mclass" class="form-control">
                <option value="C25A">Lớp C25A</option>
                <option value="C25E">Lớp C25E</option>
                <option value="C25F">Lớp C25F</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
        <button type="reset" class="btn btn-secondary">Làm lại</button>
    </form>

    <?php if (isset($_GET['fullname'])): 
        $genderText = ($_GET['gender'] == "1") ? "Nam" : (($_GET['gender'] == "2") ? "Nữ" : "Khác");
    ?>
        <div class="card mt-4">
            <div class="card-header bg-primary text-white">Thông tin đã nhập</div>
            <div class="card-body">
                <p><b>Họ và tên:</b> <?= htmlspecialchars($_GET['fullname']) ?></p>
                <p><b>Tuổi:</b> <?= htmlspecialchars($_GET['birthyear']) ?></p>
                <p><b>Giới tính:</b> <?= $genderText ?></p>
                <p><b>Lớp:</b> <?= htmlspecialchars($_GET['mclass']) ?></p>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php require "includes/footer.php"; ?>
