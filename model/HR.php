<?php
include_once "model/config.php";
    function getListHR()
    {
        $DBH=connect();
        $query = "SELECT * FROM nhanvien WHERE idPhongBan = 2";
        $STH = $DBH->query($query);
        $result = $STH->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>