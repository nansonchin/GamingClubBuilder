<?php

include 'helper.php';

$id = "";
$id = $_GET['id'];
$aestatus = $_POST['aestatus'];

$sql = "Update ticket SET Payment_Status='$aestatus' where TCK_ID ='$id'";
mysqli_query($conn, $sql);
header('location:admin-register-event.php?registerEvent=1');
?>
