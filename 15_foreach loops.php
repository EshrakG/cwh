<?php

echo " Welcome to the foreachloops <br>";
$arr = array("bannas", "apples", "bread", "HArpic");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }
// Better way to do this - forech loops
 foreach ($arr as $value) {
     echo "$value <br>";
 }
?>