$(function () {
    $('#modalButton').click(function () {
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });





    // slider/carousel
    var owl = $('#hero-header-1');
    owl.owlCarousel({
        singleItem: true,
        autoPlay: true,
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 500,
        rewindSpeed: 400,
        autoHeight: true,
        addClassActive: true,
        afterMove: function() {
            $('.owl-item.active h1').addClass('animated fadeInUpSmall');
            $('.owl-item.active p').addClass('animated-md fadeInUpSmall');
            $('.owl-item.active .bttn-div').addClass('animated-lt fadeInUpSmall');
        },
        beforeMove: function() {
            $('.owl-item h1').removeClass('animated fadeInUpSmall');
            $('.owl-item p').removeClass('animated-md fadeInUpSmall');
            $('.owl-item .bttn-div').removeClass('animated-lt fadeInUpSmall');
        },
    });

    $('.owl-item.active h1').addClass('animated fadeInUpSmall');
    $('.owl-item.active p').addClass('animated-md fadeInUpSmall');
    $('.owl-item.active .bttn-div').addClass('animated-lt fadeInUpSmall');

    // next slide
    $('.next-feature').on('click', function(event) {
        owl.trigger('owl.next');
    });

    // prev slide
    $('.prev-feature').on('click', function(event) {
        owl.trigger('owl.prev');
    });

    // handle cursor keys
    var owlbttn = $('#hero-header-1').data('owlCarousel');
    $(document.documentElement).keyup(function(event) {
        if (event.keyCode == 37) {
            owlbttn.prev();
        } else if (event.keyCode == 39) {
            owlbttn.next();
        }
    });


});
//
// $('.form-search').hide();
// $('#search-hide').hide();
// $('#search-show').click(function(){
// 	$('.form-search').animate({height: "show"}, 300);
// 	$('#search-show').hide();
// 	$('#search-hide').show();
// });
//
// $('#search-hide').click(function(){
// 	$('.form-search').animate({height: "hide"}, 300);
// 	$('#search-show').show();
// 	$('#search-hide').hide();
// });
//
