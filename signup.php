<?php
session_start();
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>THIRD SPACE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
  <!-- Brand/logo -->
  <a class="navbar-brand active" href="thirdspace.php">THIRD SPACE<span class="sr-only">(current)</span></a>
        
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="ondemand.html">ON DEMAND</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clubs.html">CLUBS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="classes.html">CLASSES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="training.html">TRAINING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="join.html">JOIN US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="spa.html">SPA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">JOURNAL</a>
            </li>
            <li class="nav-item">
      <a class="nav-link" href="#">TIMETABLE</a>
    </li>
         </ul>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">SIGN UP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">LOGIN</a>
    </li>
  </ul>
        </div>
</nav>

<section id="section1">
<div class="container">
<div class="row">
    <div class="col-4">
    </div>
    <div class="col-4 text-center">
        <h1>Sign Up</h1>
        <hr style="background-color: black;">
    <form method="post" action="welcome.php">
        
        <label for="name"><h5>NAME</h5></label>
        <div><input type="name" placeholder="Insert name" name="name_reg" required></div>
        
        <label for="surname"><h5>SURNAME</h5></label>
        <div><input type="surname" placeholder="Insert surname" name="surname_reg" required></div>
        
      <label for="email"><h5>EMAIL ADDRESS</h5></label>
        <div><input type="email" placeholder="Enter Email" name="email_reg" required></div>
      
      <label for="psw"><h5>PASSWORD</h5></label>
        <div><input type="password" placeholder="Enter Password" name="psw_reg" required></div>
      
        <a href="#"><button class="btn" type="submit" target="_parent">SIGN UP</button></a>
        
         <!-- <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="remember"> Remember me
              </label>
          </div> 
    -->
    
        
        </form>
    </div>
    <div class="col-4">
    </div>
</div>
</div>  
</section>
    
<section class="section" id="section2">
    <div class="row" id="row1">
        <div class="col-12 text-center">
            <a href="#" class ="btn" type="button">CLUB RUTES</a>
            <a href="#" class ="btn" type="button">RATES AND BENEFITS</a>
            <a href="#" class ="btn" type="button">BOOKING RULES</a>
            <a href="#" class ="btn" type="button">CAREERS</a>
            <a href="#" class ="btn" type="button">PRIVACY</a>
            <a href="#" class ="btn" type="button">WEBSITE T&CS</a>
            <a href="#" class ="btn" type="button">PRESS ENQUIRES</a>
            <a href="#" class ="btn" type="button">CONTACT US</a>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4 text-center">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-spotify"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-pinterest"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>
        <div class="col-4">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4 text-center">
            <p>BRAND DESIGN FROM WITHOUT</p>
        </div>
        <div class="col-4">
        </div>
    </div>
    
</section>

</body>
</html>