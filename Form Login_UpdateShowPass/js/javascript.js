//Di Chuyển Form
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

//Show hoặc ẩn password - Login
    const pass_field_login = document.getElementById("pass_field_login");
    const show_btn_login = document.getElementById("show_btn_login");
    show_btn_login.addEventListener("click", function(){
        if(pass_field_login.type === "password") {
            pass_field_login.type = "text";
            show_btn_login.classList.add("hide");
        }
        else {
            pass_field_login.type = "password";
            show_btn_login.classList.add("hide");
        }
    });
//Show hoặc ẩn password - Register
    const pass_field_register = document.getElementById("pass_field_register");
    const show_btn_register= document.getElementById("show_btn_register");
    show_btn_register.addEventListener("click", function(){
        if(pass_field_register.type === "password") {
            pass_field_register.type = "text";
            show_btn_register.classList.add("hide");
        } 
        else {
            pass_field_register.type = "password";
            show_btn_register.classList.remove("hide");
        }
    });   