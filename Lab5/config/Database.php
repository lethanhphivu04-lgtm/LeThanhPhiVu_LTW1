<?php
class Database
{
    public function getConnection()
    {
        $conn = new mysqli("localhost", "root", "", "lethanhphivu_mydb1");
        $conn->set_charset("utf8mb4");
        return $conn;
    }
}
