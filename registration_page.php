<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indoor Plant Store</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="logoclass">
            <a href="index.php" class="logo" > <i class="fa-brands fa-pagelines"></i> Indoor Plant Store</a> 
        </div>
        <div class="head_text">
            <h2 class="top"><b> Welcome To Registstion Page!</b></h2>
        </div>
        <div class="Reg">
            <form  action="PHP/registration_data_post_datadase.php" method="post">
                <fieldset>
                    <i class="fa-solid fa-user"></i><b> Name:</b>
                    <input type="text" id="name" name="name" placeholder="Enter Name"><br><br>
                    
                    <i class="fa-solid fa-envelope-circle-check"></i><b> Mail ID:</b>
                    <input type="email" id="mail" name="mail" placeholder="Enter Your Mail ID"><br><br>

                    <b> Brith Date:</b>
                    <input type="date" id="Bdate" name="Bdate"><br><br>
        
        
                    <i class="fa-solid fa-square-phone"></i><b> Phone Number:</b>
                    <input type="text" id="number" name="number" ><br><br>
        
                    <i class="fa-sharp fa-solid fa-location-dot"></i><b> Address:</b>
                    <textarea rows="3" cols="40" name="address"id="address"></textarea> <br><br>
        
                  
                    <b> Gender: </b><br>
                    <input type="radio" id="radioBTN" name="radioBTN" value="Mail">Male
                    <input type="radio" id="radioBTN" name="radioBTN" value="Femail" >Female <br><br>
        
                    <i class="fa-solid fa-lock"></i><b> Password:</b>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password"><br><br>
    
                    <i class="fa-solid fa-lock"></i><b> Confirm Password:</b>
                    <input type="password" id="con-password" name="con-password" placeholder="Enter Confirm Password"><br><br>
                   
                    <div class="CsubmitForm ComonsubmitForm">
                        <Button class=" Comonbtn">Submit</Button>
                        <Button class=" Comonbtn">Clear</Button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    
    <?php
    if(isset($_REQUEST['Not_Same'])): ?>
        <p>
            <script>
                alert("Password and Confirm Password not Match");
            </script>
        </p>
    <?php endif; ?>
</body>
</html>