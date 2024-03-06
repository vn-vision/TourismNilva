<?php
include('../../db/Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);
mysqli_query($conn,$sql);
mysqli_select_db($conn,$db);

session_start(); // starts session
if(isset($_POST['BookRide'])){

    //strip special characters and tags
$trName = StripData($_POST['travellerName']);
$Email = StripData($_POST['Email']);
$Destination = StripData($_POST['Destination']);
$Depart = StripData($_POST['Depart']);
$Return = StripData($_POST['Return']);

//Store values for consistency on redirect
$_SESSION['trEmail'] = $Email;
$_SESSION['touristName'] = $trName;
$_SESSION['Destination'] = $Destination;
$_SESSION['HotelName'] = '';

//textfield sanitization
if( !san($Destination) || !san($trName) || !filter_var($Email,FILTER_VALIDATE_EMAIL) ){
    echo" <script> 
    alert('Make sure Email is valid, Only White Space and letters allowed in Name and Destination Fields');
    window.location.href='';
    </script> ";

    //if the name fields and Email aren't sanitized
}else{
  

	//verify Fields are filled out
   if(!empty($trName) && !empty($Email) && !empty($Destination) && !empty($Depart) && !empty($Return))
    {
        global $desTable;
        //record the fields
        $Insert = "INSERT INTO `$desTable` (TouristName, TouristEmail,Destination, Depart, dReturn) 
                    VALUES ('$trName', '$Email', '$Destination', '$Depart', '$Return') ";
        $conInsert = mysqli_query($conn, $Insert);
    
        if(!$conInsert){
            echo"
            <script>
            alert('Error Confirming Booking');
            window.location.href=' ';
            </script>
            ";
        }else{
    
    //email traveller on Booking Completion
            $to ="chegealvin96@gmail.com";
            $subject="Travel Booking";
            $Message=" A new booking request from Nilva Tourism Website has been made. Destination: . $Destination . <br> . 
                        Tourist Depart date : . $Depart . and Return date: .$Return . Nilva Tours. ";
            $header = "From: $trName ";
            $header .= "Reply-To: $Email";	
    
            if(mail($to,$subject,$Message,$header)){
                echo"
                <script>
                alert('Complete Booking');
                window.location.href='../booking2.php ';
                </script>
                ";
                exit;
            }else{
               echo"
                <script>
                alert('Error making Booking');
                window.location.href='';
                </script>
                ";
                http_response_code(500);
                
            }
    
        }
    
    
    }else{
        echo"
            <script>
            alert('Error, Confirm All fields are filled');
            window.location.href='';
            </script>
            ";
    }

}





//jump to this if the submit button has not been pressed
}else{
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nilva Safe Travels</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
	<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="../../css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../../css/style.css" rel="stylesheet">

    <style>
        .logo{
  max-width: 100%;
  max-height: 9vh;
}
        @media only screen and (min-width:755px){
            #date1{
                margin-bottom: 5%;
            }
            #date2{
                margin-bottom: 5%;
            }
        }
    </style>

</head>

<body>    
     <!--Navbar Start --> 
    <div class="container-fluid  nav-bar navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                <img src="../../images/nilva.jpg" alt="Nilva Icon" class="logo">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="../index.html" class="nav-item nav-link active">Home</a>
                        <a href="../housing.php" class="nav-item nav-link">Accommodation</a>
                        <a href="../pServ.php" class="nav-item nav-link">Services</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                </div>
            </nav>
        </div>
    </div>


    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                            <a href="#TravelBook" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nilva Safe Travels</h6>
                        
                        <h2 class="mb-3">Experience Your Dream Getaway with Our Unforgettable Transportation Services!</h2>
                        <p>Our skilled drivers and modern fleet of vehicles will ensure your journey is comfortable, convenient, and hassle-free. Whether you're looking for a luxurious limousine or a budget-friendly shuttle, we have a range of <a href="#transportation-services"><strong>transportation options</strong></a> to suit your needs and budget.</p>
                        <p>Explore new destinations, immerse yourself in unique cultures, and indulge in exciting activities, all while traveling in style and comfort. Don't miss out on any <a href="#must-see-sights"><strong>must-see sights</strong></a> or experiences - our experienced drivers will take you there safely and efficiently.</p>
                                                
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/newcastle.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/greatwall.jpg" alt="">
                            </div>
                        </div>
                        <p><a href="" class="btn btn-primary mt-1" style="border-radius:20px">Book</a>  with us today and embark on a journey of a lifetime!</p>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h3 class="">Competitive Pricing</h3>
                            <p class="m-0">At our tourism travel services, we believe that everyone should have the opportunity to experience the joy of travel. That's why we offer competitive pricing on all of our transportation services, so you can enjoy your trip without breaking the bank.</p>
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h3 class="">Best Services</h3>
                            <p class="m-0">At our tourism travel services, we believe in providing our customers with the best services possible. Our team of experienced professionals goes above and beyond to ensure that your journey is comfortable, safe, and enjoyable from start to finish.</p>
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h3 class="">Worldwide Coverage</h3>
                            <p class="m-0">At our tourism travel services, we are proud to offer worldwide coverage for all of your transportation needs. Whether you're traveling across the city or around the globe, we have a comprehensive network of partners and affiliates to ensure that you can reach your destination hassle-free.</p>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/LAUV.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">United States</h5>
                            <span>Los Angeles</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/bSydney.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Australia</h5>
                            <span>Sydney</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/shanghai.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">China</h5>
                            <span>Shanghai</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h3 class="mb-2">Travel Guides</h3>
                        <p class="m-0">Experience personalized travel guides with us for the ultimate journey. Our knowledgeable guides offer insights on local attractions, customs and hidden gems to enhance your travel experience.</p></div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h3 class="mb-2">Ticket Booking</h3>
                        <p class="m-0">At our tourism travel services, we offer hassle-free ticket booking services for your convenience. Whether you're planning a trip for business or pleasure, we can help you find the best deals on flights, hotels, and car rentals.</p>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h3 class="mb-2">Hotel Booking</h3>
                        <p class="m-0">Finding the perfect place to stay on your travels can be stressful. Let our tourism travel services take care of your hotel booking needs and provide you with peace of mind during your trip.</p>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Registration Start-->
<div class="container-fluid bg-registration py-5" style="margin:90px 0;">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-7 mb-5 mb-lg-0">
          <div class="mb-4">
            <h6 id="TravelBook" class="text-primary text-uppercase" style="letter-spacing: 5px;">Unforgettable Honeymoon</h6>
            <h1 class="text-white"><span class="text-primary">Get 30% OFF</span> On Your Dream Honeymoon</h1>
          </div>
        <p class="text-white">Make your honeymoon unforgettable with our special offer. Indulge in the romantic ambience of beautiful destinations, enjoy exquisite cuisine, and create unforgettable memories with your loved one.</p>
        <ul class="list-inline text-white m-0">
            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Choose from a wide range of destinations for your dream honeymoon</li>
            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Experience the best romantic atmosphere and top-notch services</li>
            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Enjoy exclusive 30% off on all honeymoon packages</li>
          </ul>
      </div>
      <div class="col-lg-5">
        <div class="card border-0">
          <div class="card-header bg-primary text-center p-4">
            <h1 class="text-white m-0">Sign Up Now</h1>
          </div>
          <div class="card-body rounded-bottom bg-white p-5">
            <form action=" <?=($_SERVER['PHP_SELF']);?> " method="post">
              
              <div class="form-group">
                <div class="form-group">
            <input type="text" class="form-control p-4" placeholder="Your name" name="travellerName" required>
              </div>
              <input type="email" class="form-control p-4" placeholder="Your email" name="Email" required>
              </div>
              <div class="form-group">
                <select class="custom-select px-4" style="height:47px;" name="Destination">
                  <option selected disabled>Select a destination</option>
                  <option value="USA">USA</option>
                  <option value="Canada">CANADA</option>
                  <option value="Australia">AUSTRALIA</option>
                  <option value="China">CHINA</option>
                </select>
              </div>
              <div class="mb-3 mb-md-0">
                <div class="date" id="date1" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" name="Depart" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                </div>
              </div>
              <div class="mb-3 mb-md-0">
                    <div class="date" id="date2" data-target-input="nearest">
                        <input type="text" class="form-control p-4 datetimepicker-input" name="Return" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                    </div>
                </div>
              <div>
                <button class="btn btn-primary btn-block py-3" name="BookRide" type="submit">Sign Up Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- registration end-->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Julie Brown</h5>
                            <p class="m-0">Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Scott Williams</h5>
                            <p class="m-0">USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Jeniffer White</h5>
                            <p class="m-0">Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">John Huang</h5>
                            <p class="m-0">China</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">Nil</span>va</h1>
                </a>
                <p>Experience the allure of the unknown with our expertly curated travel packages. </p><h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="../Wildlife.php"><i class="fa fa-angle-right mr-2"></i>Wildlife Tours</a>
                    <a class="text-white-50 mb-2" href="../Nature.php"><i class="fa fa-angle-right mr-2"></i>Nature / Outdoor Activities</a>
                    <a class="text-white-50 mb-2" href="../housing.php"><i class="fa fa-angle-right mr-2"></i>Housing/Hotel Booking</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="../pServ.php#AboutUs"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white-50 mb-2" href="../pServ.php#Services"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Support</a>                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Nairobi, Kenya</p>
                <p><a href="tel:+2547007897"> <i class="fa fa-phone-alt mr-2"></i> @07007897 </a></p>
                <p><a href="mailto:chegealvin96@gmail.com"> <i class="fa fa-envelope mr-2"></i>Email Us </a></p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
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
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Nilva Tourism Site.</a>. All Rights Reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?Php
}

//strip slashes and special characters from the entered data
function StripData($data){
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
