<?php
$servername = "localhost";
$username = "root";
$password = "developer";
$dbname = "palestra";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM this_space ORDER BY ID");
  $stmt->execute();

  // set the resulting array to associative
  /*$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }*/
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>THIRD SPACE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/educa.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    
    
    <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
    
    

</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
  <!-- Brand/logo -->
  <a class="navbar-brand active" href="#">THIRD SPACE<span class="sr-only">(current)</span></a>
        
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
      <a class="nav-link" href="signup.php">SIGN UP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">LOGIN</a>
    </li>
  </ul>
    </div>
</nav>
    
<section class="section" id="section1">
    <div class="container" id="container2">
        <div class="row">
            <div class="col-12" id="col1">
                <h4>In our glorious, maddening city, your workout can be the difference<br> between good day and bad.</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="col2">
        
                <h4>Third Space are London’s luxury health clubs; individual in style, bound<br> by a common philosophy: to provide outstanding fitness spaces that<br> members feel are their own.</h4>
            </div>
        </div>
    </div>
</section>
    
<section class="section" id="section2">   
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel">
             <img src="assets/img/img2.jpg" class="d-block w-100" alt="..." id="img1">
            <div class="carousel-caption" id="img1c">
                
                    <h1 style="font-size: 60px;">We are open</h1>
                    <p style="font-size: 20px; color:black; padding-bottom:40px; font-weight: bold;">All Third Space clubs remain open. For the latest updates,<br> please visit the link below</p>
                    <a href="#"><button class="btn btn-light" type="button">MORE INFORMATION</button></a>
                
            </div>
        </div>
        <div class="carousel">
                <img src="assets/img/img9.jpg" class="d-block w-100" alt="..." id="img2">
            <div class="carousel-caption" id="img_3">
                    <h1>this space</h1>
                    <h4>Workout guides, fitness, mind and nutrition for<br> home, gym and beyond.</h4>
                    <div class=""><a href="#"><button class="btn btn-light" type="button">SIGN UP</button></a>
                    </div>
                    <div class="ciao">
                        <a href="#" class ="btn" type="button">WORKOUTS</a>
                        <a href="#" class ="btn" type="button">FITNESS</a>
                        <a href="#" class ="btn" type="button">RECIPES</a>
                        <a href="#" class ="btn" type="button">LIFESTYLE</a>
                        <a href="#" class ="btn" type="button">INTERVIEW</a>
                   </div> 
                    
                </div>
        </div>
        <div class="carousel">
                <img src="assets/img/img3.jpg" class="d-block w-100" alt="..." id="img3">
                <div class="carousel-caption" id="img_3">
                    <h1>Incredible Luxury Health Clubs</h1>
                    <h4>More than just a gym, our central London<br> health clubs redefine luxury fitness.</h4>
                    <div class=""><a href="#"><button class="btn btn-light" type="button">ALL CLUBS</button></a>
                    </div>
                    <div class="ciao">
                        <a href="#" class ="btn" type="button">TOWER BRIDGE</a>
                        <a href="#" class ="btn" type="button">SOHO</a>
                        <a href="#" class ="btn" type="button">MARYLEBONE</a>
                        <a href="#" class ="btn" type="button">CANARY WHARF</a>
                        <a href="#" class ="btn" type="button">CITY</a>
                        <a href="#" class ="btn" type="button">ISLINGTON</a>
                   </div> 
                    
                </div>
        </div>
        <div class="carousel">
                <img src="assets/img/img6.jpg" class="d-block w-100" alt="..." id="img4">
            <div class="carousel-caption" id="img_3">
                    <h1>Inspiring Classes</h1>
                    <h4>Intelligent, inspiring and led by the best<br>instructors, a huge range of classes that make<br>fitness fun.</h4>
                    <div class=""><a href="#"><button class="btn btn-light" type="button">EXPLORE CLASSES</button></a>
                    </div>
                    <div class="ciao">
                        <a href="#" class ="btn" type="button">THE WOD</a>
                        <a href="#" class ="btn" type="button">SWEET X</a>
                        <a href="#" class ="btn" type="button">POWERIDE</a>
                        <a href="#" class ="btn" type="button">EXHALE</a>
                        <a href="#" class ="btn" type="button">FORMULA 3</a>
                        <a href="#" class ="btn" type="button">MORE</a>
                   </div> 
                    
                </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="carousel">
                        <img src="assets/img/app.jpg"  alt="..." id="img4">
                </div>
            </div>
            <div class="col-4 text-white text-center download">
                <h1>Download the App</h1>
                <p>Book gym visits and classes through the Third Space App and get access to hundreds of workouts, all on your phone.</p>
                <p>DOWNLOAD THE APP NOW</p>
                <a href="#"><button class="btn btn-black" type="button">
                    <img src="assets/img/down1.png" id="down1">
                    <br>
                    <img src="assets/img/down2.png" id="down2">
                    </button></a>
            </div>
            <div class="col4">
                <div class="carousel">
                        <img src="assets/img/app.jpg"  alt="..." id="img4">
                </div>
            </div>
        </div>
        <div class="carousel">
                <img src="assets/img/img-personaltrainer.webp" class="d-block w-100" alt="..." id="img7">
                <div class="carousel-caption">
                        
                        <div class="col-6" id="col4">
                            <br><br>
                            <h1>Personal Training</h1>
                            <p>You know where you’re going.<br>
                            Maximise your programme and get there fast with Personal Training.</p>
                            <a href="#"><button class="btn btn-light" type="button">LEARN MORE</button></a>
                        </div>
                        <div class="col-6">
                        </div>
                        
                    </div>
                </div>  
        
        <div class="row">
            <div class="col-6">
                <div class="carousel">
                    <img src="assets/img/img4.jpg" class="d-block w-100" alt="..." id="img8">
                    <div class="carousel-caption" id="img_8">
                        <h1>THIRD</h1>
                        <p style="color:black; font-weight: bold;">SPA</p>
                        <h1>SPACE</h1>
                        <h5>Our tranquil spas offer a full range of beauty treatments, therapies and sports rehabilitation.</h5>
                        <div class=""><a href="#"><button class="btn btn-light" type="button">VISIT SPA</button></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-6">
                <div class="carousel">
                    <img src="assets/img/img4.jpg" class="d-block w-100" alt="..." id="img8">
                    <div class="carousel-caption" id="img_9">
                        <h1>THIRD</h1>
                        <p style="color:black; font-weight: bold;">SPA</p>
                        <h1>SPACE</h1>
                        <h5>London’s leading private medical practice, with a full range of sports medicine, GP services, complementary medical treatments and corporate health plans.</h5>
                        <div class=""><a href="#"><button class="btn btn-light" type="button">VISIT MEDICAL</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<!--<section class="section" id="section3">
    <div class="row-12 text-center">
        <a class="btn" href="#"><h1>this space</h1></a>
    </div>


</section>
-->
<section id="section3">

					<div class="container">
						<div class="row">
                            <div class="col-4">
                            </div>
                            <div class="col-4 text-center" id="row1">
                                <a href="#" class="btn" type="button" style="font-size: 50px; font-weight: bold; margin-top: -80px; margin-bottom: -80px;">this space</a>
                            </div>
                            <div class="col-4">
                            </div>	
						</div>
                    </div>
</section>   
<section class="popular-courses" style="background-color: black">
                    <div class="container-fluid">
						<div class="row">
              
							<div id="owl-courses-second">
                             <?php   
                                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $row) {
                                ?>
								<div class="item course-item">
									<a href="single-course.html"><img src="assets/img/img/third_space_pt_campa_d5rPe-800x533.jpg" alt="..." class="d-block w-100"></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6 class="pt-4" style="color: black; font-weight:bold";><?php echo $row['TITOLO_1'];?></h6>
										<!--<div class="price-red">
											<span>/*echo $row['ORE'];*/</span>
											<div class="base"></div>
										</div>
                                        -->
										<a href="#" class="pl-3" style="color:black; text-align: justify; display: table-cell; padding-right:8px;"><?php echo $row['TITOLO_2'];?></a>
										<p><?php echo $row['DESCRIZIONE'];?></p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
                                
                                <?php
                                }
                                ?>
                            </div>
              
						</div>
					</div>
</section>
<hr style="background-color:grey; height:1px;"> 
<section class="section" id="section4">
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
    <div class="row" id="row3">
        <div class="col-4">
        </div>
        <div class="col-4 text-center">
            <p style="margin-bottom: -15px;">BRAND DESIGN FROM WITHOUT</p>
        </div>
        <div class="col-4">
        </div>
    </div>
    
</section>
    

</body>
</html>
