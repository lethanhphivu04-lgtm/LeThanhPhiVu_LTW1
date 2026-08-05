<?php
class Student
{
    // Properties
    public string $studentId;
    public string $fullName;
    public string $gender;
    public int $birthYear;
    public float $scoreHtml;
    public float $scoreCss;
    public float $scorePhp;

    // Constructor
    public function __construct(
        string $studentId,
        string $fullName,
        string $gender,
        int $birthYear,
        float $scoreHtml,
        float $scoreCss,
        float $scorePhp
    ) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
    }

    // Methods
    public function getTotalScore(): float
    {
        return $this->scoreHtml + $this->scoreCss + $this->scorePhp;
    }

    public function getAge(): int
    {
        return date("Y") - $this->birthYear;
    }

    public function getAverage(): float
    {
        return round($this->getTotalScore() / 3, 2);
    }

    public function getRank(): string
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

    public function getScholarship(): bool
    {
        return ($this->getAverage() >= 8.0 && $this->scoreHtml >= 7.0 && $this->scoreCss >= 7.0 && $this->scorePhp >= 7.0);
    }

    public function showInfo(): void
    {
        $rank = $this->getRank();
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

        echo "<tr class='$bgClass'>";
        echo "<td>{$this->studentId}</td>";
        echo "<td>{$this->fullName}</td>";
        echo "<td>{$this->gender}</td>";
        echo "<td class='text-center'>{$this->birthYear}</td>";
        echo "<td class='text-center'>" . $this->getAge() . "</td>";
        echo "<td class='text-center'>{$this->scoreHtml}</td>";
        echo "<td class='text-center'>{$this->scoreCss}</td>";
        echo "<td class='text-center'>{$this->scorePhp}</td>";
        echo "<td class='text-center'>" . $this->getAverage() . "</td>";
        echo "<td class='text-center'>$rank</td>";
        echo "<td class='text-center'>" . ($this->getScholarship() ? "Có" : "Không") . "</td>";
        echo "</tr>";
    }
}

