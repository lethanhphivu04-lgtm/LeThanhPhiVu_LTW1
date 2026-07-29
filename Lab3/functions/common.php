<?php
function formatPrice($price, $currency = "đ")
{
    return number_format($price, 0, ",", ".") . " " . $currency;
}

function getTotalQuantity($products)
{
    $total = 0;
    foreach ($products as $p) {
        $total += $p["quantity"];
    }
    return $total;
}

function getTotalPrice($products)
{
    $total = 0;
    foreach ($products as $p) {
        $total += $p["quantity"] * $p["price"];
    }
    return $total;
}

function renderProductTable($products, $categoryName, $currency = "đ")
{
    echo "<h3>" . $categoryName . "</h3>";
    echo "<table class='table table-bordered table-striped table-hover mt-3'>";
    echo "<thead class='table-dark'><tr>";
    echo "<th>Mã sản phẩm</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Số lượng</th>";
    echo "<th>Đơn giá</th>";
    echo "<th>Thành tiền</th>";
    echo "</tr></thead>";
    echo "<tbody>";

    foreach ($products as $p) {
        $subtotal = $p["quantity"] * $p["price"];
        echo "<tr>";
        echo "<td>" . $p["id"] . "</td>";
        echo "<td>" . $p["name"] . "</td>";
        echo "<td>" . $p["quantity"] . "</td>";
        echo "<td>" . formatPrice($p["price"], $currency) . "</td>";
        echo "<td>" . formatPrice($subtotal, $currency) . "</td>";
        echo "</tr>";
    }

    $totalQty = getTotalQuantity($products);
    $totalPrice = getTotalPrice($products);

    echo "<tr class='table-warning fw-bold'>";
    echo "<td colspan='2' class='text-end'>Tổng cộng:</td>";
    echo "<td>" . $totalQty . "</td>";
    echo "<td></td>";
    echo "<td>" . formatPrice($totalPrice, $currency) . "</td>";
    echo "</tr>";

    echo "</tbody></table>";
}

// Các hàm thống kê sinh viên (Bài D - Yêu cầu 7)
function countStudents($students)
{
    return count($students);
}

function countMaleStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->gender == "Nam") {
            $count++;
        }
    }
    return $count;
}

function countFemaleStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->gender == "Nữ") {
            $count++;
        }
    }
    return $count;
}

function countScholarshipStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->getScholarship()) {
            $count++;
        }
    }
    return $count;
}

function countExcellentStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->getRank() == "Xuất sắc") {
            $count++;
        }
    }
    return $count;
}

function getAverageScore($students)
{
    $sum = 0;
    $count = countStudents($students);
    if ($count == 0) {
        return 0;
    }
    foreach ($students as $st) {
        $sum += $st->getAverage();
    }
    return round($sum / $count, 2);
}

function getHighestAverage($students)
{
    $max = 0;
    foreach ($students as $st) {
        $avg = $st->getAverage();
        if ($avg > $max) {
            $max = $avg;
        }
    }
    return $max;
}

function getLowestAverage($students)
{
    $min = 10;
    foreach ($students as $st) {
        $avg = $st->getAverage();
        if ($avg < $min) {
            $min = $avg;
        }
    }
    return $min;
}
?>
