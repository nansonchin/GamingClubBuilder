<?php
 include 'helper.php';
 
 $id="";
 $desc="";
 
 $id=$_GET['id'];
 $desc=$_POST['desc'];
 
 $sql="Update notice set N_Notice_Desc='$desc' where N_Notice_ID='$id'";
 mysqli_query($conn,$sql);
 header('location:admin-notice.php?notice=');
?>