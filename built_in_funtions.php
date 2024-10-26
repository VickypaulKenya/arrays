<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built in Functions</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h2>Built In Functions</h2>
    <?php 

    $string="Is your name Jane or Jene?";
 //echo strlen( $string);
 //echo strpos($string,"o");
 $name="moris";
 $new= str_replace("ene",$name,$string);
 //echo str_shuffle($new);
 //print_r(explode(" ",$new));

 $roads=["Thika","Tom","Moi"];

 //echo count($roads);
 
 //echo date("Y-M-D H:i:s");
 $date="2024-10-19 11:18:40";

  $converted= strtotime($date);
    echo "Converted: ".$converted;
    echo "<br>";

 $long=time();
    echo "Long: ".$long;
    echo"<br>";

 $today=$converted-$long;
 echo "Today: ".$today;
 echo"<br>";


    ?>
</body>
</html>