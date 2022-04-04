<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Accounts extends dbConnect
{
    public function getAllAccount()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            // header('Content/type: application/json');
            return json_encode($stmt->fetchAll());
        } else {
            // page error
        }

        $stmt = null;
    }

    public function getUsernameBySession()
    {
        echo $_SESSION['user']['TEN_DANG_NHAP'];
    }

    public function isUsernameExist($username)
    {
        $stmt = $this->connect()->prepare('SELECT TEN_DANG_NHAP FROM `taikhoan` WHERE TEN_DANG_NHAP=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if (!$stmt->execute(array($username))) {
            $stmt = null;
            exit();
        }
        if ($stmt->rowCount() > 0) {
            // header('Content/type: application/json');
            echo json_encode(['message' => true]);
        } else {
            // header('Content/type: application/json');
            echo json_encode(['message' => false]);
        }
        $stmt = null;
    }

    public function addAccount($username, $password)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `taikhoan`(`TEN_DANG_NHAP`, `MATKHAU`) VALUES (?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($username, $password))) {
            return true;
        } else {
            return false;
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
            $stmt = null;
            header('location: ' . $this->baseSite());
        } else {
            $stmt = null;
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

// $account = new Accounts();
// $account->getAllAccount();