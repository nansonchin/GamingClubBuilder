<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
 
        <title>Member Login Page</title>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/futurik" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
        <title></title>
    </head>
    <body class="login-body">
        <div class="login-back">
        </div>
        <div class="login-content">
            <div class="left-content">
                <h1 id="left-h1">TAR IGS</h1>
                <h2 id="left-h2"> NEW TO HERE?</h2>
                <h3 id="left-h3">Feel Free to Join Us</h3>
                <a href="part_register.php" class="loginpage-button">Sign Up</a>
            </div>
            <div class="right-content">
                <div class="right-head text-center "> 
                <form action="login_backend.php" method="POST">
                    
                <p id="right-p">NICE TO SEE YOU AGAIN </p>
                <h1 id="right-h1"> Welcome Back</h1>   
                </div>
                <div class="user-bar text-center justify-content-center">
                   
                    
                    <input type="text" id="user-input" name="username" placeholder="USERNAME" required>
                    <br><br>
                    <input type="password" id="user-input" name="password" placeholder="PASSWORD" required>
                </div>
                <div class="right-fpass text-center">
                    <a href="forgotpassword.php" id="right-forgot">Forgot Password?</a>
                </div>
                <div class="login-method text-center">
                    <h5>Login Using:</h5>
                </div>
                
                <div class="login-method d-flex justify-content-center ">
                    
                    <a href="https://www.facebook.com/login/"><img src="https://www.clipartmax.com/png/full/17-171363_facebook-logo-png-%5Bnew-2015%5D-vector-eps-free-download-transparent-background-facebook.png"></a>
                    <a href="https://webmail.au.syrahost.com/"><img src="https://www.clipartmax.com/png/full/31-316827_gmail-icon-gmail-icon.png"></a>
                    <a href="https://www.instagram.com/accounts/login/"><img src="https://www.clipartmax.com/png/full/4-41427_instagram-png-icon-instagram-logo-transparent.png"></a>
                </div>
                <div class="login-button">
                    <input type="submit" class="loginpage-button" value="LOG IN">
                </div>
                
               </form>

            </div>
           
        </div>
            
        
    </body>
</html>