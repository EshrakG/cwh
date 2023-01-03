<?php 
$string = "This";
echo $string ;
echo "</br>";

// echo $lenn function;
$lenn = strlen($string); // main jinish
echo "The length of this string is ".$lenn;
echo "</br>";
// echo $word function = str_word_count
echo "The number of words in this string is ". str_word_count($string);
echo "</br>";
// echo $reverse function = strrev
echo "The reversed string is " .strrev($string);
echo "</br>";
// echo search function = strpos
echo "The search for is in this string is " .strpos($string, "is");
echo "</br>";

