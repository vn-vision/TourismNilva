<?Php
include('Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);
mysqli_query($conn,$sql);
mysqli_select_db($conn,$db);

if(!isset($_POST['signUp']) ){
echo "
<script>
alert('Must Submit Form details');
window.location.href='../Sites/form.html';
</script>
";
}else{
   
// validate input fields
$Name = validateData($_POST['Uname']);
$Email = validateData($_POST['Email']);
$Pass = validateData($_POST['Upass']);
$rgDate = date("Y-m-d");

//name fields
mysqli_escape_string($conn,$Name);
mysqli_escape_string($conn,$Email);
mysqli_escape_string($conn,$Pass);

if(!preg_match("/^[a-zA-Z-']*$/",$Name)){
    echo " <script>
    alert('Only Letters and White space in name field');
    window.location.href ='../Sites/form.html';
    </script>";
}

//email 
if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
    echo " <script>
    alert('Enter Valid Email Format');
    window.location.href ='../Sites/form.html';
    </script>"; 
}

global $travellers;
//Check if Username is Taken
$vExists = "SELECT * FROM `$travellers` WHERE Username = '$Name' ";
$vExists = mysqli_query($conn,$vExists);
$vExists = mysqli_num_rows($vExists);

if($vExists > 0){
    echo "<script>
    alert('Username Exists, Try another username');
    window.location.href='../Sites/form.html';
    </script>";
} else{

//insert into database Sign Up
$inDetails = "INSERT INTO `$travellers`(Username, Email, SecretKey, SignDate ) VALUES ('$Name','$Email','$Pass','$rgDate')";
$vIns = mysqli_query($conn,$inDetails);

if(!$vIns){
    echo " <script>
    alert('There Was an Error Signing up, try again ');
    window.location.href='../Sites/form.html';
    </script>";
}else{
    echo " <script>
    alert('Successfully Registered. ');
    window.location.href='../Sites/index.html';
    </script>"; 
}
}
}

    //strip special characters
function validateData($data){

    $data  = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

