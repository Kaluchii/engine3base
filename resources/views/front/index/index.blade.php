@extends('front.layout')
@include('front.index.meta')
@section('content')
<section class="content">
    <script type="text/javascript">
        var sourceMark = {
            education: {
                slug: 'education',
                school: {
                    icon: 'img/Univers.png',
                    marks: [
                        {
                            lon: 76.927122,
                            lat: 43.260175,
                            title: 'schooltitle1'
                        },
                        {
                            lon: 76.92672,
                            lat: 43.261261,
                            title: 'schooltitle2'
                        }
                    ]
                },
                sad: {
                    icon: 'img/Kids.png',
                    marks: [
                        {
                            lon: 76.9254,
                            lat: 43.259886,
                            title: 'titlesad1'
                        },
                        {
                            lon: 76.923882,
                            lat: 43.2588,
                            title: 'titlesad2'
                        }
                    ]
                }
            },
            entertainment: {
                slug: 'entertainment',
                theater: {
                    icon: 'img/Theatre.png',
                    marks: [
                        {
                            lon: '76.9251',
                            lat: '43.26132',
                            title: 'titletheater1'
                        },
                        {
                            lon: '76.926978',
                            lat: '43.261089',
                            title: 'titletheater1'
                        }
                    ]
                },
                cafe: {
                    icon: 'img/Cafe.png',
                    marks: [
                        {
                            lon: '76.929199',
                            lat: '43.260073',
                            title: 'titlecafe1'
                        },
                        {
                            lon: '76.928866',
                            lat: '43.258401',
                            title: 'titlecafe1'
                        }
                    ]
                }
            }
        };
    </script>
    <div class="wrapper">
        <div class="page-title"><h1>Семейный жилой комплекс в центре Алматы</h1></div>
        <div class="slider">
            <div class="fotorama" id="fotoramaTop" data-autoplay="5000">
                <img src="img/s3a.jpg" alt="">
                <img src="img/s4a.jpg" alt="">
                <img src="img/s5a.jpg" alt="">
                <img src="img/s6a.jpg" alt="">
            </div>
        </div>
        <div class="conditions">
            <h2 class="title">Все условия для детей и взрослых</h2>
            <div class="condition-item">
                <img src="img/01-bird.png" alt="">
                <p class="condition-title">Удобное расположение</p>
                <p class="descr">«Евразия» находится в тихом центре Алматы, вдали от крупных автомагистралей и пробок.
                    Недалеко школы, парки и детские сады.</p>
            </div>
            <div class="condition-item">
                <img src="img/02-ball.png" alt="">
                <p class="condition-title">Безопасный внутренний двор</p>
                <p class="descr">Во двор, где играют дети, ограничен въезд автомобилей
                    и доступ посторонних.</p>
            </div>
            <div class="condition-item">
                <img src="img/03-helm.png" alt="">
                <p class="condition-title">Усиленная сейсмостойкость</p>
                <p class="descr">Мы тщательно соблюдали строительные нормативы и строили на совесть. 90% конструкции —
                    монолит. Сейсмостойкость выше 9 баллов.</p>
            </div>
            <div class="condition-item">
                <img src="img/04-jeep.png" alt="">
                <p class="condition-title">Вместительный паркинг</p>
                <p class="descr">Для жильцов и гостей комплекса действуют охраняемые наземные и подземные парковки
                    площадью более 4 500 м².</p>
            </div>
            <div class="condition-item">
                <img src="img/05-cups.png" alt="">
                <p class="condition-title">Собственная инфраструктура</p>
                <p class="descr">На первых этажах откроются заведения и магазины, необходимые для удобства жильцов.</p>
            </div>
            <div class="condition-item">
                <img src="img/06-coint.png" alt="">
                <p class="condition-title">Возможности для бизнеса</p>
                <p class="descr">660 квартир с состоятельной аудиторией более 2 000 человек. Доступны коммерческие
                    площади от 240 до 10 000 м².</p>
            </div>
        </div>
        <div class="good-place-img">
            <img class="row" src="img/good_place_row.png" alt="">
            <img class="row" src="img/place-for.png" alt="">
            <img class="flower" src="img/good_place_flower.png" alt="">
        </div>
        <div class="gallery">
            <h2 class="title">Галерея комплекса</h2>
            <div class="gallery-nav">
                <div class="nav-item active" id="#facade"><a class="link">Фасад комплекса</a></div>
                <div class="delimiter">•</div>
                <div class="nav-item" id="#courtyard"><a class="link">Внутренний двор</a></div>
                <div class="delimiter">•</div>
                <div class="nav-item" id="#view"><a class="link">Вид из окна</a></div>
                <div class="delimiter">•</div>
                <div class="nav-item" id="#showroom"><a class="link">Шоу-рум</a></div>
            </div>
            <div class="gallery-images">
                <div class="fotorama js_gallery_fotorama" id="courtyard" data-auto="false" data-nav="thumbs"
                     data-thumbmargin="10"
                     data-thumbwidth="100" data-thumbheight="70" data-transition="crossfade">
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/2</p></div>
                    </div>
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/2</p></div>
                    </div>
                    <div data-img="img/2v.jpg" data-thumb="img/2v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.2/2</p></div>
                    </div>
                    <div data-img="img/3v.jpg" data-thumb="img/3v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.3/2</p></div>
                    </div>
                    <div data-img="img/4v.jpg" data-thumb="img/4v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.4/2</p></div>
                    </div>
                    <div data-img="img/5v.jpg" data-thumb="img/5v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.5/2</p></div>
                    </div>
                    <div data-img="img/6v.jpg" data-thumb="img/6v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.6/2</p></div>
                    </div>
                    <div data-img="img/7v.jpg" data-thumb="img/7v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.7/2</p></div>
                    </div>
                </div>
                <div class="fotorama js_gallery_fotorama" id="view" data-auto="false" data-nav="thumbs"
                     data-thumbmargin="10"
                     data-thumbwidth="100" data-thumbheight="70" data-transition="crossfade">
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/3</p></div>
                    </div>
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/3</p></div>
                    </div>
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/3</p></div>
                    </div>
                    <div data-img="img/2v.jpg" data-thumb="img/2v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.2/3</p></div>
                    </div>
                    <div data-img="img/3v.jpg" data-thumb="img/3v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.3/3</p></div>
                    </div>
                    <div data-img="img/4v.jpg" data-thumb="img/4v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.4/3</p></div>
                    </div>
                    <div data-img="img/5v.jpg" data-thumb="img/5v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.5/3</p></div>
                    </div>
                    <div data-img="img/6v.jpg" data-thumb="img/6v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.6/3</p></div>
                    </div>
                    <div data-img="img/7v.jpg" data-thumb="img/7v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.7/3</p></div>
                    </div>
                </div>
                <div class="fotorama js_gallery_fotorama" id="showroom" data-auto="false" data-nav="thumbs"
                     data-thumbmargin="10"
                     data-thumbwidth="100" data-thumbheight="70" data-transition="crossfade">
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/4</p></div>
                    </div>
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/4</p></div>
                    </div>
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/4</p></div>
                    </div>
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1/4</p></div>
                    </div>
                    <div data-img="img/2v.jpg" data-thumb="img/2v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.2/4</p></div>
                    </div>
                    <div data-img="img/3v.jpg" data-thumb="img/3v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.3/4</p></div>
                    </div>
                    <div data-img="img/4v.jpg" data-thumb="img/4v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.4/4</p></div>
                    </div>
                    <div data-img="img/5v.jpg" data-thumb="img/5v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.5/4</p></div>
                    </div>
                    <div data-img="img/6v.jpg" data-thumb="img/6v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.6/4</p></div>
                    </div>
                    <div data-img="img/7v.jpg" data-thumb="img/7v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.7/4</p></div>
                    </div>
                </div>
                <div class="fotorama js_gallery_fotorama" id="facade" data-nav="thumbs"
                     data-thumbmargin="10"
                     data-thumbwidth="100" data-thumbheight="70" data-transition="crossfade">
                    <div data-img="img/1v.jpg" data-thumb="img/1v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.1</p></div>
                    </div>
                    <div data-img="img/2v.jpg" data-thumb="img/2v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.2</p></div>
                    </div>
                    <div data-img="img/3v.jpg" data-thumb="img/3v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.3</p></div>
                    </div>
                    <div data-img="img/4v.jpg" data-thumb="img/4v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.4</p></div>
                    </div>
                    <div data-img="img/5v.jpg" data-thumb="img/5v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.5</p></div>
                    </div>
                    <div data-img="img/6v.jpg" data-thumb="img/6v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.6</p></div>
                    </div>
                    <div data-img="img/7v.jpg" data-thumb="img/7v.jpg">
                        <div class="img-text-wrap"><p>Двор закрыт для автомобилей и случайных прохожих, везде ухоженный
                                газон.7</p></div>
                    </div>
                </div>
            </div>
            <p class="img-count"><span class="js_how">1</span> из <span class="js_how_many"></span></p>
        </div>
    </div>
    <div class="more-news">
        <h3 class="title">Больше фотографий и новостей</h3>
        <div class="social-buttons">
            <a href="" class="soc-button fb"></a>
            <a href="" class="soc-button inst"></a>
            <a href="" class="soc-button vk"></a>
        </div>
    </div>
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
            <div class="panorams">
                <div class="panoram-item-wrap">
                    <div class="panoram-item">
                        <div class="panorama">
                            <img src="img/flat.png" alt="">
                        </div>
                        <p class="link-wrap">
                            <a href="" class="link">1-комнатные квартиры для молодой семьи</a>
                        </p>
                        <p class="flat-size">Площадь от 65,3 до 77,3 м<sup>2</sup></p>
                        <div class="flat-price">от 29 млн. тенге</div>
                        <p class="flat-description">Однокомнатная уютная квартира в центре города является идеальным
                            решением как для молодоженов, так и для проведения старости.</p>
                    </div>
                </div>
                <div class="panoram-item-wrap">
                    <div class="panoram-item">
                        <div class="panorama">
                            <img src="img/flat.png" alt="">
                        </div>
                        <p class="link-wrap">
                            <a href="" class="link">2-комнатные квартиры для семьи с детьми</a>
                        </p>
                        <p class="flat-size">Площадь от 74,2 до 93,3 м<sup>2</sup></p>
                        <div class="flat-price">от 36 млн. тенге</div>
                        <p class="flat-description">Однокомнатная уютная квартира в центре города является идеальным
                            решением как для молодоженов, так и для проведения старости.</p>
                    </div>
                </div>
                <div class="panoram-item-wrap">
                    <div class="panoram-item">
                        <div class="panorama">
                            <img src="img/flat.png" alt="">
                        </div>
                        <p class="link-wrap">
                            <a href="" class="link">3-комнатные квартиры для большой семьи</a>
                        </p>
                        <p class="flat-size">Площадь от 109,3 до 148 м<sup>2</sup></p>
                        <div class="flat-price">от 51 млн. тенге</div>
                        <p class="flat-description">В большой квартире хватит места для всех: отдельные комнаты для
                            детей и родителей, просторная гостинная для семейных праздников и небольшой кабинет для
                            папы.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buying-wrap">
        <div class="buying">
            <div class="text-wrap">
                <h3 class="title">Комфортные возможности покупки</h3>
                <div class="col-1"><p>При покупке квартиры или коммерческого помещения, доступна <b>рассрочка под 0%</b> до 12
                        месяцев. Первоначальный взнос от 30%.</p></div>
                <div class="col-2"><p>Комплекс введен в эксплуатацию, поэтому <b>ипотеку до 20 лет</b> можно взять в любом
                        казахстанском банке.</p></div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="interesting-place">
            <h2 class="title">Интересные места рядом</h2>
            <div class="interesting-item">
                <img src="img/mega.jpg" alt="">
                <p class="time">3 минуты</p>
                <p class="name-place">до ТРЦ «Мега-Парк»</p>
            </div>
            <div class="interesting-item">
                <img src="img/feature.jpg" alt="">
                <p class="time">10 минут</p>
                <p class="name-place">до театра им. Лермонтова</p>
            </div>
            <div class="interesting-item">
                <img src="img/circus.jpg" alt="">
                <p class="time">8 минут</p>
                <p class="name-place">до Казахского Государственного Цирка</p>
            </div>
            <div class="interesting-item">
                <img src="img/park.jpg" alt="">
                <p class="time">8 минут</p>
                <p class="name-place">до Парка 28 Панфиловцев</p>
            </div>
            <div class="interesting-item">
                <img src="img/zoo.jpg" alt="">
                <p class="time">11 минут</p>
                <p class="name-place">до Зоопарка и Центрального парка культуры и отдыха</p>
            </div>
            <div class="interesting-item">
                <img src="img/mir-fan.jpg" alt="">
                <p class="time">8 минут</p>
                <p class="name-place">до «Мира Фантазий»</p>
            </div>
        </div>
    </div>
    <div class="on-map">
        <h2 class="title">Удобное расположение</h2>
        <div class="map-nav">
            <div class="map-nav-item active"><a class="link" data-category="education">Школы и детские сады</a></div>
            <div class="delimiter">•</div>
            <div class="map-nav-item"><a class="link" data-category="entertainment">Развлечения</a></div>
            <div class="delimiter">•</div>
            <div class="map-nav-item"><a class="link" data-category="purchases">Покупки</a></div>
            <div class="delimiter">•</div>
            <div class="map-nav-item"><a class="link" data-category="health">Здравоохранение</a></div>
            <div class="delimiter">•</div>
            <div class="map-nav-item"><a class="link" data-category="services">Услуги</a></div>
        </div>
        <div class="map-shadow">
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
        <div class="phone">+7 (727) 222-22-99</div>
        <button class="send-button" href="#question" id="write">Написать письмо</button>
    </div>
</section>
@endsection