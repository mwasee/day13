<?php

//from value



$hostname="localhost";
$username="root";
$password="";
$databasename="newpaper";


// Create connection
$conn = new mysqli($hostname, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO topnews (id,title,papername) VALUES (14,'Vivo Phone Offer', 'Selfi Down')";
$sql = "INSERT INTO topnews (id,title,papername) VALUES (15,'oppo Phone Offer', 'camera phone')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>