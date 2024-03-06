<?php
session_start();

if (isset($_POST['submit'])) {
  if (isset($_POST['country'])) {
    $_SESSION['Destination'] = $_POST['country'];
    header('Location: booking2.php');
    exit();
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Nilva and Services </title>
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
body{
background-color:#daddcf;
color:#080808;
}
.P{
  font-size: 18px;
  line-height: 1.5;
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
.Build{
display:flex;
justify-content:space-evenly;
}
.light{
box-shadow:2px 2px 5px 2px #080808, -2px -2px 5px 2px #080808;
}
.card img{
max-width:100%;
object-fit:cover;
object-position: 50% 50%;
}
.Tourism {
  padding: 2%;
  text-align: center;
  margin-bottom: 20px;
}
.Tourism h4{
  text-align: left;
  padding: 2%;
}




.about {
  font-family: Arial, sans-serif;
  color: #333;
  max-width: 100%;
  margin: auto;
  padding: 40px;
  border-radius: 10px;
 box-shadow:  box-shadow:.5px 5px 7px 1px #daddcf, -1px -.5px 7px 2px #daddcf;
 

}

.about h1 {
  font-size: 36px;
  font-weight: bold;
  margin-top: 42px;
  margin-bottom: 42px;
  text-align: justify;
}

.about p {
  line-height: 1.5;
  margin-bottom: 20px;
  text-align: justify;
  text-align-last: center;
}

.highlight {
  color: #0077c2;
  font-weight: bold;
}







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
        
            .nB{
              border: none;
            }
.bx{
  box-shadow:.5px 5px 7px 1px #daddcf, -1px -.5px 7px 2px #daddcf;
}
.logo{
  		max-width: 100%;
 		 max-height: 9vh;
}

#hero{
    height: 70vh;
    background-position: top 25% right 0;
    background-size: cover;
    color:#fff;
    padding: 0 80px;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.section-p1{
    padding: 40px 80px;
}
#back{
    background-image: url("../images/background.jpg");
    height: 70vh;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    align-items: center;
    justify-content: center;
    display: grid;
    position: sticky;
}
   
.mvp{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  margin: 2%;
}

 @media only screen and (min-width:481px){

.card img{height:300px;}
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

<div>

<section id="hero" class="section-p1">
    <div id="back">
    <h1>Explore the world with us.</h1>
    <p>Book a place to visit at a low price with us.</p>
    </div>
</section>

<div class="about" id="AboutUs">
      <h1>About Nilva</h1>
      <p>Welcome to Nilva, a company dedicated to providing exceptional <span class="highlight">wildlife services</span>, <span class="highlight">nature and outdoor activities</span>, and <span class="highlight">traveling services</span>. We are passionate about providing experiences that go beyond tourists' expectations.</p>
      <p>At Nilva, we believe that the natural world is a precious resource that should be cherished and protected. That's why we are committed to promoting responsible tourism practices that minimize our impact on the environment while still allowing visitors to appreciate its beauty and diversity.</p>
      <p>Our vision is to be able to provide tourism services all over the world. We want to connect people with nature and help them explore new places and cultures while fostering a sense of respect and stewardship for our planet. Whether you're interested in bird watching, hiking, or cultural tours, we have something for everyone.</p>
      <p>We are proud to offer a range of services that cater to a variety of interests and needs. From customized travel itineraries to guided nature walks, our team of experienced professionals is dedicated to creating unforgettable experiences for our clients.</p>
      <p>At Nilva, we are committed to providing high-quality services that exceed our clients' expectations. We are constantly learning and improving to ensure that we are at the forefront of responsible tourism practices and that we are always offering the best possible experiences for our clients.</p>
      <p> We look forward to helping you create unforgettable memories and discover the wonders of the natural world.</p>
    </div>



  <div class="mvp" id="Services">
  <h4 > Our Services in: </h4>
</div>
<!--Countries/Wildlife Services-->
<div class="Tourism">
<h4>Canada</h4>
<span class="P">
Welcome to Canada, a country known for its stunning natural beauty and diverse wildlife. We offer a range of outdoor activities for nature enthusiasts, including hiking, camping, fishing, kayaking, and skiing. Our national parks and wildlife reserves provide unique opportunities to observe wildlife in their natural habitats, such as grizzly bears, moose, and bald eagles. We also offer various housing services, from cozy cabins to luxurious lodges, for a comfortable and relaxing stay amidst breathtaking scenery. Come and explore Canada's wilderness and experience the beauty of nature like never before.         
</span>
</div>

<!-- different rooms showcase-->
<div class="Build">
<div ><!-- Carousel wrapper -->
<div
  id="carouselMultiItemCanada"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button
       class="carousel-control-prev position-relative  nB"
      type="button"
      data-mdb-target="#carouselMultiItemCanada"
      data-mdb-slide="prev"

    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
       class="carousel-control-prev position-relative  nB"
      type="button"
      data-mdb-target="#carouselMultiItemCanada"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- ROOM RENTING -->
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">


            <div class="card bx">
              <img
                src="../images/pBear.jpg"
                class="card-img-top"
                alt="Polar Bear"
              />
              <div class="card-body">
                <h5 class="card-title">Polar Bear</h5>
                <p class="card-text">
                  They are the largest land predator in the world,with adult males weighing up to 600 kilograms,standing up to 3 meters.
                </p>
              </div>
            </div>


          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card bx">
              <img
                src="../images/canFox.jpg"
                class="card-img-top"
                alt="Arctic Fox"
              />
              <div class="card-body">
                <h5 class="card-title">Arctic Fox</h5>
                <p class="card-text">
                Arctic foxes are excellent hunters and scavengers, feeding on small mammals like lemmings and voles as well as carrion.
                 </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card bx">
              <img
                src="../images/canCaribou.jpg"
                class="card-img-top"
                alt="Canada Caribou "
              />
              <div class="card-body">
                <h5 class="card-title">Caribou / Reindeer </h5>
                <p class="card-text">
                These majestic animals are known for their impressive antlers, which can span up to 1.2 meters (4 feet) in length.
                 </p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card bx">
              <img
                src="../images/kayakingC.jpg"
                class="card-img-top"
                alt="Canadian Kayaking"
              />
              <div class="card-body">
                <h5 class="card-title"> Kayaking </h5>
                <p class="card-text">
                Top kayaking destinations in Canada include Bowron Lakes Circuit, Nahanni River, and Thousand Islands in BC, NT, and ON.  </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card bx">
              <img
                src="../images/turquoiseCan.jpg"
                class="card-img-top"
                alt="The turquoise waters of Moraine "
              />
              <div class="card-body">
                <h5 class="card-title">The turquoise waters of Moraine </h5>
                <p class="card-text">
                Located in the Valley of the Ten Peaks, the lake is surrounded by dramatic peaks, enhancing its scenic beauty.
</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card bx">
              <img
                src="SafeTravels/img/canada.jpg"
                class="card-img-top"
                alt="Nothern Lights"
              />
              <div class="card-body">
                <h5 class="card-title"> Aurora Borealis</h5>
                <p class="card-text">
                The aurora borealis, a stunning light show caused by solar particles colliding with Earth's magnetic field, is visible in Canada's north in winter.       
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="card bx">
              <img
                src="../Images/dogSledC.jpg"
                class="card-img-top"
                alt="Dog Sledding"
              />
              <div class="card-body">
                <h5 class="card-title"> Dog Sledding </h5>
                <p class="card-text">
              An exciting activity that involves riding a sled pulled by huskies or malamutes, commonly known as dog sledding.
                            </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card bx">
              <img
                src="../images/caFood.jpeg"
                class="card-img-top"
                alt="Canada Food"
              />
              <div class="card-body">
                <h5 class="card-title">Canada Exquisite Foods</h5>
                <p class="card-text">
                Canadian delicacies include poutine, butter tarts, and Nanaimo bars, all of which are must-try dishes.                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card bx">
              <img
                src="../images/caHotel.jpeg"
                class="card-img-top"
                alt="Fairmunt Banff Springs Hotel"
              />
              <div class="card-body">
                <h5 class="card-title"> The Banff Springs Hotel</h5>
                <p class="card-text">
                Banff, Alberta's historic and iconic Fairmont Banff Springs Hotel is a must-visit destination for travelers.
               </p>
                <a href="#!" class="btn btn-primary">Book</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper --></div>

</div>
</div>



<!--Australia Starts Here-->
<div>
  <!--Countries/Wildlife Services-->
  <div class="Tourism">
  <h4>Australia</h4>
  <span class="P">
    Australia is a land of natural wonders, and there are many unique ways to experience its beauty. For those seeking adventure, there are opportunities to explore the rugged wilderness through hiking, camping, and rock climbing. For those who prefer to take it easy, there are scenic drives and relaxing cruises along the coast. Wildlife lovers can take guided tours to spot kangaroos, koalas, wallabies, and other fascinating creatures in their natural habitats. Bird watching enthusiasts can enjoy the country's diverse birdlife, including colorful parrots, cockatoos, and eagles. Accommodations range from luxurious resorts to cozy cabins, providing a comfortable home base for all types of travelers. With so much to see and do, Australia is a destination that should not be missed.          
  </span>
  </div>
  
  <!-- different rooms showcase-->
  <div class="Build">
  <div ><!-- Carousel wrapper -->
  <div
    id="carouselMultiItemAustralia"
    class="carousel slide carousel-dark text-center"
    data-mdb-ride="carousel"
  >
    <!-- Controls -->
    <div class="d-flex justify-content-center mb-4">
      <button
         class="carousel-control-prev position-relative  nB"
        type="button"
        data-mdb-target="#carouselMultiItemAustralia"
        data-mdb-slide="prev"
  
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
         class="carousel-control-prev position-relative  nB"
        type="button"
        data-mdb-target="#carouselMultiItemAustralia"
        data-mdb-slide="next"
  
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  <!-- ROOM RENTING -->
    <!-- Inner -->
    <div class="carousel-inner py-4">
      <!-- Single item -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
           
          <div class="col-lg-4">
              <div class="card bx">
                <img
                  src="../images/casswary.jpg"
                  class="card-img-top"
                  alt="Casswary Bird"
                />
                <div class="card-body">
                  <h5 class="card-title">Cassowary Bird</h5>
                  <p class="card-text">
                  A flightless bird native to the tropical forests of New Guinea and northeastern Australia is the Cassowary, which is quite large. 
                  </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/kangarooJ.jpg"
                  class="card-img-top"
                  alt="hoping kangaroo"
                />
                <div class="card-body">
                  <h5 class="card-title">kangaroos</h5>
                  <p class="card-text">
                  Kangaroos, the marsupial mammals from Australia, are famous for their distinctive hopping gait and unique reproductive system.
                 </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/perryPlat.jpeg"
                  class="card-img-top"
                  alt="The Duck-billed Platypuse"
                />
                <div class="card-body">
                  <h5 class="card-title">Platypuses</h5>
                  <p class="card-text">
                  The platypus is a mammal that lays eggs instead of giving birth to live young and has a unique, flat, and duck-like bill.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <div class="container">
          <div class="row">
           
          <div class="col-lg-4 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/whale.jpg"
                  class="card-img-top"
                  alt="Whale Watching Australia"
                />
                <div class="card-body">
                  <h5 class="card-title">Whale Watching</h5>
                  <p class="card-text">
                  In Australia, a beloved outdoor activity is observing majestic sea creatures up close, with many coastal locations offering this experience.
                  </p>
                </div>
              </div>
            </div>

          <div class="col-lg-4 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/grb.jpeg"
                  class="card-img-top"
                  alt="The Great Reef Barrier"
                />
                <div class="card-body">
                  <h5 class="card-title">The Great Reef Barrier</h5>
                  <p class="card-text">
                  The Great Barrier Reef, spanning more than 2,300 kilometers, is the largest coral reef system in the world, located in Australia.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/outback.jpeg"
                  class="card-img-top"
                  alt="OutBack Australia"
                />
                <div class="card-body">
                  <h5 class="card-title">The Outback</h5>
                  <p class="card-text">
                  Famous for its rugged natural beauty, distinctive wildlife, and cultural importance to Indigenous Australians, this place is renowned.                </p>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <div class="container">
          <div class="row">
          
          <div class="col-lg-4 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/surfingA.jpg"
                  class="card-img-top"
                  alt="Surfing Australia"
                />
                <div class="card-body">
                  <h5 class="card-title">Surfing </h5>
                  <p class="card-text">
                  Australia boasts excellent surfing destinations such as Byron Bay and the Gold Coast, while the USA's Hawaii and California are also famous.                </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/auHotel.jpeg"
                  class="card-img-top"
                  alt=" Sydney Australia"
                />
                <div class="card-body">
                  <h5 class="card-title">The Sydney Opera House</h5>
                  <p class="card-text">
                  The Sydney Opera House, situated in Australia's largest city, is a globally acclaimed performing arts venue and architectural masterpiece.                  </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
              <div class="card bx">
                <img
                  src="../images/auRest.jpeg"
                  class="card-img-top"
                  alt="Australian Hotel"
                />
                <div class="card-body">
                  <h5 class="card-title">	Crown Metrpol Perth Hotel</h5>
                  <p class="card-text">
                  This hotel is acclaimed for its contemporary and sophisticated architecture, luxurious facilities, and stunning panoramic vistas of the city.    
                  </p>
                  <a href="#!" class="btn btn-primary">Book</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Inner -->
  </div>
  <!-- Carousel wrapper --></div>
  
  </div>
  </div>

  <!--China Starts Here-->

  <div>
    <!--Countries/Wildlife Services-->
    <div class="Tourism">
    <h4>China</h4>
    <span class="P">
      China offers an array of unique experiences for nature enthusiasts. Visitors can explore the diverse and vast landscapes of China by embarking on guided hiking or trekking trips. Wildlife enthusiasts can go on safari-style tours to observe rare and exotic animals such as the giant panda or take a boat ride to see the endangered Chinese river dolphin. For those seeking a more cultural experience, China's traditional villages offer a glimpse into rural life. Accommodation options range from cozy and rustic homestays to luxurious hotels with stunning mountain or river views. Experience China's natural beauty and ancient culture like never before with these unparalleled nature experiences.         
    </span>
    </div>
    

<!-- Start of the whole carousel Item -->

    <!-- different rooms showcase-->
    <div class="Build">
    <div ><!-- Carousel wrapper -->
    <div
      id="carouselMultiItemChina"
      class="carousel slide carousel-dark text-center"
      data-mdb-ride="carousel"
    >
      <!-- Controls -->
      <div class="d-flex justify-content-center mb-4">
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemChina"
          data-mdb-slide="prev"
    
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
           class="carousel-control-prev position-relative  nB"
          type="button"
          data-mdb-target="#carouselMultiItemChina"
          data-mdb-slide="next"
    
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    <!-- ROOM RENTING -->
      <!-- Inner -->
      <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">

            
<!-- Start of card -->
              <div class="col-lg-4">
                <div class="card bx">
                  <img
                    src="../images/pandaL.jpg"
                    class="card-img-top"
                    alt="The Giant Panda"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Giant Pandas</h5>
                    <p class="card-text">
                    The Giant Panda, one of the world's most recognizable and cherished creatures, is a bear species that hails from China.
                    </p>
                  </div>
                </div>
              </div>

              
<!-- End of card -->
    
              <div class="col-lg-4 d-none d-lg-block">
                <div class="card bx">
                  <img
                    src="../images/chinaLeo.jpg"
                    class="card-img-top"
                    alt="Snow Leopard"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Snow Leopard</h5>
                    <p class="card-text">
                    The snow leopard, a big cat found in Central Asia's mountain ranges, is known for its majestic beauty.                  </p>
                  </div>
                </div>
              </div>

              
<!-- End of card -->
    
              <div class="col-lg-4 d-none d-lg-block">
                <div class="card bx">
                  <img
                    src="../images/tibetan.jpg"
                    class="card-img-top"
                    alt="Tibetan Antelope"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Tibetan Antelope</h5>
                    <p class="card-text">
Found in Tibet's high plateaus, these graceful animals are distinguished by their beautiful spiral horns. 
                   </p>
                  </div>
                </div>
              </div>


<!-- End of card -->

            </div>
          </div>
        </div>
    
        
<!-- start of card -->

        <!-- Single item -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
            <div class="col-lg-4 d-none d-lg-block">
                <div class="card bx">
                  <img
                    src="../images/yangtez.jpg"
                    class="card-img-top"
                    alt="yangtez River, China"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Yangtez River</h5>
                    <p class="card-text">
                    This long Asian river flows through China's breathtaking landscapes and is the continent's largest.                    </p>
                  </div>
                </div>
              </div>
    
              
<!-- End of card -->

              <div class="col-lg-4 d-none d-lg-block">
                <div class="card bx">
                  <img
                    src="../images/gobiChina.jpg"
                    class="card-img-top"
                    alt="China Gobi Desert"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Gobi Desert</h5>
                    <p class="card-text">
                    The Gobi Desert boasts unique and diverse wildlife, including Bactrian camels, Gobi bears, and Gobi jerboas.                  </p>
                  </div>
                </div>
              </div>
    
              
<!-- End of card -->

              <div class="col-lg-4 d-none d-lg-block">
                <div class="card bx">
                  <img
                    src="../images/greatWallChina.jpg"
                    class="card-img-top"
                    alt="The Great Wall of China"
                  />
                  <div class="card-body">
                    <h5 class="card-title">The Great Wall</h5>
                    <p class="card-text">
                    The Great Wall of China, a historic defensive structure built along the northern borders of China to protect against invaders.
                    </p>
                  </div>
                </div>
              </div>

              
<!-- End of card -->

            </div>
          </div>
        </div>
    
        
<!-- start of card -->

        <!-- Single item -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="card bx">
                  <img
                    src="../images/Tai.jpg"
                    class="card-img-top"
                    alt="Tai Chi Chuan"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Tai Chi </h5>
                    <p class="card-text">
                    This practice incorporates gentle, deliberate movements to enhance balance, flexibility, and physical and mental wellness. 
                    </p>
                  </div>
                </div>
              </div>
    
<!-- End of card -->

              <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                <div class="card bx">
                  <img
                    src="../images/chTrad.jpeg"
                    class="card-img-top"
                    alt=" Chinese Traditional Festival "
                  />
                  <div class="card-body">
                    <h5 class="card-title">China Traditional Festival</h5>
                    <p class="card-text">
                     
The Spring Festival marks the start of the lunar new year and is celebrated with fireworks, lion dances, family reunions, and feasts in China.
                    </p>
                  </div>
                </div>
              </div>
    
              
<!-- End of card -->

              <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                <div class="card bx">
                  <img
                    src="../images/chotel.jpeg"
                    class="card-img-top"
                    alt="   InterContinental Hangzhou"
                  />
                  <div class="card-body">
                    <h5 class="card-title">InterContinental Hangzhou</h5>
                    <p class="card-text">
                    A luxurious hotel in Hangzhou, China, with top-tier amenities, elegant rooms, and outstanding customer service. 
                    </p>
                    <a href="#!" class="btn btn-primary">Book</a>
                  </div>
                </div>
              </div>

<!-- End of card -->

            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->
    </div>
    <!-- Carousel wrapper --></div>
    
    </div>
    </div>
  <!--china ends here-->

    <!--USA Starts Here-->

    <div>
      <!--Countries/Wildlife Services-->
      <div class="Tourism">
      <h4>USA</h4>
      <span class="P">
        The United States offers a diverse range of outdoor experiences that allow visitors to explore the country's natural beauty. From hiking trails that wind through the mountains to water sports and wildlife safaris, there is something for everyone. Visitors can explore national parks, forests, and wilderness areas, where they can experience the majesty of America's natural wonders, such as the Grand Canyon and Yellowstone National Park. In addition to the breathtaking scenery, visitors can also participate in activities such as camping, kayaking, and rafting. Wildlife enthusiasts can also enjoy opportunities to observe and photograph animals in their natural habitats, including bears, wolves, and eagles. The United States also offers unique housing options, such as log cabins and yurts, which allow visitors to immerse themselves in nature while enjoying modern amenities. With so many options to choose from, visitors can create their ideal outdoor adventure in the United States. 
      </span>
      </div>
      
      <!-- different rooms showcase-->
      <div class="Build">
      <div ><!-- Carousel wrapper -->
      <div
        id="carouselMultiItemUSA"
        class="carousel slide carousel-dark text-center"
        data-mdb-ride="carousel"
      >
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
          <button
             class="carousel-control-prev position-relative  nB"
            type="button"
            data-mdb-target="#carouselMultiItemUSA"
            data-mdb-slide="prev"
      
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
             class="carousel-control-prev position-relative  nB"
            type="button"
            data-mdb-target="#carouselMultiItemUSA"
            data-mdb-slide="next"
      
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
      <!-- ROOM RENTING -->
        <!-- Inner -->
        <div class="carousel-inner py-4">
          <!-- Single item -->

                <div class="carousel-item active">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="card bx">
                          <img
                            src="../images/bisonL.jpg"
                            class="card-img-top"
                            alt="Bison"
                          />
                          <div class="card-body">
                            <h5 class="card-title">Bisons</h5>
                            <p class="card-text">
The Yak is a bovine animal found in the Himalayan region, known for its shaggy fur, large hump, and impressive horns up to 1 meter long.
                            </p>
                          </div>
                        </div>
                      </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card bx">
                    <img
                      src="../images/eagle.jpg"
                      class="card-img-top"
                      alt="Bald Eagle"
                    />
                    <div class="card-body">
                      <h5 class="card-title">The Bald Eagle</h5>
                      <p class="card-text">
                      This bird is an iconic symbol of the United States, with a stunning appearance and majestic flying abilities.                      </p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card bx">
                    <img
                      src="../images/cocote.jpg"
                      class="card-img-top"
                      alt="Coyote"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Coyote </h5>
                      <p class="card-text">
                      Coyotes are known for their nocturnal howl, a distinct and eerie sound that echoes through the night
                     </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      
          <!-- Single item -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
              <div class="col-lg-4 d-none d-lg-block">
                  <div class="card bx">
                    <img
                      src="../images/rockU.jpg"
                      class="card-img-top"
                      alt="The Grand Canyon"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Rock Climbing</h5>
                      <p class="card-text">
                      Rock climbing involves scaling natural rock formations and is a popular outdoor activity that's both challenging and recreational.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card bx">
                    <img
                      src="../images/grandCan.jpg"
                      class="card-img-top"
                      alt="The Grand Canyon"
                    />
                    <div class="card-body">
                      <h5 class="card-title">The Grand Canyon</h5>
                      <p class="card-text">
                      The Colorado River carved this vast canyon in Arizona, attracting visitors to its breathtaking natural beauty.
                      </p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card bx">
                    <img
                      src="../images/raftingU.jpg"
                      class="card-img-top"
                      alt="white water rafting"
                    />
                    <div class="card-body">
                      <h5 class="card-title">White Water Rafting</h5>
                      <p class="card-text">
                      Whitewater rafting involves riding an inflatable raft down rough water rapids, making it a thrilling and popular outdoor activity.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Single item -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">

             
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <div class="card bx">
                    <img
                      src="../images/natPark.jpg"
                      class="card-img-top"
                      alt="National Park in America"
                    />
                    <div class="card-body">
                      <h5 class="card-title">	The Great Smoking Mountains Park</h5>
                      <p class="card-text">
                      This national park in the US spans across Tennessee and North Carolina, renowned for its stunning scenery, wildlife, and hiking trails
                     </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card bx">
                    <img
                      src="../images/liberty.jpg"
                      class="card-img-top"
                      alt="Statue of Liberty"
                    />
                    <div class="card-body">
                      <h5 class="card-title">The Statue of Liberty</h5>
                      <p class="card-text">
                      One of the top tourist attractions in the United States, the Statue of Liberty is a famous symbol located on Liberty Island in New York Harbor.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card bx">
                    <img
                      src="../images/LA.jpg"
                      class="card-img-top"
                      alt="Las Vegas Strip Hotel"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Las Vegas Strip Hotel</h5>
                      <p class="card-text">
The Bellagio is a lavish casino and hotel situated on the famous Las Vegas Strip in Nevada, USA. 
                      </p>
                      <a href="#!" class="btn btn-primary">Book</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->
      </div>
      <!-- Carousel wrapper --></div>
      
      </div>
      </div>
    <!--USA ends here-->

  <form action="" method="post">
  <input type="radio" name="country" value="Canada"> <label>Canada</label> <br>
  <input type="radio" name="country" value="China"> <label>China</label><br>
  <input type="radio" name="country" value="USA"> <label>USA</label> <br>
  <input type="radio" name="country" value="Australia"> <label>Australia</label> <br>
  <input type="submit" name="submit" value="View More Details">
</form>


    
    <!--Footer Start-->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">NIL</span>VA</h1>
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
                    <a class="text-white-50 mb-2" href="../Widlife.php"><i class="fa fa-angle-right mr-2"></i>Wildlife Tours</a>
                    <a class="text-white-50 mb-2" href="../Nature.php"><i class="fa fa-angle-right mr-2"></i>Nature / Outdoor Activities</a>
                    <a class="text-white-50 mb-2" href="../housing.php"><i class="fa fa-angle-right mr-2"></i>Housing/Hotel Booking</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Useful Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="../pserv.php#AboutUs"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white-50 mb-2" href="../pserv.php#Services"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Support</a>                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i> Nairobi, Kenya</p>
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
<!--copyright and st..-->
            <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="index.html">Nilva Tourism Site.</a>. All Rights Reserved.</a>
                </p>
            </div>
        </div>
    </div>
<!--end of copyright...-->
        </div>
    </div>
    <!--Footer Ends Here-->


</div>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

 
  </body>
</html>

