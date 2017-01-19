$(document).ready(function () {

    //===============================================================
    //======= Обработчики для подсветки текущего пунтка меню ========
    //===============================================================
    var items = document.location.pathname;
    var category = items.split('/')[1];
    var category2 = items.split('/')[2];

    // Подсветка текущего пункта меню для общего меню ( шапка и футер )
    /*$('.all-site-menu').each(function () {
     if ($(this).attr('href') == '/' + category) {
     console.log($(this).attr('href') + '  ' + category);
     $(this).closest('li').addClass('active');
     } else if ($(this).attr('href') == '/inf/' + category2) {
     $(this).closest('li').addClass('active');
     } else if ($(this).attr('href').split('/')[1] == category &&
     $(this).attr('href').split('/')[1] == 'automatic') {
     $(this).closest('li').addClass('active');
     }
     });*/
    //==================================================================

    //===============================================================
    //======= Обработчики для подсветки текущего пунтка ========
    //===============================================================

    // Подсветка текущего пункта меню галереи и открытие нужного слайдера
    $('.nav-item').on('click', function () {
        if (!$(this).hasClass('active')) {

            $($('.nav-item.active').attr('id')).css('display', 'none');
            $($(this).attr('id')).css('display', 'block');


            // 1. Initialize fotorama manually.
            var $fotoramaDiv = $($(this).attr('id')).fotorama({
                navwidth: '90%'
            });
            $($(this).attr('id')).on('fotorama:show', function (e, fotorama, extra) {
                $('.js_how').text(fotorama.activeFrame.i);
            });
            // 2. Get the API object.
            var fotorama = $fotoramaDiv.data('fotorama');

            // 3. Inspect it in console.
            console.log(fotorama);
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


        // Инициализация слайдера
        // 1. Initialize fotorama manually.
        var $fotoramaDiv = $('#facade').fotorama({
            navwidth: '90%'
        });
        $('#facade').on('fotorama:show', function (e, fotorama, extra) {
            $('.js_how').text(fotorama.activeFrame.i);
        });
        // 2. Get the API object.
        var fotorama = $fotoramaDiv.data('fotorama');

        // 3. Inspect it in console.
        console.log(fotorama);

        $('.js_how_many').text(fotorama.size);
        if (window.device.mobile() === true || window.device.tablet() === true) {
            fotorama.setOptions({
                arrows: false
            });
            fotoramaT.setOptions({
                arrows: false
            });
        }
    });


    //==== Форма "Написать письмо"
    $('#write').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('#answer').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });

    //==== Изменение размера фоторамы при ресайзе
    /*$(window).on('load resize', function () {
        if ($(window).width() > 768) {
            /!*$('.fotorama__img').addClass('fotorama_desctop_img');*!/
            $('.fotorama__stage').addClass('fotorama_desctop');
            $('.fotorama__img').style = 'top : calc(50% - ' + $('.fotorama__img').height()/2 + ') !important';
        } else {
            $('.fotorama__stage').removeClass('fotorama_desctop');
        }
    });*/
});