$(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({
        'overflow': 'visible'
    });
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$(document).ready(function() {

    $(".footer-area").html('<div class=" footer"><div class="container"><div class="row"><div class="col-md-3 col-sm-6 wow fadeInRight animated"><div class="single-footer"><h4>Nosotros </h4><div class="footer-title-line"></div><img src="assets/img/logo-1.png" alt="" class="wow pulse" data-wow-delay="1s"><p>En Vásquez y Vásquez nos especializamos en mejorar continuamente nuestros servicios, generando valor a través del sector inmobiliario, satisfaciendo las necesidades de nuestros clientes, manteniendo relaciones de confianza duraderas.</p></div></div><div class="col-md-3 col-sm-6 wow fadeInRight animated">' +
        '<div class="single-footer" id="direction"><h4>Dirección </h4><div class="footer-title-line"></div><ul class="footer-adress"><li ><i class="pe-7s-map-marker strong"> </i><p> Carrera 7 No. 74 - 56 Of. 907 - 908  / <br><i class="pe-7s-map-marker strong"> </i> Bogotá - Colombia</p></li><li><i class="pe-7s-mail strong"> </i> <p>Arriendos@inmobiliariavasquezyvasquez.com</p></li><li><i class="pe-7s-call strong"> </i><p> PBX: (601) 313 1710 - Fax: (601) 313 4673</p></li></ul></div></div>' +
        '<div class="col-md-3 col-sm-6 wow fadeInRight animated"><div class="single-footer"><h4>Links de Interes</h4><div class="footer-title-line"></div>' +
        '<ul class="footer-blog"><li><div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0"><a href="http://www.ellibertador.co/wps/portal/" target="_blank"><img src="assets/img/el-libertador-x.jpg"></a>' +
        '<span class="blg-date"></span></div><div class="col-md-8  col-sm-8 col-xs-8  blg-entry"><h6><a href="http://www.ellibertador.co/wps/portal/" target="_blank">El Libertador</a></h6><p style="line-height: 17px; padding: 8px 2px;">Aliados Estrategicos</p></div></li><li><div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0"><a href="http://www.segurosbolivar.co/wps/portal/" target="_blank"><img src="assets/img/sg-bolivar.jpg"></a><span class="blg-date"></span></div><div class="col-md-8  col-sm-8 col-xs-8  blg-entry"><h6><a href="http://www.segurosbolivar.co/wps/portal/" target="_blank">Seguros Comerciales Bolívar</a>' +
        '</h6><p style="line-height: 17px; padding: 8px 2px;">Aliados Estrategicos</p></div></li><li><div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">' +
        '<a href="https://www.olx.com/" target="_blank"><img src="assets/img/olx.png"></a><span class="blg-date"></span></div><div class="col-md-8  col-sm-8 col-xs-8  blg-entry"><h6><a href="https://www.olx.com/" target="_blank">OLX</a></h6><p style="line-height: 17px; padding: 8px 2px;">Aliados Estrategicos</p></div></li><li><div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0"><a href="http://www.ciencuadras.com/" target="_blank"><img src="assets/img/cien1.jpg"></a><span class="blg-date"></span></div><div class="col-md-8  col-sm-8 col-xs-8  blg-entry"><h6> <a href="#" target="_blank">CIENCUADRAS</a></h6><p style="line-height: 17px; padding: 8px 2px;">Aliados Estrategicos</p></div></li></ul>' +
        '</div></div><div class="col-md-3 col-sm-6 wow fadeInRight animated"><div class="single-footer news-letter"><h4>Noticias</h4><div class="footer-title-line"></div><p>Compártenos tu correo y mantente al tanto de todas las noticias e inmuebles disponibles para ti.</p><form><div class="input-group"><input class="form-control" type="text" placeholder="E-mail ... "><span class="input-group-btn"><button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button></span></div><!-- /input-group --></form></div></div></div></div></div><div class="footer-copy text-center"><div class="container"><div class="row"><div class="pull-left"><span> (C)<a href="http://www.dexcondigital.com">Dexcon Digital</a> , Todos los derechos reservados 2017 </span></div></div></div></div>');

    $('input').iCheck({
        checkboxClass: 'icheckbox_square-yellow',
        radioClass: 'iradio_square-yellow',
        increaseArea: '20%' // optional
    });


    $('.layout-grid').on('click', function() {
        $('.layout-grid').addClass('active');
        $('.layout-list').removeClass('active');

        $('#list-type').removeClass('proerty-th-list');
        $('#list-type').addClass('proerty-th');

    });

    $('.layout-list').on('click', function() {
        $('.layout-grid').removeClass('active');
        $('.layout-list').addClass('active');

        $('#list-type').addClass('proerty-th-list');
        $('#list-type').removeClass('proerty-th');

    });

});
$(document).ready(function() {
    $("#bg-slider").owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 100,
        autoPlay: 5000,
        paginationSpeed: 100,
        singleItem: true,
        mouseDrag: false,
        transitionStyle: "fade"
        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false 
    });
    $("#prop-smlr-slide_0").owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 100,
        pagination: true,
        paginationSpeed: 100,
        items: 3

    });
    $("#testimonial-slider").owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 100,
        pagination: true,
        paginationSpeed: 100,
        items: 3
    });

    $('#price-range').slider();
    $('#property-geo').slider();
    $('#min-baths').slider();
    $('#min-bed').slider();

    var RGBChange = function() {
        $('#RGB').css('background', '#FDC600')
    };

    // Advanced search toggle
    var $SearchToggle = $('.search-form .search-toggle');
    $SearchToggle.hide();

    $('.search-form .toggle-btn').on('click', function(e) {
        e.preventDefault();
        $SearchToggle.slideToggle(300);
    });

    setTimeout(function() {
        $('#counter').text('0');
        $('#counter1').text('0');
        $('#counter2').text('0');
        $('#counter3').text('0');
        setInterval(function() {
            var curval = parseInt($('#counter').text());
            var curval1 = parseInt($('#counter1').text().replace(' ', ''));
            var curval2 = parseInt($('#counter2').text());
            var curval3 = parseInt($('#counter3').text());
            if (curval <= 1007) {
                $('#counter').text(curval + 1);
            }
            if (curval1 <= 1280) {
                $('#counter1').text(sdf_FTS((curval1 + 20), 0, ' '));
            }
            if (curval2 <= 145) {
                $('#counter2').text(curval2 + 1);
            }
            if (curval3 <= 1022) {
                $('#counter3').text(curval3 + 1);
            }
        }, 2);
    }, 500);

    function sdf_FTS(_number, _decimal, _separator) {
        var decimal = (typeof(_decimal) != 'undefined') ? _decimal : 2;
        var separator = (typeof(_separator) != 'undefined') ? _separator : '';
        var r = parseFloat(_number)
        var exp10 = Math.pow(10, decimal);
        r = Math.round(r * exp10) / exp10;
        rr = Number(r).toFixed(decimal).toString().split('.');
        b = rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "\$1" + separator);
        r = (rr[1] ? b + '.' + rr[1] : b);

        return r;
    }

})

// Initializing WOW.JS

new WOW().init();