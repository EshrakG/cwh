<?php


echo " Welcome to the stage of where are ready to get connected <br>";
/* ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/

// Connecting to the DataBase
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection 
$conn = mysqli_connect($servername , $username, $password);

// die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was succesful";
}

?>