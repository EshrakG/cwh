<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="div">This is my first PHP website </div>
       <?php
      //  echo "Hello world and this is printed";
       ?>
       <?php
       $variable1 = 5;
       $variable2 = 2;
       echo $variable1 +$variable2;
       echo"<br>";
       // operators
    //    Arithmetic operators
    echo "The value of variable1 + variable2 is ";
    echo $variable1 +$variable2;
    echo"<br>";
    echo "The value of variable1 + variable2 is ";
    echo $variable1 - $variable2;
    echo"<br>";
    //    Assingment operators
    $newVar = $variable1;
    $newVar += 1;
    $newVar -= 1;
    $newVar /= 1;
    $newVar *= 1;
    echo "The value of new variable is ";
    echo $newVar;
    echo "<br>";
    // Comparison Operators
    //echo "<h1>Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1==4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1==4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The value of 1==4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    //    Increment/Decrement operators
   echo $variable1++;
   echo "</br>";
   echo $variable1;
    //    echo $variable1--;
    //    echo ++$variable1;
    //    echo --$variable1;


    //    Logical operators
    // and(&&)
    // or (||)
    // xor (যা আছে তাই থাকবে) 
    // Not (!)

    $myVar =(true && true);
    echo var_dump($myVar);
    echo "</br>";
       ?>
       <?php
       //Primary Data types in php
    //    1. String
    //    2. Integer
    //    3. Float
    //    4. Boolean
    //    5. Array
    //    6.Object
    echo "Data Types";
    echo "</br>";
    
    $var ="This is a string";
    echo var_dump($var);
    echo "</br>";

    $var =67;
    echo var_dump($var);
    echo "</br>";

    $var =67.1;
    echo var_dump($var);
    echo "</br>";
       ?>
</body>
</html>