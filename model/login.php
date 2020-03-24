<?php
    include_once "model/config.php";
    function login($username, $pass)
    {
        $DBH = connect();
        $query = "SELECT * FROM chucvu WHERE taikhoan='$username' AND matkhau='$pass'";
        $STH = $DBH->query($query);
        $row_affected = $STH -> rowCount();
        if($row_affected == 0)
        {
            return false;
        }
        return true;
    }
?>