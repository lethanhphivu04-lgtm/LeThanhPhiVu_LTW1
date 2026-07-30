<?php
require "includes/header.php";
?>

<main class="container my-5">
    <section class="mb-5 shadow p-3 mx-auto" style="width: 500px;">
        <h2>Thông tin</h2>
        <form action="form-post.php" method="post" novalidate>
            <div class="mb-3 mt-3">
                <label for="fullname">Họ tên</label>
                <input type="text" class="form-control" id="fullname" placeholder="Họ tên" name="fullname" value="<?= htmlspecialchars($_POST['fullname'] ?? '') ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="birthyear">Tuổi</label>
                <input type="number" class="form-control" id="birthyear" placeholder="Tuổi" name="birthyear" value="<?= htmlspecialchars($_POST['birthyear'] ?? '') ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="">Giới tính: </label>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender1" name="gender" value="1" <?= (!isset($_POST['gender']) || $_POST['gender'] == '1') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender2" name="gender" value="2" <?= (isset($_POST['gender']) && $_POST['gender'] == '2') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender3" name="gender" value="3" <?= (isset($_POST['gender']) && $_POST['gender'] == '3') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="mclass">Lớp</label>
                <select name="mclass" id="mclass" class="form-control">
                    <option value="C1" <?= (isset($_POST['mclass']) && $_POST['mclass'] == 'C1') ? 'selected' : '' ?>>Lớp C25A</option>
                    <option value="C2" <?= (isset($_POST['mclass']) && $_POST['mclass'] == 'C2') ? 'selected' : '' ?>>Lớp C25E</option>
                    <option value="C3" <?= (isset($_POST['mclass']) && $_POST['mclass'] == 'C3') ? 'selected' : '' ?>>Lớp C25F</option>
                </select>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-primary">Gửi</button>
                <button type="reset" class="btn btn-primary">Làm lại</button>
            </div>
        </form>
    </section>

    <?php
    $errors = [];
    if (($_SERVER['REQUEST_METHOD'] ?? '') == 'POST') {
        // lấy dữ liệu từ form
        $fullname = trim($_POST['fullname'] ?? '');
        $birthyear = trim($_POST['birthyear'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $gender = $_POST['gender'] ?? '';
        $mclass = $_POST['mclass'] ?? '';

        // ****Kiểm tra dữ liệu đầu vào
        // Kiểm tra Họ tên không được để trống
        // Kiểm tra Họ tên có ít nhất 5 ký tự
        if (empty($fullname)) {
            $errors[] = "Họ và tên không được để trống.";
        } else if (mb_strlen($fullname) < 5) {
            $errors[] = "Họ và tên phải có ít nhất 05 ký tự.";
        }

        // Tuổi không được để trống, phải là số, Tuổi phải nằm trong khoảng từ 18 đến 60.
        if (empty($birthyear)) {
            $errors[] = "Tuổi không được để trống.";
        } else if (!is_numeric($birthyear)) {
            $errors[] = "Tuổi phải là số.";
        } else if ($birthyear < 18 || $birthyear > 60) {
            $errors[] = "Tuổi phải nằm trong khoảng từ 18 đến 60.";
        }

        // Email không được để trống, Email đúng định dạng.
        if (empty($email)) {
            $errors[] = "Email không được để trống.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email không đúng định dạng.";
        }

        // Giới tính bắt buộc chọn.
        if (empty($gender)) {
            $errors[] = "Giới tính bắt buộc chọn.";
        }

        // Lớp bắt buộc chọn.
        if (empty($mclass)) {
            $errors[] = "Lớp bắt buộc chọn.";
        }

        // Sử dụng toán tử ba ngôi (ternary)
        $genderText = ($gender == "1") ? "Nam" :
                     (($gender == "2") ? "Nữ" : "Khác");
    ?>
        <section class="mx-auto" style="width: 500px;">
            <?php
            if (count($errors) > 0) {
            ?>
                <div class="alert alert-danger mt-4">
                    <ul class="mb-0">
                        <?php
                        foreach ($errors as $error) {
                            echo "<li>$error</li>";
                        }
                        ?>
                    </ul>
                </div>
            <?php
            } else {
            ?>
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        Thông tin đã nhập
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Họ và tên</th>
                                <td><?= htmlspecialchars($fullname) ?></td>
                            </tr>
                            <tr>
                                <th>Tuổi</th>
                                <td><?= htmlspecialchars($birthyear) ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?= htmlspecialchars($email) ?></td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td><?= htmlspecialchars($genderText) ?></td>
                            </tr>
                            <tr>
                                <th>Lớp</th>
                                <td><?= htmlspecialchars($mclass) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
            }
            ?>
        </section>
    <?php
    }
    ?>
</main>

<?php
require "includes/footer.php";
?>
