//Get modal element 
var modal=document.getElementById('modalSimples');
//Get Abrir butao modal
var modalbtn=document.getElementById('modalbtn');
//Get element buttao salvar/proximo
//var btnSalvar=document.getElementsByClassName('btnSalvar')[0];
//Get butao fechar
var closebtn=document.getElementsByClassName('closebtn')[0];
//criar evento para abrir o modal
modalbtn.addEventListener('click',abrirModal);
//criar evento para fechar o modal
closebtn.addEventListener('click',fecharModal);
//criar evento sair clicando fora do modal
window.addEventListener('click',clickFora);
//criar funcao pra este evento
function abrirModal() {
    modal.style.display="block";
    modal.style.backgroundColor="rgba(0,0,0,0.5)";
    modal.style.overflow="auto";
}
//criar funcao pra este evento
function fecharModal() {
    modal.style.display="none";
    
}

//criar funcao sair clicando fora do modal
function clickFora(e) {
    if(e.target==modal){modal.style.display="none";}
    
}
//////////////////////////////////////////////////////////////////
$("#step-1").css("opacity","1"); 
$(".tab").css("display","none");
$("#tab-1").css("display","block");

function executar(tabOculta, tabMostrado){
 if (tabOculta < tabMostrado) {
   var tabActual = 0;
   x=$("#tab-"+tabOculta);
   y=$(x).find("input");
   for (i = 0; i < y.length; i++) {
  if (y[i].value == "") {
    $(y[i]).css("background","#ffdddd");
    return false;
  }
 }
 } 

 //Progress bar
 for ( i = 0; i < tabMostrado;) {
        i++;

     $("#step-"+i).css("opacity","1");
    
     for ( a = 1; a < tabMostrado;a++) {
       $("#step-"+a).css("opacity","0.25");           
     }
     if (i==5) {
      $(".step").css("opacity","1"); 
     }
 }
   //switch tab
   $("#tab-"+tabOculta).css("display","none");
   $("#tab-"+tabMostrado).css("display","block");
   $("input").css("background","#fff");

}
