<?php
include_once "model/config.php";
function getInfo($id)
{
    $DBH=connect();
    $query="SELECT * FROM nhanvien WHERE idNhanVien='$id'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function getluong($id)
{
    $DBH=connect();
    $query="SELECT * FROM luong
    INNER JOIN nhanvien ON luong.bacluong = nhanvien.bacluong
    AND idNhanVien='$id'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function edit($name, $date, $phone, $email, $nguyenquan, $cmnd, $noicap, $quoctich, $dantoc, $id)
    {
        $DBH = connect();
        $query = "UPDATE nhanvien 
        SET hoten='$name',ngaysinh ='$date',dienthoai=$phone,email='$email',
        nguyenquan='$nguyenquan',cmnd='$cmnd',noicap ='$noicap',quoctich='$quoctich',dantoc='$dantoc'
        WHERE idNhanVien='$id'";
        $STH = $DBH -> prepare($query);
        $STH -> execute();
    }
?>