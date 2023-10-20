<?php

include 'helper.php';
$noticetype=$_POST['noticeType'];
$noticeDesc=$_POST['noticecDesc'];
$noticeDate="SELECT now();";
$sql="insert into `notice` (N_Notice_Desc,NT_Type,N_Notice_Date)values ('$noticeDesc','$noticetype',now())";
mysqli_query($conn, $sql);
header('location:admin-notice.php?notice=1');

?>
