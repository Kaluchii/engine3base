$(document).ready(function () {
    //===============================================================
    //======= Кнопка прокрутки к верху страницы ========
    //===============================================================
    if ($('#scroller').length){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 700){
                $('#scroller').fadeIn();
            }else{
                $('#scroller').fadeOut();
            }
        });
        $('#scroller').click(function(){
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    }
    //===============================================================
    //======= Обработчики для подсветки текущего пунтка ========
    //===============================================================
    $('.menu-item a[href*=\'#location\']').bind("click", function(e){
        $('html, body').stop().animate({
            scrollTop: $('#location').offset().top
        }, 1000);
        e.preventDefault();
    });
    // Подсветка текущего пункта меню галереи и открытие нужного слайдера
    $('.nav-item').on('click', function () {
        if (!$(this).hasClass('active')) {

            $($('.nav-item.active').attr('id')).css('display', 'none');
            $($(this).attr('id')).css('display', 'block');


            // 1. Initialize fotorama manually.
            var $fotoramaDiv = $($(this).attr('id')).fotorama({
                navwidth: '90%'
            });
            /*$fotoramaDiv.on('fotorama:load',function () {
             if( document.location.hash == '#location' ){
             $('html, body').stop().animate({
             scrollTop: $('#location').offset().top
             }, 1000);
             }
             });*/
            /*$fotoramaDiv.on('fotorama:load',function () {
             if( document.location.hash == '#location' ){
             var scrollTop = $('#location').offset().top;
             $(document).scrollTop(scrollTop);
             }
             });*/
            $fotoramaDiv.on('fotorama:load',function () {
                $('.placeholder').css('display', 'none')
            });
            $($(this).attr('id')).on('fotorama:show', function (e, fotorama, extra) {
                $('.js_how').text(fotorama.activeFrame.i);
            });
            // 2. Get the API object.
            var fotorama = $fotoramaDiv.data('fotorama');

            fotorama.resize({
                maxheight: '90%'
            });

            $('.js_how').text(fotorama.activeFrame.i);

            $('.js_how_many').text(fotorama.size);

            if (window.device.mobile() === true || window.device.tablet() === true) {
                fotorama.setOptions({
                    arrows: false
                });
            }

            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        }
    });
    //==================================================================

    // Подсветка текущего пункта меню карты и отображение выбранных элементов на карте
    $('.map-nav-item').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('.map-nav-item').removeClass('active');
            $(this).addClass('active');
        }
    });
    //==================================================================

    $(window).on('load', function () {
        // Инициализация карусели в шапке сайта
        // 1. Initialize fotorama manually.
        var $fotoramaTop = $('#fotoramaTop').fotorama();
        // 2. Get the API object.
        var fotoramaT = $fotoramaTop.data('fotorama');
        if (window.device.mobile() === true || window.device.tablet() === true) {
            fotoramaT.setOptions({
                arrows: false
            });
        }

        $('.nav-item:first-child .link').click();
    });

    //=====================================
    window.SpriteSpin.extendApi({
        stopAnimation: function(){
            this.data.animate = false;
            SpriteSpin.setAnimation(this.data);
        },
        startAnimation: function(){
            this.data.animate = true;
            SpriteSpin.setAnimation(this.data);
        }
    });

    var panoramaAPI = {};
    $('.panoram-item-wrap ').each(function () {
        id = $(this).attr('id');
        $this = $(this);
        panoramaAPI[id] = $this.find('.spritespin').spritespin({
            source: $this.data('img'),
            // this sets the width of the display. The panorama image must be larger
            width: 1300,
            height: 200,
            animate: false,
            // select the modules
            mods: [
                // the panorama display module
                'panorama'
            ]
        }).spritespin('api');

    }).hover(
        function () {
            // hover
            panoramaAPI[ $(this).attr('id') ].startAnimation();
        },
        function () {
            // off hover
            panoramaAPI[ $(this).attr('id') ].stopAnimation();
        })
});