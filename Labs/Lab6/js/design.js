
function text_appear(){
    
    document.getElementById("nat").style.fontStyle = "italic";
    document.getElementById("nat").style.fontSize = "20px";
    
    
    
}


function text_normal(){
    
    document.getElementById("nat").style.fontStyle = "normal";
    document.getElementById("nat").style.fontSize = "15px";
    
  
    
}

function info_appear(){
  
    alert("Registro realizado con exito");
}

function info_name(){
    
    alert("Procura poner el nombre en mayusculas");
}

function info_corr(){
    
    alert("El correo tiene que ir todo en minusculas");
}
    
function time_func() {
        setInterval(function(){ document.getElementById("titulo").style.color = "red" ;document.getElementById("titulo").style.fontSize="25px"; }, 3000);
    setInterval(function(){ document.getElementById("titulo").style.color = "blue" ; document.getElementById("titulo").style.fontSize="20px"; }, 4000);
    
}

  


function parp() {
    
    document.getElementById("dep").style.fontSize = "40px";
    
}



function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}