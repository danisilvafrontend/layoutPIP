const CarouselIndex = document.querySelector('#fullcarousel')
const carousel = new bootstrap.Carousel(CarouselIndex, {
  interval: 6000,
  wrap: true,
  autoplay: true,
  keyboard: true,
})


// SEARCH FULLSCREEN
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}


// CARROSSEL ECOSSISTEMA
$(function () {
  
  $('.carrossel-ecossistema-impacto').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1, 
      dots: true,     
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,

      responsive: [
        {
          breakpoint: 1140,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
  })
})

// CARROSSEL NEGÓCIOS
$(function () {
  
  $('.carrossel-negocio-impacto').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1, 
      dots: true,     
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,

      responsive: [
        {
          breakpoint: 1140,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
  })
})

// CARROSSEL PARCEIROS INSTITUCIONAIS
$(function () {
  
  $('.carrossel-parceiros-institucionais').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,    
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $('#prev-parceiros-intitucionais'),
      nextArrow: $('#next-parceiros-intitucionais'),

      responsive: [
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              vertical: false,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})

// CARROSSEL APOIADORES
$(function () {
  
  $('.carrossel-apoiadores').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,    
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $('#prev-apoiadores'),
      nextArrow: $('#next-apoiadores'),

      responsive: [
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              vertical: false,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})

// CARROSSEL CORRENTE DO BEM
$(function () {
  
  $('.carrossel-corrente-do-bem').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,    
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $('#prev-corrente-do-bem'),
      nextArrow: $('#next-corrente-do-bem'),

      responsive: [
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              vertical: false,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})

// CARROSSEL PALESTRANTES
$(function () {
  
  $('.carrossel-palestrantes').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,    
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $('#prev-palestrante'),
      nextArrow: $('#next-palestrante'),

      responsive: [
          {
            breakpoint: 769,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})