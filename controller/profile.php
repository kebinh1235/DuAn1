<?php
include_once "model/accountant.php";
include_once "model/profile.php";
include_once "model/home.php";
include_once "model/toPDF.php";
    $action = "default";
if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action){
        case "default":
        if(isset($_GET['id']))
            $id = $_GET['id'];
            $info = getInfo($id);
            $luong = getluong($id);
            $mng = getManagerHR();
            $amountMB = amountMember();
            $amountPB = amountPB();
            include "view/site/profile.php";
        break;
        case "edit":
            if(isset($_POST['editprofile']))
            {
                $id = $_GET['id'];
                $name = $_POST['name'];
                $date = $_POST['date'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $nguyenquan = $_POST['nguyenquan'];
                $cmnd = $_POST['cmnd'];
                $noicap = $_POST['noicap'];
                $quoctich = $_POST['quoctich'];
                $dantoc = $_POST['dantoc'];
                edit($name, $date, $phone, $email, $nguyenquan, $cmnd, $noicap, $quoctich, $dantoc, $id);
            }
                $info = getInfo($id);
                $luong = getluong($id);
                $mng = getManagerHR();
                $amountMB = amountMember();
                $amountPB = amountPB(); 
            include "view/site/profile.php";   
        break;
    }
?>