<?php
    session_start();
//load header
    if(isset($_SESSION['user']))
    include 'view/site/header.php';
    //load controllers
    $ctrl = "home";
    if(!isset($_SESSION['user']))
    {
        $ctrl = "login";
    }
    elseif(isset($_GET['controller']))
    {
        $ctrl = $_GET['controller'];
    }
    include 'controller/'.$ctrl.'.php';
    //load footer
    if(isset($_SESSION['user']))
    include 'view/site/footer.php';
?>
