<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
</head>
<body>
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
</body>
</html>