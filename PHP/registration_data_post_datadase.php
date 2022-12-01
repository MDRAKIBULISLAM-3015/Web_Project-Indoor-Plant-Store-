<?php

    require("connect.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $name = $_REQUEST['name'];
        $email = $_REQUEST['mail'];
        $bdate= $_REQUEST['Bdate'];
        $number = $_REQUEST['number'];
        $address = $_REQUEST['address'];
        $radio = $_REQUEST['radioBTN'];
        $password = $_REQUEST['password'];
        $con_password = $_REQUEST['con-password'];

        
        if($password==$con_password){
            $insert = "insert into info (name,mail,Bdate,number,address,gender,password) 
            values ('$name','$email','$bdate','$number','$address','$radio','$con_password')";	
    
    
            $run = mysqli_query($connect_database,$insert);
    
            if($run){
                header("location:../login_Page.php");
            }        
        }
        else{
            header("location:../registration_page.php?Not_Same");
        }
       
    }