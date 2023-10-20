<?php
   include 'helper.php';
   include 'login_backend.php';
//   session_start();
   
    $_SESSION["username"] = $result;
        $user_check = $_SESSION["username"];
//              echo $user_check;
   $fetSQL="SELECT Mem_UserName from member Where Mem_MemberID  ='$user' ";

   $row5= mysqli_query($conn,$fetSQL);
   $result5= mysqli_fetch_assoc($row5);
   $login_session =$result5;
   
   if(!isset($login_session)){
       mysql_close($conn);
       header("location:loading.php");
   }
   
   ?>
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

