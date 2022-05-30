<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Districts extends dbConnect
{
    public function addDistrict($nameDistricts,$nameCity)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `quan_huyen`(`QUAN_HUYEN`,`TINH_TP`) VALUES(?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($nameDistricts,$nameCity))) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllDistricts() {
        $stmt = $this->connect()->prepare('SELECT * FROM `quan_huyen`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            return ($stmt->fetchAll());
        } else {
            return 'Error connect';
        }
    }

    public function getByCity($nameCity)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `quan_huyen` WHERE `TINH_TP`=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($nameCity))) {
            echo json_encode($stmt->fetchAll());
        } else {
            return 'Error connect';
        }
    }
}
