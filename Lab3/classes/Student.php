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

    public function calculateTotal()
    {
        return $this->scoreHtml + $this->scoreCss + $this->scorePhp;
    }

    public function displayInfo()
    {
        $total = $this->calculateTotal();

        echo "<tr>";
        echo "<td>" . $this->studentId . "</td>";
        echo "<td>" . $this->fullName . "</td>";
        echo "<td>" . $this->gender . "</td>";
        echo "<td class=\"text-center\">" . $this->birthYear . "</td>";
        echo "<td class=\"text-center\">" . $this->scoreHtml . "</td>";
        echo "<td class=\"text-center\">" . $this->scoreCss . "</td>";
        echo "<td class=\"text-center\">" . $this->scorePhp . "</td>";
        echo "<td class=\"text-center fw-bold\">" . $total . "</td>";
        echo "</tr>";
    }
}
?>
