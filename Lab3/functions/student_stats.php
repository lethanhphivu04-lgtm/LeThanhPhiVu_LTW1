<?php
function countStudents($students)
{
    return count($students);
}

function countMaleStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->gender == "Nam") {
            $count++;
        }
    }
    return $count;
}

function countFemaleStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->gender == "Nữ") {
            $count++;
        }
    }
    return $count;
}

function countScholarshipStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->getScholarship()) {
            $count++;
        }
    }
    return $count;
}

function countExcellentStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->getRank() == "Xuất sắc") {
            $count++;
        }
    }
    return $count;
}

function getAverageScore($students)
{
    $sum = 0;
    $count = countStudents($students);
    if ($count == 0) {
        return 0;
    }
    foreach ($students as $st) {
        $sum += $st->getAverage();
    }
    return round($sum / $count, 2);
}

function getHighestAverage($students)
{
    $max = 0;
    foreach ($students as $st) {
        $avg = $st->getAverage();
        if ($avg > $max) {
            $max = $avg;
        }
    }
    return $max;
}

function getLowestAverage($students)
{
    $min = 10;
    foreach ($students as $st) {
        $avg = $st->getAverage();
        if ($avg < $min) {
            $min = $avg;
        }
    }
    return $min;
}
?>
