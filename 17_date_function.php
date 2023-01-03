<?php
echo "Welcome to date function<br>";

$d = date("d l"); // The  different between d and j is {d start with 0 example 01,02,03 } {j isn't start with 0}
echo "Todays date is $d <br>";

$da =date("dS F Y");// Note : [ S => English ordinal suffix for the day of week] Note : [ F => A full textual represation of a month,three letters] Note : [Y => A full numeric represation of a year]
echo "Todays date is $da <br>";


$dat =date("dS F Y, g:i A");//Note => [g = Hour , i = minitue , A = am/pm]
echo "Todays date is $dat <br>";
$year = date("Y");
echo "<br>";
echo "CopyRight $year | All rights reserved";
?>