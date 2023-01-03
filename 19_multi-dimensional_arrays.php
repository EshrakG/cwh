<?php
echo "<h2>Welcome to multi dimensional arrays in php <br></h2>";

// Creating a two dimensional arrays 
$multiDim = array(
                    array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1),
                    // array(2,5,7,8)
);
 
//echo var_dump($multiDim);
//echo $multiDim[1][2];
//  for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim);
//     echo "<br>";
//  }



for ($i=0; $i < count($multiDim); $i++) { 
     for ($j=0; $j <count($multiDim[$i]) ; $j++) { 
        echo $multiDim[$i][$j];
        echo ' ';
     };
    echo "<br>";
 }
?>