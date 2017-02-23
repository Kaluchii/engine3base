@section('meta')
    <title>{{$advantages->seo_title_field}}</title>
    <meta name="description" content="{{$advantages->seo_description_field}}">
    <meta name="keywords" content="{{$advantages->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $advantages->seo_text_field])
@endsection