<?php
require "includes/header.php";
require "functions/common.php";

// Liste frischer Blumen (Kategorie C1)
$produkte_C1 = [
    ["id" => "H001", "name" => "Rote Rose", "menge" => 15, "preis" => 250000],
    ["id" => "H002", "name" => "Sonnenblume", "menge" => 20, "preis" => 180000],
    ["id" => "H003", "name" => "Holländische Tulpe", "menge" => 10, "preis" => 350000]
];

// Liste von Zierpflanzentöpfen (Kategorie C2)
$produkte_C2 = [
    ["id" => "C001", "name" => "Geldbaum-Topf", "menge" => 8, "preis" => 150000],
    ["id" => "C002", "name" => "Efeutute-Topf", "menge" => 12, "preis" => 95000],
    ["id" => "C003", "name" => "Sukkulenten-Topf", "menge" => 25, "preis" => 45000]
];
?>

<main class="container my-5">
    <section class="mb-5">
        <?php produktTabelleAnzeigen($produkte_C1, "Liste frischer Blumen (Kategorie C1)"); ?>
    </section>

    <section class="mb-5">
       <?php produktTabelleAnzeigen($produkte_C2, "Liste von Zierpflanzentöpfen (Kategorie C2)", "VNĐ"); ?>
    </section>

    <section class="mb-5">
        <h2>Willkommen zu unserem Praktikum</h2>
        <p>Herzlich willkommen auf unserer Webseite für Web-Programmierung. Hier demonstrieren wir grundlegende Funktionen und modulare Strukturen in PHP mit Bootstrap 5.</p>
    </section>
</main>

<?php
require "includes/footer.php";
?>
