@extends('front.layout')
@include('front.advantages.meta')
@section('content')
    <section class="content">
        <div class="wrapper">
            <div class="page-title"><h1>Преимущества</h1></div>
            <div class="advantages">
                <div class="col-1-2">
                    @foreach($advantages->advantage_group->odd() as $item)
                        <div class="advantages-item">
                            <div class="img-wrap"><img src="{{$item->advantage_field->link}}" alt="{{$item->advantage_field->alt}}"></div>
                            <h3 class="title">{{$item->title_field}}</h3>
                            <div class="text-block">{!! $item->descr_field !!}</div>
                            @if($item->green_title_field)
                                <div class="green-block">
                                    <p class="big-title">{{$item->green_title_field}}</p>
                                    <p class="text">{{$item->green_text_field}}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="col-1-2">
                    @foreach($advantages->advantage_group->even() as $item)
                        <div class="advantages-item">
                            <div class="img-wrap"><img src="{{$item->advantage_field->link}}" alt="{{$item->advantage_field->alt}}"></div>
                            <h3 class="title">{{$item->title_field}}</h3>
                            <div class="text-block">{!! $item->descr_field !!}</div>
                            @if($item->green_title_field)
                                <div class="green-block">
                                    <p class="big-title">{{$item->green_title_field}}</p>
                                    <p class="text">{{$item->green_text_field}}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="buying-wrap advantage-page">
            <div class="buying">
                <div class="text-wrap">
                    <h3 class="title">Комфортные возможности покупки</h3>
                    <div class="col-1"><p>При покупке квартиры или коммерческого помещения, доступна <b>рассрочка под 0%</b> до 12
                            месяцев. Первоначальный взнос от 30%.</p></div>
                    <div class="col-2"><p>Комплекс введен в эксплуатацию, поэтому <b>ипотеку</b> можно взять в любом
                            казахстанском банке.</p></div>
                </div>
            </div>
        </div>
    </section>
@endsection