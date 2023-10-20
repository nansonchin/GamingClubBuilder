<?php
    include 'helper.php';
    $sql="Delete From notice Where N_Notice_ID= '".$_GET['notice']."'";
if(mysqli_query($conn,$sql)){
    echo"Record Deleted Successfully";
    
}
else {
    echo"Error Deleting Record";
}
mysqli_close($conn);
?>


