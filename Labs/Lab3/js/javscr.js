
function cuadrados() {
    
    var num = prompt("Introduce un numero mayor a cero", "1");
    
    for(i = 0; i < num; i++) {
        
        document.write(i+1 + " - " + ((i+1)*(i+1)) + " - " + ((i+1)*(i+1)*(i+1))  + "<br>");

    }
     
   
}


function suma() {
    
    var num1 = Math.round(Math.random()*100)
    
    var num2 = Math.round(Math.random()*100)
    
    tmp_inic = new Date();
    var var_inic = tmp_inic.getSeconds();
    
    var res = prompt("Introduce el resultado de la suma de estos dos numeros " + num1 + "+" + num2 , "");
    
    
    tmp_fin = new Date();
    var var_fin = tmp_fin.getSeconds();
    
    var tiempo = var_fin - var_inic;
    
    
    if(res == (num1+num2)) {
        
        alert("Resultado correcto" + "\n" + "Tiempo: "+ tiempo);
    }
    else {
        
        alert("Resultado incorrecto\n Tiempo: "+ tiempo);
        
    }
      
}




function contador() {
    
    var arr = {1,0,4,-5,9,100,5,3,-2};
    var pos,neg,cer;
    
    for(i=0; i< arr.length; i++) {
        
        if(arr[i] > 0){
            pos++;
        }
        else 
        if(arr[i] < 0){
            neg++;
        }
        else{
            cer++;
        }
        
    }
    
}












