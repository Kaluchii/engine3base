@section('footer')
    <footer class="footer">
        <div class="bottom-row">
            <p class="bottom-text">{{$static->copyright_field}}</p>
            <p class="bottom-text">Комплекс в социальных сетях:
                <span class="soc-links"><a href="{{$static->vk_field}}" rel="nofollow" target="_blank" class="link">ВКонтакте</a><a
                            href="{{$static->inst_field}}" rel="nofollow" target="_blank" class="link">Инстаграм</a></span>
            </p>
            <p class="bottom-text">Сделано в <a href="http://interpro.kz" rel="nofollow" target="_blank" class="link">ИнтерПро</a>
            </p>
        </div>
    </footer>
    @yield('seotext')
@endsection