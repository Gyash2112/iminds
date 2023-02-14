<?php
session_start();
include './connection/connection.php';
$username=$_POST['login'];
$password=$_POST['password'];
$result_dict=$conn->query("select password from users where username='$username'");
$result=$result_dict->fetch_assoc();
if($result['password']===$password){
    $_SESSION['username']=$username;
    header("location:home.php");
}
else{
    header("Location:index.php");
}
?>