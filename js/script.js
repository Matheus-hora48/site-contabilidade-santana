var largura = 0
largura = window.innerWidth


if (largura > 574) {
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
