<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h2>Loops in PHP!</h2>
    
    <?php

/* for($i=0; $i!=$n; $i++){
  
echo "This is iteration number " . $i . "<br>";
}*/

  /*$n=5;
  while($n < 10){
    echo $n;
    $n++;
  }*/

  /*$test=10;

  do{
    echo $test;
    $test++;
  }while($test<10);*/

  /*$drinks=array("Juice","Energy Drink","Water");

  foreach($drinks as $drink){
          echo "This is ".$drink."."."<br>";
  }*/

$drinks=array("Juice"=>"Orange","Energy Drink"=>"dark black","Water"=>"colorless");


     foreach($drinks as $drink=>$color){
          echo "This is ".$drink." that has a color ".$color."<br>";
     };
    ?>

</body>
</html>