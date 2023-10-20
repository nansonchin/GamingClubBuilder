<?php

include 'helper.php';

$id = "";
$em_first = "";
$em_last = "";
$em_user = "";
$em_pass = "";
$em_email = "";
$em_gender = "";
$em_status = "";

$id = $_GET['mid'];
$emfirst = $_POST['emfirst'];
$emlast = $_POST['emlast'];
$emuser = $_POST['emuser'];
$empass = $_POST['empass'];
$ememail = $_POST['ememail'];
$emgender = $_POST['emgender'];
$emphone=$_POST['emphone'];
$emstatus = $_POST['emstatus'];


$sql = "Update member SET Mem_Member_FirstName='$emfirst',Mem_Member_LastName='$emlast',Mem_UserName='$emuser',Mem_Password='$empass',Mem_Email='$ememail',Mem_MemberGender='$emgender',Mem_Phone='$emphone',Mem_status ='$emstatus' where Mem_MemberID ='$id'";
mysqli_query($conn, $sql);
header('location:admin-user-table.php?page=');
?>