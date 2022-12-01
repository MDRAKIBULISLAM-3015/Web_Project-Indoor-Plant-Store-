<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indoor Plant Store</title>
    <link rel="stylesheet" href="user_home_page.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="home">
    <div class="logoclass">
            <a href="#" class="logo"> <i class="fa-brands fa-pagelines"></i><b>Indoor Plant Store</b></a> 
            <a href="#">Order Plant</a>
            <a href="#review">User Review</a>
            <a href="#about-section">About Us</a>
            <a href="">Name</a>
     </div>
        <h2><b>Indoor Plant Store</b></h2>
    </div>


    <!--------------------- plant start---------------->
   
    <section class="popular" id="popular">
      <h1 class="heading">most <span>popular</span> foods</h1>

      <div class="box-container">
      <?php
        while($data = mysqli_fetch_assoc($runQuery)){ ?>

        <div class="box">
          <span class="price"> <?php echo $data['price'] ?>TK </span>
          <img src="uploadphoto/<?php echo $data['photo'] ?>" alt="" />
          <h3><?php echo $data['name'] ?></h3>
          <h4><?php echo $data['details'];?></h4>
          <a href="paymentMethod.php?id=<?php echo $data['id'] ?>" class="btn">order now</a>
          <a href="reviewCustomer.php?id=<?php echo $data['id'] ?>" class="btn">Review</a>
          <span class="box-pic">
            <img src="heart/heart_empty.png" id="pic" alt="photo" onclick="changePic()">
          </span>
        </div>

      <?php } ?>


          <script>
            let image = document.querySelectorAll("#pic")
            let len = image.length
            function changePic(){
              for(let i=0;i<len;i++){
                image[i].addEventListener("click",function(){
                  image[i].src="heart/heart.png"
                })
              }
            }
          </script>
      </div>
    </section>

    <!-- ----------------- plant ends------------------->


 <!----------review start -------------->

 <section id="review">
      <h1 class="head_text">Our Users reviews :</h1>

      <div class="all_person">
        <div class="person">
          <img src="images/customer-1.jpg" alt="" />
          <h3>Rifat Shahriar Mithun</h3>
          <div class="symble">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
             Good
          </p>
        </div>
        <div class="person">
          <img src="images/customer-2.jpg" alt="" />
          <h3>Sadia Sorna</h3>
          <div class="symble">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
             Satisfied, I will buy again next time.
          </p>
        </div>
        <div class="person">
          <img src="images/customer-3.jpg" alt="" />
          <h3>Afrin Tuly</h3>
          <div class="symble">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            All plant was goodbut delivery should be fast.
          </p>
        </div>
      </div>
    </section>

    <!------------------review end--------- -->

<!--------------------- About start ---------------->

  <div id="about-section">
  <h1>About</h1>
  <p>Indoor Plant Store is an online shop. 
    Buy plant at Indoor Plant Store for increase the beauty of your home . </p>
  <p>Order online from Dhaka or Bangladesh for corporate gifts, terracotta, 
    on demand gardener, landscaping and other related support. 
    We provide the best customer support all time.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/misu.jpg" alt="misu" style="width:100%; height: 400px; object-fit: fill">
      <div class="container">
        <h2>Razia Sultana Misu</h2>
        <p class="title">CEO & Founder</p>
        <p>Phone: 01894058435</p>
        <p>Email ID: razia15-2976@diu.edu.bd</p>
        <a href="https://t.me/+VnQiEFpNrIc5ZmQ1"><button class="button">Contact</button></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/tamanna.jpg" alt="tamanna" style="width:100%; height: 400px; object-fit: fill">
      <div class="container">
        <h2>Tamanna Akter</h2>
        <p class="title">CEO & Co-Founder</p>

        <p>Phone: 01972318179</p>
        <p>Email ID: tamanna15-2937@diu.edu.bd</p>
        <a href="https://t.me/+VnQiEFpNrIc5ZmQ1"><button class="button">Contact</button></a>
      </div>
    </div>
  </div>
</div>

<!--------------------- About end ---------------->
</body>
</html>