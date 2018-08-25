
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




var acum_p=0,acum_s=0,acum_t = 0,acum_total=0;

function pri_producto_men(){
    
    if(acum_p>0 || ((acum_p-1)==0)){
        acum_p = acum_p -1;
    
        acum_total= acum_total-3000;
    }
   document.getElementById("a1").addEventListener("click", function(){
         document.getElementById("p").innerHTML = acum_p;
   });
    
    total(acum_total);
    
}


function pri_producto_mas(clicked_id){
    
    acum_p = acum_p +1;
    acum_total= acum_total+3000;
    
    
   document.getElementById("a2").addEventListener("click", function(){
         document.getElementById("p").innerHTML = acum_p;
   });
    
    total(acum_total);
    
}

function seg_producto_men(){
    
    if(acum_s>0 || ((acum_s-1)==0)){
        acum_s = acum_s -1;
        acum_total= acum_total-2500;
    }
    
    
   document.getElementById("b1").addEventListener("click", function(){
         document.getElementById("s").innerHTML = acum_s;
   });
    
    total(acum_total);
}


function seg_producto_mas(clicked_id){
    
    acum_s = acum_s +1;
    acum_total= acum_total+2500;
    
    
   document.getElementById("b2").addEventListener("click", function(){
         document.getElementById("s").innerHTML = acum_s;
   });
    
    total(acum_total);
    
}


function ter_producto_men(){
    
    if(acum_t>0 || ((acum_t-1)==0)){
        
        acum_t = acum_t -1;
        acum_total= acum_total-5000;
    }
    
    total(acum_total);
   document.getElementById("c1").addEventListener("click", function(){
         document.getElementById("t").innerHTML = acum_t;
   });
    
    total(acum_total);
    
}


function ter_producto_mas(clicked_id){
    
    acum_t = acum_t +1;
    acum_total= acum_total+5000;
    
    total(acum_total);
   document.getElementById("c2").addEventListener("click", function(){
         document.getElementById("t").innerHTML = acum_t;
   });
    
    total(acum_total);
    
}



function total(total_compra){
    
         document.getElementById("tot").innerHTML = acum_total;
    
        document.getElementById("totiva").innerHTML = acum_total + (acum_total*.03);
    
    
    
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