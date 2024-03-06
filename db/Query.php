<?php
require('db.php');

$sql=$tSql=$tTenants=$Asql= $Csql= $Chsql= $Usql=$db=$Cdb=$Chdb=$Udb=$Adb=""; 
// global $tablename, $travellers,$desTable;

//database to handle user details
$db = 'tourism_db';
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if(!mysqli_query($conn,$sql)){
    echo "Could not Create Database" .mysqli_error($conn);
    }
    else{
        mysqli_select_db($conn,$db);

        
//customer Details
$travellers = 'traDetails';
$tSql = "CREATE table IF NOT EXISTS $travellers(

Username varchar(100) NOT NULL, PRIMARY KEY(Username),
Email varchar(100) NOT NULL,
SecretKey varchar(100) NOT NULL,
SignDate date NOT NULL
)";

$tCust = mysqli_query($conn,$tSql);
if(!$tCust){
    echo"<b>Error</b> Could not Create Customer Name table".mysqli_error($conn);
}

//Hotel Booking details
$tablename = 'bkDetails';
$cSql = "CREATE table IF NOT EXISTS $tablename(


TouristName varchar(100) NOT NULL,
Email varchar(100) NOT NULL, PRIMARY KEY(Email),
Destination varchar (100) NOT NULL,
Hotel varchar (100) NOT NULL,
Check_In varchar (12) NOT NULL,
Check_Out varchar (12) NOT NULL
)";

$cCust = mysqli_query($conn,$cSql);
if(!$cCust){
    echo"<b>Error</b> Could not Create Booking table".mysqli_error($conn);
}

//Travelling Details
$desTable = 'destinationDetails';
$dSql = "CREATE table IF NOT EXISTS $desTable(


TouristName varchar(100) NOT NULL,
TouristEmail varchar (100) NOT NULL, PRIMARY KEY(TouristEmail),
Destination varchar (20) NOT NULL,
Depart varchar (12) NOT NULL,
dReturn varchar (12) NOT NULL
)";

$cCust = mysqli_query($conn,$dSql);
if(!$cCust){
    echo"<b>Error</b> Could not Create Booking table".mysqli_error($conn);
}


//transactions record
    
$TransactionRecords = 'TransactionDetails';
$TRsql = "CREATE table IF NOT EXISTS $TransactionRecords(


idTransaction varchar(100) NOT NULL,PRIMARY KEY(idTransaction),
trEmail varchar (100) NOT NULL, 
trName varchar (100) NOT NULL,
Phone   varchar (15) NOT NULL,
Destinations varchar (500) NOT NULL,
Duration   varchar (15) NOT NULL,
Departure   varchar (15) NOT NULL,
Amount varchar (15) NOT NULL,
aTimestamp varchar (100) NOT NULL
)";

$mCust = mysqli_query($conn,$TRsql);
if(!$mCust){
    echo"<b>Error</b> Could not Create The Transaction Details Table" .mysqli_error($conn);
}
//end of transactions record
}



///
//
//
//database to handle Australian details
$Adb = 'dbAustralia';
$Asql = "CREATE DATABASE IF NOT EXISTS $Adb";
if(!mysqli_query($conn,$Asql)){
    echo "Could not Create Database" .mysqli_error($conn);
    }
    else{
        mysqli_select_db($conn,$Adb);

//City record
    
$CityRecords = 'CityDetails';
$city = "CREATE table IF NOT EXISTS $CityRecords(


CityName varchar(100) NOT NULL,PRIMARY KEY(CityName),
_Description varchar (1000) NOT NULL, 
_Image varchar (100) NOT NULL,
Charges int (12)
)";

$cityConfirm = mysqli_query($conn,$city);
if(!$cityConfirm){
    echo"<b>Error</b> Could not Create The City Details Table" .mysqli_error($conn);
}
//end 
        
//Hotel record
    
$HotelRecords = 'HotelDetails';
$hotel = "CREATE table IF NOT EXISTS $HotelRecords(


HotelName varchar(100) NOT NULL,PRIMARY KEY(HotelName),
CityName varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12) NOT NULL,  
_Image varchar (100) NOT NULL
)";

$hotelConfirm = mysqli_query($conn,$hotel);
if(!$hotelConfirm){
    echo"<b>Error</b> Could not Create The Hotel Details Table" .mysqli_error($conn);
}
//end 

//Wildlife record
    
$wildRecords = 'wildDetails';
$wild = "CREATE table IF NOT EXISTS $wildRecords(


wildName varchar(100) NOT NULL,PRIMARY KEY(wildName),
Species varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$wildConfirm = mysqli_query($conn,$wild);
if(!$wildConfirm){
    echo"<b>Error</b> Could not Create The Wildlife Details Table" .mysqli_error($conn);
}
//end 

//Scenes record
    
$SceneRecords = 'SceneDetails';
$Scene = "CREATE table IF NOT EXISTS $SceneRecords(


sceneName varchar(100) NOT NULL,PRIMARY KEY(sceneName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$SceneConfirm = mysqli_query($conn,$Scene);
if(!$SceneConfirm){
    echo"<b>Error</b> Could not Create The Scenes' Details Table" .mysqli_error($conn);
}
//end 

//Activty record
    
$ActivityRecords = 'ActivityDetails';
$Activity = "CREATE table IF NOT EXISTS $ActivityRecords(


ActivityName varchar(100) NOT NULL,PRIMARY KEY(ActivityName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
CityName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$ActivityConfirm = mysqli_query($conn,$Activity);
if(!$ActivityConfirm){
    echo"<b>Error</b> Could not Create The Activities' Details Table" .mysqli_error($conn);
}
//end 
}

    
///
//
//
//database to handle Australian details
$Cdb = 'dbCanada';
$Csql = "CREATE DATABASE IF NOT EXISTS $Cdb";
if(!mysqli_query($conn,$Csql)){
    echo "Could not Create Database" .mysqli_error($conn);
    }
    else{
        mysqli_select_db($conn,$Cdb);

//City record
    
$CityRecords = 'CityDetails';
$city = "CREATE table IF NOT EXISTS $CityRecords(


CityName varchar(100) NOT NULL,PRIMARY KEY(CityName),
_Description varchar (1000) NOT NULL, 
_Image varchar (100),
Charges int (12)
)";

$cityConfirm = mysqli_query($conn,$city);
if(!$cityConfirm){
    echo"<b>Error</b> Could not Create The City Details Table" .mysqli_error($conn);
}
//end 
        
//Hotel record
    
$HotelRecords = 'HotelDetails';
$hotel = "CREATE table IF NOT EXISTS $HotelRecords(


HotelName varchar(100) NOT NULL,PRIMARY KEY(HotelName),
CityName varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12) NOT NULL,  
_Image varchar (100) NOT NULL
)";

$hotelConfirm = mysqli_query($conn,$hotel);
if(!$hotelConfirm){
    echo"<b>Error</b> Could not Create The Hotel Details Table" .mysqli_error($conn);
}
//end 

//Wildlife record
    
$wildRecords = 'wildDetails';
$wild = "CREATE table IF NOT EXISTS $wildRecords(


wildName varchar(100) NOT NULL,PRIMARY KEY(wildName),
Species varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$wildConfirm = mysqli_query($conn,$wild);
if(!$wildConfirm){
    echo"<b>Error</b> Could not Create The Wildlife Details Table" .mysqli_error($conn);
}
//end 

//Scenes record
    
$SceneRecords = 'SceneDetails';
$Scene = "CREATE table IF NOT EXISTS $SceneRecords(


sceneName varchar(100) NOT NULL,PRIMARY KEY(sceneName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$SceneConfirm = mysqli_query($conn,$Scene);
if(!$SceneConfirm){
    echo"<b>Error</b> Could not Create The Scenes' Details Table" .mysqli_error($conn);
}
//end 

//Activty record
    
$ActivityRecords = 'ActivityDetails';
$Activity = "CREATE table IF NOT EXISTS $ActivityRecords(


ActivityName varchar(100) NOT NULL,PRIMARY KEY(ActivityName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
CityName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$ActivityConfirm = mysqli_query($conn,$Activity);
if(!$ActivityConfirm){
    echo"<b>Error</b> Could not Create The Activities' Details Table" .mysqli_error($conn);
}
//end 
 }

    
///
//
//
//database to handle Australian details
$Chdb = 'dbChina';
$Chsql = "CREATE DATABASE IF NOT EXISTS $Chdb";
if(!mysqli_query($conn,$Chsql)){
    echo "Could not Create Database" .mysqli_error($conn);
    }
    else{
        mysqli_select_db($conn,$Chdb);

//City record
    
$CityRecords = 'CityDetails';
$city = "CREATE table IF NOT EXISTS $CityRecords(


CityName varchar(100) NOT NULL,PRIMARY KEY(CityName),
_Description varchar (1000) NOT NULL, 
_Image varchar (100) NOT NULL,
Charges int (12)
)";

$cityConfirm = mysqli_query($conn,$city);
if(!$cityConfirm){
    echo"<b>Error</b> Could not Create The City Details Table" .mysqli_error($conn);
}
//end 
        
//Hotel record
    
$HotelRecords = 'HotelDetails';
$hotel = "CREATE table IF NOT EXISTS $HotelRecords(


HotelName varchar(100) NOT NULL,PRIMARY KEY(HotelName),
CityName varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12) NOT NULL,  
_Image varchar (100) NOT NULL
)";

$hotelConfirm = mysqli_query($conn,$hotel);
if(!$hotelConfirm){
    echo"<b>Error</b> Could not Create The Hotel Details Table" .mysqli_error($conn);
}
//end 

//Wildlife record
    
$wildRecords = 'wildDetails';
$wild = "CREATE table IF NOT EXISTS $wildRecords(


wildName varchar(100) NOT NULL,PRIMARY KEY(wildName),
Species varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$wildConfirm = mysqli_query($conn,$wild);
if(!$wildConfirm){
    echo"<b>Error</b> Could not Create The Wildlife Details Table" .mysqli_error($conn);
}
//end 

//Scenes record
    
$SceneRecords = 'SceneDetails';
$Scene = "CREATE table IF NOT EXISTS $SceneRecords(


sceneName varchar(100) NOT NULL,PRIMARY KEY(sceneName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$SceneConfirm = mysqli_query($conn,$Scene);
if(!$SceneConfirm){
    echo"<b>Error</b> Could not Create The Scenes' Details Table" .mysqli_error($conn);
}
//end 

//Activty record
    
$ActivityRecords = 'ActivityDetails';
$Activity = "CREATE table IF NOT EXISTS $ActivityRecords(


ActivityName varchar(100) NOT NULL,PRIMARY KEY(ActivityName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
CityName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$ActivityConfirm = mysqli_query($conn,$Activity);
if(!$ActivityConfirm){
    echo"<b>Error</b> Could not Create The Activities' Details Table" .mysqli_error($conn);
}
//end 
 }

    
///
//
//
//database to handle American details
$Udb = 'dbUnitedStatesAmerica';
$Usql = "CREATE DATABASE IF NOT EXISTS $Udb";
if(!mysqli_query($conn,$Usql)){
    echo "Could not Create Database" .mysqli_error($conn);
    }
    else{
        mysqli_select_db($conn,$Udb);

//City record
    
$CityRecords = 'CityDetails';
$city = "CREATE table IF NOT EXISTS $CityRecords(


CityName varchar(100) NOT NULL,PRIMARY KEY(CityName),
_Description varchar (1000) NOT NULL, 
_Image varchar (100) NOT NULL,
Charges int (12)
)";

$cityConfirm = mysqli_query($conn,$city);
if(!$cityConfirm){
    echo"<b>Error</b> Could not Create The City Details Table" .mysqli_error($conn);
}
//end 
        
//Hotel record
    
$HotelRecords = 'HotelDetails';
$hotel = "CREATE table IF NOT EXISTS $HotelRecords(


HotelName varchar(100) NOT NULL,PRIMARY KEY(HotelName),
CityName varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12) NOT NULL,  
_Image varchar (100) NOT NULL
)";

$hotelConfirm = mysqli_query($conn,$hotel);
if(!$hotelConfirm){
    echo"<b>Error</b> Could not Create The Hotel Details Table" .mysqli_error($conn);
}
//end 

//Wildlife record
    
$wildRecords = 'wildDetails';
$wild = "CREATE table IF NOT EXISTS $wildRecords(


wildName varchar(100) NOT NULL,PRIMARY KEY(wildName),
Species varchar (100) NOT NULL,
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$wildConfirm = mysqli_query($conn,$wild);
if(!$wildConfirm){
    echo"<b>Error</b> Could not Create The Wildlife Details Table" .mysqli_error($conn);
}
//end 

//Scenes record
    
$SceneRecords = 'SceneDetails';
$Scene = "CREATE table IF NOT EXISTS $SceneRecords(


sceneName varchar(100) NOT NULL,PRIMARY KEY(sceneName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
parkName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$SceneConfirm = mysqli_query($conn,$Scene);
if(!$SceneConfirm){
    echo"<b>Error</b> Could not Create The Scenes' Details Table" .mysqli_error($conn);
}
//end 

//Activty record
    
$ActivityRecords = 'ActivityDetails';
$Activity = "CREATE table IF NOT EXISTS $ActivityRecords(


ActivityName varchar(100) NOT NULL,PRIMARY KEY(ActivityName),
_Description varchar (1000) NOT NULL, 
Charges int (12),
CityName varchar (100) NOT NULL,
_Image varchar (100) NOT NULL
)";

$ActivityConfirm = mysqli_query($conn,$Activity);
if(!$ActivityConfirm){
    echo"<b>Error</b> Could not Create The Activities' Details Table" .mysqli_error($conn);
}
//end 
}

mysqli_close($conn);
    
