<?php
include_once "model/config.php";
function amountMember()
{
    $DBH=connect();
    $query = "SELECT COUNT(*) FROM nhanvien";
    $STH = $DBH->query($query); 
    $result = $STH->fetch(PDO::FETCH_NUM);
    $row = $result[0];
    return $row;
}
function amountPB()
{
    $DBH=connect();
    $query = "SELECT COUNT(*) FROM phongban";
    $STH = $DBH->query($query); 
    $result = $STH->fetch(PDO::FETCH_NUM);
    $row = $result[0];
    return $row;
}
?>