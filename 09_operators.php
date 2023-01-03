<?php

/* Operators in PHP
1.Arithmetic Operators
2.Assignment Operators
3.Comparison Operators
4.Logical Operators
*/

//1.Arithmetic Operators
$a = 40;
$b = 6;


echo "For a + b, the result " .  ($a + $b) . "<br>";
echo "For a - b, the result " .  ($a - $b) . "<br>";
echo "For a / b, the result " .  ($a / $b) . "<br>";
echo "For a * b, the result " .  ($a * $b) . "<br>";
echo "For a % b, the result " .  ($a % $b) . "<br>"; // ভাগশেষ 0
echo "For a ** b, the result " .  ($a ** $b) . "<br>"; //পাওয়ার
echo "<br>";

// 2.Assignment Operators

$a -= 0;
echo "For a, the value is ". $a. "<br>";
$a += 0;
echo "For a, the value is ". $a. "<br>";
$a /= 5;
echo "For a, the value is ". $a . "<br>";
$a *= 6;
echo "For a, the value is ". $a . "<br>";
$a %= 5;
echo "For a, the value is ". $a . "<br>";
$a **= 6;
echo "For a, the value is ". $a . "<br>";
 
//3.Comparison Operators

$x = 70;
$y = 7;

echo "For x == y, the result is ";
echo var_dump ($x == $y);
echo "<br>";

echo "For x > y, the result is ";
echo var_dump ($x > $y);
echo "<br>";

echo "For x < y, the result is ";
echo var_dump ($x < $y);
echo "<br>";

echo "For x <> y, the result is ";
echo var_dump ($x <> $y); // not equal to operator 
echo "<br>";

//4.Logical Operators

$m = true;
$n = false;

 echo "For m and n, the result is ";
 echo var_dump ($m && $n); // && and
 echo "<br>";

 echo "For m or n, the result is ";
 echo var_dump ($m || $n); // or ||
 echo "<br>";


?>