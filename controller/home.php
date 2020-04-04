<?php
include_once "model/home.php";
    $action = "default";
    if(isset($_GET['act']))
        $action = $_GET['act'];
        switch ($action){
            case "default":
                $amountMB = amountMember();
                $amountPB = amountPB();
                include "view/site/home.php";
                break; 
    }
?>