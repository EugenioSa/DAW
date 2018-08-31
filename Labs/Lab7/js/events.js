
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
    
    var arr = [1,0,4,-5,9,100,5,3,-2,0];
    var pos=0,neg=0,cer=0;
    
    for(i=0; i< 10; i++) {
        
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
    
    alert("Hay un arreglo con "+ neg + " numeros negativos, "+ pos + " numeros positivos y "+ cer + " ceros");
    
}



function matriz(){
    
    
    var arr = [[1,4,5,6,7],[3,6,9,10,1],[4,6,3,8,9]];
    
    res = new Array(3);
    
    var prom, acum = 0;
    
    
    for(i=0;i<3;i++){
        
        for(j=0;j<5;j++){
            
            acum = acum + arr[i][j];
        }
        
        prom = acum/5;
        res[i] = prom;
        
    }
    
    
    alert("Los promedios son de "+ res[0] + "," + res[1] + "," + res[2]);
    
}


function inverso(){
    
    
    var num,arr_cop;
    var arr;
    var j,i;
    
    num = prompt("Introduce un numero", "");
    arr = Array.from(num.toString());
    j=num.length;
    
    for(i=0;i<num.length;i++){
        
        
       // arr_cop[i] = arr[j-1];
        j--;
    }
    
    alert("El numero inverso es: "  );
    
    
}










