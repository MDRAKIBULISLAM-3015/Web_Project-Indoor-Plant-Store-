<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
    <title>Indoor Plant Store</title>
    <style>
        
        .btn{
        display: inline-block;
        padding:.5rem 2rem;
        border: 2px solid #f80303;
        color: #f70303;
        cursor: pointer;
        font-size: 1.8rem;
        border-radius: .4rem;
        margin-top: 2rem;
        text-decoration: none;
        }
        .btn:hover{
        color:#fff;
        background-color: #f80303;
        }
        .button{
        text-align: center;
        }
    </style>
</head>
<body>   
        <div class="button">
            <a href="#" class="btn" onclick="paymentBtn(event)">Confirm</a> 
        </div>

    </div>
    <script>
      const paymentBtn = ()=>{
        event.preventDefault()
        alert("Payment Successfully");
        let btn = document.querySelector(".btn").innerHTML = "Cancel"

        setTimeout(() => {
          let selector = document.querySelector(".btn")
          selector.style.display="none"
          window.location.href = "http://localhost/tree/user_home_page.php"
        },0);
      }
    </script>
</body>
</html>