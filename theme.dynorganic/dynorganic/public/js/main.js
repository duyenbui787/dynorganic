$(document).ready(function () {
    $('.owl-carousel.carousel-main-banner').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        autoplay: false,
        slideBy: 1,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
         
        }
    });

    $('.owl-carousel.carousel-hot-product').owlCarousel({
        loop: false,
        dots: false,
        nav: false,
        autoplay: false,
        margin: 10,
        slideBy: 1,
        smartSpeed: 50,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

      //Tab
      $('.box-tab').hide()
      $('.box-tab:eq(0)').show()
      $('.tab-title h4').click(function(){
          var n = $('.tab-title h4').index(this)
          $('.box-tab:eq(0)').hide()
          $('.box-tab').hide()
          $('.box-tab:eq('+n+')').fadeIn()
      })
  
      $('#tab .tab-title h4 ').click(function(){
          $('#tab .tab-title h4 ').removeClass('active')
          $(this).addClass('active')
      })

// MENU RESPONSIVE
// $('.menu-responsive').hide();
// $('#icon-delete').hide();

$('#toggle').click(function() {
    $('.menu-responsive').toggle() && $('#toggle').toggle() && $('#icon-delete').toggle();
});
$('#icon-delete').click(function(){
    $('#icon-delete').toggle() && $('#toggle').toggle() && $('.menu-responsive').toggle();
})
$(window).scroll(function() {
    $('.menu-responsive').hide();
});
// HEADER 
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#top-banner').hide();
    } else {
        $('#top-banner').show();
    }
});
 $('a.brand').click(function(){
    return false;
 })
//BACK TO TOP
$('#btn-top').hide();
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#btn-top').fadeIn();
    } else {
        $('#btn-top').fadeOut();
    }
});
$('#btn-top').click(function() {
    $('html,body').animate({ scrollTop: 0 }, 500);
});

// FILTER
$('.sort-bar-dropdown').click(function(){
    $('.select-menu').toggle();
})
$('.product-list-inner').hover(function(){
    $('.select-menu').hide();
})
$('#header').hover(function(){
    $('.select-menu').hide();
})
$(window).scroll(function(){
    $('.select-menu').hide();
})

// MODAL
$('.btn-review-now-wp').click(function() {
    $('#demo-modal').modal();
    return false;
});

$('.stars-rating i').click(function(){
    $(this).toggleClass('active');
})





});








