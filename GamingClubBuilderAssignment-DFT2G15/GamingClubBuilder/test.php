<?php 
include 'helper.php';
$input = filter_input_array(INPUT_POST);

$desc=mysqli_real_escape_string($conn,$input['N_Notice_Desc']);
if(isset($_REQUEST["edit"]))
{

    $query = "UPDATE notice_land SET N_Notice_Desc ='".$desc."' WHERE N_Notice_ID = '".$input['N_Notice_ID']."'";
        mysqli_query($conn,$query);
}
echo json_encode($input);
?> 

