@section('main-menu')
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">Главная страница</li>
            <li>
                <a href="/adm/all">
                    <i class="fa fa-globe"></i> <span>Общие настройки</span>
                </a>
            </li>
            <li>
                <a href="/adm/slider">
                    <i class="fa fa-image"></i> <span>Главный слайдер</span>
                </a>
            </li>
            <li>
                <a href="/adm/gallery">
                    <i class="fa fa-image"></i> <span>Галерея</span>
                </a>
            </li>
            <li>
                <a href="/adm/flats_main">
                    <i class="fa fa-home"></i> <span>Квартиры на главной</span>
                </a>
            </li>
            <li>
                <a href="/adm/interest">
                    <i class="fa fa-square"></i> <span>Интересные места</span>
                </a>
            </li>
            <li>
                <a href="/adm/map">
                    <i class="fa fa-map-marker"></i> <span>Карта</span>
                </a>
            </li>
            <li>
                <a href="/adm/main_seo">
                    <i class="fa fa-chrome"></i> <span>СЕО главной страницы</span>
                </a>
            </li>
            <li class="header">Квартиры</li>


            {{--<li>--}}
                {{--<a href="reg">--}}
                    {{--<i class="fa fa-link"></i> <span>Регистрация</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
                        {{--<span class="pull-right-container">--}}
                            {{--<i class="fa fa-angle-left pull-right"></i>--}}
                        {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </section>

@endsection