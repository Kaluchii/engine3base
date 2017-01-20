@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование категории галереи'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название категории изображений</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->gall_name_field}}"
                       data-name="gall_name"
                       data-type="string"
                       data-block="gallery_type"
                       data-id="{{$item->id_field}}">
            </div>


        </div>

        <div class="box box-info group-item-widget"
             data-block="slider_from">
            <div class="box-header with-border">
                <h3 class="box-title"> Изображения в слайдере </h3>
                <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
            </div>
            <div class="box-body">

                <div class="groupflat-widget group-item-wrap">
                    @foreach($item->slider_from_group as $item_slider_from)
                        @include('back.groups.slider_from.slider_from_box', ['item' => $item_slider_from])
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection