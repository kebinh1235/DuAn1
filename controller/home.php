<?php
    $action = "default";
    if(isset($_GET['act']))
        $action = $_GET['act'];
        switch ($action){
            case "default":
                include "view/site/home.php";
                break; 
    }
?>