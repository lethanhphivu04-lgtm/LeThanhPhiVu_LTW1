<?php
require "includes/header.php";
require "functions/common.php";

// Danh sách sản phẩm 1 (Laptop)
$products_C1 = [
    ["id" => "LT001", "proname" => "Dell Inspiron 15", "quantity" => 10, "price" => 16500000],
    ["id" => "LT002", "proname" => "HP Pavilion 14", "quantity" => 8, "price" => 17200000],
    ["id" => "LT003", "proname" => "Lenovo ThinkPad E14", "quantity" => 5, "price" => 19500000],
    ["id" => "LT004", "proname" => "Asus Vivobook 15", "quantity" => 12, "price" => 14800000],
    ["id" => "LT005", "proname" => "Acer Aspire 5", "quantity" => 7, "price" => 13900000],
    ["id" => "LT006", "proname" => "Apple MacBook Air M1", "quantity" => 6, "price" => 18900000],
    ["id" => "LT007", "proname" => "MSI Modern 14", "quantity" => 9, "price" => 12500000],
    ["id" => "LT008", "proname" => "LG Gram 14", "quantity" => 4, "price" => 24500000],
    ["id" => "LT009", "proname" => "Asus TUF Gaming", "quantity" => 11, "price" => 21000000],
    ["id" => "LT010", "proname" => "Dell XPS 13", "quantity" => 3, "price" => 32000000]
];

// Danh sách sản phẩm 2 (Phụ kiện)
$products_C2 = [
    ["id" => "PK001", "proname" => "Chuột Logitech M331", "quantity" => 30, "price" => 320000],
    ["id" => "PK002", "proname" => "Bàn phím DareU EK87", "quantity" => 20, "price" => 690000],
    ["id" => "PK003", "proname" => "Tai nghe Kingston HyperX", "quantity" => 15, "price" => 1250000],
    ["id" => "PK004", "proname" => "Lót chuột Razer Goliathus", "quantity" => 40, "price" => 150000],
    ["id" => "PK005", "proname" => "Webcam Logitech C920", "quantity" => 10, "price" => 1800000],
    ["id" => "PK006", "proname" => "USB Kingston 32GB", "quantity" => 50, "price" => 120000],
    ["id" => "PK007", "proname" => "Ổ cứng di động WD 1TB", "quantity" => 12, "price" => 1450000],
    ["id" => "PK008", "proname" => "Đế tản nhiệt Cooler Master", "quantity" => 18, "price" => 450000],
    ["id" => "PK009", "proname" => "Cáp HDMI Unitek 2m", "quantity" => 35, "price" => 90000],
    ["id" => "PK010", "proname" => "Hub USB-C Ugreen 6 in 1", "quantity" => 25, "price" => 550000]
];
?>

<!-- main -->
<main class="container my-5">
    <section class="mb-5">
        <?php showProductTable($products_C1, "Danh sách Loại C1"); ?>
    </section>

    <section class="mb-5">
        <?php showProductTable($products_C2, "Danh sách Loại C2", "VNĐ", 2); ?>
    </section>

    <section class="mb-5">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id quasi voluptas saepe! Quasi repellat aliquid est dolorum quidem tenetur error ad similique.</p>
    </section>
</main>

<?php
require "includes/footer.php";
?>

