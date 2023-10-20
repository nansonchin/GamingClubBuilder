<?php
$page_title = 'Edit Profile';
include 'helper.php';
session_start();

$tname = 'member';
$pkey = 'Mem_MemberID';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //var_export($_POST);
    $id = $_SESSION['id'];
    if (empty(trim($_POST['name']))) {
        $error[] = 'Please insert a Name.';
    } else {
        $username = trim($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $error[] = 'Please select a Email.';
    } else {
        $gender = $_POST['email'];
    }

    if (empty(trim($_POST['phone']))) {
        $error[] = 'Please enter a phone number.';
    } else {
        $name = trim($_POST['phone']);
    }

    if (isset($error)) {
        
    } else { //insert data into db
        $sql = "UPDATE $tname SET Mem_Member_FirstName=?,Mem_Email=?,Mem_Phone=? WHERE $pkey=?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('ssss', $username, $gender, $name, $id);
            if ($stmt->execute()) {
                if ($stmt->affected_rows === 1) {
                    $_SESSION['msg'][] = "Record has been updated.";
                    header('location: profile.php');
                } else {
                    alert($stmt->error, 'warning');
                }
            } else {
                alert($stmt->error, 'warning');
            }
        } else {
            alert($mysqli->error, 'warning');
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            .error_Box {
                margin-bottom: 20px;
            }
            
            .error_Message {
                background-color: #FF1E1E;
                text-align: center;
                color: #ffffff;
                font-family: times;
                width: 400px;
                margin: auto;
            }

            .w-450 {
                width: 450px;
            }
            .vh-100 {
                min-height: 100vh;
            }
            .w-350 {
                width: 350px;
            }
        </style>
    </head>
    <body>


        <div class="d-flex justify-content-center align-items-center vh-100">

            <form class="shadow w-450 p-3" 
                  action="<?= $_SERVER['PHP_SELF'] ?>"
                  method="POST">

                <h4 class="display-4  fs-1">Edit Profile</h4><br>
                <div class="error_Box">
                    <div class="error_Message">
                        <?php
                        if (isset($error)) {
                            echo "";
                            if (!empty($error[0])) {
                                echo "<strong>$error[0]<br>";
                            }
                            if (!empty($error[1])) {
                                echo "$error[1]<br>";
                            }
                            if (!empty($error[2])) {
                                echo "$error[2]<br>";
                            }
                        } else
                            echo " ";
                        ?>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" 
                           class="form-control"
                           name="name"
                           >
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" 
                           class="form-control"
                           name="email"
                           >
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" 
                           class="form-control"
                           name="phone"
                           >
                </div>
                <input type="submit" value='Update' class="btn btn-primary">
                <a href="profile.php" class="link-secondary">Cancel</a>
            </form>
        </div>

    </body>
</html>
