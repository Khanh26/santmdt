<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Accounts extends dbConnect
{
    public function getAllAccount()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        } else {
            // page error
        }
    }

    public function getUsernameBySession()
    {
        echo $_SESSION['user']['TEN_DANG_NHAP'];
    }

    public function isUsernameExist($username) {
        $stmt = $this->connect()->prepare('SELECT TEN_DANG_NHAP FROM `taikhoan` WHERE TEN_DANG_NHAP=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if (!$stmt->execute(array($username))) {
            $stmt = null;
            exit();
        }
        if ($stmt->rowCount() > 0) {
            header('Content/type: application/json');
            echo json_encode(['message'=>true]);
        } else {
            header('Content/type: application/json');
            echo json_encode(['message'=>false]);
        }
    }

    public function addAccount($username, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO `taikhoan`(`TEN_DANG_NHAP`, `MATKHAU`) VALUES (?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($username,$password))) {
            echo 'success';
        } else {
            echo 'error' ;
        }
    }

    public function login($username, $password)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan` WHERE TEN_DANG_NHAP=? AND MATKHAU=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if (!$stmt->execute(array($username, $password))) {
            $stmt = null;
            exit();
        }
        if ($stmt->rowCount() > 0) {
            session_start();
            $_SESSION['user'] = $stmt->fetch();
            header('location: ' . $this->baseSite());
        } else {
            return 'Tên đăng nhập hoặc mật khẩu không đúng';
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

