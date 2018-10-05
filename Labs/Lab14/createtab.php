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
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP

)";


if(mysqli_query($conn, $sql)){
    echo "Tabla creada";
}else{
    echo "Error creando tabla " . mysqli_error($conn);
}


//Close connection
mysqli_close($conn);
?>