<?php
include_once "model/config.php";
function AccountantList()
{
    $DBH=connect();
    $query = "SELECT * FROM nhanvien WHERE idPhongBan = 1";
    $STH = $DBH->query($query);
    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getManagerHR()
{
    $DBH=connect();
    $idPB = $_SESSION['id_phongban'];
    $query="SELECT id_nhanvien FROM nhanvien, truongphong
    WHERE truongphong.id_phongban='$idPB'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
}

?>