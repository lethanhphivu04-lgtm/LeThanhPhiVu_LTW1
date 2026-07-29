<?php
require "includes/header.php";
require "functions/common.php";

$products_C1 = [
    ["id" => "H001", "name" => "Hoa hồng đỏ", "quantity" => 15, "price" => 250000],
    ["id" => "H002", "name" => "Hoa hướng dương", "quantity" => 20, "price" => 180000],
    ["id" => "H003", "name" => "Hoa tulip Hà Lan", "quantity" => 10, "price" => 350000]
];

$products_C2 = [
    ["id" => "C001", "name" => "Chậu cây kim tiền", "quantity" => 8, "price" => 150000],
    ["id" => "C002", "name" => "Chậu cây trầu bà", "quantity" => 12, "price" => 95000],
    ["id" => "C003", "name" => "Chậu cây sen đá", "quantity" => 25, "price" => 45000]
];
?>

<main class="container my-5">
    <section class="mb-5">
        <?php renderProductTable($products_C1, "Danh sách hoa tươi (Danh mục C1)"); ?>
    </section>

    <section class="mb-5">
        <?php renderProductTable($products_C2, "Danh sách cây cảnh (Danh mục C2)", "VNĐ"); ?>
    </section>

    <section class="mb-5">
        <h2>Giới thiệu</h2>
        <p>Đây là trang hiển thị danh sách sản phẩm theo danh mục sử dụng PHP và giao diện Bootstrap 5.</p>
    </section>
</main>

<?php
require "includes/footer.php";
?>
