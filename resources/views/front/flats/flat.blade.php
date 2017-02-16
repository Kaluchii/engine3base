@extends('front.layout')
@include('front.flats.meta')
@section('content')
    <section class="content">
        <?php $meter_cost_tg = $course->dollar_field * $course->meter_cost_field ?>
        <div class="wrapper">
            <div class="top-flat-navigation">
                <div class="room-count-row">
                    @foreach ($layout->superior_item->superior_item->dom_flat_group as $flats_item)
                        <div class="room-count-item">
                            <p class="link-wrap">
                                <a href="/flats/{{$flats_item->slug_field}}"
                                   class="link">{{$flats_item->dom_flat_name_field}}</a>
                            </p>
                            <p class="flat-size">Площадь от {{str_replace('.', ',', $flats_item->min_area_field)}}
                                до {{str_replace('.', ',', $flats_item->max_area_field)}} м<sup>2</sup></p>
                        </div>
                    @endforeach
                </div>
                <div class="layout-row">
                    <h1 class="title">{{$layout->superior_item->flat_title_field}}</h1>
                    <div class="price">
                        <p class="metr">цена за м²<br>сегодня</p>
                        <p class="sum">{{number_format($meter_cost_tg, 0, '', ' ')}} тг<br>{{$course->meter_cost_field}}
                            $</p>
                    </div>
                    <div class="layouts">
                        @foreach($layout->superior_item->layout_group as $layout_item)
                            <p class="link-wrap">
                                <a href="/flats/{{$layout->superior_item->slug_field}}/{{$layout_item->slug_field}}"
                                   class="link">{{$layout_item->layout_name_field}}</a>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="layout-map">
                <div class="layout-img"><img src="{{$layout->layout_scheme_field->link}}"
                                             alt="{{$layout->layout_scheme_field->alt}}"></div>
                <div class="right-block">
                    <div class="flat-conditions">
                        <div class="conditions-item">
                            <p class="title">Стоимость</p>
                            <p class="row">от {{number_format($layout->min_area_field * $meter_cost_tg, 0, '', ' ')}}
                                тенге</p>
                            <p class="row">до {{number_format($layout->max_area_field * $meter_cost_tg, 0, '', ' ')}}
                                тенге</p>
                        </div>
                        <div class="conditions-item">
                            <p class="title">Площадь</p>
                            <p class="row">от {{str_replace('.', ',', $layout->min_area_field)}}
                                до {{str_replace('.', ',', $layout->max_area_field)}} м²</p>
                        </div>
                        <div class="conditions-item">
                            <p class="title">Рассрочка до 12 месяцев</p>
                            <p class="row">
                                от {{number_format($layout->min_area_field * $meter_cost_tg / 10 * 7 / 12, 0, '', ' ')}}
                                тг</p>
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
                <div class="scheme"><img src="{{$layout->complex_scheme_field->link}}"
                                         alt="{{$layout->complex_scheme_field->alt}}"></div>
                <div class="text-block">{!! $layout->facts_field !!}</div>
                <div class="text-block">{!! $layout->descr_field !!}</div>
            </div>
            <div class="download-wrap">
                <button class="download">Скачать планировку в PDF</button>
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