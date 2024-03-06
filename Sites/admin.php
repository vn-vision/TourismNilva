<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//testing permissions

//include database
include('../db/Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);

session_start();

if(!isset($_SESSION['admin'])) {
    header('Location:adminpanel.php');
    exit();
}
//tourists
if (isset($_POST['trQuerySearch']) || isset($_POST['trDeleteQuery']) || isset($_POST['trRecordQuery'])) {
  if (isset($_POST['tr'])) {
mysqli_query($conn, $TRsql);
mysqli_select_db($conn,$db);
  }
  }

//wildlife / scenes
if (isset($_POST['QuerySearch']) || isset($_POST['DeleteQuery']) || isset($_POST['RecordQuery'])) {
  if (isset($_POST['country'])) {
  

$Destination = $_POST['country'];

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

}
}

?>
<!DOCTYPE html>
 <html>
 <head>
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
<title>Nilva_Admin</title>
        <style>
            body{
               height: 100vh;
               background-color: #080808;
                text-align: center;
                  }   
                  .bg-opacity{
                      height: 100vh;
                      background-color: rgba(255,254,150,0.55);
                      background-size: cover; 
                      
                  }
            .identity{
      width:auto;
    font-family: cursive;
    font-weight: bold;
    color: #fff;
    background-color: #495057;
    word-spacing: 50px;
    margin-top: 0px;
  text-align: center;
  text-transform: capitalize;
  font-size: 20px;
            }
            .bgcolor{
         /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to left, rgba(102,126,234,0.5), rgba(166,117,215,0.5));
  
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to left, rgba(102,126,234,0.5), rgba(166,117,215,0.5));
box-shadow: 1px 1px 5px 2px whitesmoke,-1px -1px 5px 2px whitesmoke;     
}
            
</style>
 </head>

 <body >
<?php 
$display=$row=$exist=$confirm=$ConfirmDb=$Amount="";
$count=0;
?>

     <div class='bg-opacity'>
         
     
     <?php
    //check if the candidate exists or not  

     //check whether the search button has been pressed.
     if(isset($_POST['QuerySearch'])){
         $SearchId=stripslashes($_POST['Search']);
        
   if(!empty($SearchId)){
  //search for a candidate
    $sTname = "SELECT * FROM $wildRecords WHERE wildName ='". mysqli_escape_string($conn,$SearchId)."'";
     $display=mysqli_query($conn,$sTname);
     $row = mysqli_fetch_array($display);

    /*/ if(!$row){  
      echo "<script>
      alert('Does not Exist');
      window.location.href='adminpanel.php';
      </script>";}
*/
     }else{
      echo "<script>
      alert('Field cannot be Empty');
      window.location.href='adminpanel.php';
      </script>";
     }
     $exist="SELECT * FROM $wildRecords WHERE wildName='". mysqli_escape_string($conn,$SearchId)."'";
     $exist = mysqli_query($conn,$exist);
     $exist = mysqli_num_rows($exist);
     
     if ($exist <= 0 ){
      echo "<script>
      alert('Candidate Does Not Exist');
      window.location.href='adminpanel.php';
      </script>";

     }

     
    }

    //delete a candidate's record.
    if(isset($_POST['DeleteQuery'])){
      $SearchId=stripslashes($_POST['Search']);

      if(!empty($SearchId)){

        $exist=mysqli_query($conn,"SELECT * FROM $wildRecords WHERE wildName='". mysqli_escape_string($conn,$SearchId)."'");
        $exist = mysqli_num_rows($exist);
        
        if ($exist <= 0 ){
          echo "<script>
          alert('Candidate Does Not Exist');
          window.location.href='adminpanel.php';
          </script>";
    
         }else{
          
      $Delete = "DELETE FROM $wildRecords WHERE wildName='". mysqli_escape_string($conn,$SearchId)."'";

      if(mysqli_query($conn,$Delete)){
        echo "<script>
      alert('Deletion Successful');
      window.location.href='adminpanel.php';
      </script>";
      }else{
        echo "<script>
      alert('Failed To Delete Record!');
      window.location.href='adminpanel.php';
      </script>";
      }

         }

    }else{
      echo "<script>
      alert('Field cannot be Empty');
      window.location.href='adminpanel.php';
      </script>";
    }
  
  }
//end of delete query.

//Record status /
if(isset($_POST['RecordQuery'])){

  //confirm record exists
  $SearchId=stripslashes($_POST['Search']);
  $Species = stripslashes($_POST['Species']);
  $park = stripslashes($_POST['park']);
  $desc = stripslashes($_POST['description']);
  $Ima = $_POST['picha'];

  if(!empty($SearchId) && !empty($Ima) && !empty($desc)){
    
    $exist=mysqli_query($conn,"SELECT * FROM $wildRecords WHERE wildName='". mysqli_escape_string($conn,$SearchId)."'");
    $exist = mysqli_num_rows($exist);
    
  if ($exist > 0 ){
    echo "<script>
    alert('Record Does  Exist');
    window.location.href='adminpanel.php';
    </script>";

   }else{

     // Prepare the INSERT statement
        $aCityInsert = "INSERT INTO $wildRecords (wildName, Species, _Description, parkName, _Image) VALUES ('$SearchId','$Species', '$park', '$desc', '$Ima')";
        $aC_result = mysqli_query($conn, $aCityInsert);

        if (!$aC_result) {
            die("Error inserting  details: " . mysqli_error($conn));
        }else{
          echo "<script>
          alert('Record Entered Successfully');
          window.location.href='adminpanel.php';
          </script>";
        }

   }

}
}
//query for the set admission
     if($row){
     echo "
         <!--nav bar-->
   
    <fieldset>
        <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <div class='container-fluid'>
    <a class='navbar-brand' href='#'>Nilva Adventures</a>
    <button
      class='navbar-toggler'
      type='button'
      data-mdb-toggle='collapse'
      data-mdb-target='#navbarTogglerDemo02'
      aria-controls='navbarTogglerDemo02'
      aria-expanded='false'
      aria-label='Toggle navigation'
    >
      <i class='fas fa-bars'></i>
    </button>
    <div class='collapse navbar-collapse' id='navbarTogglerDemo02'>
      <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='Index.php'>Home</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='Application.php'>Appliation Form</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link disabled'
            >Disabled</a
          >
        </li>
      </ul>
        <form class='d-flex input-group w-auto' action='' method='POST'>
        <input type='submit' value='Search' name='QuerySearch'
        class='btn btn-outline-primary'
        data-mdb-ripple-color='dark'  >

        <input type='submit' value='Delete' name='DeleteQuery'
        class='btn btn-outline-primary'
        data-mdb-ripple-color='dark'  >

        <input style='margin-left:2%;margin-right:2%;'
          type='search'
          class='form-control''
          name='Search'
          placeholder='Type query'
          aria-label='Search''
        />
<!--Alter Status-->
          <input type='submit' value='Accept' name='Confirm'
          class='btn btn-outline-primary'
          data-mdb-ripple-color='dark'  >

          <input type='submit' value='Decline' name='Reject'
          class='btn btn-outline-primary'
          data-mdb-ripple-color='dark'  >


          <input type='submit' onclick='window.print()' value='PRINT' 
          class='btn btn-outline-primary'
          data-mdb-ripple-color='dark'
          />
      </form>
    </div>
  </div>
</nav>
    </fieldset>
<!--end of navbar-->    

<div id='CandData' class='table-responsive'>
       <fieldset class='identity'>
Country: $Destination
</fieldset>
  <table class='table'>
    <thead>
      <tr>
        <th scope='col'>Name</th>
        <th scope='col'>Species</th>
        <th scope='col'>Description</th>
        <th scope='col'>Park Name</th>
        <th scope='col'>Image</th>        
      </tr>
    </thead>";
     }
            while ($row && $count < 1 ) {
                echo "
    <tbody>
      <tr>
        <td>$row[wildName]</td>
        <td>$row[Species]</td>
        <td>$row[_Description]</td>
        <td>$row[parkName]</td>
        <td>$row[_Image]</td>
        <td></td>
      </tr>
      
    </tbody>
  
";
$count++;
                     }
                     echo "</table>

</div>";

 ?>
     
     </div>
   
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
