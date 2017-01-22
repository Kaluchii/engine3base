@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Категория меток'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название категории</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->category_name_field}}"
                       data-name="category_name"
                       data-type="string"
                       data-block="marker_category"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Идентификатор слайдера категории (на латинице)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->category_id_field}}"
                       data-name="category_id"
                       data-type="string"
                       data-block="marker_category"
                       data-id="{{$item->id_field}}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="box table-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Подкатегории меток (заведения)
                    </h3>
                    <button type="button" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-group-item">Добавить</button>
                    <div class="col-xs-5 pull-right">
                        <input type="text" class="form-control add-item"
                               data-name="title"
                               data-block="institution"
                               placeholder="Название элемента"
                        >
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                           aria-describedby="example2_info"
                           data-block="marker_category">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="">Название</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Дата</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Статус публикации</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Порядок выдачи</th>
                            <th  tabindex="0"  rowspan="1"
                                 colspan="1" aria-label="">Удаление</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($item->institution_group as $institution_item)
                            @include('back.groups.institution.institution_row',['item' => $institution_item])
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