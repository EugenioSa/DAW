<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//Create table
$sql = "CREATE TABLE Usuarios (

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
age INT(3) NOT NULL,
gender VARCHAR(50),
mail VARCHAR(50),
reg_date TIMESTAMP

)";


if(mysqli_query($conn, $sql)){
   
}else{
    echo "Error creando tabla " . mysqli_error($conn);
}


//Close connection
mysqli_close($conn);
?>