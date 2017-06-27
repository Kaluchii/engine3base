$(document).ready(function () {

    //===============================================================
    //======= Обработчики для подсветки текущего пунтка меню ========
    //===============================================================
    var items = document.location.pathname;
    var category = items.split('/')[1];
    var category2 = items.split('/')[2];
    var category3 = items.split('/')[3];

    // Подсветка текущего пункта меню для общего меню
    $('.menu-item .link').each(function () {
        if ($(this).attr('href') == '/' + category) {
            $(this).closest('.menu-item').addClass('active');
        }
    });
    $('.room-count-item .link').each(function () {
        if ($(this).attr('href') == '/flats/' + category2) {
            $(this).closest('.link-wrap').addClass('active');
        } else if (category2 === undefined) {
            $('.room-count-item:first-child .link-wrap').addClass('active');
        }
    });
    $('.layouts .link').each(function () {
        if ($(this).attr('href') == '/flats/' + category2 + '/' + category3) {
            $(this).closest('.link-wrap').addClass('active');
        } else if (category3 === undefined) {
            $('.layouts .link-wrap:first-child').addClass('active');
        }
    });
    //==================================================================

    //===============================================================
    //======= Обработчики для подсветки текущего пунтка ========
    //===============================================================

    // Подсветка текущего пункта меню галереи и открытие нужного слайдера
    $('.nav-item').on('click', function () {
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


    if($('.layout-img').length > 0){
        $('.layout-img').zoom({
            url: $('.layout-img').data('url')
        });
    }
});