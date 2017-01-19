@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование страницы'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля страницы</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название блока</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->flat_name_field}}"
                       data-name="flat_name"
                       data-type="string"
                       data-block="flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Площадь</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->area_field}}"
                       data-name="flat_name"
                       data-type="string"
                       data-block="area"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Название блока</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->flat_name_field}}"
                       data-name="flat_name"
                       data-type="string"
                       data-block="flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Название блока</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->flat_name_field}}"
                       data-name="flat_name"
                       data-type="string"
                       data-block="flat"
                       data-id="{{$item->id_field}}">
            </div>
        </div>
    </div>

@endsection