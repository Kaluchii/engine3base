@section('footer')
    <footer class="footer">
        <div class="bottom-row">
            <p class="bottom-text left">{{$static->copyright_field}}</p>
            <p class="bottom-text center">Комплекс в социальных сетях:<br>
                <span class="soc-links">
                    <a {{--href="{{$static->vk_field}}" --}}rel="nofollow" target="_blank" class="soc-link" {{--class="link"--}}>ВКонтакте</a>
                    <a {{--href="{{$static->inst_field}}" --}}rel="nofollow" target="_blank" class="soc-link" {{--class="link"--}}>Инстаграм</a>
                    <a {{--href="{{$static->fb_field}}" --}}rel="nofollow" target="_blank" class="soc-link" {{--class="link"--}}>Фейсбук</a>
                </span>
            </p>
            <p class="bottom-text right">Сделано в<br><a href="http://interpro.kz" rel="nofollow" target="_blank" class="link">ИнтерПро</a>
            </p>
        </div>
    </footer>
    @yield('seotext')
@endsection