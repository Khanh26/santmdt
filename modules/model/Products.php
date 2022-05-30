<?php
require_once __DIR__ . '../../../database/dbConnect.php';
class Products extends dbConnect
{
    public function add($ten_sp, $idnbl, $id_loai, $price, $priceB, $slsp, $mota_sp, $file)
    {
        $conn = new PDO('mysql:dbname=santmdt;host=localhost;charset=utf8mb4', 'root', '');
        $stmt = $conn->prepare('INSERT INTO `san_pham`(`ID_NBL`, `ID_LOAI`, `TEN_SP`, `SOLUONG_SP`, `MOTA_SP`) VALUES (?,?,?,?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($idnbl, $id_loai, $ten_sp, $slsp, $mota_sp))) {
            $id = $conn->lastInsertId();
            $queryGia = $this->connect()->prepare('INSERT INTO `gia`( `ID_SP`, `GIA`, `GIA_KM`) VALUES (?,?,?)');
            $queryGia->setFetchMode(PDO::FETCH_ASSOC);
            $queryGia->execute(array($id, $price, $priceB));
            move_uploaded_file($file['imgProduct']['tmp_name'], 'public/img/sanpham/' . $file['imgProduct']['name']);
            $query = $this->connect()->prepare('INSERT INTO `hinh_anh`(`ID_SP`, `TEN_HINH`, `LOAI_HINH`) VALUES (?,?,?)');
            $query->setFetchMode(PDO::FETCH_ASSOC);
            if ($query->execute(array($id, $file['imgProduct']['name'], 1))) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function getAll()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `san_pham`, `loai_sp`,`nha_ban_le` 
        WHERE `san_pham`.id_loai = `loai_sp`.id_loai 
        AND `san_pham`.id_nbl = `nha_ban_le`.id_nbl');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = [];
        if ($stmt->execute()) {
            foreach ($stmt->fetchAll() as $row) {
                $query = $this->connect()->prepare('SELECT id_hinh, ten_hinh, loai_hinh FROM `san_pham`, `hinh_anh` WHERE `san_pham`.id_sp = `hinh_anh`.id_sp AND `hinh_anh`.id_sp=?');
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $queryGia = $this->connect()->prepare('SELECT `ID_GIA`,`GIA`, `GIA_KM`, `NGAYLAP_GIA` FROM `gia`, `san_pham` WHERE `san_pham`.id_sp = `gia`.id_sp AND `gia`.id_sp=? ORDER BY `NGAYLAP_GIA` DESC');
                $queryGia->setFetchMode(PDO::FETCH_ASSOC);
                $queryGia->execute(array($row['ID_SP']));
                if ($query->execute(array($row['ID_SP']))) {
                    $row['HINH'] = $query->fetchAll();
                    $row['GIA'] = $queryGia->fetchAll();
                    array_push($data, $row);
                };
            }
            return $data;
        } else {
            return 'Error connect';
        }
    }

    public function getAllByNBL($idnbl)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `san_pham`, `loai_sp`,`nha_ban_le` 
        WHERE `san_pham`.id_loai = `loai_sp`.id_loai 
        AND `san_pham`.id_nbl = `nha_ban_le`.id_nbl
        AND `nha_ban_le`.id_nbl=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = [];
        if ($stmt->execute(array($idnbl))) {
            foreach ($stmt->fetchAll() as $row) {
                $query = $this->connect()->prepare('SELECT id_hinh, ten_hinh, loai_hinh FROM `san_pham`, `hinh_anh` WHERE `san_pham`.id_sp = `hinh_anh`.id_sp AND `hinh_anh`.id_sp=?');
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $queryGia = $this->connect()->prepare('SELECT `ID_GIA`,`GIA`, `GIA_KM`, `NGAYLAP_GIA` FROM `gia`, `san_pham` WHERE `san_pham`.id_sp = `gia`.id_sp AND `gia`.id_sp=? ORDER BY `NGAYLAP_GIA` DESC');
                $queryGia->setFetchMode(PDO::FETCH_ASSOC);
                $queryGia->execute(array($row['ID_SP']));
                if ($query->execute(array($row['ID_SP']))) {
                    $row['HINH'] = $query->fetchAll();
                    $row['GIA'] = $queryGia->fetchAll();
                    array_push($data, $row);
                };
            }
            return $data;
        } else {
            return 'Error connect';
        }
    }

    public function getAllByID($id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `san_pham`, `loai_sp`,`nha_ban_le` 
        WHERE `san_pham`.id_loai = `loai_sp`.id_loai 
        AND `san_pham`.id_nbl = `nha_ban_le`.id_nbl
        AND `san_pham`.id_sp=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = [];
        if ($stmt->execute(array($id))) {
            $row = $stmt->fetch();
            $query = $this->connect()->prepare('SELECT id_hinh, ten_hinh, loai_hinh FROM `san_pham`, `hinh_anh` WHERE `san_pham`.id_sp = `hinh_anh`.id_sp AND `hinh_anh`.id_sp=?');
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $queryGia = $this->connect()->prepare('SELECT `ID_GIA`,`GIA`, `GIA_KM`, `NGAYLAP_GIA` FROM `gia`, `san_pham` WHERE `san_pham`.id_sp = `gia`.id_sp AND `gia`.id_sp=? ORDER BY `NGAYLAP_GIA` DESC');
            $queryGia->setFetchMode(PDO::FETCH_ASSOC);
            $queryGia->execute(array($row['ID_SP']));
            if ($query->execute(array($row['ID_SP']))) {
                $row['HINH'] = $query->fetchAll();
                $row['GIA'] = $queryGia->fetchAll();
                array_push($data, $row);
            }
            return $data;
        } else {
            return 'Error connect';
        }
    }
}
