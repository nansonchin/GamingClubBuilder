<?php

include "helper.php";

session_start();

$user = $_POST['username'];
$password = $_POST['password'];

$user = stripslashes($user);
$password = stripslashes($password);

$user = mysqli_real_escape_string($conn, $user);
$password = mysqli_real_escape_string($conn, $password);

$sql1 = "SELECT * FROM member WHERE Mem_UserName ='$user' AND Mem_Password ='$password' AND Mem_status='A' AND Mem_IsAdmin = '1'";
$sql = "SELECT * FROM member WHERE Mem_UserName ='$user' AND Mem_Password ='$password' AND Mem_status='A'";
//$sql1= "SELECT Mem_Member_Name FROM member WHERE Mem_UserName ='$user' ";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    
    $row2 = mysqli_fetch_row($result1);
    
    $_SESSION['id'] = $row2[0];
    $_SESSION['firstName'] = $row2[1];
    $_SESSION['username'] = $row2[3];
    $_SESSION['email'] = $row2[5];
    $_SESSION['memPhone'] = $row2[6];
    $_SESSION['admin'] = $row2[7];
    $_SESSION['gender'] = $row2[8];
    $_SESSION['status'] = $row2[9];
    
    header("location:admin-user-table.php?page=1");
    
    //while ($data = mysqli_fetch_assoc($result1)) {
        //header("location:admin-user-table.php?page=1");
//        echo"<h1> Welcome Admin</h1>";
    //}
} else if (mysqli_num_rows($result) > 0) {
    
    $row = mysqli_fetch_row($result);
    
    $_SESSION['id'] = $row[0];
    $_SESSION['firstName'] = $row[1];
    $_SESSION['username'] = $row[3];
    $_SESSION['email'] = $row[5];
    $_SESSION['memPhone'] = $row[6];
    $_SESSION['admin'] = $row[7];
    $_SESSION['gender'] = $row[8];
    $_SESSION['status'] = $row[9];
    
    header("location:profile.php");
    
    //while ($data1 = mysqli_fetch_assoc($result)) {
//        echo"<h1> Welcome </h1>";
        //header("location:profile.php");
    //}
} else {
    echo "<h1> Login Failed </h1>";
}
?>