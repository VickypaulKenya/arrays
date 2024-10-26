<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
   // $fruits=[
       // "Apple",
       // "Banana",
       // "Melon","
       // Grapes"
    //];
      

      // unset($fruits[1]);//deletes the specified index

     // array_splice($fruits,0,1); //deletes index one and moves the item below it as the new index 

    // echo $fruits[1];
 $states=[
    "Kenya"=>"Nairobi",
    "Uganda"=>"Kampala",
    "Tanzania"=>"Dar-es-salaam",
    "Naigeria"=>"Lagos",
    "Congo"=>"Brazaville",
 ];
 sort($states);

 $states["South Africa"]="Cape Town";
 print_r( $states);
  
 $food=[
    "fruits" => array("mango","melon","apple"),
    "cereal" => array("maize","millet","beans"),
    "drinks" => array("cola","sprite","energy"),
 ];
 echo $food["cereal"][2];
    print_r($food["cereal"][1]);
    ?>
</body>
</html>