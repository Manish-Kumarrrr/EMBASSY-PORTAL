<?php
  $adn=$_GET["adn"];

    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        // Submit these to a database
        // Sql query to be executed 
        $sql = "UPDATE visa SET status='ACCEPTED'  WHERE adhaar='$adn'";
        $result = mysqli_query($conn, $sql);
       header('location:admin.php');
    
    }




        ?>