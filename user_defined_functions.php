<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h2>User Defined Functions</h2>
      <?php 
       //function greeting(string $name){
       // return "How have you been " . $name . "?";
       //}

       //$test=  greeting("James");
       //echo $test;

       function calculate(int $num1,int $num2){
        $results=$num1+$num2;
        return $results;
       }
    $test= calculate(3,4);
    echo "Resultts: ".$test;
      ?>
</body>
</html>