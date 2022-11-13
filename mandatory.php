<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";


// Create a connection
$conn = mysqli_connect($servername, $username, $password);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


//database creation---------------
$sql = "CREATE DATABASE project";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
else{
    echo "The db was created successfully!<br>";
}
$conn = mysqli_connect($servername, $username, $password,"project");
if (!$conn){
    die("Sorry we failed to connect with database : ". mysqli_connect_error());
}
else{
    echo "Connection with database successful<br>";
}
//account table creation---------------
$sql="CREATE TABLE `project`.`account` (`name` VARCHAR(15) NOT NULL , `surname` VARCHAR(15) NOT NULL , `email` TEXT NOT NULL , `phone` BIGINT(15) NOT NULL , `adhaar` BIGINT(15) NOT NULL , `pan` VARCHAR(20) NOT NULL , `dob` DATE NOT NULL , `pass` VARCHAR(12) NOT NULL , `address` TEXT NOT NULL , `face` VARCHAR(100) NOT NULL , `identity` VARCHAR(100) NOT NULL ,PRIMARY KEY (`adhaar`)) ";




$result = mysqli_query($conn, $sql);
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
