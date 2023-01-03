<?php

echo "While loops in php"; echo "<br>";
 
// echo 1; echo "<br>";
// echo 2; echo "<br>";
// echo 3; echo "<br>";
// echo 4; echo "<br>";
// echo 5; echo "<br>";
$i = 1;
while($i < 11){
    echo "1* ";
    echo $i;
    echo "=";
    echo $i;
    echo "<br>";
    $i ++ ;
}
 
 
echo "<br>";


$i = 1;
while($i <= 5) {
  $x = 1;
  while($x <= 10) {
    echo $i * $x;
    echo "<br>";
    $x++;
  }
  //echo $i * $x;
  echo "<br>";
  $i++;
}
 


?>