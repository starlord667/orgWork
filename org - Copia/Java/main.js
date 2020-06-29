// Event MenuScrool

var _controlNav = false;
$(document).scroll(function (e){
    var scrollTop = $(document).scrollTop();

    if(scrollTop > $('.menu').heigth()){

        if(_controlNav == false){
            $('.menu').addClass('fixed-top');
            $('.menu').hide();
            $('.menu').fadeIn('slow');
            _controlNav = true;
        }

    }else{

    }
});




// Slick Dots setup

$('.slider-principal').slick({
    dots:true,
    infinite:true,
    slidesToShow: 1,
    slidesToScroll: 1
    // ,
    // autoplay: true,
    // autoplaySpeed: 3500
});

// Musicas
// goosetaf - clear skies ft. HM surf