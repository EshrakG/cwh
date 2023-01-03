<?php
$name = "Harry is a good boy ";
echo $name;
echo "<br>";

echo "The length of my string is " . strlen($name); //. operator for joing a string.
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "s"); // character position
echo "<br>";
echo str_replace("Harry","Rohan",$name); //replace
echo "<br>";
echo str_repeat($name, 3);
echo "<br>";
echo "<pre>";
echo rtrim("<pre>     this is a good boy   </pre>");
echo ltrim("<pre>     this is a good boy   </pre>");
echo "<pre>";
?>