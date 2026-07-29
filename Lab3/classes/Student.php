<?php
class Student {
    public $studentenId;
    public $vollstaendigerName;
    public $geschlecht;
    public $geburtsjahr;
    public $htmlNote;
    public $cssNote;
    public $phpNote;

    public function __construct($studentenId, $vollstaendigerName, $geschlecht, $geburtsjahr, $htmlNote, $cssNote, $phpNote) {
        $this->studentenId = $studentenId;
        $this->vollstaendigerName = $vollstaendigerName;
        $this->geschlecht = $geschlecht;
        $this->geburtsjahr = $geburtsjahr;
        $this->htmlNote = $htmlNote;
        $this->cssNote = $cssNote;
        $this->phpNote = $phpNote;
    }

    public function gesamtpunkteHolen() {
        return $this->htmlNote + $this->cssNote + $this->phpNote;
    }

    public function alterHolen() {
        return date("Y") - $this->geburtsjahr;
    }

    public function durchschnittHolen() {
        return round($this->gesamtpunkteHolen() / 3, 2);
    }

    public function bewertungHolen() {
        $durchschnitt = $this->durchschnittHolen();
        if ($durchschnitt >= 9.0) {
            return "Hervorragend";
        } elseif ($durchschnitt >= 8.0) {
            return "Gut";
        } elseif ($durchschnitt >= 6.5) {
            return "Befriedigend";
        } elseif ($durchschnitt >= 5.0) {
            return "Ausreichend";
        } else {
            return "Mangelhaft";
        }
    }

    public function stipendiumHolen() {
        if ($this->durchschnittHolen() >= 8.0 && $this->htmlNote >= 5.0 && $this->cssNote >= 5.0 && $this->phpNote >= 5.0) {
            return "Ja";
        }
        return "";
    }

    public function infoAnzeigen($nr) {
        $alter = $this->alterHolen();
        $gesamt = $this->gesamtpunkteHolen();
        $durchschnitt = $this->durchschnittHolen();
        $bewertung = $this->bewertungHolen();
        $stipendium = $this->stipendiumHolen();

        $bgKlasse = "";
        if ($bewertung == "Hervorragend") {
            $bgKlasse = "table-success";
        } elseif ($bewertung == "Gut") {
            $bgKlasse = "table-info";
        } elseif ($bewertung == "Befriedigend") {
            $bgKlasse = "table-primary";
        } elseif ($bewertung == "Ausreichend") {
            $bgKlasse = "table-warning";
        } else {
            $bgKlasse = "table-danger";
        }

        echo "<tr class='$bgKlasse'>
            <td>$nr</td>
            <td>$this->studentenId</td>
            <td>$this->vollstaendigerName</td>
            <td>$this->geschlecht</td>
            <td>$this->geburtsjahr</td>
            <td>$alter</td>
            <td>$this->htmlNote</td>
            <td>$this->cssNote</td>
            <td>$this->phpNote</td>
            <td>$gesamt</td>
            <td>$durchschnitt</td>
            <td>$bewertung</td>
            <td>$stipendium</td>
        </tr>";
    }
}
