<?php
    include 'helper.php';
    $event="";
    $event=$_GET['event2'];
    $sql="Update ticket Set Payment_Status ='CC' Where TCK_ID  = '$event' ";
if(mysqli_query($conn,$sql)){
    echo"Record Deleted Successfully";
    header('location:admin-register-event.php?registerEvent2=1');
}
else {
    echo"Error Deleting Record";
}
mysqli_close($conn);
?>

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of delete_event
 *
 * @author guoc7

