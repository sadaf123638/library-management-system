<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    
    <title>Library Management System</title>
    <link rel="stylesheet" href="css/all.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      body{
        background: #F8F8F8;
      }
      #home{
        margin-top: 50px;
        
      }
     
      #about{
        margin-bottom: 50px;
      }
      h1{
        text-align: center;
        font-size:50px;
        font-weight: bold;
        font-family: "Roboto Condensed", sans-serif;    
        color: #0a4275;
        margin-bottom: 20px;
      }
      h1 span{
        color: #909090;
        text-shadow: 0 10px 10px white;
      }
      p{
        margin-top: 50px;
        font-size: 18px;
        font-family: "Roboto Condensed", sans-serif;
        color: black;       
      }
      #books{
        margin-top: 10px;
        margin-bottom: 50px;
      }
      

    </style>
    </head>
    <body>
    <?php
include 'homenav.php';

// Initialize variables


?>
<!----- Home--------->

    <div class="container" style="margin-bottom: 50px;" id="home">

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/libb.jpg" class="d-block w-100" alt="..." style="width:900px; height: 350px;">
    </div>
    <div class="carousel-item">
      <img src="image/libb1.jpg" class="d-block w-100" alt="..." style="width:900px; height: 350px;">
    </div>
    <div class="carousel-item">
      <img src="image/libb2.jpg" class="d-block w-100" alt="..." style="width:900px; height: 350px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
    </div>

<!-----About------->

    <div class="container" id="about">
      <h1>About<span>us</span></h1>
      <div class="row">
        <div class="col-md-6">
          <img src="image/libb3.jpg" style="width: 500px;  border-radius: 250px 0px 0px 0px;">
        </div>
        <div class="col-md-6">
          <p>You all must have visited a library in your school or any library in your area. Have
          you ever thought how it works ,functions ,or what are its components The concept
          of a library, its origin ,growth, and functions have undergone a sea changes. Present
          society is largely depended on books, graphic records and other print/non-print
          material. In this lesson we will study about the origin, purpose and functioning of
          a library, A public library is open to everyone for fulfilling the need for information. They are run by the government, schools, colleges, and universities. The members of the society or community can visit these libraries to enhance their knowledge and complete their research.</p>
        </div>
      </div>
    </div>

<!-----Books---->

    <div class="container" id="books">
    <h1>Boo<span>ks</span></h1>
    <div class="owl-carousel owl-theme">
    <div class="item">
      <img src="image/b11.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b1.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b2.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b3.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b4.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b5.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b7.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b8.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b9.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/libb3.jpg" style="height: 200px; width: 200px;">
    </div>
    <div class="item">
      <img src="image/b10.jpg" style="height: 200px; width: 200px;">
    </div>
    
</div>
    </div>


    <!-----footer---->

    <div class="container-background">
    <section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color:#0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <a href="index.php" class="btn btn-outline-light btn-rounded" data-mdb-ripple-init type="button" >Sign up!</a>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-white" href="">Library Management System</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
    </div>


     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
     </script>
    </body>
</html>
