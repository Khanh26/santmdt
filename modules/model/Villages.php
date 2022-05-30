<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Villages extends dbConnect
{
    public function add($nameVillages, $nameDistricts)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `xa_phuong`(`XA_PHUONG`,`QUAN_HUYEN`) VALUES(?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($nameVillages, $nameDistricts))) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `xa_phuong`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            return ($stmt->fetchAll());
        } else {
            return 'Error connect';
        }
    }

    public function getByDistricts($nameDistricts)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `xa_phuong` WHERE `QUAN_HUYEN`=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($nameDistricts))) {
            echo json_encode($stmt->fetchAll());
        } else {
            return 'Error connect';
        }
    }
}