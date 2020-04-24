<?php
    include_once "model/config.php";
    function login($username, $password)
    {
        $password = md5($password);
        $DBH=connect();
        $query="SELECT idNhanVien, idPhongBan, username, hoten, password FROM nhanvien WHERE username='$username'";
        $STH = $DBH->query($query);
        $row = $STH -> rowCount();
        $result = $STH->fetch(PDO::FETCH_ASSOC);
        if($row == 0)
        {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        if($password!=$result['password'])
        {
            echo "Mật khẩu không đúng. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        return $result;
    }
    function reg($username, $password, $name, $email, $gender, $dob, $phone)
    {
        $password = md5($password);
        $DBH = connect();
        $query = "INSERT INTO nhanvien (username, password, hoten, email, gioitinh, ngaysinh, dienthoai) 
        VALUES ('$username', '$password', '$name', '$email', '$gender', '$dob', '$phone')";
        $STH = $DBH -> prepare($query);
        $STH->execute();
    }
    function checkuser($username)
    {
        $DBH=connect();
        $query="SELECT * FROM nhanvien WHERE username='$username'";
        $STH = $DBH->query($query);
        $result = $STH->fetch(PDO::FETCH_ASSOC);
        return $result;
    } 
?>