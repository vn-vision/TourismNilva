<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//testing permissions


include('../db/Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);
mysqli_query($conn,$sql);
mysqli_select_db($conn,$db);

session_start(); //start session
if(isset($_POST['BookHotel'])){
//variables---name...Destination*
	$Email = Strip($_POST['email']);
	$Name = Strip($_POST['Traveller']);
	$Hotel = Strip($_POST['Hotel']);
	$ckin = Strip($_POST['checkIn']);
	$ckout = Strip($_POST['checkOut']);


	if($Hotel=="Bellagio"){
		$Destination="USA";
		}else if($Hotel=="InterContinental Hangzhou"){
		$Destination="China";
		}else if($Hotel=="Banff Spring"){
		$Destination="Canada";
		}else if($Destination=="Crown Metropol Hotel")
		{$Destination="Australia";}
	
	$_SESSION['trEmail'] = $Email;
	$_SESSION['touristName'] = $Name;
	$_SESSION['HotelName'] = $Hotel;
	$_SESSION['Destination'] = $Destination;

	//textfield sanitization
	if(!san($Name) || !san($Hotel) ){
		echo " <script>
		alert('Only Letters and White space in Hotel field');
		window.location.href =' ';
		</script>";
	}
	else{
	//verify Fields are filled out
if(!empty($Name) && !empty($Hotel) && !empty($ckin) && !empty($ckout))
{
	global $tablename;
	//record the fields
	$Insert = "INSERT INTO `$tablename` ( TouristName, Email, Destination, Hotel, Check_In, Check_Out) 
				VALUES ( '$Name','$Email', '$Destination', '$Hotel', '$ckin', '$ckout') ";
	$conInsert = mysqli_query($conn, $Insert);

	if(!$conInsert){
		echo"
		<script>
		alert('Error Confirming Booking');
		window.location.href=' ';
		</script>
		";
	}
	header('Location: booking2.php');
	/*
	else{
		header('Location : booking2.php');


		//email traveller on Booking Completion
		$to = "chegealvin96@gmail.com";
		$subject = "Hotel Booking";
		$message = "A new booking request from Nilva Tourism Website has been made.\n";
		$message .= "Destination: " . $Destination . ", " . $Hotel . "\n";
		$message .= "Tourist Check In date: " . $ckin . " and Check Out date: " . $ckout . "\n";
		$header = "From: $Name\r\n";
		$header .= "Reply-To: $Email\r\n";

		if (mail($to, $subject, $message, $header)) {
		    echo "
			<script>
			alert('Complete Booking');
			window.location.href='Booking.php';
			</script>
		    ";
		    exit;
		} else {
		    echo "
			<script>
			alert('Error making Booking');
			window.location.href='';
			</script>
		    ";
		    http_response_code(500);
		}
		
	}
*/

}else{
	echo"
		<script>
		alert('Error, Confirm All fields are filled');
		window.location.href=' ';
		</script>
		";
}
	}
	//end of validation
}else{
?>

<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nilva Housing Service</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

 

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<!-- Customized Bootstrap Stylesheet -->
<link href="SafeTravels/css/style.css" rel="stylesheet">


	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="../css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="../css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="../css/owl.theme.default.min.css"> -->
	
	<!-- CS Select -->
	<link rel="stylesheet" href="../css/cs-select.css">
	<link rel="stylesheet" href="../css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="../css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="../css/beautify.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
	<![endif]-->

	    
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
         background-color: #52565b;
		 color:#fff;
         border: none;
         text-align: center;
         font-weight: bold;
         font-family: cursive;
         width: 100vw;
         border-radius: 10px;
      }

	  .divide{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content:center;
		min-width: 100%;
		margin: auto;


	  }
	  .formDetails{
		display: flex;
		flex-direction: column;
		flex-wrap: wrap;
		text-align: justify;
		text-align-last:center;
		min-width:80vw;
		padding: 2%;
		margin:5% 10vw 0% 10vw;
		font-family: cursive;
		background-color: #f5f5f5;
		border-radius: 20px 20px 0 0;
	  }
	  .myForm{
		display:flex;
		flex-direction: column;
		gap:20px;
		min-width: 80vw;
		margin:0% 10vw 5% 10vw;
		align-items: center;
		justify-content: space-evenly;
		background-color: #ccc;
	  }
	  .myForm input,select{

		padding: 2%;
		margin:10px;
		width:100%;
		border-radius:10px;

	  }
	  .cnBk{
		max-width: 50%;
		height: 20%;
		text-align: center;
		background-color: #245269;
		font-family: cursive;
		font-size: 2rem;
		font-weight: bolder;
		margin:5% ;
	  }
	  @media only screen and (min-width:1058px){
		.cnBk{
			margin-bottom: 5%;
		}
		.divide{
			flex-direction: row;
			min-width: 80%;
			margin: auto;
		}
		.formDetails{
		min-width:45%;
		margin:5% 0vw 5% 10vw;
		justify-content: center;
		min-height: 60vh;
		border-radius: 20px 0 0 0;
	  }
	  .myForm{
		min-width: 45%;
		margin:5% 10vw 5% 0vw;
		min-height: 60vh;
		border-radius: 0 20px 0 0;
	  }
	  }
	  .logo{
		background: radial-gradient(circle, grey, whitesmoke);
		border-radius: 10px;
  		max-width: 100%;
 		 max-height: 9vh;
}
.text-not-white{
	color: #0077c2;
}
   </style>


</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<a href="index.html"><img src="../images/nilva.jpg" alt="Nilva Icon" class="logo"></a>
					
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.html">Home</a></li>
							<li><a href="SafeTravels/travel.php">Destination</a></li>                        
							<li><a href="pServ.php">Services</a></li>
							<li><a href="SafeTravels/contact.html">Contact</a></li>		
						</ul>
						
					</nav>
					
				</div>
				<div class="btDv"><button type="button" class="bt"> Sign Up</button></div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(../images/borabd.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Banff Spring Hotel</span></p>
		   						<h2>Reserve Room for Family Vacation</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(../images/deluxeint.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>InterContinental Hangzhou Hotel</span></p>
		   						<h2>Make Your Vacation Comfortable</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(../images/luxe.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bellagio Hotel</span></p>
		   						<h2>A Best Place To Enjoy Your Life</h2>
			   					<p>
			   						<a href="#bk" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
						<div class="a-col action">
							<a href="#bk">
								<span name="BookHotel" >Check</span>
								Availability
							</a>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">User Access</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Hotels</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Transactions</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Rating &amp; Review</span>
				</div>
			</div>
		</div>
	</div>

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Hotels</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(../images/deluxe.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>$100/night</span></p>
						</div>
					</div>
					<div class="desc">
					<h3 class="super-heading">Experience the ultimate luxury at our InterContinental Hangzhou Hotel</h3>
					<p class="sub-heading">Indulge in the perfect blend of sophistication and comfort</p>
					<p>Immerse yourself in unparalleled luxury and style at our InterContinental Hangzhou Hotel. With its stunning interiors, exceptional amenities, and breathtaking views, our hotel promises to exceed your every expectation.</p>
					<p>From our elegantly appointed rooms to our world-class dining options and state-of-the-art fitness center, every aspect of your stay has been designed with your comfort and enjoyment in mind.</p>
					<p>Don't miss out on this extraordinary experience. Book your stay now and discover the ultimate in luxury.</p>
					<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../images/bora.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$99/night</span></p>
							</div>
						</div>
						<div class="desc">
						<h3>Banff Spring Hotel</h3>
						<p>We offer impeccable service, breathtaking views, and exquisite amenities. 
						Our rooms are designed with your comfort in mind, providing a relaxing escape from the hustle of everyday life. 
						Whether you're traveling for business or leisure, our hotel is the perfect destination for your next getaway.</p>
						<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(../images/dvore.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$99/night</span></p>
							</div>
						</div>
						<div class="desc">
						<h3 class="hotel-name">Crown Metropol</h3>
						<p class="hotel-description">Experience luxury and comfort at Crown Metropol, where our rooms are designed to make you feel at home. From our cozy bedding to our modern amenities, we strive to provide the best possible stay for our guests.
						We have something for everyone.	One night with us and you're sure to return.
					</p>
						<p class="hotel-cta"><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Hotel Facilities</h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<nav class="tabs-nav">
					<a href="#" class="active" data-tab="tab1">
						<i class="flaticon-restaurant icon"></i>
						<span>Restaurant</span>
					</a>
					<a href="#" data-tab="tab2">
						<i class="flaticon-cup icon"></i>
						<span>Bar</span>
					</a>
					<a href="#" data-tab="tab3">
					
						<i class="flaticon-car icon"></i>
						<span>Pick-up</span>
					</a>
					<a href="#" data-tab="tab4">
						
						<i class="flaticon-swimming icon"></i>
						<span>Swimming Pool</span>
					</a>
					<a href="#" data-tab="tab5">
						
						<i class="flaticon-massage icon"></i>
						<span>Spa</span>
					</a>
					<a href="#" data-tab="tab6">
						
						<i class="flaticon-bicycle icon"></i>
						<span>Gym</span>
					</a>
				</nav>
				<div class="tab-content-container">
					<div class="tab-content active show" data-tab-content="tab1">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="../images/rest.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
								<span class="super-heading-sm">Experience Excellence</span>
										<h3 class="heading" id="Restaurant">Fine Dining Restaurant</h3>
										<p>Indulge your senses in an exceptional dining experience at our exquisite restaurant. Our talented chefs use only the freshest and finest ingredients to create mouth-watering dishes that are sure to satisfy even the most discerning palate.</p>
										<p>With a focus on impeccable service and attention to detail, our staff will ensure that your dining experience is nothing short of extraordinary. Relax in our elegant ambiance while enjoying unparalleled cuisine that is sure to impress.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong><span>Monday - Friday: 11:00am - 10:00pm</span></strong>
											<br>
											<strong><span>Saturday - Sunday: 10:00am - 11:00pm</span></strong>
										</p>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab2">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="../images/cktail.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading " id="Bars">Bars</h3>
								<p>If you're looking for a world-class bar experience, look no further than our establishment. Our expert mixologists use only the finest ingredients to craft exquisite cocktails that will tantalize your taste buds. Whether you prefer classic cocktails or innovative new concoctions, we have something for everyone.</p>
								<p>Our luxurious and comfortable atmosphere is the perfect setting to relax with friends or impress business associates. And with our convenient service hours, you can enjoy our exceptional cocktails any time of day.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>6:30 PM - 2:00 AM</strong>
								</p>
								</div>

							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab3">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="../images/pickup.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading" id="pickUp">Pick Up</h3>
								<p>Need a ride to or from the airport? Look no further than our world-class Pick Up service. Our experienced drivers will ensure a safe and comfortable journey to your destination. Whether you're a solo traveler or part of a group, we've got you covered. </p>
								<p>With our state-of-the-art fleet of vehicles, you can sit back and relax while we take care of the driving. And if you need any assistance along the way, our friendly staff is always here to help. </p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
							</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab4">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="../images/pool.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">Experience Luxury</span>
									<h3 class="heading" id=" Swimming">Swimming Pool</h3>
									<p>Take a refreshing dip in our world-class swimming pool, surrounded by lush greenery and elegant design. Relax and unwind in the serene atmosphere as you soak up the sun and enjoy a breathtaking view. Our pool is designed to cater to both adults and children, with separate areas for each. We provide high-quality towels, loungers, and umbrellas to ensure your comfort.</p>
									<p>Our experienced and attentive staff are always on hand to provide any assistance you may need. Whether you want to order a drink or a light snack, we have a range of options available to suit your taste. Our poolside bar offers a variety of refreshing cocktails, juices, and snacks.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 10:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="../images/spa.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
								<span class="super-heading-sm">World Class </span>
								<h3 class="heading" id="Spa">Spa</h3>
								<p>Unwind and pamper yourself in our luxurious spa that promises to soothe your body and soul. From traditional massages to aromatherapy, our expert therapists offer a range of rejuvenating treatments to leave you feeling refreshed and revitalized.</p>
								<p>Experience the ultimate spa journey with our state-of-the-art facilities and tranquil ambiance. Our attentive staff is dedicated to providing you with a personalized and unforgettable experience.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab6">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="../images/gym.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">Get Fit at Our World-Class Gym</span>
									<h3 class="heading" id="Gym">Gym</h3>
									<p>Looking for a place to work out and stay in shape? Look no further than our state-of-the-art gym, where we offer top-of-the-line equipment and facilities to help you meet your fitness goals.</p>
									<p>Our expert trainers are always on hand to offer advice and support, so whether you're a seasoned gym-goer or just starting out, we've got you covered.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 id="bk">HOTEL BOOKING</h2>
					</div>
				</div>
			</div>
	
<!--Beginning of the form-->
<div class="divide">
	
<div class="formDetails">
	<h3 >Book With us</h3>
	<span>
		<p>Wondering what you'll do with your vacation. Or maybe how you will free your mind, have a nice long swim, maybe relax you muscles.
		<br/>
		Look no further, book with us at any of our luxurious hotels and have a mind blowing experience.
		<br>
		We promise and we deliver exceeding your expectations
	</p>
	<span>
</div>
<div class="myForm">
<form action="<?=($_SERVER['PHP_SELF']);?>" method="POST">

<div >
<input type="Email" name="email" placeholder="Your Email" required/>
<input type="Text" name="Traveller" placeholder="Your Name" required/>

</div>

<div>
		<section>
			<select id="lux" name="Hotel" >
				<option value="" disabled selected>Select Hotel</option>
				<option value="Bellagio">Bellagio Hotel</option>
				<option value="InterContinental Hangzhou">InterContinental Hangzhou</option>
				<option value="Banff Spring">Banff Spring Hotel</option>
				<option value="Crown Metropol Hotel">Crown Metropol Hotel</option>
			</select>
			<input type="text" name="Country" id="Destination" value="" hidden>
		</section>
	</div>
	<div >
		<div >
		<input type="text"  placeholder="Check In" id="date-start" name="checkIn" />
		</div>
	</div>
	<div >
		<div >
			<input type="text"  placeholder="Check Out" id="date-end" name="checkOut" />
		</div>
	</div>
	
	<div>
			<input class="cnBk" type="submit" name="BookHotel" value="Confirm Book"  style="border-radius:30px">
	</div>

</form>
</div>
<!--form Quits-->
	</div>

	<div id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Happy Customer Says...</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
						</blockquote>
						<p class="author"><cite>John Doe</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
						</blockquote>
						<p class="author"><cite>Rob Smith</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
						</blockquote>
						<p class="author"><cite>Jane Doe</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Footer Start -->
    <div class="container-fluid text-not-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px; background-color:#f5f5f5;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-not-white">Nil</span>va</h1>
                </a>
                <p>Experience the allure of the unknown with our expertly curated travel packages. </p><h6 class="text-not-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start text-not-white">
                    <a class="btn btn-outline-primary btn-square mr-2 text-not-white" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2 text-not-white" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square text-not-white" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-not-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-not-white-50 mb-2" href="Wildlife.php"><i class="fa fa-angle-right mr-2"></i>Wildlife Tours</a>
                    <a class="text-not-white-50 mb-2" href="Nature.php"><i class="fa fa-angle-right mr-2"></i>Nature / Outdoor Activities</a>
                    <a class="text-not-white-50 mb-2" href="housing.php"><i class="fa fa-angle-right mr-2"></i>Housing/Hotel Booking</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-not-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-not-white-50 mb-2" href="pserv.php#AboutUs"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-not-white-50 mb-2" href="pserv.php#Services"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-not-white-50 mb-2" href="SafeTravels/contact.html"><i class="fa fa-angle-right mr-2"></i>Support</a>                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-not-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Nairobi, Kenya</p>
                <p><a href="tel:+2547007897"> <i class="fa fa-phone-alt mr-2"></i> @07007897 </a></p>
                <p><a href="mailto:chegealvin96@gmail.com"> <i class="fa fa-envelope mr-2"></i>Email Us </a></p>
                <h6 class="text-not-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-not-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-not-white-50">Copyright &copy; <a href="#">Nilva Tourism Site.</a>. All Rights Reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="../js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="../js/hoverIntent.js"></script>
	<script src="../js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="../js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="../js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="../js/classie.js"></script>
	<script src="../js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>

	<script src="../js/custom.js"></script>

</body>
</html>

<?Php
mysqli_close($conn);
}
//strip slashes and special characters from the entered data
function Strip($data){
	global $conn;
	$data  = trim($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	$data = stripslashes($data);
	return mysqli_escape_string($conn,$data);
}
function san($input){
	return preg_match("/^[a-zA-Z\-'\s]{1,50}$/",$input)===1;
}
