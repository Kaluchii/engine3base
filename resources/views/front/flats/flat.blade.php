@extends('front.layout')
@include('front.flats.meta')
@section('content')
    <section class="content">
        <div class="wrapper">
            <div class="top-flat-navigation">
                <div class="room-count-row">
                    <div class="room-count-item">
                        <p class="link-wrap">
                            <a href="" class="link">1-комнатные</a>
                        </p>
                        <p class="flat-size">Площадь от 65,3 до 77,3 м<sup>2</sup></p>
                    </div>
                    <div class="room-count-item">
                        <p class="link-wrap">
                            <a href="" class="link">2-комнатные</a>
                        </p>
                        <p class="flat-size">Площадь от 74,2 до 93,3 м<sup>2</sup></p>
                    </div>
                    <div class="room-count-item">
                        <p class="link-wrap">
                            <a href="" class="link">3-комнатные</a>
                        </p>
                        <p class="flat-size">Площадь от 109,3 до 148 м<sup>2</sup></p>
                    </div>
                </div>
                <div class="layout-row">
                    <h1 class="title">Трехкомнатные квартиры</h1>
                    <div class="price">
                        <p class="metr">цена за м²<br>сегодня</p>
                        <p class="sum">440 000 тг<br>1200 $</p>
                    </div>
                    <div class="layouts">
                        <p class="link-wrap">
                            <a href="" class="link">Планировка 1-го типа</a>
                        </p>
                        <p class="link-wrap">
                            <a href="" class="link">Планировка 2-го типа</a>
                        </p>
                        <p class="link-wrap">
                            <a href="" class="link">Планировка 3-го типа</a>
                        </p>
                        <p class="link-wrap">
                            <a href="" class="link">Планировка 4-го типа</a>
                        </p>
                        <p class="link-wrap">
                            <a href="" class="link">Планировка 5-го типа</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="layout-map">
                <div class="layout-img"><img src="img/layout.png" alt=""></div>
                <div class="right-block">
                    <div class="flat-conditions">
                        <div class="conditions-item">
                            <p class="title">Стоимость</p>
                            <p class="row">от 53 546 000 тенге</p>
                            <p class="row">до 68 235 990 тенге</p>
                        </div>
                        <div class="conditions-item">
                            <p class="title">Площадь</p>
                            <p class="row">от 134,2 до 148 м²</p>
                        </div>
                        <div class="conditions-item">
                            <p class="title">Рассрочка до 12 месяцев</p>
                            <p class="row">от 3 250 000 тг</p>
                        </div>
                    </div>
                    <div class="legend">
                        <p class="designation ns">Несущая стена</p>
                        <p class="designation ms">Межкомнатная стена</p>
                        <p class="designation ok">Окна</p>
                        <p class="designation mu">Место самостоятельной установки межкомнатных стен</p>
                    </div>
                </div>
            </div>
            <div class="flat-description">
                <div class="scheme"><img src="img/e-block.png" alt="Схема комплекса Евразия"></div>
                <div class="text-block">
                    <p>Доступна в блоках</p>
                    <p>6,7</p><br>
                    <p>Высота потолков</p>
                    <p>2,7м</p><br>
                    <p>Количество квартир</p>
                    <p>24</p><br>
                    <p>Доступна на этажах</p>
                    <p>от 2-го по 15-й</p>
                </div>
                <div class="text-block">
                    <p>Черновая отделка</p>
                    <p>Пластиковые окна, радиаторы, входная дверь</p><br>
                    <p>Вид из окон</p>
                    <p>вид на горы и южную часть города</p><br><br><br><br>
                    <p>Доступна планировка с дополнительным балконом</p>
                </div>
            </div>
        </div>
        <div class="viewing">
            <h2 class="title">Записаться на просмотр</h2>
            <p class="view-desc">Позвоните или напишите нам письмо, чтобы договориться
                о просмотре в удобное для вас время.</p>
            <div class="phone">+7 (727) 222-22-99</div>
            <button class="send-button" href="#question" id="write">Написать письмо</button>
        </div>
    </section>
@endsection