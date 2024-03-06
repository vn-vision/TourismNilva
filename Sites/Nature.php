<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Nilva Nature + Outdoor Activities </title>
	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="../css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
  
   <style>
      .btDv{
         display: flex;
         padding: 1% 2%;
         box-shadow: 2px 1px 35px 2px black;
         max-width: 10vw;
         justify-content: center;
         border-radius: 20px;

      }
      .bt{
         background-color: #fff;
         border: none;
         text-align: center;
         font-weight: bold;
         font-family: cursive;
         width: 100vw;
         border-radius: 10px;
      }
      .logo{
  		max-width: 100%;
 		 max-height: 9vh;
}
   </style>
   
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <img src="../images/nilva.jpg" alt="logo" class="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="pServ.php#AboutUs">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="SafeTravels/travel.php">Destinations</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link" href="housing.php">Accommodation</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="SafeTravels/contact.html">Contact</a>
                  </li>
               </ul>
               <div class="btDv">
                <button type="button" class="bt" onclick="window.location.href='form.html';" > Sign Up</button> 
               </div>
            </div>
        </div>
    </nav>
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('../images/falls.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Experience the World with us.</h3>
                     <p>Feel Every Moment.</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('../images/pGarden4.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                  <h3>Appreciate Nature.</h3>
                     <p>Take a Walk.</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('../images/clear.jpg');">
                  <div class="carousel-caption d-none d-md-block">
                  <h3>Free Your Mind.</h3>
                     <p>Rest in the Calm.</p>
                  </div>
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
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">HIKING</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="../images/Hike2.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">"Experience breathtaking views and awe-inspiring landscapes as you explore our world-renowned hiking trails. Our expert guides will lead you on an unforgettable journey through stunning natural settings, from towering mountain peaks to lush forests and tranquil lakes. Whether you're a seasoned hiker or just starting out, we have the perfect trail for you."</p>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">CAMPING</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="../images/camp2.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">"Escape the hustle and bustle of everyday life and immerse yourself in nature with our unbeatable camping experiences. Wake up to the sound of birds chirping and the fresh scent of the great outdoors. Roast marshmallows by the campfire and gaze up at the stars. With a variety of campsites to choose from, including wilderness sites and RV parks, we have the perfect camping adventure for you."</p>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">ROCK CLIMBING</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="../images/rClimb3.jpg" alt=""/>
                     </div>
                     <div class="card-body">
                        <p class="card-text"> "Get your adrenaline pumping with our world-class rock climbing experiences. Climb to new heights and challenge yourself on rugged rock formations with our expert guides. Whether you're a beginner or a seasoned climber, we have routes for all skill levels. With stunning views and unparalleled thrills, our rock climbing adventures are not to be missed."</p>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Welcome to Nilva Nature Tours</h2>
                  <p>At Nilva, we take a smart approach to outdoor activities, providing our guests with unforgettable experiences amidst breathtaking natural surroundings. Whether you're an outdoor enthusiast or just looking to escape the hustle and bustle of everyday life, we have the perfect adventure for you.</p>
                 
                  <h5>Experience the Ultimate Outdoor Adventure with Our Smart Approach</h5>
                  <ul>
                     <li>Embark on unforgettable journeys through stunning natural landscapes, led by our expert guides.</li>
                     <li>Experience the thrill of a lifetime with a variety of outdoor activities, including hiking, camping, rock climbing, kayaking, wildlife watching, mountain biking, zip-lining, and scuba diving.</li>
                     <li>Our smart approach ensures that every guest has a safe and enjoyable experience in all of our offerings.</li>
                     <li>Our knowledgeable guides are passionate about the local wildlife and natural surroundings, providing an educational and immersive experience for all guests.</li>
                     <li>We are committed to excellence in all of our outdoor activities, constantly striving to exceed guest expectations.</li>
                     <li>With a variety of outdoor activities to appeal to all adventure seekers, our offerings are perfect for both first-timers and seasoned pros.</li>
                  </ul>

                  <p>"Don't just exist, live life to the fullest. Join us on an adventure that will awaken your senses and leave you feeling alive."</p>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
            <div class="row">
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/mtBike.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Mountain Biking</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/wtRaft.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">WhiteWater Rafting</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/zipLine.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">zip-lining</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/kayaking.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">kayaking/ Canoeing</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/scuba.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Scuba diving</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/skyDive.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Sky Diving</a>
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
        <hr>
        <!-- Get In Touch Now Section -->
        <div class="row mb-4">
            <div class="col-md-8">
               <p>"Don't wait for adventure to find you - go out and find it! Contact us now and let's plan your next outdoor adventure.".</p>
            </div>
            <div class="col-md-4">
               <a class="btn btn-lg btn-secondary btn-block" href="#">Get In Touch Now</a>
            </div>
        </div>
    </div>
    <!-- /.container -->
       <!--footer starts from here-->
       <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Nilva</h5>
					<!--headin5_amrc-->
					<p class="mb10">The world won't come to you. Let Nilva take you to it. Explore with us. Expound your knowledge</p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Our Services</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<p>><a href="Nature.php">Wildlife Tours</a></p>
						</li>
						<li>
							<p>><a href="housing.php">Housing/Hotel Booking</a></p>
						</li>
						<li>
							<p>><a href="SafeTravels/travel.php">Travelling Services</a></p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
               <li><a href="index.html">Home</a></li>
						<li><a href="pserv.php#AboutUs">About Us</a></li>
						<li><a href="SafeTravels/contact.html">Support</a></li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<h5 class="headin5_amrc col_white_amrc pt2">Find Us</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li class="media">
							<div class="media-body">
                     <p><i class="fa fa-location-arrow"></i> Nairobi,Kenya</p>
						 </div>
						</li>
                  <li class="media">
							<div class="media-body">
                     <p><a href="tel:+254700789723"> <i class="fa fa-phone"></i> 0700789723 </a> </p>
						 </div>
						</li>
                  <li class="media">
							<div class="media-body">
                     <p><a href="mailto:chegealvin96@gmail.com"> <i class="fa fa fa-envelope"></i> Email Us </a></p>
						 </div>
						</li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">
				<a href="#"><img src="../images/footer-logo.png" alt="" /></a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">All Rights Reserved. &copy; 2023 <a href="#">Nilva Tours</a>
            </p>
            <ul class="social_footer_ul">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>
    </footer>
	  
	  
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>