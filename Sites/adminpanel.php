<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//testing permissions

include('../db/Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);
mysqli_query($conn,$sql);
mysqli_select_db($conn,$db);


session_start();
($_SESSION['admin']=true);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NilvaTourismAdminPanel</title>

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

body{background-color:#080808;}
.logo{
  		max-width: 100%;
 		 max-height: 9vh;
}
.admp{
display:flex;
flex-direction:column;
max-width:90vw;
margin-top:8%;
margin-left:5%;
justify-content:center;
min-height:100vh;
overflow:hidden;
text-align: center;
}

.card-r{
display:flex;
flex-direction:column;
max-width: 80%;
min-height: 300px;
margin-left:10%;
margin-top:1%;
border: 1px solid whitesmoke;
justify-content:center;
border-radius:0 0 10px 10px;
color:#54ee11;
box-shadow: 1px 1px 5px 1px whitesmoke, -1px -1px 5px 1px royalblue;
}
.card-l{
display:flex;
max-width: 80%;
background:#667eea;
min-height: 300px;
margin-left:10%;
margin-bottom:1%;
background: linear-gradient(to left, #ffffff 60%, #ffccff 100%);
justify-content:space-evenly;
border-radius:10px 10px 0 0;
box-shadow: 1px 1px 5px 1px #080808, -1px -1px 5px 1px royalblue;

}
.aln{
display:flex;
flex-direction: column;
justify-content:center;
}
.intxt{
  display: flex;
  flex-direction:column;
  justify-content: center;
  margin-left:7%;
  max-width:35vh;
  height:auto;
}
.inbtn{
display: flex;
justify-content: center;
flex-wrap: wrap;
max-width:40vh;
max-height:80px;

}
.txt{
text-align: center;
font-font-family: cursive;
font-size: 10px;
}
.bgcolor{
  background: #667eea;
         /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to left, rgba(102,126,234,0.5), rgba(166,117,215,0.5));
  
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to left, rgba(102,126,234,0.5), rgba(166,117,215,0.5));
box-shadow: 1px 1px 5px 2px whitesmoke,-1px -1px 5px 2px whitesmoke;     
}
input{
padding:2%;
margin:5px;
}

.rd{
  display:flex;
  flex-direction:column;
  padding:2%;
  margin-top:2%;
}


@media screen AND (min-width: 600px){
  .aln{
    flex-direction:row;
    justify-items: flex-start;
    align-items: flex-start;
    object-fit: fill;
    object-position: bottom;

  }

.intxt{
  display: flex;
  margin-right:8%;
  align-self:center;
  width:30vh;
  min-height:30%;
}
.inbtn{
display: flex;
flex-direction: column;
justify-content:center;
align-items: center;
width:30vh;
min-height:100%;
}
.txt{
text-align: center;
font-font-family: cursive;
font-size: 20px;
}


}

@media screen AND (min-width:950px){
  .admp{
    flex-direction: row;
    margin-top:0;
  }

  .card-r{
display:flex;
flex-direction: column;
min-width: 40%;
max-height: 80vh;
margin-top:8%;
border: 1px solid whitesmoke;
justify-content:center;
border-radius:0 10px 10px 0px;
}
.card-l{
display:flex;
flex-direction: column;
min-width:40%;
max-height: 80vh;
margin-top:8%;
margin-left:5%;
align-items: center;
border-radius:10px 0 0 10px;


}

  .aln{
    flex-direction:column;
    justify-content:space-evenly;

  }

.intxt{
  display: flex;
  margin-right:8%;
  align-self:center;
  min-width:50vh;
  height:auto;
  
}
.inbtn{
display: flex;
flex-direction: column;
align-self:center;
min-width:50vh;
min-height: 60px ;

}
.txt{
text-align: center;
font-font-family: cursive;
font-size: 20px;

}

.incr{
  padding:2%;

}

.rd{
  display:flex;
  flex-direction:row;
  padding:2%;
  margin-top:2%;
}

}



</style>

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#dcaee5;">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.html"><span">  <img src="../images/nilva.jpg" class="logo"alt="logo"></span></a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="checkTourists.php">Tourists</a>
            </li>
            
          </ul>
        </li>

      </ul>

      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
        </li>
      </ul>
      
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</div>


<div class ="admp bgcolor">

<div class="card-l" id="tourist">
<!-- tourist query form --> 
  <form  class="d-flex input-group w-auto aln hT" action="admin.php" method="POST">
<div class="rd" >
  <input type="radio" name="country" value="Canada" checked> <label>Canada</label>
  <input type="radio" name="country" value="China"> <label>China</label><br>
  <input type="radio" name="country" value="USA"> <label>USA</label> 
  <input type="radio" name="country" value="Australia"> <label>Australia</label>
</div>
    <div class="intxt">
        <input
          type="search"
          class="form-control"
          name="Search"
          placeholder="Name"
          aria-label="Search"
        />
        <br>


          <!--Species-->
          <input
          type="search"
          class="form-control"
          name="Species"
          placeholder="Species"
          aria-label="Search"
        />
        <br>
        <!--park-->

        <input
          type="search"
          class="form-control"
          name="park"
          placeholder="Park Name"
          aria-label="Search"
        />
        <br>

   <!--description-->
   
        <textarea      
        cols="6" rows="4"
          class="form-control"
          name="description"
          placeholder="The Lion is the King of ..."
          aria-label="Search"
        ></textarea>
        <br>
         <!--image-->
         <input type="file" class="form-control incr" name="picha" placeholder="Picture  for the above"  aria-label="Search">
    </div>
    <!-- Query btns -->
        <div class="inbtn">
        <input class='btn btn-outline-primary txt' type="submit" value="Search" name="QuerySearch"
          data-mdb-ripple-color="dark"/>
          
        <input class='btn btn-outline-primary txt' type="submit" value="Delete" name="DeleteQuery"
          data-mdb-ripple-color="dark"/>
          
        <input class='btn btn-outline-primary txt' type="submit" value="Record" name="RecordQuery"
          data-mdb-ripple-color="dark"/>

          <!-- input class='btn btn-outline-primary txt' type="submit" value="Decline" name="Reject"
          data-mdb-ripple-color="dark"/ -->
        </div>
      </form>
  </div>



  <div class="card-r">
    <p><h3>  Update Nilva Status:  </h3></p>
<p>Key in the Wildlife's || Place || Activity Name:</p>
<p>Key in the Charges :</p>
<p>Key in their description and Add an Image:</p>
<p>Press Search to view the Animal/park/Activity record (Only the name is required)</p>
<p>Press Delete to remove the Animal/park/Activity record (Only the name is required)</p>
<p>Press Record to Confirm New Entry</p>
<!-- p>Press Decline to Decline Bursary Allocation</p -->
</div>
</div>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>