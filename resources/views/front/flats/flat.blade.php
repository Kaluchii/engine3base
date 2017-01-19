@extends('front.layout')
@include('front.flats.meta')
@section('content')
    <section class="content">
        <div class="wrapper">
            <div class="apartments">
                <div class="row">
                    <h2 class="title">Квартиры для любой семьи</h2>
                    <p class="clarification">Современная просторная планировка позволяет выстроить все так, как вам будет
                        удобно.</p>
                    <div class="price">
                        <p class="metr">цена за м² сегодня</p>
                        <p class="sum">440 000 тг 1200 $</p>
                    </div>
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