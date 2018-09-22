<?php

 include('lab9.html');
    
    function prom($arr){
        
        $acum = 0;
        $res = 0;
        $nums = 0;
    
        
        $arr = array(1,2,3,4,5);
        $nums = count($arr);
        
        for($i=0;$i<$nums;$i++){
            
            $acum = $acum + $arr[i];
            
        }
        
        $res = $acum/5;
        echo "$res";
    
        
        
    } 
    
    
    function med($arr){
        
        $acum = 0;
        $res = 0;
        $nums = 0;
    
        $arr = array(1,2,3,4,5);
        $nums = count($arr);
        
        if(($nums % 2)==1){
            $res = $arr[$nums/2];
        }else{
            $res = ($arr[$nums/2] + $arr[$nums/2 + 1])/2;
        } 
        
        echo "$res";
        
    } 
    
    
    
    function table(){
        
        $arr = array(1,2,3,4,5);
        $prom = 0;
        $med = 0;
        
        for($i=0;$i<count($arr);$i++){
            
            echo "$arr[$i] ";
        }
        
        
        $prom = prom($arr);
        $med = med($arr);
        

            echo "<li> $prom </li>";
            echo "<li> $med </li>";
            asort($arr);
            
        for($i=0;$i<count($arr);$i++){
            
            echo "$arr[$i] ";
        }
            
            arsort($arr);
            
        for($i=0;$i<count($arr);$i++){
            
            echo "$arr[$i] ";
        }
            
        
    }


    function sqr($n){
        
        
         $num = $n;
         $acumcuad = 0;
         $acumcub = 0;
        
        for($i=0;$i<$num;$i++){
            
            $acumcuad = $acumcuad * $acumcuad;
        }
        
        for($i=0;$i<$num;$i++){
            
            $acumcub = $acumcub * $acumcub;
        }
        
        
    }


    function extra($array){
        
        
        $acum = 0;
        $min;
        $max;
       
        
        
    }




    
    

?>