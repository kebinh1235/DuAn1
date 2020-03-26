<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">  
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