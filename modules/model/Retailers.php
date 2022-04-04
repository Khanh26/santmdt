<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Retailers extends dbConnect
{
    public function addRetailers($username, $name, $phone, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `nha_ban_le`(`TEN_DANG_NHAP`, `TEN_NBL`, `SDT`, `EMAIL`) VALUES (?,?,?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($username, $name, $phone, $email))) {
            return true;
        } else {
            return false;
        }
    }
}

// $account = new Accounts();
// $account->getAllAccount();