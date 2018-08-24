
function password_validator() {
    var x = document.forms["myForm"]["contraseña"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    
    var y = document.forms["myForm"]["contraseña2"].value;
    if (y == "") {
        alert("Name must be filled out");
        return false;
    }
    
    
    if(x===y){
        
        alert("Las contraseñas son iguales");
    }else{
        
        alert("Las contraseñas son diferentes");
    }
}






function compra_productos(clicked_id){
    
       
    if((clicked_id === a1) || (clicked_id === a2)){
        
        alert("hola");
        
    }else 
    if((clicked_id == "b1") || (clicked_id == "b2")){
        
    }else   
    if((clicked_id == "c1") || (clicked_id == "c2")){
        
        
    }
    
}



function validador_personal(){
    
    
    var x = document.forms["myForm"]["nombre"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    
    
    var y = document.forms["myForm"]["pat"].value;
    if (y == "") {
        alert("Name must be filled out");
        return false;
    }
    
    var w = document.forms["myForm"]["mat"].value;
    if (w == "") {
        alert("Name must be filled out");
        return false;
    }
    
    var z = document.forms["myForm"]["edad"].value;
    if (z == "") {
        alert("Name must be filled out");
        return false;
    }
    
    
    if(z>18){
        
        alert("El usuario "+ x + " " + y + " " + w +" ha sido aceptado");
        
    }else{
        alert("El usuario es menor de edad");
    }
    
    
}