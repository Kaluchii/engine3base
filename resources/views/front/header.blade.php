@section('header')
    <header class="header">
        <div class="top">
            <div class="consult">
                <p class="top-text">Онлайн-констультант</p>
                <p class="question"><a  href="#question" id="answer" class="link">Задать вопрос</a></p>
            </div>
            <div class="logo"><a href="/"><img src="{{$static->logo_field->link}}" alt="{{$static->logo_field->alt}}"></a></div>
            <div class="phones">
                <p class="top-text">Отдел продаж</p>
                <p class="tel-num">{{$static->phone_field}}</p>
            </div>
        </div>
        <nav class="menu">
            <div class="menu-item"><a href="/" class="link">О комплексе</a></div>
            <div class="delimiter">•</div>
            <div class="menu-item"><a href="/#location" class="link">Расположение</a></div>
            <div class="delimiter">•</div>
            {{--<div class="menu-item"><a href="/advantages" class="link">Преимущества</a></div>
            <div class="delimiter">•</div>--}}
            <div class="menu-item"><a href="/flats" class="link">Квартиры</a></div>
        </nav>
    </header>
@endsection