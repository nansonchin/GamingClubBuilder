<?php
//helper.php

$servername='localhost';        
$username='Game';        
$password='game';
$dbname='game';

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die($conn-> connect_error);
}
//else{
//    
//    echo "Connected";
//}

?>