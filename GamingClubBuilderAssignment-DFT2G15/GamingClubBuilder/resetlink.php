<?php

include 'helper.php';

$err = array();
$err['EmptyMail'] = "Your Email is Empty ! Please filled in ";
$err['ErrorMail'] = "The Email Format required @ + .com ";
$err['SuccessMail'] = "We have sent the link to your ";
$err['WrongMail'] = "Email does not exits. Try another!";

//$submit="";
//$email = "";
$email = $_POST['fore'];
$submit = $_POST['fors'];
$email_regex = "/([a-zA-Z0-9!#$%&’?^_`~-])+@([a-zA-Z0-9-])+(.com)+/";
$sql = "SELECT Mem_Email FROM member WHERE Mem_Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

var_dump($result);
echo $result->num_rows;
if ($submit) {
    if (empty($email)) {
        echo" <script>alert('$err[EmptyMail]');window.location.href='forgotpassword.php';</script>";
        $err = true;
    } elseif (!preg_match($email_regex, $email)) {
        echo "<script>alert('$err[ErrorMail]$email');window.location.href='forgotpassword.php';</script>";
    } elseif (!$result->num_rows) {
        echo "<script>alert('$err[WrongMail]$email');window.location.href='forgotpassword.php';</script>";
    } else{
        echo "<script>alert('$err[SuccessMail]$email');window.location.href='forgotpassword.php';</script>";
    }
}
?>
