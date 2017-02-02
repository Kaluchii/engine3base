@section('meta')
    <title>{{$layout->seo_title_field}}</title>
    <meta name="description" content="{{$layout->seo_description_field}}">
    <meta name="keywords" content="{{$layout->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $layout->seo_text_field])
@endsection