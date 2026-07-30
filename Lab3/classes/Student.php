<?php
class Student
{
   public string $studentId;
public string $fullName;
public string $gender;
public int $birthYear;
public float $scoreHtml;
public float $scoreCss;
public float $scorePhp;

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

    public function getAge()
    {
        return date("Y") - $this->birthYear;
    }

    public function getAverage()
    {
        return round(($this->scoreHtml + $this->scoreCss + $this->scorePhp) / 3, 2);
    }

    public function getRank()
    {
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

    public function getScholarship()
    {
        return ($this->getAverage() >= 8.0 && $this->scoreHtml >= 7 && $this->scoreCss >= 7 && $this->scorePhp >= 7);
    }

    public function showInfo()
    {
        $age = $this->getAge();
        $avg = $this->getAverage();
        $rank = $this->getRank();
        $scholarship = $this->getScholarship() ? "Học bổng" : "";

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

        echo "<tr class=\"" . $bgClass . "\">";
        echo "<td>" . $this->studentId . "</td>";
        echo "<td>" . $this->fullName . "</td>";
        echo "<td>" . $this->gender . "</td>";
        echo "<td class=\"text-center\">" . $this->birthYear . "</td>";
        echo "<td class=\"text-center\">" . $age . "</td>";
        echo "<td class=\"text-center\">" . $this->scoreHtml . "</td>";
        echo "<td class=\"text-center\">" . $this->scoreCss . "</td>";
        echo "<td class=\"text-center\">" . $this->scorePhp . "</td>";
        echo "<td class=\"text-center fw-bold\">" . $avg . "</td>";
        echo "<td class=\"text-center\">" . $rank . "</td>";
        echo "<td class=\"text-center fw-bold\">" . $scholarship . "</td>";
        echo "</tr>";
    }
}
?>
