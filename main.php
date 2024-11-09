<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Blood Donation Management System | home page"; ?>
<?php require 'header.php'; ?>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
  

  
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="image-wrapper">
            <img src="image/bdms1.jpeg" alt="Los Angeles" class="img-fluid">
        </div>
    </div>
    <div class="carousel-item">
        <div class="image-wrapper">
            <img src="image/bdms2.jpeg" alt="Chicago" class="img-fluid">
        </div>
    </div>
    <div class="carousel-item">
        <div class="image-wrapper">
            <img src="image/bdms4.jpeg" alt="New York" class="img-fluid">
        </div>
    </div>
</div>


<!-- About section -->
<section class="my-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/about1.png" class="img-fluid aboutimg" alt="About us">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>BLOOD - "I'm here to save you!"</h2>
        <p class="py-3">We believe Every life counts!, Every life matters. Time is the thing we have and don't. Our goal is to make blood available in less time and save your precious life!</p>
        <a href="main.php">Learn more</a>
      </div>
    </div>
  </div>
</section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php require 'footer.php'; ?>
</body>
</html>