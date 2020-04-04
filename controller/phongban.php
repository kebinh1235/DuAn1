<?php
if($_SESSION['id_phongban'] == 1)
{
    header("location:index.php?controller=home");
}
    $action = "default";
if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action){
        case "default":
                include "view/site/HR_qlphongban.php";
        break; 
    }
?>