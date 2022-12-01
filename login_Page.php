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
            <h2 class="top"><b> Welcome To Login Page!</b></h2>
        </div>
        
        <form action="login.php" method="post">
            <fieldset>
                <i class="fa-solid fa-envelope-circle-check"></i><b> Email ID :</b> </label>
                <input type="email" id="mail" name="mail" placeholder="Enter Your Email ID"><br><br>
    
                <i class="fa-solid fa-lock"></i><b><b> Password:</b> </label>
                <input type="password" id="password" name="password" placeholder="Enter Password"><br><br>
                <div class="ComonsubmitForm">
                    <Button class="Comonbtn">Submit</Button>
                    <Button class="Comonbtn">Clear</Button>
                </div>
            </fieldset>
            <div class="register">
                <P>Don't have an account? </P> <a class="Registor" href="registration_page.php"><b>Register Now</b> </a>
            </div>
           
         </form>
        </div>    
    </div>
    
     
    <?php
    if(isset($_REQUEST['Invalid'])): ?>
        <p>
            <script>
                alert("Email ID or Password Invalid");
            </script>
        </p>
    <?php endif; ?>
</body>
</html>