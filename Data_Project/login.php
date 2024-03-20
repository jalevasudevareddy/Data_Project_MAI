<?php
session_start();
if(isset($_SESSION['username']))
{
    // echo "true";
    // exit;
    header('Location: index.php');
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://i0.wp.com/multipliersolutions.com/wp-content/uploads/2022/06/multiplier_logo.png?w=320&ssl=1" alt="Multiplier Ai">
        </div>
        <br>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" type="button" id="login_button">Login</button>
        </form>
        <!-- <div class="text-center fs-6">
            <a href="#">Forgot password?</a> or <a href="#">Sign up</a>
        </div> -->
    </div>

    <script>
        document.getElementById("login_button").addEventListener("click", function (e) {
            e.preventDefault(); 
            var userName = document.getElementById("userName").value;
            var password = document.getElementById("pwd").value;
            var settings = {
                "url": "Api/api.php",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json",
                    "Cookie": "PHPSESSID=8ugv3raroi6oh2bffbherfciso"
                },
                "data": JSON.stringify({
                    "function": "user_authantication",
                    "username": userName,
                    "psw": password
                }),
            };

            $.ajax(settings).done(function (response) {
                console.log(response);
                let obj = JSON.parse(response)
                console.log(obj.msg)
                if (obj.msg == "found") 
                {
                    window.location.href = "create_session.php";
                } 
                else 
                {
                    alert("Login failed. Please check your username and password.");
                }
            });
            
        });
    </script>
</body>
</html>
