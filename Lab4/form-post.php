<?php require "includes/header.php"; ?>

<main class="container my-4" style="max-width: 500px;">
    <h2>Thông tin (POST & Validation)</h2>
    <form action="form-post.php" method="post">
        <div class="mb-3">
            <label>Họ tên</label>
            <input type="text" class="form-control" name="fullname">
        </div>
        <div class="mb-3">
            <label>Tuổi</label>
            <input type="number" class="form-control" name="birthyear">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
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
                <option value="">-- Chọn lớp --</option>
                <option value="C25A">Lớp C25A</option>
                <option value="C25E">Lớp C25E</option>
                <option value="C25F">Lớp C25F</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
        <button type="reset" class="btn btn-secondary">Làm lại</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fullname = trim($_POST['fullname'] ?? '');
        $birthyear = trim($_POST['birthyear'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $gender = $_POST['gender'] ?? '';
        $mclass = $_POST['mclass'] ?? '';

        $errors = [];
        if (empty($fullname)) $errors[] = "Họ và tên không được để trống.";
        else if (mb_strlen($fullname) < 5) $errors[] = "Họ và tên phải có ít nhất 05 ký tự.";

        if (empty($birthyear)) $errors[] = "Tuổi không được để trống.";
        else if (!is_numeric($birthyear) || $birthyear < 18 || $birthyear > 60) $errors[] = "Tuổi phải là số từ 18 đến 60.";

        if (empty($email)) $errors[] = "Email không được để trống.";
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email không đúng định dạng.";

        if (empty($gender)) $errors[] = "Giới tính bắt buộc chọn.";
        if (empty($mclass)) $errors[] = "Lớp bắt buộc chọn.";

        if (count($errors) > 0) {
            echo "<div class='alert alert-danger mt-4'><ul>";
            foreach ($errors as $err) echo "<li>$err</li>";
            echo "</ul></div>";
        } else {
            $genderText = ($gender == "1") ? "Nam" : (($gender == "2") ? "Nữ" : "Khác");
            echo "<div class='card mt-4'><div class='card-header bg-primary text-white'>Thông tin đã nhập</div><div class='card-body'>";
            echo "<p><b>Họ tên:</b> " . htmlspecialchars($fullname) . "</p>";
            echo "<p><b>Tuổi:</b> " . htmlspecialchars($birthyear) . "</p>";
            echo "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>";
            echo "<p><b>Giới tính:</b> " . $genderText . "</p>";
            echo "<p><b>Lớp:</b> " . htmlspecialchars($mclass) . "</p>";
            echo "</div></div>";
        }
    }
    ?>
</main>

<?php require "includes/footer.php"; ?>
