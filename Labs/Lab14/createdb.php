<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


//Create database
$sql = "CREATE DATABASE DB";
if (mysqli_query($conn, $sql)) {
    echo "Base de datos creada";
} else {
    echo "Error creando la base de datos " . mysqli_error($conn);
}

//Close connection
mysqli_close($conn);
?>