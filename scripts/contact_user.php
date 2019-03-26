<?php
session_start();
require 'db_info.php';
$email=$_POST['email'];
$user_email=$_SESSION['email'];
$sql= "INSERT into requst('from','to') values ('$user_email','$email') ";
if (mysqli_query($con, $sql)) 
 {
     $_SESSION['contacted']=1;
     header('location: ../pages/donors.php');
 }
?>
