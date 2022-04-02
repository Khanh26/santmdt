<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Accounts extends dbConnect
{
    public function getAllAccount()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            echo $stmt->execute();
            return $stmt->fetchAll();
        } else {
            // page error
        }
    }

    public function getUsernameBySession()
    {
        echo $_SESSION['user']['TEN_DANG_NHAP'];

    }

    public function login($ten_dang_nhap, $matkhau)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan` WHERE TEN_DANG_NHAP=? AND MATKHAU=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if (!$stmt->execute(array($ten_dang_nhap, $matkhau))) {
            $stmt = null;
            exit();
        }
        if ($stmt->rowCount() > 0) {
            session_start();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $_SESSION['user'] = $stmt->fetch();
            header('location: ' . $this->baseSite());
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . $this->baseSite() . '/dangnhap');
    }

    public function isLogin()
    {
        session_start();
        if (isset($_SESSION['user']))
            return true;
        return false;
    }
}
