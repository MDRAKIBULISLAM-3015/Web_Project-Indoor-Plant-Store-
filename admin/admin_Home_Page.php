<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indoor Plant Store</title>
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
    <style>
         .home{
            background-image: url(../images/backgroung.jpg);
            background-size: cover;
            min-height: 100vh;
            background-repeat: no-repeat;
            width: 100%;
            background-blend-mode: multiply;
            background-color: rgba(0,0,0,.7);
         }
         .logoclass{
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 8px;
        }
         .logoclass a{
            background-color: #fff;
            justify-content: space-between;
            text-decoration: none;
            display: inline-block;
            color: black;
            font-size: 20px;
        }
        .logo{
            font-size: 25px;
            color: black;
            cursor: pointer;
            padding: 7px;
            text-decoration: none;
        }
        h2{
            text-align: center;
            color: white;
            font-size: 40px;
            background: black;
        }
    </style>
</head>
<body>
    <div class="home">
    <div class="logoclass">
            <a href="#" class="logo"> <i class="fa-brands fa-pagelines"></i><b>Indoor Plant Store</b></a> 
            <a href="admin_post_plant.php">POST PLANTS</a>
            <a href="admin_post_details.php">POST DETAILS </a>
            <a href="admin_show_customerData.php">SHOW CUSTOMER DATA</a>
     </div>
        <h2><b>Indoor Plant Store</b></h2>
    </div>
 
</body>
</html>