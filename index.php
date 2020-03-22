<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
</head>
<body>
<?php
//load header
    include 'view/site/header.php';
    //load controllers
    $ctrl = "home";
    if(isset($_GET['controller']))
    {
        $ctrl = $_GET['controller'];
    }
    include 'controller/'.$ctrl.'.php';
    //load footer
    include 'view/site/footer.php';
?>
</body>
</html>