<?php

include 'helper.php';

$id2 = "";
$id2 = $_GET['id2'];
$vestatus = $_POST['vestatus'];

$sql2 = "Update ticket SET Payment_Status='$vestatus' where TCK_ID ='$id2'";
mysqli_query($conn, $sql2);
header('location:admin-register-event.php?registerEvent2=1');
?>
