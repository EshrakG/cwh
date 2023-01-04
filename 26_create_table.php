<?php
// Connecting to the DataBase
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

// Create a connection 

$conn = mysqli_connect($servername , $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was succesful";
    echo "<br>";
}

// create table in the db
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

//Check for the table creation creation sucess
if($result){
    echo "The table was create succesfully!";
    echo "<br>";
}else{
    echo "The table was not create succesfully because of this error --->!". mysqli_error($conn);
}

echo "The result is ";
echo var_dump($result);
echo "<br>";
?>