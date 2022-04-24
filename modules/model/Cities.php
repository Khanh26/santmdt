<?php

require_once __DIR__ . '../../../database/dbConnect.php';
class Cities extends dbConnect
{
    public function add($nameCity)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `tinh_tp`(`TINH_TP`) VALUES(?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($nameCity))) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `tinh_tp`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            return ($stmt->fetchAll());
        } else {
            return 'Error connect';
        }
    }

}
