<?php
include_once "model/home.php";
include_once "model/config.php";
include_once "model/accountant.php";
include_once "model/HR.php";
    $action = "default";
if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action){
        case "default":
            $amountMB = amountMember();
            $amountPB = amountPB();
            $getA = AccountantList();
            $getHR = getListHR();
            include "view/site/qlns.php";
        break; 
    }
?>