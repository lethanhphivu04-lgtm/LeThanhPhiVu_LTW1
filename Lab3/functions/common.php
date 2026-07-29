<?php
function preisFormatieren($preis, $waehrung = "€", $nachkommastellen = 2) {
    return number_format($preis, $nachkommastellen, ",", ".") . " " . $waehrung;
}

function gesamtzahlHolen($produkte) {
    $gesamt = 0;
    foreach ($produkte as $produkt) {
        $gesamt += $produkt['menge'];
    }
    return $gesamt;
}

function gesamtpreisHolen($produkte) {
    $gesamt = 0;
    foreach ($produkte as $produkt) {
        $gesamt += $produkt['menge'] * $produkt['preis'];
    }
    return $gesamt;
}

function produktTabelleAnzeigen($produkte, $tabellenTitel, $waehrung = "€", $nachkommastellen = 2) {
    echo "<h3 class='mt-4 mb-3'>{$tabellenTitel}</h3>";
    echo "<table class='table table-bordered table-hover table-striped align-middle'>";
    echo "
        <thead class='table-dark'>
            <tr>
                <th width='60'>Nr.</th>
                <th width='120'>Produkt-ID</th>
                <th>Produktname</th>
                <th width='120' class='text-center'>Menge</th>
                <th width='180' class='text-end'>Einkaufspreis</th>
            </tr>
        </thead>
        <tbody>";
    foreach ($produkte as $key => $produkt) {
        echo "<tr>";
        echo "<td>" . ($key + 1) . "</td>";
        echo "<td>{$produkt['id']}</td>";
        echo "<td>{$produkt['name']}</td>";
        echo "<td class='text-center'>{$produkt['menge']}</td>";
        echo "<td class='text-end'>" . preisFormatieren($produkt['preis'], $waehrung, $nachkommastellen) . "</td>";
        echo "</tr>";
    }
    echo "
        </tbody>
        <tfoot class='table-warning fw-bold'>
            <tr>
                <td colspan='3' class='text-end'>Gesamt</td>
                <td class='text-center'>" . gesamtzahlHolen($produkte) . "</td>
                <td class='text-end'>" . preisFormatieren(gesamtpreisHolen($produkte), $waehrung, $nachkommastellen) . "</td>
            </tr>
        </tfoot>";
    echo "</table>";
}
?>
