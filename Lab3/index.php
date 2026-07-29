<?php
require "includes/header.php";
require "functions/common.php";

// Danh sách Hoa tươi (Loại C1)
$products_C1 = [
    ["id" => "H001", "proname" => "Hoa Hồng Đỏ", "quantity" => 15, "price" => 250000],
    ["id" => "H002", "proname" => "Hoa Hướng Dương", "quantity" => 20, "price" => 180000],
    ["id" => "H003", "proname" => "Hoa Tulip Hà Lan", "quantity" => 10, "price" => 350000]
];

// Danh sách Chậu cây cảnh (Loại C2)
$products_C2 = [
    ["id" => "C001", "proname" => "Chậu Cây Kim Tiền", "quantity" => 8, "price" => 150000],
    ["id" => "C002", "proname" => "Chậu Cây Trầu Bà", "quantity" => 12, "price" => 95000],
    ["id" => "C003", "proname" => "Chậu Cây Sen Đá", "quantity" => 25, "price" => 45000]
];
?>

<main class="container my-5">
    <section class="mb-5">
        <?php showProductTable($products_C1, "Danh sách Hoa tươi (Loại C1)"); ?>
    </section>

    <section class="mb-5">
       <?php showProductTable($products_C2, "Danh sách Chậu cây cảnh (Loại C2)", "VNĐ", 2); ?>
    </section>

    <section class="mb-5">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id quasi voluptas saepe! Quasi repellat aliquid est dolorum quidem tenetur error ad similique, molestias non, iste exercitationem suscipit ex minima molestiae corrupti eligendi quibusdam voluptatibus facilis nobis et ducimus esse! Rerum sapiente ut asperiores laudantium, aut quia quam nisi accusamus explicabo vero numquam maxime, neque obcaecati, iusto incidunt eligendi ab voluptas eum. Consequuntur voluptate voluptatum totam pariatur nostrum asperiores deserunt consectetur ipsa iste delectus! Iusto, totam hic suscipit est earum magni quisquam blanditiis eveniet numquam eum laboriosam sed tempora unde ipsum delectus mollitia sequi dolorem explicabo. Harum in minima possimus!</p>
    </section>
</main>

<?php
require "includes/footer.php";
?>
