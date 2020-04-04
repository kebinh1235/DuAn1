<?php
include_once "model/accountant.php";
include_once "model/profile.php";
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
                include "view/site/profile.php";
        break; 
    }
?>