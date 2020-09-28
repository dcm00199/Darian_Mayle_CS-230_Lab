<?php
  require "includes/header.php";
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
       
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="wheelImage" src="Images/man-1139066_1920.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="wheelImage" src="Images/photo-manipulation-1825450_1920.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="wheelImage" src="Images/window-5470985_1920.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <div class="bg">
    <form action="includes/login-helper.php" method="post">
      <div class="loginP">
        <div class="innerB">
          <img class="imageP" src="Images/avatar-1577909_1280.png" alt="Profile">
          <label  for="username"><b class="words">Username</b></label>
          <input name=”uname” type="text" placeholder="Enter Username/Email..." required>  
          <label  for="password"><b class="words">Password</b></label>
          <input name=”pwd” type="password" placeholder="Enter Password..." required>
                    
          <button name="login-submit" type="submit">Login</button>
                        
          <div class="loginP">
            <p>Forgot <a href="#">password?</a></p>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
