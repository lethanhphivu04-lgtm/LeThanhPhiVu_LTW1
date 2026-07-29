<?php
class Student
{
    public $studentId;
    public $fullName;
    public $gender;
    public $birthYear;
    public $scoreHtml;
    public $scoreCss;
    public $scorePhp;

    public function __construct($studentId, $fullName, $gender, $birthYear, $scoreHtml, $scoreCss, $scorePhp)
    {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
    }

    public function calculateAverage()
    {
        return round(($this->scoreHtml + $this->scoreCss + $this->scorePhp) / 3, 2);
    }

    public function getAge()
    {
        return date("Y") - $this->birthYear;
    }

    public function getRank()
    {
        $avg = $this->calculateAverage();
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

    public function isScholarship()
    {
        if ($this->calculateAverage() >= 8.0 && $this->scoreHtml >= 7.0 && $this->scoreCss >= 7.0 && $this->scorePhp >= 7.0) {
            return true;
        }
        return false;
    }

    public function displayInfo()
    {
        $avg = $this->calculateAverage();
        $age = $this->getAge();
        $rank = $this->getRank();
        $scholarshipText = "";
        if ($this->isScholarship()) {
            $scholarshipText = "Học bổng";
        }

        echo "<tr>";
        echo "<td>" . $this->studentId . "</td>";
        echo "<td>" . $this->fullName . "</td>";
        echo "<td>" . $this->gender . "</td>";
        echo "<td class=\"text-center\">" . $age . "</td>";
        echo "<td class=\"text-center\">" . $this->scoreHtml . "</td>";
        echo "<td class=\"text-center\">" . $this->scoreCss . "</td>";
        echo "<td class=\"text-center\">" . $this->scorePhp . "</td>";
        echo "<td class=\"text-center fw-bold\">" . $avg . "</td>";
        echo "<td class=\"text-center\">" . $rank . "</td>";
        echo "<td class=\"text-center text-success fw-bold\">" . $scholarshipText . "</td>";
        echo "</tr>";
    }
}
?>
