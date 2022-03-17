var tempo = 3

var contador = setInterval(function () {
  tempo -= 1

  if (tempo < 0) {
    window.location.href = 'index.html'
    console.log(tempo)
  } else {
    document.getElementById(
      'contador'
    ).innerHTML = `Enviando formulário: ${tempo} `
  }
}, 1000)

function next(){
  window.location.href = 'obrigado.html'
}