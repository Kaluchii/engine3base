@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование квартиры'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название квартиры</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->dom_flat_name_field}}"
                       data-name="dom_flat_name"
                       data-type="string"
                       data-block="dom_flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Заголовок страницы</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->flat_title_field}}"
                       data-name="flat_title"
                       data-type="string"
                       data-block="dom_flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Вид ссылки в адресной строке</label>
                <input class="form-control slug string"
                       type="text" placeholder=""
                       value="{{$item->slug_field}}"
                       data-name="slug"
                       data-block="dom_flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Минимальная площадь</label>
                <input class="form-control float"
                       type="text" placeholder=""
                       value="{{$item->min_area_field}}"
                       data-name="min_area"
                       data-type="float"
                       data-block="dom_flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Максимальная площадь</label>
                <input class="form-control float"
                       type="text" placeholder=""
                       value="{{$item->max_area_field}}"
                       data-name="max_area"
                       data-type="float"
                       data-block="dom_flat"
                       data-id="{{$item->id_field}}">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box table-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Планировки
                    </h3>
                    {{--<button type="button" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-group-item">Добавить</button>
                    <div class="col-xs-5 pull-right">
                        <input type="text" class="form-control add-item"
                               data-name="layout_name"
                               data-block="layout"
                               placeholder="Название элемента"
                        >
                    </div>--}}
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                           aria-describedby="example2_info"
                           data-block="dom_flat">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="">Название</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Дата</th>
                            {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Статус публикации</th>--}}
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Порядок выдачи</th>
                            {{--<th  tabindex="0"  rowspan="1"
                                 colspan="1" aria-label="">Удаление</th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($item->layout_group as $layout_item)
                            @include('back.groups.layout.layout_row',['item' => $layout_item])
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

@endsection