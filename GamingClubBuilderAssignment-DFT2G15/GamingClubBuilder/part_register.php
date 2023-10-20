<?php
$page_title = 'Insert Member';
include 'helper.php';
$M_Gender='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $M_FName = $_POST['firstName'];
    $M_LName = $_POST['lastName'];
    $M_UName = $_POST['userName'];
    $M_Email = $_POST['email'];
    $M_Phone = $_POST['phone'];
    $M_Gender = $_POST['gender']??'';
    $M_Pass = $_POST['password'];
    $M_CPass = $_POST['confirmPassword'];
    

    $pattern = '/^[a-zA-Z0-9_]+$/';
    if (!preg_match($pattern, $M_UName)) {
        $error['userName'] = "Username can only contain <b>letters, numbers, and underscores</b>.";
    } else {
        $sql = "SELECT Mem_UserName FROM member WHERE Mem_UserName = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $M_UName);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $error['userName'] = "<b>Student ID</b> exists. Try another.";
        }
    }

    if (empty($M_FName) || strlen($M_FName) > 20) {
        $error['firstName'] = "Please insert a <b>First Name</b> with maximum 20 characters.";
    }
    if (empty($M_LName) || strlen($M_LName) > 20) {
        $error['lastName'] = "Please insert a <b>Last Name</b> with maximum 20 characters.";
    }

    if (empty($M_Email) || strlen($M_Email) > 50) {
        $error['email'] = "Please insert a <b>Email</b> with maximum 50 characters.";
    }

    if (empty($M_Phone) || strlen($M_Phone) > 12 || strlen($M_Phone) < 12) {
        $error['phone'] = "Please insert a <b>Phone Number</b> with maximum 12 Integer.";
    }
    
    if (empty($M_Gender) ) {
        $error['gender'] = "Please select your gender.";
    }

    if (empty($M_Pass) || strlen($M_Pass) > 30) {
        $error['password'] = "Please insert a <b>Password</b> with maximum 30 characters.";
    }

    if (empty($M_CPass) || strlen($M_CPass) > 30) {
        $error['confirmPassword'] = "Please insert a <b>Password</b> with maximum 30 characters.";
    }

    if (($M_CPass) != ($M_Pass)) {
        $error['confirmPassword'] = "Please make sure your password and your confirm password are same!";
    }

    if (isset($error)) {
        echo '<div class="alert alert-dismissible alert-warning">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">Warning!</h4>
  <ul class="mb-0">';
        foreach ($error as $e => $t) {
            echo "<li>$t</li>";
        }
        echo '</ul></div>';
    } else {
        $sql = "INSERT INTO member(Mem_Member_FirstName,Mem_Member_LastName,Mem_UserName,Mem_Password,Mem_Email,Mem_Phone,Mem_MemberGender,Mem_status) "
                . "VALUES ('$M_FName','$M_LName','$M_UName','$M_Pass','$M_Email','$M_Phone','$M_Gender','A')";
        $result = $conn->query($sql);

        if ($result) {
            echo '<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">Success!</h4>
  <ul class="mb-0">';
            echo "<li>Student <b>$M_UName</b> has been inserted.</li>";
            echo '<a href="login.php" >Back to login</a>';
            echo '</ul></div>';
        } else {
            echo $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Member Registration Page</title>
        <meta charset="UTF-8">
        <link href="https://bootswatch.com/5/morph/bootstrap.min.css" rel="stylesheet">
    </head>

    <style>
        .flex-container {
            display: flex;
        }

        .flex-container > div {
            margin: 30px;
            padding: 0px;
            font-size: 20px;
        }
    </style>

    <!--    style="background-image: url('IGS Background.png');background-repeat: no-repeat;
      background-attachment: fixed; 
      background-size: 100% 100%;-->

    <body>
        <div class="regist_form">
            <div class="container py-5 h-100">
                <div class="flex-container">
                    <div>
                        <h1>Register</h1>
                        <p>Welcome to our registration page, please fill up the form below to become our members!</p>

                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method='POST'>

                            <fieldset>
                                <div class="col-sm-8">

                                    <div class="form-group">
                                        <input type="text" class="form-control " name="firstName"<?= !isset($M_FName) ?: "value='$M_FName'" ?> placeholder="First Name *" maxlength="20" required><br>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control " name="lastName"<?= !isset($M_LName) ?: "value='$M_LName'" ?> placeholder="Last Name *" maxlength="20" required><br>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="userName" <?= !isset($M_UName) ?: "value='$M_UName'" ?> placeholder="Username *" maxlength="20" required><br>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" <?= !isset($M_Email) ?: "value='$M_Email'" ?> placeholder="Email *" maxlength="50" required><br>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" <?= !isset($M_Phone) ?: "value='$M_Phone'" ?> placeholder="Phone Number *" maxlength="12" required><br>
                                    </div>

                                    <div class="form-group">
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="gender"  value='M' id='M' <?= $M_Gender=='M'?'checked':'' ?>><label for='M' class="btn btn-outline-primary">Male</label>
                                            <input type="radio" class="btn-check" name="gender" value='F' id='F' <?= $M_Gender=='F'?'checked':'' ?>><label for='F' class="btn btn-outline-primary">Female</label>
                                        </div></div>
                                    <br>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password" <?= !isset($M_Pass) ?: "value='$M_Pass'" ?> placeholder="Password *" required><br>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="confirmPassword" <?= !isset($M_CPass) ?: "value='$M_CPass'" ?> placeholder="Confirm Password *" required><br>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-outline-dark" value="SIGN UP">
                                    </div>

                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <div>
                        <img src="Regeister.jpg" alt="IGS" height="800px">
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
