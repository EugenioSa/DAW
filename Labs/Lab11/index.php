<?php 

include 'valid.php';

$fname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
$lname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
$pass1 = isset($_POST['password']) ? $_POST['password'] : null;
$pass2 = isset($_POST['password2']) ? $_POST['password2'] : null;
$mail = isset($_POST['mail']) ? $_POST['mail'] : null;


$errores = array();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    function _e($fname,$lname,$pass1,$pass2,$mail) {
        echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');
        echo htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');
        echo htmlspecialchars($pass1, ENT_QUOTES, 'UTF-8');
        echo htmlspecialchars($pass2, ENT_QUOTES, 'UTF-8');
        echo htmlspecialchars($mail, ENT_QUOTES, 'UTF-8');
        //echo htmlentities($string, ENT_QUOTES, 'UTF-8');
    }


    if(!valid_empty($fname)){
        
        $errores[] = 'The first name is empty';
        
    }
    
    if(!valid_empty($lname)){
        
        $errores[] = 'The last name is empty';
        
    }
    
    if(!valid_empty($pass1)){
        
        $errores[] = 'The password is empty';
        
    }
    
    if(!valid_match($pass1,$pass2)){
        
        $errores[] = 'The passwords dont match';
        
    }
    
    if(!valid_empty($mail)){
        
        $errores[] = 'The mail is empty';
        
    }
    
    
    
    if(!$errores){
      header('Location: validado.html');
      exit;
   }
    
    

}
include("form.html");

?>

