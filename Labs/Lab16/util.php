
<?php 



function connectDB(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DB";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}



function closeDB($connection){
    
    
    mysqli_close($connection);
}


function get_users(){
    
    
    $connection = connectDB();
    
    $sql = "SELECT id,name,age,gender,mail,reg_date FROM Usuarios";
    
    $result = mysqli_query($connection,$sql);
    
    closeDB($connection);
    
    return $result;
}



function get_gender($gender){
    
    $connection = connectDB();
    
    $sql = "SELECT id,name,age,gender,mail,reg_date FROM Usuarios WHERE gender='".$gender."' ";
    
    
    $result = mysqli_query($connection,$sql);
    
    closeDB($connection);
    
    return $result; 
    
}



function get_users_age($age){
    
    $connection = connectDB();
    
    $sql = "SELECT id,name,age,gender,mail,reg_date FROM Usuarios WHERE age='".$age."' ";
    
    
    $result = mysqli_query($connection,$sql);
    
    closeDB($connection);
    
    return $result; 
    
}



?>