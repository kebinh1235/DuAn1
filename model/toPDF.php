<?php
include_once "model/config.php";
function getluongnhanvien($idPB)
{
    $DBH=connect();
    $query="SELECT *
    FROM nhanvien
    INNER JOIN luong
    ON nhanvien.bacluong = luong.bacluong
    WHERE nhanvien.idPhongBan = '$idPB'";
    $STH = $DBH->query($query);
    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>