<?php
require "includes/header.php";
require "classes/Student.php";

$studenten = [
    new Student("SV001", "Max Mustermann", "Männlich", 2003, 9.5, 9.0, 9.5),
    new Student("SV002", "Anna Schmidt", "Weiblich", 2004, 8.5, 8.0, 8.5),
    new Student("SV003", "Lukas Weber", "Männlich", 2003, 7.0, 6.5, 7.5),
    new Student("SV004", "Leon Meyer", "Männlich", 2002, 5.0, 5.5, 6.0),
    new Student("SV005", "Sophia Wagner", "Weiblich", 2004, 4.0, 4.5, 3.5),
    new Student("SV006", "Emma Hoffmann", "Weiblich", 2004, 8.0, 8.5, 8.0)
];

// Einfache Statistik mit foreach-Schleife
$gesamtAnzahl = count($studenten);
$maennlichAnzahl = 0;
$weiblichAnzahl = 0;
$stipendiumAnzahl = 0;
$hervorragendAnzahl = 0;
$summeDurchschnitt = 0;
$maxDurchschnitt = 0;
$minDurchschnitt = 10;

foreach ($studenten as $s) {
    if ($s->geschlecht == "Männlich") {
        $maennlichAnzahl++;
    } else {
        $weiblichAnzahl++;
    }

    if ($s->stipendiumHolen() == "Ja") {
        $stipendiumAnzahl++;
    }

    if ($s->bewertungHolen() == "Hervorragend") {
        $hervorragendAnzahl++;
    }

    $durchschnitt = $s->durchschnittHolen();
    $summeDurchschnitt += $durchschnitt;

    if ($durchschnitt > $maxDurchschnitt) {
        $maxDurchschnitt = $durchschnitt;
    }
    if ($durchschnitt < $minDurchschnitt) {
        $minDurchschnitt = $durchschnitt;
    }
}

$gesamtdurchschnittAller = round($summeDurchschnitt / $gesamtAnzahl, 2);
?>

<main class="container my-5">
    <h2 class="mb-4 text-center">Studentenliste</h2>

    <!-- Studententabelle -->
    <div class="table-responsive mb-5">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nr.</th>
                    <th>Matrikelnummer</th>
                    <th>Vollständiger Name</th>
                    <th>Geschlecht</th>
                    <th>Geburtsjahr</th>
                    <th>Alter</th>
                    <th>HTML-Note</th>
                    <th>CSS-Note</th>
                    <th>PHP-Note</th>
                    <th>Gesamtpunkte</th>
                    <th>Durchschnitt</th>
                    <th>Bewertung</th>
                    <th>Stipendium</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($studenten as $index => $student) {
                    $student->infoAnzeigen($index + 1);
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Statistik-Dashboard unter der Tabelle -->
    <h3 class="mb-3 text-center">Gesamtstatistik-Dashboard</h3>
    <div class="row mb-4 text-center">
        <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white p-3">
                <h5>Gesamtzahl der Studenten</h5>
                <h3><?php echo $gesamtAnzahl; ?> (Männlich: <?php echo $maennlichAnzahl; ?>, Weiblich: <?php echo $weiblichAnzahl; ?>)</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-success text-white p-3">
                <h5>Stipendium / Hervorragend</h5>
                <h3><?php echo $stipendiumAnzahl; ?> / <?php echo $hervorragendAnzahl; ?></h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-info text-white p-3">
                <h5>Gesamtdurchschnitt</h5>
                <h3><?php echo $gesamtdurchschnittAller; ?></h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white p-3">
                <h5>Höchster / Niedrigster Durchschnitt</h5>
                <h3><?php echo $maxDurchschnitt; ?> / <?php echo $minDurchschnitt; ?></h3>
            </div>
        </div>
    </div>
</main>

<?php
require "includes/footer.php";
?>
