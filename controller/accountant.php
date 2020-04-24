<?php
    include_once "model/accountant.php";
    include_once "model/home.php";
    $action = "default";
if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action){
        case "default":
                $amountMB = amountMember();
                $amountPB = amountPB();
                $AL =  AccountantList();
                include "view/site/phongketoan.php";
        break; 
    }
?>