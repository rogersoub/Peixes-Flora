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




// TIPO DE AJUDA

function tipodeAjuda(){
    var total=5
    // tipo de local
    var tpl = document.getElementsByName('tAjudl')
    // tipo de área
    if(tpl[0].checked){
        total = "Não será cobrado."
         document.getElementById('cTot').value = total;
    } else if(tpl[1].checked){
        var tpA = document.getElementsByName('tAjud')
        if(tpA[0].checked){
            total = 45.90
        } else if(tpA[1].checked){
            total=80.90
        } else if(tpA[2].checked){
            total = 45.90
        } else if(tpA[3].checked){
            total = 60.90
        }  else if(tpA[4].checked){
            var quant = Number(prompt('Digite em quantos ítens/áreas você precisa de ajuda:'))
            var v = []
            var res = document.querySelector('.res')
            for (var c=0;c<quant;c++){
                v[c] = prompt('Digite o nome do '+c+1+'° ítem/área que precisa de ajuda:')
                res.innerHTML += `<p>Ajuda em <b>${v[c]}</p></b>`
                var c2 = v[c].length
                if (c2 >3){
                total = 300
                } else{
                    total=50
                }
            }
            
        } else{
            alert('Selecione a área de ajuda')
        }
    }else{
        alert('Por favor, selecione o local de ajuda')
    }
     document.getElementById('cTot').value = total;
   
}




//MOSTRA IMAGEM DO PRODUTO GERAL NO INÍCIO 
function racoes(){
    var rac = window.document.querySelector('.pg-img')
    rac.src = '/_imagens/racao.png' 
}
function verme(){
    var ver = window.document.querySelector('.pg-img')
    ver.src = '/_imagens/vermifugo.png' 
}
function imuno(){
    var imu = window.document.querySelector('.pg-img')
    imu.src = '/_imagens/imunizante.png' 
}
// aquários
function bomba(){
    var bom = window.document.querySelector('.pg-img')
    bom.src = '/_imagens/bomba.png' 
}
function enfeite(){
    var enfeite = window.document.querySelector('.pg-img')
    enfeite.src = '/_imagens/enfeite.png' 
}
function limpeza(){
    var lim = window.document.querySelector('.pg-img')
    lim.src = '/_imagens/limpeza.png' 
}
