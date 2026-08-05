<?php
// Function: Định dạng tiền tệ
function formatPrice($price, $currency = "đ", $decimals = 0)
{
    return number_format($price, $decimals, ",", ".") . " " . $currency;
}

// Function: Tính tổng số lượng sản phẩm
function getTotalQuantity($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['quantity'];
    }
    return $total;
}

// Function: Tính tổng giá nhập của tất cả sản phẩm
function getTotalPrice($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['quantity'] * $product['price'];
    }
    return $total;
}

// Function: Hiển thị danh sách sản phẩm theo dạng bảng
function showProductTable($products, $tableTitle, $currency = "đ", $decimals = 0)
{
    echo "<h3 class='mt-4 mb-3'>$tableTitle</h3>";
    echo "<table class='table table-bordered table-hover table-striped align-middle'>";
    echo "
        <thead class='table-dark'>
            <tr>
                <th width='60'>STT</th>
                <th width='120'>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th width='120'>Số lượng</th>
                <th width='180' class='text-end'>Giá nhập</th>
            </tr>
        </thead>
        <tbody>
    ";
    foreach ($products as $key => $product) {
        echo "<tr>";
        echo "<td>" . ($key + 1) . "</td>";
        echo "<td>" . $product['id'] . "</td>";
        echo "<td>" . $product['proname'] . "</td>";
        echo "<td class='text-center'>" . $product['quantity'] . "</td>";
        echo "<td class='text-end'>" . formatPrice($product['price'], $currency, $decimals) . "</td>";
        echo "</tr>";
    }
    echo "
        </tbody>
        <tfoot class='table-warning fw-bold'>
            <tr>
                <td colspan='3' class='text-end'>Tổng cộng</td>
                <td class='text-center'>" . getTotalQuantity($products) . "</td>
                <td class='text-end'>" . formatPrice(getTotalPrice($products), $currency, $decimals) . "</td>
            </tr>
        </tfoot>
    ";
    echo "</table>";
}

// Các hàm thống kê sinh viên (Dashboard)
function countStudents($students)
{
    return count($students);
}

function countMaleStudents($students)
{
    $count = 0;
    foreach ($students as $student) {
        if ($student->gender == "Nam") {
            $count++;
        }
    }
    return $count;
}

function countFemaleStudents($students)
{
    $count = 0;
    foreach ($students as $student) {
        if ($student->gender == "Nữ") {
            $count++;
        }
    }
    return $count;
}

function countScholarshipStudents($students)
{
    $count = 0;
    foreach ($students as $student) {
        if ($student->getScholarship()) {
            $count++;
        }
    }
    return $count;
}

function countExcellentStudents($students)
{
    $count = 0;
    foreach ($students as $student) {
        if ($student->getRank() == "Xuất sắc") {
            $count++;
        }
    }
    return $count;
}

function getAverageScore($students)
{
    $total = 0;
    $count = countStudents($students);
    if ($count == 0) {
        return 0;
    }
    foreach ($students as $student) {
        $total += $student->getAverage();
    }
    return round($total / $count, 2);
}

function getHighestAverage($students)
{
    $max = 0;
    foreach ($students as $student) {
        $avg = $student->getAverage();
        if ($avg > $max) {
            $max = $avg;
        }
    }
    return $max;
}

function getLowestAverage($students)
{
    if (empty($students)) {
        return 0;
    }
    $min = $students[0]->getAverage();
    foreach ($students as $student) {
        $avg = $student->getAverage();
        if ($avg < $min) {
            $min = $avg;
        }
    }
    return $min;
}

