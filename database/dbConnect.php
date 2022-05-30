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
            $conn = new PDO('mysql:host=' . $serverName . ';dbname=' . $database . ';charset=utf8mb4', $username, $password);
            return $conn;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . "</br>";
            die();
        }
    }
    // file database/dbConnect.php thêm phần này
    protected function connectMysqli()
    {

        $serverName = "localhost";
        $database = "santmdt";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($serverName, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    public function baseSite()
    {
        return 'http://localhost/santmdt';
    }

    public function responseJson($array)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($array);
    }
}
