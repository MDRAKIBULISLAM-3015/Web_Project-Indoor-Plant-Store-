<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Indoor Plant Store</title>
    <style>
        body{
            background-image: url(../images/backgroung.jpg);
            background-size: cover;
            min-height: 100vh;
            background-repeat: no-repeat;
            width: 100%;
            background-blend-mode: multiply;
            background-color: rgba(0,0,0,.7);
        }
        form{
            width: 500px;
            height: auto;
            margin: 0px auto;
            border-radius: 4px;
            color: white;
        }
        fieldset{
            padding: 40px;
        }
        p{
            text-align: center;
            background: 
        }
    </style>
</head>
<body>
<div >
    <form action="post_items.php" method="post" enctype="multipart/form-data">
        <fieldset>
           <b>Plant Name:</b>
            <input type="text" id="name" name="name" placeholder="Enter plant name"><br><br>
            
           <b>plant's Photo:</b>
            <input type="file" id="photo" name="photo"><br><br>

            <b>Price:</b>
            <input type="number" id="price" name="price" placeholder="Write plant price"><br><br>

            <b>Plant Details:</b>
            <textarea name="plant" id="plant" cols="40" rows="5" style="resize: none;" placeholder="Write plant details"></textarea> <br><br>

            <p>
            <input type="submit">
            </p>
        </fieldset>
    </form>
    </div>
</body>
</html>