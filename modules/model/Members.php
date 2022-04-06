<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Member extends dbConnect
{
    public function addMember($username, $name, $phone, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `khach_hang`(`TEN_DANG_NHAP`, `HOTEN`, `SDT`, `EMAIL`) VALUES (?,?,?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($username, $name, $phone, $email))) {
            return true;
        } else {
            return false;
        }
    }

    public function getAMember() {

    }
}
