<?php
    include 'helper.php';
    $delete="";
    $delete=$_GET['delete'];
    $sql="Update member Set mem_Status='D' Where Mem_MemberID = '$delete'";
if(mysqli_query($conn,$sql)){
    echo"Record Deleted Successfully";
    header('location:admin-user-table.php?page=');
}
else {
    echo"Error Deleting Record";
}
?>
