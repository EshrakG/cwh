<?php

echo "<h1>Welcome to associative arrys</h1>";

//associative arrys
$favCol = array(
    'EShrak' => 'red' ,
    'Fardin' => 'green',
    'Siam' => 'blue',
     10 => 'ok' 
);

echo $favCol['EShrak'];
echo"<br>";
echo $favCol[ 10 ]; // we can also use integer in associative arrays


//associative arrys with forech loops

foreach ($favCol as $key => $value) {
    echo "<br> Favourite color of $key is $value"; // example [$key =>EShrak] [$value => red]
}



?>

