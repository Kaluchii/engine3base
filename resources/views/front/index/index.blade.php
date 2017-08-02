@extends('front.layout')
@include('front.index.meta')
@section('onePageScripts')
    <script defer src="/js/fotorama.js"></script>
    <script defer src="/js/spritespin.js"></script>
    <script defer src="/js/spritespin.mod-panorama.js"></script>
    <script defer src="/js/index.js"></script>
    <script defer src="http://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script defer src="/js/map.js"></script>
@endsection
@section('content')
    <section class="content">
        <script type="text/javascript">
            var sourceMark = {
            @foreach($map->marker_category_group as $m_category)
            {{$m_category->id_field}}:
            {
                slug: '{{$m_category->id_field}}',
                @foreach($m_category->institution_group as $institution)
                {{$institution->id_field}}:
                {
                    icon: '{{$institution->marker_icon_field->link}}',
                            marks
                :
                    [
                            @foreach($institution->marker_group as $marker)
                        {
                            lon: {{$marker->lon_field}},
                            lat: {{$marker->lat_field}},
                            title: '{{$marker->label_field}}'
                        },
                        @endforeach
                    ]
                }
            ,
                @endforeach
            }
            ,
            @endforeach
            }
            ;
        </script>
        <div class="wrapper">
            <div class="shadow"></div>
            <div id="scroller"><span></span></div>
            <div class="page-title"><h1>Семейный жилой комплекс в&nbsp;центре&nbsp;Алматы</h1></div>
            <div class="address"><p>На пересечении улиц Гоголя и Масанчи</p></div>
            <div class="slider">
                <div class="fotorama" id="fotoramaTop" data-loop="true" data-autoplay="5000">
                    @foreach($slider->slider_group as $slide)
                        <img src="{{$slide->slide_field->link}}" alt="{{$slide->slide_field->alt}}">
                    @endforeach
                </div>
            </div>
            <div class="conditions">
                <h2 class="title">Все условия для детей и взрослых</h2>
                <div class="condition-item">
                    <a href="/advantages" class="condition-link">
                        <img src="/img/01-bird.png" alt="Удобное расположение">
                        <p class="condition-title">Удобное расположение</p>
                        <p class="descr">«Евразия» находится в тихом центре Алматы, вдали от крупных проспектов и пробок. Рядом Мега, школы, детские сады и скверы.</p>
                    </a>
                </div>
                <div class="condition-item">
                    <a href="/advantages" class="condition-link">
                        <img src="/img/02-ball.png" alt="Безопасный внутренний двор">
                        <p class="condition-title">Безопасный внутренний двор</p>
                        <p class="descr">Во двор, где играют дети, ограничен въезд автомобилей и доступ посторонних.</p>
                    </a>
                </div>
                <div class="condition-item">
                    <a href="/advantages" class="condition-link">
                        <img src="/img/03-helm.png" alt="Усиленная сейсмостойкость">
                        <p class="condition-title">Усиленная сейсмостойкость</p>
                        <p class="descr">Мы тщательно соблюдали нормативы и строили на совесть. 90% конструкции — монолит. Реальная сейсмостойкость свыше 9 баллов.</p>
                    </a>
                </div>
                <div class="condition-item">
                    <a href="/advantages" class="condition-link">
                        <img src="/img/04-jeep.png" alt="Вместительный паркинг">
                        <p class="condition-title">Вместительный паркинг</p>
                        <p class="descr">Для жильцов и гостей комплекса действуют охраняемые подземные и наземные парковки площадью более 4 500 м².</p>
                    </a>
                </div>
                <div class="condition-item">
                    <a href="/advantages" class="condition-link">
                        <img src="/img/05-cups.png" alt="Собственная инфраструктура">
                        <p class="condition-title">Собственная инфраструктура</p>
                        <p class="descr">На первых этажах откроются заведения и магазины, необходимые для удобства жильцов.</p>
                    </a>
                </div>
                <div class="condition-item">
                    <a href="/advantages" class="condition-link">
                        <img src="/img/06-coint.png" alt="Возможности для бизнеса">
                        <p class="condition-title">Возможности для бизнеса</p>
                        <p class="descr">660 квартир с состоятельной аудиторией более 2 000 человек. Для приобретения доступны коммерческие помещения площадью от 240 до 10 000 м².</p>
                    </a>
                </div>
            </div>
            <div class="good-place-img">
                <img class="row" src="/img/good_place_row.png" alt="Евразия - хорошее место для семейной жизни">
                <img class="row" src="/img/place-for.png" alt="Евразия - хорошее место для семейной жизни">
                <img class="flower" src="/img/good_place_flower.png" alt="Кувшин с цветами и бабочками">
            </div>
            <div class="gallery">
                <h2 class="title">Галерея комплекса</h2>
                <div class="gallery-nav">
                    @foreach($gallery->gallery_type_group as $type)
                        @if($type->show_field == 1)
                            <div class="nav-item" id="#{{$type->id_field}}"><a
                                        class="link">{{$type->gall_name_field}}</a></div>
                            <div class="delimiter">•</div>
                        @endif
                    @endforeach
                </div>
                <div class="gallery-images">
                    @include('front/index/placeholder')
                    @foreach($gallery->gallery_type_group as $type_v)
                        @if($type_v->show_field == 1)
                            <div class="fotorama js_gallery_fotorama" id="{{$type_v->id_field}}" data-auto="false"
                                 data-nav="thumbs"
                                 data-thumbmargin="10" data-loop="true"
                                 data-thumbwidth="100" data-thumbheight="70" data-transition="crossfade">
                                @foreach($type_v->slider_from_group as $gal_slide)
                                    <div data-img="{{$gal_slide->slide_field->link}}"
                                         data-thumb="{{$gal_slide->slide_field->link}}">
                                        <div class="img-text-wrap"><p>{!! $gal_slide->slide_text_field !!}</p></div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
                <p class="img-count"><span class="js_how">1</span> из <span class="js_how_many"></span></p>
            </div>
        </div>
        <div class="more-news">
            <h3 class="title">Больше фотографий и новостей</h3>
            <div class="social-buttons">
                <a href="{{$static->fb_field}}" rel="nofollow" target="_blank" class="soc-button fb"></a>
                <a href="{{$static->inst_field}}" rel="nofollow" target="_blank" class="soc-button inst"></a>
                <a href="{{$static->vk_field}}" rel="nofollow" target="_blank" class="soc-button vk"></a>
            </div>
        </div>
        <div class="wrapper">
            <div class="apartments">
                <div class="row">
                    <h2 class="title">Квартиры для любой семьи</h2>
                    <p class="clarification">Современная и просторная планировка позволяет организовать пространство на свой вкус.</p>
                    <div class="price">
                        <p class="metr">цена за м²<br>сегодня</p>
                        <p class="sum">{{number_format($course->dollar_field * $course->meter_cost_field, 0, '', ' ')}}
                            тг<br>{{$course->meter_cost_field}} $</p>
                    </div>
                </div>
                <div class="panorams">
                    @foreach($flats->flat_group as $flat)
                        <div class="panoram-item-wrap" id="{{$flat->id_field}}"
                             data-img="{{$flat->panorame_field->link}}">
                            <a href="{{$flat->link_to_flat_field}}">
                                <div class="panoram-item">
                                    <div class="panorama">
                                        <div class="spritespin"></div>
                                        {{--<img src="{{$flat->panorame_field->link}}" alt="{{$flat->panorame_field->alt}}">--}}
                                    </div>
                                    <p class="link-wrap">
                                        <span class="link-str">{{$flat->flat_name_field}}</span>
                                    </p>
                                    <p class="flat-size">от {{str_replace('.', ',', $flat->min_area_field)}}
                                        до {{str_replace('.', ',', $flat->max_area_field)}} м<sup>2</sup></p>
                                    <div class="flat-price">
                                        <p class="flat-price-tg">
                                            от {{str_replace('.', ',', round($flat->min_area_field * $course->dollar_field * $course->meter_cost_field / 1000000, 1))}}
                                            млн. тенге
                                        </p>
                                        <p class="flat-price-dol">
                                            ≈ {{number_format(floor($flat->min_area_field * $course->meter_cost_field / 1000) * 1000, 0, '', ' ')}} $
                                        </p>
                                    </div>
                                    <p class="flat-description">{{$flat->description_field}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="buying-wrap">
            <div class="buying">
                <div class="text-wrap">
                    <h3 class="title">Комфортные возможности покупки</h3>
                    <div class="col-1"><p>При покупке квартиры или коммерческого помещения, доступна <b>рассрочка под
                                0%</b> до 12
                            месяцев. Первоначальный взнос от 30%.</p></div>
                    <div class="col-2"><p>Комплекс введен в эксплуатацию, поэтому <b>ипотеку</b> можно оформить в любом
                            казахстанском банке.</p></div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="interesting-place">
                <h2 class="title">Интересные места рядом</h2>
                @foreach($interest->place_group as $place)
                    <div class="interesting-item">
                        <img src="{{$place->place_photo_field->link}}" alt="{{$place->place_photo_field->alt}}">
                        <p class="time">{{$place->time_to_place_field}}</p>
                        <p class="name-place">{{$place->place_name_field}}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="on-map" id="location">
            <h2 class="title">Удобное расположение</h2>
            <div class="map-nav">
                <div class="map-nav-item"><a class="link" data-category="all">Все места</a></div>
                @foreach($map->marker_category_group as $category)
                    <div class="delimiter">•</div>
                    <div class="map-nav-item"><a class="link"
                                                 data-category="{{$category->id_field}}">{{$category->category_name_field}}</a>
                    </div>
                @endforeach
            </div>
            <div class="map-shadow">
                <div class="map-img-wrap">
                    <img src="/img/map.jpg" class="map-img" alt="Схема проезда к жилому комплексу Евразия">
                </div>
                <div id="map">
                </div>
            </div>
            <div class="time-to-place">
                <div class="circles-wrap">
                    <div class="circle airport">
                        <p class="time">20 минут</p>
                        <p class="name-place">до аэропорта</p>
                    </div>
                    <div class="circle terminal">
                        <p class="time">10 минут</p>
                        <p class="name-place">до ж/д вокзала Алматы-2</p>
                    </div>
                    <div class="circle market">
                        <p class="time">10 минут</p>
                        <p class="name-place">до Зеленого Базара</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="viewing">
            <h2 class="title">Записаться на просмотр</h2>
            <p class="view-desc">Позвоните или напишите нам письмо, чтобы договориться
                о просмотре в удобное для вас время.</p>
            <div class="phone"><span class="binct-phone-number-1">{{$static->phone_field}}</span></div>
            <button class="send-button" href="#question" id="write">Написать письмо</button>
        </div>
    </section>
@endsection