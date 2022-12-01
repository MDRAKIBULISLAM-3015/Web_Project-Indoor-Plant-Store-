<?php
session_start();

require("connect.php");

$email = $_REQUEST['mail'];
$password = $_REQUEST['password'];

$Query = "select * from info where mail = '$email' and password = '$password'";
$run = mysqli_query($connect_database,$Query);

$row = mysqli_num_rows($run);

if($row){
    $_SESSION['marchant_email'] = $email;
    header("location:../user_home_page.php");
}else{
    header("location:../login_Page.php?Invalid");
}
