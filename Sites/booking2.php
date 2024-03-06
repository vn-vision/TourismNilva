<?Php
include_once('Booking.php');
session_start();


if(!isset($_SESSION['Destination']))
header('Location: index.html');

$Destination = $_SESSION['Destination'];
$_SESSION['Destination']= $Destination; // store it in a session


if($Destination=="USA"){
    mysqli_query($conn,$Usql);
    mysqli_select_db($conn,$Udb);}
if($Destination=="China"){
mysqli_query($conn,$Chsql);
mysqli_select_db($conn,$Chdb);
}
if($Destination=="Canada"){
    mysqli_query($conn,$Csql);
mysqli_select_db($conn,$Cdb);
}
if($Destination=="Australia"){
    mysqli_query($conn,$Asql);
mysqli_select_db($conn,$Adb);
}


// Fetching images and information from database to store to the necessary fiels

//store images in an array to loop through.

//Wild images
$WildImages = array();
//Retrieve data from tables and insert them
$wildRetrieve = "SELECT * FROM $wildRecords";
$wildQuery= mysqli_query($conn, $wildRetrieve);
if ($wildQuery) {
    while ($row = mysqli_fetch_assoc($wildQuery)) {
        $wildImages[] = $row;
    }
}

//city images
$CityImages = array();
//Retrieve data from tables and insert them
$cRetrieve = "SELECT * FROM $CityRecords";
$CityQuery= mysqli_query($conn, $cRetrieve);
if ($CityQuery) {
    while ($row = mysqli_fetch_assoc($CityQuery)) {
        $CityImages[] = $row;
    }
}


//Hotel Images
$HotelImages = array();
//Retrieve data from tables and insert them
$hRetrieve = "SELECT * FROM $HotelRecords";
$HotelQuery= mysqli_query($conn, $hRetrieve);
if ($HotelQuery) {
    while ($row = mysqli_fetch_assoc($HotelQuery)) {
        $HotelImages[] = $row;
    }
}

//scene images
$SceneImages = array();
//Retrieve data from tables and insert them
$sRetrieve = "SELECT * FROM $SceneRecords";
$SceneQuery= mysqli_query($conn, $sRetrieve);
if ($SceneQuery) {
    while ($row = mysqli_fetch_assoc($SceneQuery)) {
        $SceneImages[] = $row;
    }
}

//Activity images
$ActImages = array(); 
//Retrieve data from tables and insert them
$actRetrieve = "SELECT * FROM $ActivityRecords";
$actQuery= mysqli_query($conn, $actRetrieve);
if ($actQuery) {
    while ($row = mysqli_fetch_assoc($actQuery)) {
        $ActImages[] = $row;
    }
}

//store selected items in session for redirect to a cart


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_booking'])) {
  // Store selected items in the session array
  $_SESSION['selected_items'] = $_POST['selected_items'];

  // Redirect to cart.php
  header('Location: cart.php');
  exit();
}

?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nilva Booking Travel and Accommodation </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

<style>
/*NAVIGATION BAR*/
                        /* Color of the links BEFORE scroll */
            .navbar-scroll .nav-link,
            .navbar-scroll .navbar-toggler-icon,
            .navbar-scroll .navbar-brand {
                color: #fff;
            }

            /* Color of the links AFTER scroll */
            .navbar-scrolled .nav-link,
            .navbar-scrolled .navbar-toggler-icon,
            .navbar-scrolled .navbar-brand {
                color: #fff;
            }

            /* Color of the navbar AFTER scroll */
            .navbar-scroll,
            .navbar-scrolled {
                background-color: #cbbcb1;
            }

            .mask-custom {
                backdrop-filter: blur(5px);
                background-color: rgba(255, 255, 255, .15);
            }

            .navbar-brand {
                font-size: 1.75rem;
                letter-spacing: 3px;
            }

.Rentainer{
display:flex;
flex-direction:column;
background-color: #fff;
gap:30px;
max-width:90vw;
margin:0 5%;
padding:2%;
}

/* Title */
.title{
  display:flex;
  width:auto;
  min-height:20%;
  padding:5px;
  margin (2%, 0, 0, 2%);
  text-size : 12em;
  font-family: cursive;

}


/* Img */
img{
width:100%;
object-fit:cover;
object-position: 50% 50%;
}

.light{
box-shadow:2px 2px 5px 2px #080808, -2px -2px 5px 2px #080808;
}

.logo{
  		max-width: 100%;
 		 max-height: 9vh;
}
</style>



</head>
<body>
<div class="Rentainer light">

<!--insert the nav-->
<div class="NavBar">

  <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" >
                    <div class="container">
                   <a href="index.html"> <img src="../images/nilva.jpg" alt="Nilva Icon" class="logo"></a>
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <span class="nav-decoration">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto" >
                                <li class="nav-item" >
                                    <a class="nav-link" href="index.html"><span style="color:#FF00FF">Home</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="SafeTravels/travel.php"><span style="color:#FF00FF">Destinations</span></a>
                              </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="housing.php"><span style="color:#FF00FF">Accommodation</span></a>
                               </li>
                               <li class="nav-item">
                                <a class="nav-link" href="SafeTravels/contact.html"><span style="color:#FF00FF">Contact</span></a>
                            </li>
                            </ul>
                            <ul class="navbar-nav d-flex flex-row">
                                <li class="nav-item me-3 me-lg-0">
                                    <a class="nav-link" href="#!">
                                        <i class="fas fa-shopping-cart" style="color:#00ffff"></i>
                                    </a>
                                </li>
                                <li class="nav-item me-3 me-lg-0">
                                    <a class="nav-link" href="#!">
                                        <i class="fab fa-twitter" style="color:#00ffff"></i>
                                    </a>
                                </li>
                                <li class="nav-item me-3 me-lg-0">
                                    <a class="nav-link" href="#!">
                                        <i class="fab fa-instagram" style="color:#00ffff"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </span>
                    </div>
                </nav>
</div>


<!--Country Heading -->
<div class="title">
<h3> Country of interest, <strong> <?= $Destination?> </strong></h3>
</div>

<form action="" method = "post" >

<!--City Heading/description/tag -->
<div class="title">
<h3> Cities of interest and Luxurious Hotels: </h3>
</div>

<!--test-->

    <div ><!-- Carousel wrapper -->
    <div
      id="carouselMultiItemCities"
      class="carousel slide carousel-dark text-center"
      data-mdb-ride="carousel"
    >
      <!-- Controls -->
      <div class="d-flex justify-content-center mb-4">
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemCities"
          data-mdb-slide="prev"
    
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemCities"
          data-mdb-slide="next"
    
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
<!-- City View -->
<!-- Inner Carousel Container-->
<div class="carousel-inner py-4">

<!-- Start of City Carousel--Different Cities to visit -->
<div class="carousel-item active">
<div class="container">
<div class="row">
       
<!-- Loop through City images in array $CityImages , store them in  variable $cityImg and display them on carousel div -->

<?php foreach ($CityImages as $cityImg) { ?>
    <div class="col-lg-4">
        <div class="card bx">
            <img src="../images/<?= $cityImg['_Image']; ?>" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title"><?= $cityImg['CityName']; ?></h5>
                <p class="card-text"><?= $cityImg['_Description']; ?></p>
                <p class="card-text"><?=$cityImg['Charges']; ?></p>
                <?php
                $name = $cityImg['CityName'];
                $image = '../images/' . $cityImg['_Image']; // Modify the image path as needed
                $charge = $cityImg['Charges'];
                ?>
                <input type="checkbox" name="selected_items[]" value="<?= $name . '|' . $image  .'|' . $charge ?>">
            </div>
        </div>
    </div>
<?php } ?>
<!-- End  -->

</div>
</div>
</div>
    
<!-- Start of City Carousel--Different Cities to visit Maybe by the Beach-->

<div class="carousel-item">
<div class="container">
<div class="row">

<!-- Loop through images in array $images , store them i  variable $image and display them on carousel div -->

<?php foreach ($HotelImages as $hotelImage) { ?>
    <div class="col-lg-4">
        <div class="card bx">

        <?  // this is the folder in which images are stored  ../images ?>

            <img src="../images/<?php echo $hotelImage['_Image']; ?>" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title"><?=$hotelImage['HotelName']; ?></h5>
                <p class="card-text"><?=$hotelImage['Charges']; ?></p>
                <p class="card-text"><?=$hotelImage['_Description']; ?></p>
                <?php
                $name = $hotelImage['HotelName'];
                $image = '../images/' . $hotelImage['_Image']; // Modify the image path as needed
                $charge = $hotelImage['Charges'];
                ?>
                <input type="checkbox" name="selected_items[]" value="<?= $name . '|' . $image  .'|' . $charge ?>">
                            
            </div>
        </div>
    </div>
<?php } ?>

<!-- End -->

</div>
</div>
</div>

</div><!-- Inner -->
</div><!-- Carousel wrapper -->

<!--test-->



<!--Popular Scenes Heading/description/tag -->
<div class="title">
<h3> Popular Scenes and Wildlife: </h3>
</div>

<!--test-->

<div ><!-- Carousel wrapper -->
    <div
      id="carouselMultiItemActivities"
      class="carousel slide carousel-dark text-center"
      data-mdb-ride="carousel"
    >
      <!-- Controls -->
      <div class="d-flex justify-content-center mb-4">
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemActivities"
          data-mdb-slide="prev"
    
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemActivities"
          data-mdb-slide="next"
    
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
<!-- Scene View -->
<!-- Inner Carousel Container-->
<div class="carousel-inner py-4">

<!-- Start of Scene Carousel--Different Scenes to visit -->
<div class="carousel-item active">
<div class="container">
<div class="row">
       
<!-- Loop through Scene images in array $SceneImages , store them in  variable $SceneImg and display them on carousel div -->

<?php foreach ($SceneImages as $SceneImg) { ?>
    <div class="col-lg-4">
        <div class="card bx">

        <?  // this is the folder in which images are stored  ../images ?>

            <img src="../images/<?php echo $SceneImg['_Image']; ?>" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title"><?=$SceneImg['sceneName']; ?></h5>
                <p class="card-text"><?=$SceneImg['Charges']; ?></p>
                <p class="card-text"><?=$SceneImg['_Description']; ?></p>
                <?php
                $name = $SceneImg['sceneName'];
                $image = '../images/' . $SceneImg['_Image']; // Modify the image path as needed
                $charge = $SceneImg['Charges'];
                ?>
                <input type="checkbox" name="selected_items[]" value="<?= $name . '|' . $image  .'|' . $charge ?>">

            </div>
        </div>
    </div>
<?php } ?>
  
<!-- End  -->

</div>
</div>
</div>
    <!-- Scene fin view-->

    <!-- Wild View -->

<!-- Start of Wild Carousel--Different Scenes to visit -->
<div class="carousel-item ">
<div class="container">
<div class="row">
       
<!-- Loop through Wild images in array $SceneImages , store them in  variable $SceneImg and display them on carousel div -->

<?php foreach ($wildImages as $wildImg) { ?>
    <div class="col-lg-4">
        <div class="card bx">

        <?  // this is the folder in which images are stored  ../images ?>

            <img src="../images/<?php echo $wildImg['_Image']; ?>" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title"><?=$wildImg['wildName']; ?></h5>
                <p class="card-text"><?=$wildImg['Charges']; ?></p>
                <p class="card-text"><?=$wildImg['_Description']; ?></p>
                <?php
                $name = $wildImg['wildName'];
                $image = '../images/' . $wildImg['_Image']; // Modify the image path as needed
                $charge = $wildImg['Charges'];
                ?>
                <input type="checkbox" name="selected_items[]" value="<?= $name . '|' . $image  .'|' . $charge ?>">

            </div>
        </div>
    </div>
<?php } ?>
  
<!-- End  -->

</div>
</div>
</div>
    <!-- Wild fin-->
</div><!-- Inner -->
</div><!-- Carousel wrapper -->

<!--test-->



<!--Popular Wildlife Heading/description/tag -->
<div class="title">
<h3> Famous Wildlife: </h3>
</div>

<!--test-->

<div ><!-- Carousel wrapper -->
    <div
      id="carouselMultiItemPScenes"
      class="carousel slide carousel-dark text-center"
      data-mdb-ride="carousel"
    >
      <!-- Controls -->
      <div class="d-flex justify-content-center mb-4">
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemPScenes"
          data-mdb-slide="prev"
    
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemPScenes"
          data-mdb-slide="next"
    
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
<!-- Scene View -->
<!-- Inner Carousel Container-->
<div class="carousel-inner py-4">

<!-- Start of Scene Carousel--Different Scenes to visit -->
<div class="carousel-item active">
<div class="container">
<div class="row">
       
<!-- Loop through Scene images in array $SceneImages , store them in  variable $SceneImg and display them on carousel div -->

<?php foreach ($ActImages as $actImg) { ?>
    <div class="col-lg-4">
        <div class="card bx">

        <?  // this is the folder in which images are stored  ../images ?>

            <img src="../images/<?php echo $actImg['_Image']; ?>" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title"><?=$actImg['ActivityName']; ?></h5>
                <p class="card-text"><?=$actImg['_Description']; ?></p>
                <?php
                $name = $actImg['ActivityName'];
                $image = '../images/' . $actImg['_Image']; // Modify the image path as needed
                $charge = $actImg['Charges'];
                ?>
                <input type="checkbox" name="selected_items[]" value="<?= $name . '|' . $image  .'|' . $charge ?>">

            </div>
        </div>
    </div>
<?php } ?>
  
<!-- End  -->

</div>
</div>
</div>
    <!-- Activity fin-->


</div><!-- Inner -->
</div><!-- Carousel wrapper -->
<!-- end of activities -->

<button  class="w-100 btn btn-primary btn-lg" type="submit" name="confirm_booking">Confirm Booking</button>
            
</form>



<script src="../js/MDB.js"></script>

</body>
</html>

<?Php

/*
//stripe API payment Gateway --Credit Card
require_once('../vendor/stripeVendor/autoload.php');
\Stripe\Stripe::setApiKey(' ');
//collect the necessary input details
$cardNum = $_POST['cNum'];
$expDate = $_POST['cExp'];
$cvc = $_POST['cCVV'];


$token = \Stripe\Token::create([
    'card' => [
      'number' => $cardNum,
      'exp_month' => substr($expDate, 0, 2),
      'exp_year' => substr($expDate, 3),
      'cvc' => $cvc,
    ],
  ]);

if ($token === null) {
    // Handle token creation error
    $message = "Token creation error";
} else {
    // Token was created successfully, proceed with charge
    try {
        $charge = \Stripe\Charge::create([
            'amount' => $amount * 100,
            'currency' => 'USD',
            'description' => 'Example Charge',
            'source' => $token,
        ]);

        // Payment successful, do something here
        echo "Payment Successful!";
    } catch (\Stripe\Exception\CardException $e) {
        // Card was declined
        $error = $e->getError();
        $message = $error['message'];
    } catch (\Stripe\Exception\RateLimitException $e) {
        // Too many requests made to the API too quickly
        $message = "Rate limit error";
    } catch (\Stripe\Exception\InvalidRequestException $e) {
        // Invalid parameters were supplied to Stripe's API
        $message = "Invalid request error";
    } catch (\Stripe\Exception\AuthenticationException $e) {
        // Authentication with Stripe's API failed
        $message = "Authentication error";
    } catch (\Stripe\Exception\ApiConnectionException $e) {
        // Network communication with Stripe failed
        $message = "Network error";
    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Generic API error
        $message = "API error";
    }

// Redirect to an error page
//header('Location: error.html?message=' . urlencode($message));
echo" Error Message: " . urlencode($message) ;
}
*/




mysqli_close($conn);
?>