@section('header')
    <div class="banner">
        <img src="/img/banner.png" alt="С Наурызом" class="banner-desktop">
        <img src="/img/banner_mobile.jpg" alt="С Наурызом" class="banner-mobile">
    </div>
    <header class="header">
        <div class="top">
            <div class="consult">
                <p class="top-text">Отдел продаж</p>
                <p class="question"><a  href="#question" id="answer" class="link">Написать письмо</a></p>
            </div>
            <div class="logo"><a href="/"><img src="{{$static->logo_field->link}}" alt="{{$static->logo_field->alt}}"></a></div>
            <div class="phones">
                <p class="top-text">Отдел продаж</p>
                <p class="tel-num"><span class="binct-phone-number-1">{{$static->phone_field}}</span></p>
            </div>
        </div>
        <nav class="menu">
            <div class="menu-item"><a href="/" class="link">О комплексе</a></div>
            <div class="delimiter">•</div>
            <div class="menu-item"><a href="/#location" class="link">Расположение</a></div>
            <div class="delimiter">•</div>
            <div class="menu-item"><a href="/advantages" class="link">Преимущества</a></div>
            <div class="delimiter">•</div>
            <div class="menu-item"><a href="/flats" class="link">Квартиры</a></div>
        </nav>
    </header>
@endsection