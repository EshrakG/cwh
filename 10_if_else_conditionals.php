<?php
$a = 65;
$b = 9;

if($a > 78){
    echo "'A' is greater than 78";
    echo "<br>";
}else{
    echo "'A' is not greater than 78";
    echo "<br>";
}


$age = 13;

if ($age > 17){
    echo "You can drink water tea and alchol";
    echo "<br>";
}
elseif($age > 13){
    echo "You can drink tea only with water . No alchol for you";
    echo "<br>";
}else{
    echo "You can drink water only";
    echo "<br>";
}

echo "Done";
echo "<br>";
$age = 25;

if ($age > 25){
    echo "You are allowed to drive";
    echo "<br>";
}

elseif($age > 18){
echo "You can drive a bike";
echo "<br>";
}

else{
    echo "You are not permitted to drive";
    echo "<br>";
}
echo "Done";

?>