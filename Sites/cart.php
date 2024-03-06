<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//testing permissions
include('../db/Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);
mysqli_query($conn,$sql);
mysqli_select_db($conn,$db);
// Start the session
session_start();
$Destination = $_SESSION['Destination'];

// Check if the selected items are stored in the session
if (isset($_SESSION['selected_items'])) {
  // Retrieve selected items from the session
  $selectedItems = $_SESSION['selected_items'];

  // Check if the remove item button is clicked
  if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    // Remove the item from the selected items array
    if (isset($selectedItems[$index])) {
      unset($selectedItems[$index]);
      // Reset the array keys
      $selectedItems = array_values($selectedItems);
      // Update the session variable
      $_SESSION['selected_items'] = $selectedItems;
    }
  }
} else {
  // If no selected items are found, redirect back to the selection page
  header('Location: booking2.php');
  exit();
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>Selected Items</title>
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
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    h1 {
      text-align: center;
    }
    .item {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .item img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      margin-right: 10px;
      border-radius: 50%;
    }
    .item .name {
      flex-grow: 1;
    }
    .remove-button {
      background-color: #ff0000;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .pCard{
display:flex;
justify-content:center;
align-items: center;
padding: 2%;
}
.listAlign{
    display: flex;
    justify-content: center;
    align-items: center;
}

.listAlign ul li{
    list-style: none;
    display: inline-block;
    padding: 10px;
}
.dt{
  display:flex;
  flex-direction:column;
  gap: 10px;
}
.td{
  display:flex;
  flex-direction:column;
  gap:10px;
}

.dt input{
  min-width: 250px;
}


@media only Screen and (min-width:300px){
    .pCard{
        margin-top: 50px;
    }

}
@media only screen and (min-width: 575px){
    .pCard{
        margin-top: 40px;
    }
}

</style>
<script>
      function pyOpt(){
    let Visit = document.getElementById('Visit');
    let Mpesa = document.getElementById('Mpesa');
    let Credit = document.getElementById('credit');
    let D_Credit = document.getElementById('decredit');
    let MpesaDiv = document.getElementById('MpesaDiv');
    const creditFields = D_Credit.querySelectorAll("input");
    const mpesaField =MpesaDiv.querySelectorAll("input");
    
   
if(Visit.checked){
  MpesaDiv.style.display = "none";
  D_Credit.style.display = "none";

  for (let i = 0; i < creditFields.length; i++) {
    creditFields[i].required = false;
  }
  for (let i = 0; i < mpesaField.length; i++) {
    mpesaField[i].required = false;
  }
}
else if (Mpesa.checked){
  if(MpesaDiv.style.display==='none'){
    MpesaDiv.style.display='block';
  }
  D_Credit.style.display='none';
  for (let i = 0; i < creditFields.length; i++) {
    creditFields[i].required = false;
  }
  for (let i = 0; i < mpesaField.length; i++) {
    mpesaField[i].required = true;
  }
  
}
else if(Credit.checked){
  if(D_Credit.style.display ==='none'){
    D_Credit.style.display = 'block';
  }
  MpesaDiv.style.display='none';

  for (let i = 0; i < creditFields.length; i++) {
    creditFields[i].required = true;
  }
  for (let i = 0; i < mpesaField.length; i++) {
    mpesaField[i].required = false;
  }

} 

  }
  window.onload = pyOpt ;
</script>

</head>
<body>
<div class="container">
  <h1>Selected Items</h1>
  <?php
  $tAmount = 0; // Initialize the total amount variable
  $toGo='';
  if (count($selectedItems) > 0) {
    echo '<ul>';

    foreach ($selectedItems as $index => $item) {
      echo '<li>';
      echo '<div class="item">';

      $itemData = explode('|', $item);
      $ctaName = $itemData[0];
      $imagePath = $itemData[1];
      $Amount = $itemData[2];

      $tAmount += (int)$Amount; // Add the amount of the current item to the total amount
      $toGo .=$ctaName . ','; // concatenate the current place name

      global $tAmount;
      global $ctaName;

      echo '<img src="../images/' . $imagePath . '" alt="Image">';
      echo '<span class="name">' . $ctaName . '</span>';
      echo '<span class="name">' . $Amount . '</span>';
      echo '<button class="remove-button" onclick="window.location.href = \'cart.php?remove=' . $index . '\'">Remove</button>';

      echo '</div>';
      echo '</li>';
    }

    echo '</ul>';
  } else {
    echo '<p>No items selected.</p>';
  }
  ?>
  <p><a href="booking2.php">&laquo; Go back to Nilva Tourism selection</a></p>

  <!--payment-->
</div>

<div class="pCard">
<main>
<span>
    Greetings from Nilva,<strong> <?Php $Name; ?> </strong>.
    <br> Before you complete your booking order, confirm that your Email: <strong> <?Php $Email; ?> </strong> and Destination: <strong>  <?=$Destination?> </strong>are correct.
    <br> Nilva, the best Guides around.
</span>

<form class="needs-validation" novalidate action="<?= ($_SERVER['PHP_SELF'])?>" method="post">

<hr class="my-4">
      

<!-- choose payment methods -->
      <h4 class="mb-3">Payment</h4>

      <div class="my-3 listAlign">
        <ul>
          <li>
        <div class="form-check">
          <input id="credit" name="paymentMethod" type="radio" class="form-check-input"   onclick="pyOpt()" value=" Credit_Debit" required>
          <label class="form-check-label" for="credit">Credit/Debit card</label>
        </div>
        </li>
        <li>
        <div class="form-check">
          <input id="Mpesa" name="paymentMethod" type="radio" class="form-check-input" checked onclick="pyOpt()" value=" Mpesa" required>
          <label class="form-check-label" for="Mpesa">Mpesa</label>
        </div>
        </li>
        <li>
        <div class="form-check">
          <input id="Visit" name="paymentMethod" type="radio" class="form-check-input"  onclick="pyOpt()" value=" VISIT" required>
          <label class="form-check-label" for="Visit"> VISIT </label>
        </div>
        </li>
        </ul>
      </div>

<!-- collect details -->
<div class="td">
<!--name-->
<div class="col-md-6">
<input type="text" class="form-control" name="tourName"  placeholder="Enter Your Name" value="" >
<div class="invalid-feedback">
          Your name is required
</div>
</div>

<!--email-->
<div class="col-md-6">
<input type="text" class="form-control" name="tourEmail" placeholder="Enter Your Email" value="" >
<div class="invalid-feedback">
          Valid Email required
</div>
</div>

<!-- date -->
<div class="dt">
<div class="col-md-3">
<input type="date" name="depDate" placeholder="Depart Date" value="" >
<div class="invalid-feedback">
          Date required
</div>
</div>

<div class="col-md-3">
<input type="text" name="tourDuration" placeholder="Duration" value="" > <span>m/w/d</span>
<div class="invalid-feedback">
          Duration in days months weeks: 2d, 3w, 1m  
</div>
</div>

</div>
<!--Tours to-->
<div class="col-md-6">
<textarea class="form-control"name="tour_places"  readonly><?= $toGo ?></textarea>
<div class="invalid-feedback">
          Destinations: the great wall ... 
</div>
</div>
</div>
<br>
      <!--Credit Card and Debit Card-->
      <div id="decredit">
      <div class="row gy-3">
        <div class="col-md-6">
          <label for="cc-name" class="form-label">Name on card</label>
          <input type="text" class="form-control" id="cc-name" name="cName" placeholder="" required>
          <small class="text-muted">Full name as displayed on card</small>
          <div class="invalid-feedback">
            Name on card is required
          </div>
        </div>

        <div class="col-md-6">
          <label for="cc-number" class="form-label">Credit card number</label>
          <input type="text" class="form-control" id="cc-number" name="cNum" placeholder="" required>
          <div class="invalid-feedback">
            Credit card number is required
          </div>
        </div>

        <div class="col-md-3">
          <label for="cc-expiration" class="form-label">Expiration</label>
          <input type="text" class="form-control" id="cc-expiration" name="cExp" placeholder="" required>
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>

        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">CVV</label>
          <input type="text" class="form-control" id="cc-cvv" name ="cCVV" placeholder="" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
      </div>
</div>

      <!--Phone Number input // Mpesa Query-->
      <div id="MpesaDiv" style="display: none;">
      <div class="col-md-6">
        <label for="mpNum" class="form-label">Your Mpesa Phone number</label>
        <input type="text" class="form-control" id="mpNum" name="phone" placeholder="Enter Mpesa Number" required>
        <div class="invalid-feedback">
          Phone Number required
        </div>
      </div>
      </div>

      <hr class="my-4">

      <input class="w-100 btn btn-primary btn-lg" type="submit" name="pay" value="Continue to Book">
    
      
  </div>
</div>
</form>
</main>
</div>
</div>
<!--payment card -->

</div>
<script src="../js/MDB.js"></script>
<script  src="../js/form-validation.js"></script>
</body>
</html>

<?php 

if(isset($_POST['pay'])){

//ensure only numbers are entered
$Phone = $_POST['phone'];
$Phone= preg_replace('/^0/', '254', $Phone); //daraja required format 254xxxxxx
$Name = Strip($_POST['tourName']);
$Email = Strip($_POST['tourEmail']) ;
$where = Strip($_POST['tour_places']);
$depDate = Strip($_POST['depDate']);
$duration = Strip($_POST['tourDuration']);
//$Name = san($Name);
//$Email = num($Email);

global $Name;
global $Email;
//Mpesa Payment Using Daraja Gateway


date_default_timezone_set('Africa/Nairobi');

  # access token
  $consumerKey = 'J9PpyY5Mth2B9cv17OnuY25vMbpScE5P'; //Fill with your app Consumer Key
  $consumerSecret = '6pujrA4FGYj7pw4j'; // Fill with your app Secret

  # define the variales
  # provide the following details, this part is found on your test credentials on the developer account Ly0nsM@!d
  $BusinessShortCode = '174379';
  $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';  
  
  /*
    This are your info, for
    $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
    $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
    TransactionDesc can be anything, probably a better description of or the transaction
    $Amount this is the total invoiced amount, Any amount here will be 
    actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
    for developer/test accounts, this money will be reversed automatically by midnight.
  */
  
   $PartyA = $Phone; // This is your phone number, 
  $AccountReference = 'Nilva Tours';
  $TransactionDesc = 'Tourism Booking';

 
  # Get the timestamp, format YYYYmmddhms -> 20181004151020
  $Timestamp = date('YmdHis');    
  
  # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
  $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

  # header for access token
  $headers = ['Content-Type:application/json; charset=utf8'];

    # M-PESA endpoint urls
  $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

  # callback url
  $CallBackURL = 'https://mydomain.com/noreadywebsite/callback_url.php';  //change to the hosted live link

  $curl = curl_init($access_token_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_HEADER, FALSE);
  curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
  $result = curl_exec($curl);
  $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  $result = json_decode($result);
  $access_token = $result->access_token;  
  curl_close($curl);

  # header for stk push
  $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];

  # initiating the transaction
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $initiate_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

  $curl_post_data = array(
    //Fill in the request parameters with valid values
    'BusinessShortCode' => $BusinessShortCode,
    'Password' => $Password,
    'Timestamp' => $Timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $tAmount,
    'PartyA' => $PartyA,
    'PartyB' => $BusinessShortCode,
    'PhoneNumber' => $PartyA,
    'CallBackURL' => $CallBackURL,
    'AccountReference' => $AccountReference,
    'TransactionDesc' => $TransactionDesc
  );

  $data_string = json_encode($curl_post_data);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
  $curl_response = curl_exec($curl);
  //print_r($curl_response);

  
//check whether the transaction was successful

if ($curl_response === false) {
  $error = curl_error($curl);
  curl_close($curl);
  echo "<script>
  alert('Curl Error:  . $error');
  window.location.href=' ';
  </script>
  ";
  } else {
  $response = json_decode($curl_response, true);
  $resultCode = $response["ResponseCode"];
  $resultDesc = $response["ResponseDescription"];



  if ($resultCode == "0") { 
    # Successful Payment
    # Insert transaction data into database

    print_r($Phone);
     global $TransactionRecords; // record the transaction details

    //insert records to database
    if( $Email && san($Name)  && $depDate && $Phone ){
    $traSql = "INSERT INTO `$TransactionRecords` (idTransaction,trEmail, trName , Phone, Destinations, Duration, Departure, Amount,  aTimestamp)
           VALUES ('".$response["CheckoutRequestID"]."', '".$Email."','".$Name."','".$Phone."','".$ctaName."','".$duration."','".$depDate."', '".$tAmount."','".date('Y-m-d H:i:s')."')";
  
  $rec = mysqli_query($conn, $traSql);
    if ($rec) {
      $prf= $response["CheckoutRequestID"];
      echo "<script>alert('Confirm Payment. Transaction ID: $prf'); </script>" ;
    } else {
      $err = mysqli_error($conn);
      echo "<script>alert('Error: $err');</script>";
    }
  
    mysqli_close($conn);

    //email on success.
		$to = "chegealvin96@gmail.com";
		$subject = "Hotel Booking";
		$message = "A new booking request from Nilva Tourism Website has been made.\n";
		$message .= "Destination: " . $toGo . ",\n";
		$message .= "Tourist Pay: " . $tAmount . " and Check Out date: soon \n";
		$header = "From: $Name\r\n";
		$header .= "Reply-To: $Email\r\n";

		if (mail($to, $subject, $message, $header)) {
		    echo "
			<script>
			alert('Complete Booking');
			window.location.href='';
			</script>
		    ";
		    //exit;
		} else {
		    echo "
			<script>
			alert('Error making Booking');
			window.location.href='';
			</script>
		    ";
		    http_response_code(500);
		}


  }else{
    echo"
    <Script> alert('Unsupported Characters in Phone Field, Name or Date');
    window.location.href='';
    </Script>
    ";
  }
  } else {
    echo "<script>alert('Error: Could not make Transaction ');</script>";
    var_dump($response);
    
  }
}
}

?>


<?php 
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
function num($num){
  return filter_var($num,FILTER_VALIDATE_EMAIL) ===1;
}
?>
