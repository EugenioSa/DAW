<?php
    
    
    function valid_empty($var){

        if(trim($var) == ''){
            
            return false;
        }else{
            return true;
        }
        
    }


    function valid_match($var1, $var2){
        
        
        if($var1==$var2){
            
            return true;
        }else{
            return false;
        }
    }


    function valid_email($email){
        
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
            
            return false;
        }else{
            
            return true;
        }
    }
    
    
    

?>