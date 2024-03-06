<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//testing permissions


require('../db/Query.php');
$conn = mysqli_connect($hName,$usName,$pWord);



{
  mysqli_query($conn,$Asql);
  mysqli_select_db($conn,$Adb);

//AUSTRALIA: 
///
///
///
//City details with hardcoded data
{
$A_City = array(
  array(
      "name" => "Sydney",
      "description" => "Modern and sophisticated, Sydney is one of the best cities for tourists to visit on a tour to Australia. With fantastic beaches and the Blue Mountains on the doorstep.",
      "image" => "auHotel.jpeg"
  ),
  array(
      "name" => "Melbourne",
      "description" => "With its vintage shops, graffiti-covered backstreets and coffee culture, Melbourne  reputation is Australias capital of cool, plenty to see and do, art or sports.",
      "image" => "melbourne.jpg"
  ),
  array(
    "name" => "Gold Coast",
    "description" => "If you are looking for fun, look no further. Famous for surfing, rollercoasters and nightclubs, the Gold Coast attracts millions of tourists every year.",
    "image" => "goldcoast.jpg"
)
);

// Check if the city records already exist in the database
$query = "SELECT COUNT(*) as count FROM $CityRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded city details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded city details into the database
    foreach ($A_City as $a_city) {
        $name = mysqli_real_escape_string($conn, $a_city["name"]);
        $description = mysqli_real_escape_string($conn, $a_city["description"]);
        $image = mysqli_real_escape_string($conn, $a_city["image"]);

        // Prepare the INSERT statement
        $aCityInsert = "INSERT INTO $CityRecords (CityName, _Description, _Image) VALUES ('$name', '$description', '$image')";
        $aC_result = mysqli_query($conn, $aCityInsert);

        if (!$aC_result) {
            die("Error inserting city details: " . mysqli_error($conn));
        }
    }
}
}


////
///
///
//Hotel details with hardcoded data
{
$A_Hotel = array(
  array(
      "name" => "Emirates One_Only Wolgan Valley",
      "city" => "2600 Wolgan Rd, Wolgan Valley NSW 2790, Australia",
      "description" => "2600 Wolgan Rd, Wolgan Valley NSW 2790, Australia",
      "Charges" => 10000,
      "image" => "emirateswolgan.jpeg"
  ),
  array(
    "name" => "Park Hyatt",
    "city" => "7 Hickson Rd, The Rocks NSW 2000, Australia",
    "description" => "The Park Hyatt Sydney is all about sophisticated luxury. It overlooks the Sydney Opera House and is just 4 km away from the famous Darling Harbour.",
    "Charges" => 9500,
    "image" => "parkhyatt.jpg"
  ),
  array(
"name" => "Jamala Wildlife Lodge",
"city" => " National Zoo & Aquarium, 999 Lady Denman Dr, Canberra ACT 2611, Australia",
"description" => "This animal themed hotel in Australia is all about the experience. It features treehouse suites that overlook the giraffe quarters and bungalows and lodge rooms with glass rooms that provide views into the animal quarters. Luxury includes flat screen TV, WIFI, and whirlpool tubs in some rooms",
"Charges" => 9000,
"image" => "jamala.jpeg"
  )
);


// Check if the hotel records already exist in the database
$query = "SELECT COUNT(*) as count FROM $HotelRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded hotel details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded hotel details into the database
    foreach ($A_Hotel as $a_hotel) {
        $name = mysqli_real_escape_string($conn, $a_hotel["name"]);
        $city = mysqli_real_escape_string($conn, $a_hotel["city"]);
        $description = mysqli_real_escape_string($conn, $a_hotel["description"]);
        $charge = mysqli_real_escape_string($conn, $a_hotel["Charges"]);
        $image = mysqli_real_escape_string($conn, $a_hotel["image"]);

        // Prepare the INSERT statement
        $aHotelInsert = "INSERT INTO $HotelRecords (HotelName, CityName, _Description, Charges, _Image) VALUES ('$name','$city', '$description','$charge' ,'$image')";
        $aH_result = mysqli_query($conn, $aHotelInsert);

        if (!$aH_result) {
            die("Error inserting hotel details: " . mysqli_error($conn));
        }
    }
}
}


///
///
///
//Scene details with hardcoded data
{
$A_Scenes = array(
  array(
      "name" => "The Great Reef Barrier",
      "description" => "The Great Barrier Reef, spanning more than 2,300 kilometers, is the largest coral reef system in the world, located in Australia.",
      "Where" => " ",
      "image" => "grb.jpeg"
  ),
  array(
    "name" => "The Outback",
    "description" => "Famous for its rugged natural beauty, distinctive wildlife, and cultural importance to Indigenous Australians, this place is renowned.",
    "Where" => " ",
    "image" => "outback.jpeg"
  ),
  array(
    "name" => "Whitehaven Beach.",
    "description" => "the rest of the world is dreaming wistfully of visiting Australia, and salivating over visions of white sand beaches, wildlife encounters and laid-back wineries.",
    "Where" => "Queensland ",
    "image" => "whitehaven.jpg"
  )
);


// Check if the scene records already exist in the database
$query = "SELECT COUNT(*) as count FROM $SceneRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded scene details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded scene details into the database
    foreach ($A_Scenes as $a_Scene) {
        $name = mysqli_real_escape_string($conn, $a_Scene["name"]);
        $description = mysqli_real_escape_string($conn, $a_Scene["description"]);
        $place = mysqli_real_escape_string($conn, $a_Scene["Where"]);
        $image = mysqli_real_escape_string($conn, $a_Scene["image"]);

        // Prepare the INSERT statement
        $aSceneInsert = "INSERT INTO $SceneRecords (sceneName, _Description, parkName, _Image) VALUES ('$name', '$description','$place','$image')";
        $aS_result = mysqli_query($conn, $aSceneInsert);

        if (!$aS_result) {
            die("Error inserting scene details: " . mysqli_error($conn));
        }
    }
}
}


// Wildlife details with hardcoded data
{
$A_Wild = array(
    array(
        "name" => "Cassowary Bird",
        "species" => "Bird",
        "description" => " A flightless bird native to the tropical forests of New Guinea and northeastern Australia is the Cassowary, which is quite large.",
        "park" => " ",
        "image" => "casswary.jpg"
    ),
    array(
      "name" => "Kangaroos",
      "species" => "Mammal",
      "description" => "Kangaroos, the marsupial mammals from Australia, are famous for their distinctive hopping gait and unique reproductive system.",
      "park" => " ",
      "image" => "kangarooJ.jpg"
    ),
    array(
      "name" => "Platypuses",
      "species" => "Mammal",
      "description" => "The platypus is a mammal that lays eggs instead of giving birth to live young and has a unique, flat, and duck-like bill.",
      "park" => "",
      "image" => "perryPlat.jpeg"
    )
);

// Check if the wildlife records already exist in the database
$query = "SELECT COUNT(*) as count FROM $wildRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded wildlife details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded wildlife details into the database
    foreach ($A_Wild as $a_Wild) {
        $name = mysqli_real_escape_string($conn, $a_Wild["name"]);
        $species = mysqli_real_escape_string($conn, $a_Wild["species"]);
        $description = mysqli_real_escape_string($conn, $a_Wild["description"]);
        $place = mysqli_real_escape_string($conn, $a_Wild["park"]);
        $image = mysqli_real_escape_string($conn, $a_Wild["image"]);

        // Prepare the INSERT statement
        $aWildInsert = "INSERT INTO $wildRecords (wildName, Species, _Description, parkName, _Image) VALUES ('$name','$species', '$description', '$place','$image')";
        $aW_result = mysqli_query($conn, $aWildInsert);

        if (!$aW_result) {
            die("Error inserting wildlife details: " . mysqli_error($conn));
        }
    }
}
}

///
///
///
//Activity details with hardcoded data
{
$A_Activity = array(
  array(
      "name" => "Whale Watching",
      "description" => "In Australia, a beloved outdoor activity is observing majestic sea creatures up close, with many coastal locations offering this experience.",
      "Where" => "  ",
      "image" => "whale.jpg"
  ),
  array(
    "name" => "Surfing",
    "description" => "Australia boasts excellent surfing destinations such as Byron Bay and the Gold Coast, while the USA Hawaii and California are also famous.",
    "Where" => " ",
    "image" => "surfingA.jpg"
  ),
  array(
    "name" => "Kayaking",
    "description" => "Australia boasts excellent Kayaking destinations to satisfy your urges for water sports.",
    "Where" => " ",
    "image" => "kayaking.jpg"
  )
  

);

// Check if the scene records already exist in the database
$query = "SELECT COUNT(*) as count FROM $SceneRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded scene details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded scene details into the database
    foreach ($A_Activity as $A_act) {
        $name = mysqli_real_escape_string($conn, $A_act["name"]);
        $description = mysqli_real_escape_string($conn, $A_act["description"]);
        $place = mysqli_real_escape_string($conn, $A_act["Where"]);
        $image = mysqli_real_escape_string($conn, $A_act["image"]);

        // Prepare the INSERT statement
        $aActivityInsert = "INSERT INTO $ActivityRecords (ActivityName, _Description, CityName, _Image) VALUES ('$name', '$description','$place','$image')";
        $aA_result = mysqli_query($conn, $aActivityInsert);

        if (!$aA_result) {
            die("Error inserting scene details: " . mysqli_error($conn));
        }
    }
}
}

}



{
  mysqli_query($conn,$Csql);
  mysqli_select_db($conn,$Cdb);
//CANADA: 
///
///
///
//City details with hardcoded data
{
$C_City = array(
  array(
      "name" => "Toronto",
      "description" => "Toronto is the 29th most visited city in the world and tops our list of Canadian tourist destinations,packed with museums and art galleries, world-class hotels and restaurants.",
      "image" => "toronto.jpg"
  ),
  array(
      "name" => "Vancouver",
      "description" => "From humble beginnings grew Vancouver, a coastal city in western Canada that now has a population of 631,486, and the Greater Vancouver area is home to nearly 2.5 million people.",
      "image" => "vancouver.jpg"
  ),
  array(
    "name" => "Montreal",
    "description" => "To get a sense of Montreals history, visitors can tour Old Montreal, an enchanting, cobblestoned section of the city next to the St. Lawrence River. Its where the original French settlers arrived.",
    "image" => "montreal.jpg"
)
);


// Check if the city records already exist in the database
$query = "SELECT COUNT(*) as count FROM $CityRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded city details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded city details into the database
    foreach ($C_City as $c_city) {
        $name = mysqli_real_escape_string($conn, $c_city["name"]);
        $description = mysqli_real_escape_string($conn, $c_city["description"]);
        $image = mysqli_real_escape_string($conn, $c_city["image"]);

        // Prepare the INSERT statement
        $cCityInsert = "INSERT INTO $CityRecords (CityName, _Description, _Image) VALUES ('$name', '$description', '$image')";
        $cC_result = mysqli_query($conn, $cCityInsert);

        if (!$cC_result) {
            die("Error inserting city details: " . mysqli_error($conn));
        }
    }
}
}


////
///
///
//Hotel details with hardcoded data
{
$C_Hotel = array(
  array(
      "name" => "The Banff Springs Hotel.",
      "city" => "Banff, AB",
      "description" => "Banff, Albertas historic and iconic Fairmont Banff Springs Hotel is a must-visit destination for travelers.",
      "Charges" => 12000,
      "image" => "caHotel.jpeg"
  ),
  array(
    "name" => "Rosewood Hotel Georgia",
    "city" => "Vancouver, BC",
    "description" => "The lion is a large felid of the genus Panthera native to Africa and one of the big cats in the Felidae family.",
    "Charges" => 11000,
    "image" => "rosewood.jpg"
  ),
  array(
    "name" => "The Ritz-Carlton Montreal.",
    "city" => "Montreal, QC",
    "description" => "The lion is a large felid of the genus Panthera native to Africa and one of the big cats in the Felidae family.",
    "Charges" => 10000,
    "image" => "ritzcarlton.jpg"
  )

);


// Check if the hotel records already exist in the database
$query = "SELECT COUNT(*) as count FROM $HotelRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded hotel details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded hotel details into the database
    foreach ($C_Hotel as $c_hotel) {
        $name = mysqli_real_escape_string($conn, $c_hotel["name"]);
        $city = mysqli_real_escape_string($conn, $c_hotel["city"]);
        $description = mysqli_real_escape_string($conn, $c_hotel["description"]);
        $charge = $c_hotel["Charges"];
        $image = mysqli_real_escape_string($conn, $c_hotel["image"]);

        // Prepare the INSERT statement
        $cHotelInsert = "INSERT INTO $HotelRecords (HotelName, CityName, _Description, Charges, _Image) VALUES ('$name', '$city', '$description', '$charge', '$image')";
        $cH_result = mysqli_query($conn, $cHotelInsert);

        if (!$cH_result) {
            die("Error inserting hotel details: " . mysqli_error($conn));
        }
    }
}
}

///
///
///
//Scene details with hardcoded data
{
$C_Scenes = array(
  array(
      "name" => "Niagara Falls",
      "description" => "Today this trio forms a massive U-shape that pours 3160 tons of water into the Niagara Gorge every second — best seen from the Canadian side.",
      "Where" => "Ontario",
      "image" => "niagara.jpg"
  ),
  array(
    "name" => "Moraine Lake",
    "description" => "Located in the Valley of the Ten Peaks, the lake is surrounded by dramatic peaks, enhancing its scenic beauty.",
    "Where" => "Alberta",
    "image" => "turquoiseCan.jpg"
  ),
  array(
    "name" => "Aurora Borealis",
    "description" => "The aurora borealis, a stunning light show caused by solar particles colliding with Earths magnetic field, is visible in Canadas north in winter.",
    "Where" => "Alberta",
    "image" => "aurora.jpg"
  )
  
);


// Check if the scene records already exist in the database
$query = "SELECT COUNT(*) as count FROM $SceneRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded scene details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded scene details into the database
    foreach ($C_Scenes as $c_Scene) {
        $name = mysqli_real_escape_string($conn, $c_Scene["name"]);
        $description = mysqli_real_escape_string($conn, $c_Scene["description"]);
        $place = mysqli_real_escape_string($conn, $c_Scene["Where"]);
        $image = mysqli_real_escape_string($conn, $c_Scene["image"]);

        // Prepare the INSERT statement
        $cSceneInsert = "INSERT INTO $SceneRecords (sceneName, _Description, parkName, _Image) VALUES ('$name', '$description', '$place', '$image')";
        $cS_result = mysqli_query($conn, $cSceneInsert);

        if (!$cS_result) {
            die("Error inserting scene details: " . mysqli_error($conn));
        }
    }
}
}


// Wildlife details with hardcoded data
{
$C_Wild = array(
    array(
        "name" => "Polar Bear",
        "species" => "Mammal",
        "description" => "They are the largest land predator in the world,with adult males weighing up to 600 kilograms,standing up to 3 meters.",
        "park" => " ",
        "image" => "pBear.jpg"
    ),
    array(
      "name" => "Arctic Fox",
      "species" => "Mammal",
      "description" => "Arctic foxes are excellent hunters and scavengers, feeding on small mammals like lemmings and voles as well as carrion.",
      "park" => " ",
      "image" => "canFox.jpg"
    ),
    array(
      "name" => "Caribou / Reindeer",
      "species" => "Mammal",
      "description" => "These majestic animals are known for their impressive antlers, which can span up to 1.2 meters (4 feet) in length.",
      "park" => " ",
      "image" => "canFox.jpg"
    ) 
);

// Check if the wildlife records already exist in the database
$query = "SELECT COUNT(*) as count FROM $wildRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded wildlife details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded wildlife details into the database
    foreach ($C_Wild as $c_Wild) {
        $name = mysqli_real_escape_string($conn, $c_Wild["name"]);
        $species = mysqli_real_escape_string($conn, $c_Wild["species"]);
        $description = mysqli_real_escape_string($conn, $c_Wild["description"]);
        $place = mysqli_real_escape_string($conn, $c_Wild["park"]);
        $image = mysqli_real_escape_string($conn, $c_Wild["image"]);

        // Prepare the INSERT statement
        $cWildInsert = "INSERT INTO $wildRecords (wildName, Species, _Description, parkName, _Image) VALUES ('$name', '$species', '$description', '$place', '$image')";
        $cW_result = mysqli_query($conn, $cWildInsert);

        if (!$cW_result) {
            die("Error inserting wildlife details: " . mysqli_error($conn));
        }
    }
}
}
///
///
///
//Activity details with hardcoded data
{
$C_Activity = array(
  array(
      "name" => "Kayaking",
      "description" => "Top kayaking destinations in Canada include Bowron Lakes Circuit, Nahanni River, and Thousand Islands in BC, NT, and ON.",
      "Where" => "Nahani River, Bowron Lakes",
      "image" => "kayakingC.jpg"
  ),
  array(
    "name" => "Dog Sledding",
    "description" => "An exciting activity that involves riding a sled pulled by huskies or malamutes, commonly known as dog sledding.",
    "Where" => " ",
    "image" => "dogSledC.jpg"
  ),
  array(
    "name" => "Mountain Biking",
    "description" => "When you thought it could not get better, Cycling is fun, Hiking is fantastic, why not try out both...Mountain Biking .",
    "Where" => " ",
    "image" => "mtBike.jpg"
  )
);

// Check if the activity records already exist in the database
$query = "SELECT COUNT(*) as count FROM $ActivityRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded activity details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded activity details into the database
    foreach ($C_Activity as $C_act) {
        $name = mysqli_real_escape_string($conn, $C_act["name"]);
        $description = mysqli_real_escape_string($conn, $C_act["description"]);
        $place = mysqli_real_escape_string($conn, $C_act["Where"]);
        $image = mysqli_real_escape_string($conn, $C_act["image"]);

        // Prepare the INSERT statement
        $cActivityInsert = "INSERT INTO $ActivityRecords (ActivityName, _Description, CityName, _Image) VALUES ('$name', '$description', '$place', '$image')";
        $cA_result = mysqli_query($conn, $cActivityInsert);

        if (!$cA_result) {
            die("Error inserting activity details: " . mysqli_error($conn));
        }
    }
}
}

}




{
  mysqli_query($conn,$Chsql);
  mysqli_select_db($conn,$Chdb);
//CHINA: 
///
///
///
//City details with hardcoded data
{
$CH_City = array(
  array(
      "name" => "Beijing",
      "description" => "Everyone knows the capital of China is Beijing, though some may still call it Peking. Peking is rather traditional, and no longer used in China.",
      "image" => "beijing.jpg"
  ),
  array(
      "name" => "Shanghai",
      "description" => "With a population of over 20 million, Shanghai rivals the largest cities in the world for size and prosperity.",
      "image" => "shanghai.jpg"
  ),
  array(
    "name" => "Hong Kong",
    "description" => "Hong Kongs rank among Chinas famous cities in peoples minds is whether it is actually Chinese. Rest assured, Hong Kong is part of China, having ceded its 100-year British governance in 1997.",
    "image" => "hongkong.jpg"
)
);

// Check if the city records already exist in the database
$query = "SELECT COUNT(*) as count FROM $CityRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded city details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded city details into the database
    foreach ($CH_City as $ch_city) {
        $name = mysqli_real_escape_string($conn, $ch_city["name"]);
        $description = mysqli_real_escape_string($conn, $ch_city["description"]);
        $image = mysqli_real_escape_string($conn, $ch_city["image"]);

        // Prepare the INSERT statement
        $chCityInsert = "INSERT INTO $CityRecords (CityName, _Description, _Image) VALUES ('$name', '$description', '$image')";
        $cCH_result = mysqli_query($conn, $chCityInsert);

        if (!$cCH_result) {
            die("Error inserting city details: " . mysqli_error($conn));
        }
    }
}
}


////
///
///
//Hotel details with hardcoded data
{
$CH_Hotel = array(
  array(
      "name" => "InterContinental Hangzhou",
      "city" => " Hangzhous business district, Qianjiang ",
      "description" => "A luxurious hotel in Hangzhou, China, with top-tier amenities, elegant rooms, and outstanding customer service.",
      "Charges" => 21500,
      "image" => "chotel.jpeg"
  ),
  array(
    "name" => "Mandarin Oriental Wangfujing",
    "city" => "Beijing",
    "description" => "A luxurious hotel in Hangzhou, China, with top-tier amenities, elegant rooms, and outstanding customer service.",
    "Charges" => 11500,
    "image" => "mandarin.jpg"
  ),
  array(
    "name" => "The Opposite House.",
    "city" => "Taikoo LI Sanlitun",
    "description" => " The Opposite House by Swire Hotels is one of four Houses in The House Collective. Located in Taikoo Li Sanlitun a vibrant open plan shopping, dining and entertainment destination .",
    "Charges" => 11000,
    "image" => "oppositehouse.jpeg"
  )

);


// Check if the hotel records already exist in the database
$query = "SELECT COUNT(*) as count FROM $HotelRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded hotel details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded hotel details into the database
    foreach ($CH_Hotel as $ch_hotel) {
        $name = mysqli_real_escape_string($conn, $ch_hotel["name"]);
        $city = mysqli_real_escape_string($conn, $ch_hotel["city"]);
        $description = mysqli_real_escape_string($conn, $ch_hotel["description"]);
        $charge = mysqli_real_escape_string($conn, $ch_hotel["Charges"]);
        $image = mysqli_real_escape_string($conn, $ch_hotel["image"]);

        // Prepare the INSERT statement
        $chHotelInsert = "INSERT INTO $HotelRecords (HotelName, CityName, _Description, Charges, _Image) VALUES ('$name', '$city', '$description', '$charge', '$image')";
        $chH_result = mysqli_query($conn, $chHotelInsert);

        if (!$chH_result) {
            die("Error inserting hotel details: " . mysqli_error($conn));
        }
    }
}


}
///
///
///
//Scene details with hardcoded data
{
$CH_Scenes = array(
  array(
      "name" => "Gobi Desert",
      "description" => "The Gobi Desert boasts unique and diverse wildlife, including Bactrian camels, Gobi bears, and Gobi jerboas.",
      "Where" => " ",
      "image" => "gobiChina.jpg"
  ),
  array(
    "name" => "The Yangtez River ",
    "description" => "This long Asian river flows through Chinas breathtaking landscapes and is the continents largest.",
    "Where" => " ",
    "image" => "yangtez.jpg"
  ),
  array(
    "name" => "The Great Wall of China",
    "description" => "The Great Wall of China, a historic defensive structure built along the northern borders of China to protect against invaders.",
    "Where" => " ",
    "image" => "greatWallChina.jpg"
  )
);

// Check if the scene records already exist in the database
$query = "SELECT COUNT(*) as count FROM $SceneRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded scene details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded scene details into the database
    foreach ($CH_Scenes as $ch_Scene) {
        $name = mysqli_real_escape_string($conn, $ch_Scene["name"]);
        $description = mysqli_real_escape_string($conn, $ch_Scene["description"]);
        $place = mysqli_real_escape_string($conn, $ch_Scene["Where"]);
        $image = mysqli_real_escape_string($conn, $ch_Scene["image"]);

        // Prepare the INSERT statement
        $chSceneInsert = "INSERT INTO $SceneRecords (sceneName, _Description, parkName, _Image) VALUES ('$name', '$description', '$place', '$image')";
        $chS_result = mysqli_query($conn, $chSceneInsert);

        if (!$chS_result) {
            die("Error inserting scene details: " . mysqli_error($conn));
        }
    }
}
}

// Wildlife details with hardcoded data
{
$CH_Wild = array(
    array(
        "name" => "Giant Pandas",
        "species" => "Mammal",
        "description" => "The Giant Panda, one of the worlds most recognizable and cherished creatures, is a bear species that hails from China.",
        "park" => " ",
        "image" => "lion.jpg"
    ),
    array(
      "name" => "Snow Leopard",
      "species" => "Mammal",
      "description" => "The snow leopard, a big cat found in Central Asias mountain ranges, is known for its majestic beauty.",
      "park" => " ",
      "image" => "chinaLeo.jpg"
    ),
    array(
      "name" => "Tibetan Antelope",
      "species" => "Mammal",
      "description" => "Found in Tibets high plateaus, these graceful animals are distinguished by their beautiful spiral horns.",
      "park" => " ",
      "image" => "tibetan.jpg"
    )
);

// Check if the wildlife records already exist in the database
$query = "SELECT COUNT(*) as count FROM $wildRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded wildlife details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded wildlife details into the database
    foreach ($CH_Wild as $ch_Wild) {
        $name = mysqli_real_escape_string($conn, $ch_Wild["name"]);
        $species = mysqli_real_escape_string($conn, $ch_Wild["species"]);
        $description = mysqli_real_escape_string($conn, $ch_Wild["description"]);
        $place = mysqli_real_escape_string($conn, $ch_Wild["park"]);
        $image = mysqli_real_escape_string($conn, $ch_Wild["image"]);

        // Prepare the INSERT statement
        $cWildInsert = "INSERT INTO $wildRecords (wildName, Species, _Description, parkName, _Image) VALUES ('$name', '$species', '$description', '$place', '$image')";
        $cW_result = mysqli_query($conn, $cWildInsert);

        if (!$cW_result) {
            die("Error inserting wildlife details: " . mysqli_error($conn));
        }
    }
}

}
///
///
///
//Activity details with hardcoded data
{
$CH_Activity = array(
  array(
      "name" => "Tai Chi",
      "description" => "This practice incorporates gentle, deliberate movements to enhance balance, flexibility, and physical and mental wellness.",
      "Where" => " ",
      "image" => "Tai.jpg"
  ),
  array(
    "name" => "China Traditional Festival",
    "description" => "The Spring Festival marks the start of the lunar new year and is celebrated with fireworks, lion dances, family reunions, and feasts in China.",
    "Where" => " ",
    "image" => "chTrad.jpeg"
  ),
  array(
    "name" => "Take a Gondola Ride",
    "description" => " Chinas canals are much bigger and probably much older depending on the place you go. You can see preserved canals with old buildings and bridges in several cities.",
    "Where" => "Shanghai, Hangzhou. ",
    "image" => "gondola.jpg"
  )
);

// Check if the scene records already exist in the database
$query = "SELECT COUNT(*) as count FROM $ActivityRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded scene details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded scene details into the database
    foreach ($CH_Activity as $CH_act) {
        $name = mysqli_real_escape_string($conn, $CH_act["name"]);
        $description = mysqli_real_escape_string($conn, $CH_act["description"]);
        $place = mysqli_real_escape_string($conn, $CH_act["Where"]);
        $image = mysqli_real_escape_string($conn, $CH_act["image"]);

        // Prepare the INSERT statement
        $chActivityInsert = "INSERT INTO $ActivityRecords (ActivityName, _Description, CityName, _Image) VALUES ('$name', '$description', '$place', '$image')";
        $chA_result = mysqli_query($conn, $chActivityInsert);

        if (!$chA_result) {
            die("Error inserting scene details: " . mysqli_error($conn));
        }
    }
}
}

}




{
  mysqli_query($conn,$Usql);
  mysqli_select_db($conn,$Udb);
  
//USA: 
///
///
///
//City details with hardcoded data
{
$USA_City = array(
  array(
      "name" => "New York City",
      "description" => "The five boroughs -- or regions -- of New York have some of the most easily recognized attractions in the world.",
      "image" => "newyork.jpg"
  ),
  array(
      "name" => "Chicago, Illinois",
      "description" => "Americas third-largest city offers world-class museums, great food, sporting events, and iconic architecture -- including Willis Tower, America’s tallest building. The Midwest city is also known for comedy.",
      "image" => "illinois.jpg"
  ),
  array(
      "name" => "Charleston, South Carolina",
      "description" => "Many say Charleston is one of the most beautiful and historic places in the United States. The coastal city has a very rich history. ",
      "image" => "charleston.jpg"
  )
);

// Check if the city records already exist in the database
$query = "SELECT COUNT(*) as count FROM $CityRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded city details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded city details into the database
    foreach ($USA_City as $usa_city) {
        $name = mysqli_real_escape_string($conn, $usa_city["name"]);
        $description = mysqli_real_escape_string($conn, $usa_city["description"]);
        $image = mysqli_real_escape_string($conn, $usa_city["image"]);

        // Prepare the INSERT statement
        $usaCityInsert = "INSERT INTO $CityRecords (CityName, _Description, _Image) VALUES ('$name', '$description', '$image')";
        $c_USA_result = mysqli_query($conn, $usaCityInsert);

        if (!$c_USA_result) {
            die("Error inserting City details: " . mysqli_error($conn));
        }
    }
}

}
////
///
///
//Hotel details with hardcoded data
{
$USA_Hotel = array(
  array(
      "name" => "Las Vegas Strip Hotel",
      "city" => "LA",
      "description" => "The Bellagio is a lavish casino and hotel situated on the famous Las Vegas Strip in Nevada, USA.",
      "Charges" => 12000,
      "image" => "LA.jpg"
  ),
  array(
    "name" => "Acqualina Resort",
    "city" => "Sunny Isles, FL ",
    "description" => "Enjoy the view from Acqualina Resorts as early as the rising sun, perfect spots for romantic get away.",
    "Charges" => 11000,
    "image" => "acqualina.jpg"
  ),
  array(
    "name" => "The Canyon Suites",
    "city" => "Scottsdale,AZ",
    "description" => "While in Arizona, dont forget to visit the Canyon Suites. 5 star rated to meet your wildest dreams.",
    "Charges" => 1000,
    "image" => "camp.jpg"
  )
);


// Check if the hotel records already exist in the database
$query = "SELECT COUNT(*) as count FROM $HotelRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded Hotel details into the database
if ($count == 0) {
  foreach ($USA_Hotel as $usa_hotel) {
    $name = mysqli_real_escape_string($conn, $usa_hotel["name"]);
    $city = mysqli_real_escape_string($conn, $usa_hotel["city"]);
    $description = mysqli_real_escape_string($conn, $usa_hotel["description"]);
    $charge = $usa_hotel["Charges"];
    $image = mysqli_real_escape_string($conn, $usa_hotel["image"]);

    // Prepare the INSERT statement
    $usaHotelInsert = "INSERT INTO $HotelRecords (HotelName, CityName, _Description, Charges, _Image) VALUES ('$name', '$city', '$description', '$charge', '$image')";
    $usaH_result = mysqli_query($conn, $usaHotelInsert);

if (!$usaH_result) {
    die("Error inserting Hotel details: " . mysqli_error($conn));
}
}
}
}
///
///
///
//Scene details with hardcoded data
{
$USA_Scenes = array(
  array(
      "name" => "The Grand Canyon",
      "description" => "The Colorado River carved this vast canyon in Arizona, attracting visitors to its breathtaking natural beauty.",
      "Where" => " ",
      "image" => "grandCan.jpg"
  ),
  array(
    "name" => " The Great Smoking Mountains Park ",
    "description" => "This national park in the US spans across Tennessee and North Carolina, renowned for its stunning scenery, wildlife, and hiking trails.",
    "Where" => " ",
    "image" => "natPark.jpg"
  ),
  array(
    "name" => " Yellow Stone Park ",
    "description" => "Yellowstone features dramatic canyons, alpine rivers, lush forests, hot springs and gushing geysers, including its most famous, Old Faithful.",
    "Where" => " ",
    "image" => "yellowstone.jpg"
  )
);

if ($count == 0) {
  foreach ($USA_Scenes as $usa_Scene) {
      $name = mysqli_real_escape_string($conn, $usa_Scene["name"]);
      $description = mysqli_real_escape_string($conn, $usa_Scene["description"]);
      $place = mysqli_real_escape_string($conn, $usa_Scene["Where"]);
      $image = mysqli_real_escape_string($conn, $usa_Scene["image"]);

      // Prepare the INSERT statement
      $usaSceneInsert = "INSERT INTO $SceneRecords (sceneName, _Description, parkName, _Image) VALUES ('$name', '$description', '$place', '$image')";
      $usaS_result = mysqli_query($conn, $usaSceneInsert);

      if (!$usaS_result) {
          die("Error inserting Scene details: " . mysqli_error($conn));
      }

}
}
}

///
///
///
// Wildlife details with hardcoded data
{
$USA_Wild = array(
    array(
        "name" => "Bisons",
        "species" => "Mammal",
        "description" => "The Yak is a bovine animal found in the Himalayan region, known for its shaggy fur, large hump, and impressive horns up to 1 meter long.",
        "park" => " ",
        "image" => "bisonL.jpg"
    ),
    array(
      "name" => "The Bald Eagle",
      "species" => "Bird",
      "description" => "This bird is an iconic symbol of the United States, with a stunning appearance and majestic flying abilities.",
      "park" => " ",
      "image" => "eagle.jpg"
    ),
    array(
      "name" => "Coyote",
      "species" => "Bird",
      "description" => "Coyotes are known for their nocturnal howl, a distinct and eerie sound that echoes through the night.",
      "park" => " ",
      "image" => "cocote.jpg"
    )
);

// Check if the wildlife records already exist in the database
$query = "SELECT COUNT(*) as count FROM $wildRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded wildlife details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded wildlife details into the database
    foreach ($USA_Wild as $usa_Wild) {
        $name = mysqli_real_escape_string($conn, $usa_Wild["name"]);
        $species = mysqli_real_escape_string($conn, $usa_Wild["species"]);
        $description = mysqli_real_escape_string($conn, $usa_Wild["description"]);
        $place = mysqli_real_escape_string($conn, $usa_Wild["park"]);
        $image = mysqli_real_escape_string($conn, $usa_Wild["image"]);

        // Prepare the INSERT statement
        $cWildInsert = "INSERT INTO $wildRecords (wildName, Species, _Description, parkName, _Image) VALUES ('$name', '$species', '$description', '$place', '$image')";
        $cW_result = mysqli_query($conn, $cWildInsert);

        if (!$cW_result) {
            die("Error inserting wildlife details: " . mysqli_error($conn));
        }
    }
}
}
///
///
///
//Activity details with hardcoded data
{
$USA_Activity = array(
  array(
      "name" => "Rock Climbing",
      "description" => "Rock climbing involves scaling natural rock formations and is a popular outdoor activity thats both challenging and recreational.",
      "Where" => " ",
      "image" => "rockU.jpg"
  ),
  array(
    "name" => " Bungee Jumping.",
    "description" => "Enjoy the View from above, feel the breeze, feel the adrenaline kick in. It is an experience you shouldnt miss.",
    "Where" => " ",
    "image" => "bungee.jpg"
  ),
  array(
    "name" => "White Water Rafting.",
    "description" => "Whitewater rafting involves riding an inflatable raft down rough water rapids, making it a thrilling and popular outdoor activity.",
    "Where" => " ",
    "image" => "raftingU.jpg"
  )
);

// Check if the activity records already exist in the database
$query = "SELECT COUNT(*) as count FROM $ActivityRecords";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

// Insert hardcoded activity details into the database if records don't exist
if ($count == 0) {
    // Insert hardcoded activity details into the database
    foreach ($USA_Activity as $USA_act) {
        $name = mysqli_real_escape_string($conn, $USA_act["name"]);
        $description = mysqli_real_escape_string($conn, $USA_act["description"]);
        $place = mysqli_real_escape_string($conn, $USA_act["Where"]);
        $image = mysqli_real_escape_string($conn, $USA_act["image"]);

        // Prepare the INSERT statement
        $usa_ActivityInsert = "INSERT INTO $ActivityRecords (ActivityName, _Description, CityName, _Image) VALUES ('$name', '$description', '$place', '$image')";
        $usa_A_result = mysqli_query($conn, $usa_ActivityInsert);

        if (!$usa_A_result) {
            die("Error inserting activity details: " . mysqli_error($conn));
        }
    }
}
}
}

// Close the connection







