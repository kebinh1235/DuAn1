<?php
include_once "model/home.php";
    $action = "default";
if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action){
        case "default":
                include "view/site/HR.php";
        break; 
    }
?>