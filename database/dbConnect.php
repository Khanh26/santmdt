<?php
class dbConnect
{
    protected function connect()
    {
        try {
            $serverName = "localhost";
            $database = "santmdt";
            $username = "root";
            $password = "";
            $conn = new PDO('mysql:host=' . $serverName . ';dbname=' . $database.';charset=utf8mb4', $username, $password);
            return $conn;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . "</br>";
            die();
        }
    }

    public function baseSite() {
        return 'http://localhost/santmdt';
    }
}
