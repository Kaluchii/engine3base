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
                        <p class="metr">цена за м² сегодня</p>
                        <p class="sum">440 000 тг 1200 $</p>
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
                <div class="layout-img"></div>
                <div class="right-block">
                    <div class="conditions"></div>
                    <div class="legend"></div>
                </div>
            </div>
            <div class="flat-description">
                <div class="sheme"></div>
                <div class="description"></div>
                <div class="description"></div>
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