let altura = 0
let largura = 0

function tamanhoTela() {
  altura = window.innerHeight
  largura = window.innerWidth

  console.log(largura)
}

if(largura < 574){
  VanillaTilt.init(document.querySelectorAll('.caixa'), {
    max: 25,
    speed: 400,
    glare: true,
    'max-glare': 1
  })
}


var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true
  },
  pagination: {
    el: '.swiper-pagination'
  }
})


