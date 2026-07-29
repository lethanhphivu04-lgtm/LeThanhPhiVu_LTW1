<?php
class Student {
    public $studentId;
    public $fullName;
    public $gender;
    public $birthYear;
    public $scoreHtml;
    public $scoreCss;
    public $scorePhp;

    public function __construct($studentId, $fullName, $gender, $birthYear, $scoreHtml, $scoreCss, $scorePhp) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
    }

    public function getTotalScore() {
        return $this->scoreHtml + $this->scoreCss + $this->scorePhp;
    }

    public function getAge() {
        return date("Y") - $this->birthYear;
    }

    public function getAverage() {
        return round($this->getTotalScore() / 3, 2);
    }

    public function getRank() {
        $avg = $this->getAverage();
        if ($avg >= 9.0) {
            return "Xuất sắc";
        } elseif ($avg >= 8.0) {
            return "Giỏi";
        } elseif ($avg >= 6.5) {
            return "Khá";
        } elseif ($avg >= 5.0) {
            return "Trung bình";
        } else {
            return "Yếu";
        }
    }

    public function getScholarship() {
        if ($this->getAverage() >= 8.0 && $this->scoreHtml >= 5.0 && $this->scoreCss >= 5.0 && $this->scorePhp >= 5.0) {
            return "Có";
        }
        return "";
    }

    public function showInfo($stt) {
        $age = $this->getAge();
        $total = $this->getTotalScore();
        $avg = $this->getAverage();
        $rank = $this->getRank();
        $scholarship = $this->getScholarship();

        $bgClass = "";
        if ($rank == "Xuất sắc") {
            $bgClass = "table-success";
        } elseif ($rank == "Giỏi") {
            $bgClass = "table-info";
        } elseif ($rank == "Khá") {
            $bgClass = "table-primary";
        } elseif ($rank == "Trung bình") {
            $bgClass = "table-warning";
        } else {
            $bgClass = "table-danger";
        }

        echo "<tr class='$bgClass'>
            <td>$stt</td>
            <td>$this->studentId</td>
            <td>$this->fullName</td>
            <td>$this->gender</td>
            <td>$this->birthYear</td>
            <td>$age</td>
            <td>$this->scoreHtml</td>
            <td>$this->scoreCss</td>
            <td>$this->scorePhp</td>
            <td>$total</td>
            <td>$avg</td>
            <td>$rank</td>
            <td>$scholarship</td>
        </tr>";
    }
}
