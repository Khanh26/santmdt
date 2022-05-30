<?php
require_once __DIR__ . '../../../database/dbConnect.php';
class Cart extends dbConnect
{
    public function add($idkh, $idsp, $sl)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `giohang`(`ID_KH`, `ID_SP`, `SL_SP_GH`) VALUES (?,?,?)');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($idkh, $idsp, $sl))) {
            return true;
        } else {
            return false;
        }
    }

    public function getByKH($idkh)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM `san_pham`, `loai_sp`,`nha_ban_le`, `giohang` 
        WHERE `san_pham`.id_loai = `loai_sp`.id_loai 
        AND `san_pham`.id_nbl = `nha_ban_le`.id_nbl
        AND `giohang`.id_sp = `san_pham`.id_sp
        AND`giohang`.`ID_KH`=?');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = [];
        if ($stmt->execute(array($idkh))) {
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
                }
            }
            return $data;
        } else {
            return 'Error connect';
        }
    }
    public function deleteCart($idkh) {
        $stmt = $this->connect()->prepare('DELETE FROM `giohang` WHERE ID_KH=?;');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute(array($idkh))) {
            return true;
        } else {
            return false;
        }
    }
}
