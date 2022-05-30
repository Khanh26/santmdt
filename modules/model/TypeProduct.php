<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class TypeProduct extends dbConnect
{
    public function getAll()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `loai_sp`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        } else {
            return false;
        }
    }
}
