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
        // if(isset($_GET['login'])){
        //     $user = $_POST['user'];
        //     $pass = md5($_POST['pass']);
        //     if(login($email, $pass) == true){
        //             $_SESSION['user'] = $user;
        //             header("location: index.php");
        //         }else{
        //             echo '<script> alert("Đăng nhập không thành công !"); </script>';
        //             include "view/site/login_reg.php";
        //         }
        // }else{
        //     include "view/site/login_reg.php";     
        // }
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        if(login($username, $pass) == true)
        {
            $_SESSION['user'] = $username;
        }
        header("location:index.php?controller=home");
    break;
    case logout:
        unset($_SESSION['user']);
        header("location:index.php?controller=login");
    break;
}
?>