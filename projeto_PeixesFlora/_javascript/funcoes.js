function variosPeixes(tipo){
    if(tipo == 1){
        arquivo = "_imagens/peixe-retarcadol.png";
}
if(tipo == 2){
    arquivo = "_imagens/peixe-retarcadob.png";
}
if (tipo == 4){
    arquivo= "_imagens/peixe-retardador.png"
}
document.getElementById("colorido").src = arquivo;
}

function mudaFoto(foto){
    document.getElementById("icone").src = foto;
}


//JAVA
function tipodeAjuda(){
    var tp = parseInt(document.getElementById('cTipo').value);
    if(tp == 3){
        total = 100;
    } else if (tp == 2){
        total=80;
    } else{
        total=70;
    }

    document.getElementById('cTot').value = total;
}