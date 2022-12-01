<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $mail = "admin@diu.edu.bd";
    $pass = "admin";

    $email = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($email != '' and $password != ''){
        if($email === $mail and $password === $pass){
            header("location:../admin_Home_Page.php");
        }else {
            header("location:../index.php?If_Not_same");
        }
    }else {
        header("location:../index.php?If_Empty_field");
    }
}