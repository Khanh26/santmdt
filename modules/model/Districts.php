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
        
    }
}
