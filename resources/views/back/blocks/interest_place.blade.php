@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Интересные места'])

    <div class="box box-info group-item-widget"
         data-block="place">
        <div class="box-header with-border">
            <h3 class="box-title"> Интересные места поблизости </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($interest_place->place_group as $item)
                    @include('back.groups.place.place_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection