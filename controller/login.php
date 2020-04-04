<?php
include_once "model/login.php";
include_once "model/accountant.php";
$action = "default";
if(isset($_GET['act']))
$action = $_GET['act'];
switch($action){
    case "default":
        include "view/site/login_reg.php";
    break;
    case "login":
        $username=$_POST['username'];
        $password=$_POST['pass'];
        $info = login($username, $password);
        $mng = getManagerHR();
        if($info['idNhanVien'] > 0)
        {
        $_SESSION['id_phongban'] = $info['idPhongBan'];
        $_SESSION['hoten'] = $info['hoten'];
        $_SESSION['user'] = $username;
        $_SESSION['iduser'] = $info['idNhanVien'];
        }
        if($_SESSION['id_phongban'] == 1)
        {
            header("location: index.php?controller=accountant");
        }
        elseif($_SESSION['id_phongban'] == 2)
        {
            header("location: index.php?controller=HR");
        }
        else
        {
            header("location: index.php?controller=home");
        }
    break;
    case "reg":
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob']; 
        $check = checkuser($username);
        if (!$username || !$password || !$email || !$name || !$dob || !$gender)
        {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
        }
        if($check['username'] == $username)
        {
        echo "Tên đăng nhập đã được sử dụng. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
        }
        reg($username, $password, $name, $email, $gender, $dob, $phone);
        echo '<a href="index.php">nhấn để quay về trang đăng nhập</a>';
        //check if username exist
    break;
    case logout:
        unset($_SESSION['user']);
        $_SESSION['id_phongban'];
        $_SESSION['user'];
        header("location:index.php?controller=login");
    break;
}
?>
