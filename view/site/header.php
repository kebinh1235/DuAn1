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
<!--Phần mở đầu-->
<body>
    <!--Phần mở đầu-->
    <header style="background-position: center; background-size: cover; background-image: url(assets/images/nav_background.jpg);">
        <!--Logo lớn-->
        <div class="heading__box-title">
            <i class="fas fa-users-cog" style="  float: left; color: white; font-size: 60px; padding-top: 30px;"></i>
            <h1>Quản Lý</h1>
            <h2>Nhân Sự</h2>    
            
            <!--Search-->
            <div class="search">
                <input type="text" name="#" id="search" placeholder="Nội dung tìm kiếm...">
                <button><i class="fas fa-search"></i></button>
            </div>  
        </div>      
    </header>
    <div class="clear"></div>
    <!--Menu-->
    <nav>
        <div class="nav__box-content">
            <h3 style="text-align: center;"><?=$_SESSION['hoten']; ?></h3>
            <ul>
                <li><a href="index.php?controller=home">Trang Chủ</a></li>
                <?php if($_SESSION['id_phongban'] != 1){
                echo '<li><a href="index.php?controller=qlns">Quản Lý Nhân Sự</a></li>
                <li><a href="index.php?controller=phongban">Quản Lý Phòng Ban</a></li>';
                } ?>
            </ul>
            <div class="nav__box-login">
                <li><a href="index.php?controller=login&act=logout">Đăng Xuất</a></li>
            </div>
        </div>
    </nav>