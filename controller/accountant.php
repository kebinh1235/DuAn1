<?php
    include_once "model/accountant.php";
    $action = "default";
if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action){
        case "default":
                $AL =  AccountantList();
                include "view/site/phongketoan.php";
        break; 
    }
?>