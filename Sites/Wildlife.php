<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Nilva WildLife Adventures</title>
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
               <button type="button" class="bt" onclick="window.location.href='form.html';"> Sign Up</button>
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
               <div class="carousel-item active" style="background-image: url('../images/leo.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>"Sharp eyes, poised for the kill.".</h3>
                     <p>Leopard.</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('../images/rhino.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                  <h3>Too Precious to be Lost</h3>
                     <p>Rhinos.</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('../images/eagle2.jpg');">
                  <div class="carousel-caption d-none d-md-block">
                  <h3>Nature's Art-work.</h3>
                     <p>The Bald Eagle.</p>
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

               <!--wildlife safaris-->
                     <div class="card h-100">
                        <h4 class="card-header">Wildlife Safaris</h4>
                        <div class="card-img">
                           <img class="img-fluid" src="../images/tguide.jpg" alt="" />
                        </div>
                        <div class="card-body">
                           <p class="card-text">Embark on a wildlife safari and witness nature's most magnificent creatures in their natural habitats. Canada offers the chance to spot grizzly bears in the wild, while the United States is home to bison herds and bald eagles. Australia's Great Barrier Reef is the perfect spot for marine wildlife enthusiasts, and China is home to giant pandas, a species on the brink of extinction. Our expert guides will take you on an unforgettable journey, providing insight and knowledge on the local wildlife and their behaviors, ensuring you have a truly enriching and educational experience.</p>
                        </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
                <!--marine wildlife-->
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                        <h4 class="card-header">Marine Wildlife Tours</h4>
                        <div class="card-img">
                           <img class="img-fluid" src="../images/reef.jpg" alt="" />
                        </div>
                        <div class="card-body">
                           <p class="card-text">"Experience the thrill of encountering some of the world's most magnificent marine creatures on our unforgettable wildlife tours. Our expert guides will take you on a journey through pristine oceans, where you can witness majestic whales breaching and playful dolphins jumping. From the Great Barrier Reef in Australia to the Pacific Northwest in the United States, we offer a variety of tours that will leave you in awe of the wonders of the sea."</p>
                        </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Eco-tourism</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="../images/ecot.jpg" alt=""/>
                     </div>
                     <div class="card-body">
                        <p class="card-text"> "Experience the wonder of nature with our eco-tourism adventures in national parks and reserves. Our expert guides will take you on a journey through some of the world's most pristine natural habitats, where you'll see a variety of wildlife and stunning landscapes. From hiking through dense forests to kayaking along crystal-clear streams, we offer a range of activities that will connect you with nature while minimizing your impact on the environment. Come explore the beauty of our national parks and reserves with us."</p>
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
               <h2>Welcome to Nilva Wildlife Tours</h2>
               <p>At Nilva, we offer unforgettable wildlife tourism experiences in some of the world's most beautiful natural settings. Our expert guides will lead you on an immersive journey through stunning landscapes in Australia, Canada, China, and the USA, where you'll have the chance to observe some of the world's most fascinating wildlife in their natural habitats.</p>
               <h5>Experience the Beauty of Wildlife in Their Natural Habitats</h5>
               <ul>
                  <li>Explore Australia's vast and diverse ecosystems, home to unique and iconic species such as kangaroos, koalas, and wallabies.</li>
                  <li>Discover Canada's wilderness and observe majestic creatures such as grizzly bears, moose, and caribou in their natural habitats.</li>
                  <li>Experience China's natural wonders and encounter rare and endangered species such as the giant panda, golden monkey, and red-crowned crane.</li>
                  <li>Immerse yourself in the USA's breathtaking landscapes and observe diverse wildlife, from bison and wolves in Yellowstone National Park to bald eagles and whales in Alaska.</li>
                  <li>Our knowledgeable guides are passionate about wildlife conservation and will provide you with an educational and immersive experience that will leave you with a deeper appreciation for the natural world.</li>
                  <li>With a variety of wildlife tourism experiences to choose from, we have something for everyone, from beginner to expert.</li>
               </ul>
               <p>"Experience the beauty of wildlife in their natural habitats and create memories that will last a lifetime. Join us on an unforgettable wildlife tourism adventure and discover the magic of the natural world."</p>
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
                           <img class="card-img-top" src="../images/kangarooJ.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Kangaroo Tours</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/eagle2.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Birdwatching</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/whale.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Whale watching Tours</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/panda.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Panda Tours</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/bison.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Bison Tours</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="../images/tiger.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Siberian Tigers</a>
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
               <a class="btn btn-lg btn-secondary btn-block" href="">Get In Touch Now</a>
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
							<p>><a href="Nature.php">Nature/Outdoor Activities</a></p>
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
            <p class="copyright text-center">All Rights Reserved. &copy; 2023 <a href="index.html">Nilva Tours</a>
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