//BANNER - PÁGINA HOME

$('.fullbanner').slick({

    dots: true

});

//FIM BANNER HOME 

//BANNER - PÁGINA A EMPRESA (DISPLAY NONE)

$('.galeria').slick({

    dots: false,

    arrows: false

});

//FIM BANNER A EMPRESA (DISPLAY NONE)

//MENU FIXO

$(window).scroll(function(){

    if($(this).scrollTop() > 50){

        $('header').addClass('fixed');

    } else {

        $('header').removeClass('fixed');

    }

});

//FIM MENU FIXO

//BOTÃO ORÇAR AGORA SCROLL - PÁGINA DETALHES SERVIÇOS 

$('.btn-scroll').on('click', function(){
    $('html, body').animate({
        scrollTop: $(window).width() < 768 ? $('.orcamento').offset().top - 134 : $('.orcamento').offset().top - 115
    }, 500);
});

//FIM BOTÃO ORÇAR AGORA SCROLL - PÁGINA DETALHES SERVIÇOS 

// SETAR COOKIE DE LGPD

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

$('.btn-cookie').on('click', function(){
    setCookie('acceptedLGPDCookie', 'true', 90);
    $('.cookies').remove();
});

var checkLGPDCookie = getCookie('acceptedLGPDCookie');

if(checkLGPDCookie === 'true') {
    $('.cookies').remove();
}

// FIM SETAR COOKIE DE LGPD

// REDIRECIONAMENTO DA PÁGINA CONTATO
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        var thankyouURL = "https://mcaruso.com.br/3ajsconsultoria/pagina-de-agradecimento/"
        location = thankyouURL;
    }, false );

// FIM REDIRECIONAMENTO DA PÁGINA CONTATO

if ($(window).width() < 768) {

    // BANNER SERVIÇOS - PÁGINA A EMPRESA MOBILE

    $('.page-template-page-empresa .content-services').slick({

        slidesToShow: 2,

        slidesToScroll: 2,

        dots: true,

        arrows: false

    });

    // FIM BANNER SERVIÇOS - PÁGINA A EMPRESA MOBILE


    // MENU HEADER MOBILE 

        // MENU HEADER MOBILE - CLICK ICONE HAMBURGER 

    $('header .hamburger').on('click', function(){

        $('header .menu-header').addClass('active'); 

    })

        // FIM MENU HEADER MOBILE - CLICK ICONE HAMBURGER 

        // MENU HEADER MOBILE - CLICK X FECHAR MENU  

    $('header .close-menu').on('click', function(){

        $('header .menu-header').removeClass('active'); 

    })

        //FIM MENU HEADER MOBILE - CLICK X FECHAR MENU  

        //MENU HEADER MOBILE - SOMBRA MENU

    $('header .bg-menu').on('click', function(){

        $('header .menu-header').removeClass('active'); 

    })

        //FIM MENU HEADER MOBILE - SOMBRA MENU

        //MENU HEADER MOBILE - SUBMENU

    $('header .menu-item-has-children > a').on('click', function(){

        event.preventDefault();

        $(this).parent().toggleClass('active'); 

        $(this).parent().find('.sub-menu').slideToggle();

    })

    $("header.elastic .box-menu .menu-header .menu-mobile .menu > .menu-item").each(function(){
        if($(this).hasClass('menu-item-has-children')){
            var link = $(this).find('> a').attr('href');
            var htmlSeeMore = `
                <li class="see-more-btn"><a href="${link}">Veja mais</a></li>
            `;
            $(htmlSeeMore).appendTo($(this).find('.sub-menu'));
        }
    });

        //FIM MENU HEADER MOBILE - SUBMENU

    // FIM MENU HEADER MOBILE


    // MENU SERVIÇOS 

    $('.page-template-page-detalhes-servicos .menu-servicos').on('click', function(){

        $('.content-left').toggleClass('active');

    })

    // FIM MENU SERVIÇOS


}

