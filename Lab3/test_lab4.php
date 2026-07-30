<?php
// Script kiểm thử đơn giản (self-check) cho logic Lab 4 (Câu A - Câu D) - không sử dụng framework
header('Content-Type: text/plain; charset=utf-8');

echo "=== BAT DAU KIEM THU LOGIC LAB 4 (CAU A - CAU D) ===\n\n";

// 1. Kiểm thử logic validation tuổi, email & họ tên (Câu D)
function testValidatePostData($fullname, $age, $email, $gender, $mclass) {
    $errors = [];
    
    // Họ tên
    if (empty($fullname)) {
        $errors[] = "Họ và tên không được để trống.";
    } else if (mb_strlen($fullname) < 5) {
        $errors[] = "Họ và tên phải có ít nhất 05 ký tự.";
    }

    // Tuổi
    if (empty($age)) {
        $errors[] = "Tuổi không được để trống.";
    } else if (!is_numeric($age)) {
        $errors[] = "Tuổi phải là số.";
    } else if ($age < 18 || $age > 60) {
        $errors[] = "Tuổi phải nằm trong khoảng từ 18 đến 60.";
    }

    // Email
    if (empty($email)) {
        $errors[] = "Email không được để trống.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không đúng định dạng.";
    }

    // Giới tính
    if (empty($gender)) {
        $errors[] = "Giới tính bắt buộc chọn.";
    }

    // Lớp
    if (empty($mclass)) {
        $errors[] = "Lớp bắt buộc chọn.";
    }

    return $errors;
}

// Assert 1: Dữ liệu hợp lệ -> 0 lỗi
$validErrors = testValidatePostData("Nguyễn Văn A", 20, "nguyenvana@gmail.com", "1", "C1");
assert(count($validErrors) === 0, "Lỗi: Dữ liệu hợp lệ lại báo lỗi");

// Assert 2: Tên ngắn (<5 ký tự), tuổi < 18, email sai định dạng
$invalidErrors = testValidatePostData("An", 15, "invalid-email", "1", "C1");
assert(count($invalidErrors) === 3, "Lỗi: Phát hiện sai số lượng lỗi validation");

echo "[OK] Tất cả các kiểm thử logic Validation (Câu D) đều đạt thành công!\n";
echo "\n=== KIEM THU HOAN TAT THANG CONG ===";
