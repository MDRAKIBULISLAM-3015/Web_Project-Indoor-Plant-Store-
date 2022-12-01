<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indoor Plant Store</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="logoclass">
            <a href="#" class="logo" > <i class="fa-brands fa-pagelines"></i> Indoor Plant Store</a> 
        </div>

        <div class="head_text">
            <h2 class="top"><b> Welcome To Admin Login Page!</b></h2>
        </div>
        
        <form action="PHP/login_admin.php" method="POST">
            <fieldset>
                <i class="fa-solid fa-envelope-circle-check"></i><b> Email ID:</b>
                <input type="email" id="username" name="username" placeholder="Enter Mail ID"><br><br>
    
                <i class="fa-solid fa-lock"></i><b> Password:</b>
                <input type="password" id="password" name="password" placeholder="Enter Password"><br><br>
                <div class="ComonsubmitForm">
                    <Button class="CLSbtn Comonbtn">Submit</Button>
                    <Button class="CLCbtn Comonbtn">Clear</Button>
                </div>

                <p style="color: red;  text-align: center; padding: 20px;" id="msg" >

                            <?php
                                if(isset($_REQUEST['If_Empty_field'])){
                                    echo "Please Filup All Input Field!";
                                }
                                
                                elseif(isset($_REQUEST['If_Not_same'])){
                                    echo "Invalid Email or Password!";
                                }
                            ?>   
                    
                </p>
            </fieldset>          
         </form>
        </div>    
    </div>

    <script>
        let msg = document.getElementById("msg")
        setTimeout(() => {
            msg.style.display="none"
        }, 5000);
    </script>
    
</body>
</html>