<?php

require_once __DIR__ . '../../../database/dbConnect.php';

class Accounts extends dbConnect
{
    public function getAll()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan`');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()) {
            // header('Content/type: application/json');
            return ($stmt->fetchAll());
        } else {
            return 'Error connect';
        }
        $stmt = null;
    }

    public function getUsernameBySession()
    {
        echo $_SESSION['user']['TEN_DANG_NHAP'];
    }

    public function getNameBySession()
    {
        echo $_SESSION['user']['HOTEN'];
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

    public function add($username, $password, $role)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `taikhoan`(`TEN_DANG_NHAP`, `MATKHAU`, `ROLE`) VALUES (?,?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($username, $password, $role))) {
            return true;
        } else {
            return false;
        }
    }
    // ví dụ:
    public function getAllAccount()
    {
        $query = $this->connectMysqli()->query("SELECT * FROM `taikhoan`");
        if ($query->num_rows > 0) {
            return $query->fetch_all();
        } else {
            echo "0 results";
        }
        $this->connectMysqli()->close();
    }


    public function login($username, $password, $role)
    {
        if ($role == 1) {
            $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan`, `khach_hang` WHERE `taikhoan`.TEN_DANG_NHAP = `khach_hang`.`TEN_DANG_NHAP` AND `taikhoan`.TEN_DANG_NHAP=? AND `taikhoan`.MATKHAU=? AND `taikhoan`.ROLE=?');
        } else {
            $stmt = $this->connect()->prepare('SELECT * FROM `taikhoan`, `nha_ban_le` WHERE `taikhoan`.TEN_DANG_NHAP = `nha_ban_le`.`TEN_DANG_NHAP` AND `taikhoan`.TEN_DANG_NHAP=? AND `taikhoan`.MATKHAU=? AND `taikhoan`.ROLE=?');
        }
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if (!$stmt->execute(array($username, $password,$role))) {
            echo "error connect";
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
        if (isset($_SESSION['user']))
            return true;
        return false;
    }
}
// $account = new Accounts();