<?Php
include('Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);
mysqli_query($conn,$sql);
mysqli_select_db($conn,$db);

//handle LOGIN
 if(!isset($_POST['SignIn'])){

    echo "
<script>
alert('Must Login First');
window.location.href='../Sites/login.html';
</script>
";

 }else{
$Name = validateData($_POST['Uname']);
$Pass = validateData($_POST['Upass']);

mysqli_escape_string($conn,$Name);
mysqli_escape_string($conn,$Pass);

//Name
if(!preg_match("/^[a-zA-Z-']*$/",$Name)){
    echo " <script>
    alert('Only Letters and White space in name field');
    window.location.href ='../Sites/form.html';
    </script>";
}

global $travellers;

//Check if credentials Match for Login
$vMatch = "SELECT * FROM `$travellers` WHERE Username ='$Name' AND SecretKey='$Pass' ";
$vMatch = mysqli_query($conn,$vMatch);

if($vMatch){
    echo "<script>
    alert('Welcome: $Name');
    window.location.href='../Sites/index.html';
    </script>";
}else{
    $block=3;
    while($block > 0){
    echo"
    <script>
    alert('Wrong Password Or Username, retry: -($block)');
    window.location.href = '../Sites/login.html';
    </script>   
    ";
    $block--;
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