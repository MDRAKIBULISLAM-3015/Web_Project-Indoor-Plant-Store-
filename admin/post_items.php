<?php

require_once("../connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    # data recieve
    $name = $_REQUEST['name'];
    $file = $_FILES['photo'];
    $price = $_REQUEST['price'];
    $plant = $_REQUEST['plant'];
    
    $file_name = uniqid()."_".$file['name'];
    $file_tmpName = $file['tmp_name'];

    move_uploaded_file($file_tmpName,"../uploadphoto/{$file_name}");

    $Query = "insert into foodpost(name,photo,price,details) values ('$name','$file_name','$price','$plant')";	


    $run = mysqli_query($connect_database,$Query);

    if($run){
        header("location:../");
    }
}