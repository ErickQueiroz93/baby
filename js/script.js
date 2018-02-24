// Válidar CPF
function validarCPF(element) {
    var cpf = form2.cpf.value;

  cpf = element.value;
  cpf = cpf.replace(/[^\d]+/g, '');
  // if (cpf == '') return alert("Informe um CPF válido");
  // Elimina CPFs invalidos conhecidos    
  if (cpf.length != 11 ||
    cpf == "00000000000" ||
    cpf == "11111111111" ||
    cpf == "22222222222" ||
    cpf == "33333333333" ||
    cpf == "44444444444" ||
    cpf == "55555555555" ||
    cpf == "66666666666" ||
    cpf == "77777777777" ||
    cpf == "88888888888" ||
    cpf == "99999999999")
    return alert("Número de CPF inválido");;
  // Valida 1o digito 
  add = 0;
  for (i = 0; i < 9; i++)
    add += parseInt(cpf.charAt(i)) * (10 - i);
  rev = 11 - (add % 11);
  if (rev == 10 || rev == 11)
    rev = 0;
  if (rev != parseInt(cpf.charAt(9)))
    return alert("Verifique o CPF");;
  // Valida 2o digito 
  add = 0;
  for (i = 0; i < 10; i++)
    add += parseInt(cpf.charAt(i)) * (11 - i);
  rev = 11 - (add % 11);
  if (rev == 10 || rev == 11)
    rev = 0;
  if (rev != parseInt(cpf.charAt(10)))
   return alert("Verifique o CPF");;
  return element.style.backgroundColor = "white";
}

// bloqueio de tecla
window.onkeydown = function() {
    var key = event.keyCode || event.charCode || e.which;
    if(key==123){ alert('Proibido copia deste site.'); return false; }
}

function click(){
    if (event.button==2){
        alert('Proibido copia deste site.');
    }
}
document.onmousedown=click;


// bloqueia rolagem do site
// function setTopo(){
//     $(window).scrollTop(0);
// }
// $(window).bind('scroll', setTopo);


