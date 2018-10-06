<?php

include 'Lab14.html';

require_once ('util.php');
    
$gender = 'male';
$age = 20;
    
$users = get_users();
$gender_users = get_gender($gender);
$age_users = get_users_age($age);

if(mysqli_num_rows($users) > 0){
    echo"<br><br>Users: <br>";
    while($row = mysqli_fetch_assoc($users)){
        
        echo "<br><br>";
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["name"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["age"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["gender"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["mail"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["reg_date"] . "</td>";
        echo "</tr> <br>";
    }
}




if(mysqli_num_rows($gender_users) > 0){
    echo"<br><br>Male Users: <br>";
    while($row = mysqli_fetch_assoc($gender_users)){
        echo "<br><br>";
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["name"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["age"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["gender"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["mail"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["reg_date"] . "</td>";
        echo "</tr> <br>";
    }
}




if(mysqli_num_rows($age_users) > 0){
    echo"<br><br>Users of 20 years: <br>";
    while($row = mysqli_fetch_assoc($age_users)){
        echo "<br><br>";
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["name"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["age"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["gender"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["mail"] . "</td>";
        echo "<td> &nbsp;&nbsp;&nbsp;" . $row["reg_date"] . "</td>";
        echo "</tr> <br>";
    }
}

 


?>