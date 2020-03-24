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
                <input type="text" name="username" id="#" class="input-field" placeholder="Tài Khoản" required>
                <input type="text" name="pass" id="#" class="input-field" placeholder="Mật Khẩu" required>
                <input type="checkbox" name="#" id="#" class="check-box"><span>Nhớ Mật Khẩu</span>
                <button type="submit" name="login" class="submit-btn">Đăng Nhập</button>
            </form>

            <!--Form Đăng Ký-->
            <form id="register" class="input-group">
                <!--Họ Tên-->
                <input type="text" name="#" id="#" class="input-field" placeholder="Họ Tên" required>
                <!--Ngày Sinh-->
                <input type="date" name="#" id="#" class="input-field" placeholder="Ngày Sinh" required>
                <!--Giới Tính-->
                Nam <input type="radio" name="#" id="#" class="radio" placeholder="Nam" required>
                Nữ <input type="radio" name="#" id="#" class="radio" placeholder="Nữ" required>
                <!--Điện Thoại-->
                <input type="text" name="#" id="#" class="input-field" placeholder="Điện Thoại" required>
                <!--Email-->
                <input type="email" name="#" id="#" class="input-field" placeholder="Email" required>
                <!--Tài Khoản - Mật Khẩu-->
                <input type="text" name="#" id="#" class="input-field" placeholder="Tài Khoản" required>
                <input type="text" name="#" id="#" class="input-field" placeholder="Mật Khẩu" required>
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