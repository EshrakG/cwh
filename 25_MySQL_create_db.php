<?php
// Connecting to the DataBase
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection 

$conn = mysqli_connect($servername , $username, $password);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was succesful";
    echo "<br>";
}


// create a db
$sql = "CREATE DATABASE dbHarry8";
$result = mysqli_query($conn, $sql);
//Check for the database creation sucess
if($result){
    echo "The db was create succesfully!";
    echo "<br>";
}else{
    echo "The db was not create succesfully because of this error --->!". mysqli_error($conn);
}

echo "The result is ";
echo var_dump($result);
echo "<br>";



// die if connection was not successful

?>