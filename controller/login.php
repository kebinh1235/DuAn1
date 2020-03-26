<?php
include_once "model/login.php";
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
        if ($password != $info['password'])
        {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
        }
        $_SESSION['user'] = $username;
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='index.php?controller=home'>Về trang chủ</a>";
        die();
    break;
    case "reg":
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        reg($username, $password, $name, $email, $gender, $dob, $phone);
        echo '<a href="index.php">nhấn để quay về trang đăng nhập</a>';
        //check if username exist
    break;
    case logout:
        unset($_SESSION['user']);
        header("location:index.php?controller=login");
    break;
}
?>
