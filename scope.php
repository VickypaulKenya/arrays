<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h2>Local  and  Global Scopes</h2>

    <?php
    $name="James"; //global scope
      function display(){
        global $name;
        $brand="Mercedes"; //local scope

      static  $staticVariable=0; //static scope variable
         $staticVariable++;
        $test=$name." drives ".$brand;
        return $staticVariable;
      };

      //echo display();
      //echo display();
      //echo display();

      class MyClass{
        static public $name="James";
    static public $staticVariable="Hello";
       
     public function myApp(){
        return $this->$staticVariable;
     }

      }
print_r(MyClass::$staticVariable);

    ?>
    
</body>
</html>