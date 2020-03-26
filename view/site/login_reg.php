<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập và Đăng Ký</title>
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/login_reg.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <!--Button-->
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Đăng Nhập</button>
                <button type="button" class="toggle-btn" onclick="register()">Đăng Ký</button>
            </div>
            <!--Hình Avatar-->
            <div class="social-icons">
                <img src="assets/images/avatar.png" alt="Avatar Profile">
            </div>
            <!--Form Đăng Nhập-->
            <form id="login" class="input-group" action="index.php?controller=login&act=login" method="post">
                <!--Tài Khoản - Mật Khẩu-->
                <input type="text" name="username" id="#" class="input-field" placeholder="Tài Khoản" >
                <input type="password" name="pass" id="#" class="input-field" placeholder="Mật Khẩu" >
                <input type="checkbox" name="#" id="#" class="check-box"><span>Nhớ Mật Khẩu</span>
                <button type="submit" name="login" class="submit-btn">Đăng Nhập</button>
            </form>
        
            <!--Form Đăng Ký-->
            <form id="register" class="input-group" method="post" action="index.php?controller=login&act=reg">
                <!--Họ Tên-->
                <input type="text" name="name" id="" class="input-field" placeholder="Họ Tên" >
                <!--Ngày Sinh-->
                <input type="date" name="dob" id="#" class="input-field" placeholder="Ngày Sinh" >
                <!--Giới Tính-->
                Nam <input type="radio" name="gender" value="Nam" id="#" class="radio" placeholder="Nam" checked >
                Nữ <input type="radio" name="gender" value="Nữ" id="#" class="radio" placeholder="Nữ" >
                <!--Điện Thoại-->
                <input type="text" name="phone" id="#" class="input-field" placeholder="Điện Thoại" >
                <!--Email-->
                <input type="email" name="email" id="#" class="input-field" placeholder="Email" >
                <!--Tài Khoản - Mật Khẩu-->
                <input type="text" name="username" id="#" class="input-field" placeholder="Tài Khoản" >
                <input type="password" name="password" id="#" class="input-field" placeholder="Mật Khẩu" >
                <!--Checkbox-->
                <input type="checkbox" name="#" id="#" class="check-box"><span>Đồng ý với điều khoản</span>
                <button type="submit" class="submit-btn">Đăng Ký</button>
            </form>
        </div>

    <!--JavaScript-->
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        
        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "120px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
    </div>
</body>
</html>