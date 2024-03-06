<?php
$hName = 'localhost';
$usName ='root';
$pWord='';
//connect
$conn = mysqli_connect($hName,$usName,$pWord);

if(!$conn){
    die('Could not make Connection to HOST: ' .mysqli_connect_error());
}

?>