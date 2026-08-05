<?php
require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Student.php";

class StudentDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn = (new Database())->getConnection();
    }

    public function getAll()
    {
        $result = $this->conn->query("SELECT * FROM students");
        $list = [];
        while ($row = $result->fetch_object("Student")) {
            $list[] = $row;
        }
        return $list;
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object("Student");
    }

    public function insert($studentCode, $fullName, $phone, $gender)
    {
        $stmt = $this->conn->prepare("INSERT INTO students(studentcode, fullname, phone, gender) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $studentCode, $fullName, $phone, $gender);
        return $stmt->execute();
    }
}
