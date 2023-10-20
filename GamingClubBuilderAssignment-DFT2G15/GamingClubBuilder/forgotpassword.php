<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>

        <title>Forgot Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="forgotpassword.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/futurik" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
        <title></title>
    </head>
    <body>
        <div class="forgot-back"></div>
        <div class="forgot-password">
            <div class="pass-left-content">
                <h1 id="pass-left-h1">OPPS...</h1>
                <h2 id="pass-left-h2">FORGOT YOUR PASSWORD?</h2>
                <a href="login.php" class="forgot-back-btn">BACK</a>

            </div>
            <div class="pass-right-content">
                <div class="right-head text-center">
                    <p id="fp-right-p">RECOVERY PASSWORD</p>
                    <h1 id="fp-right-h1"> ENTER YOUR EMAIL</h1>
                    <p id="fp-right-p"> We'll send you a link to reset your password</p>
                </div>
                <div class="fp-useremail text-center justify-content-center">
                    <form action="resetlink.php" method="POST">

                        <input type="text" id="fp-email" name="fore" placeholder="EMAIL">  
                        

                        </div>
                        <div class="fp-submit-button">
                            <input type="submit" name="fors" value="Send"/>
                        </div>
                      
                    </form>

                </div>
            </div>

    </body>
</html>