<?php
include_once "model/home.php";
include_once "model/HR.php";
    $action = "default";
if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action){
        case "default":
                $amountMB = amountMember();
                $amountPB = amountPB();
                $listHR = getListHR();
                include "view/site/HR.php";
        break; 
    }
?>