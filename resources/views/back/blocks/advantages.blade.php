@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Страница преимуществ'])


    <div class="row">
        <div class="col-xs-12">
            <div class="box table-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Преимущества
                    </h3>
                    <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить
                    </button>
                    <div class="col-xs-5 pull-right">
                        <input type="text" class="form-control add-item"
                               data-name="title"
                               data-block="advantage"
                               placeholder="Название элемента"
                        >
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                           aria-describedby="example2_info"
                           data-block="advantages">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="">Название
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Дата
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Статус публикации
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Порядок выдачи
                            </th>
                            <th tabindex="0" rowspan="1"
                                colspan="1" aria-label="">Удаление
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($advantages->advantage_group as $item)
                            @include('back.groups.advantage.advantage_row',['item' => $item])
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
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования СЕО</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Тайтл</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$advantages->seo_title_field}}"
                       data-name="seo_title"
                       data-type="seo"
                       data-block="advantages"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ключевые слова</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$advantages->seo_keywords_field}}"
                       data-name="seo_keywords"
                       data-type="seo"
                       data-block="advantages"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Описание страницы</label>
                <textarea class="form-control text"
                          data-name="seo_description"
                          data-type="seo"
                          data-block="advantages"
                          data-id="0">{{$advantages->seo_description_field}}</textarea>
            </div>
            <div class="form-group">
                <label>СЕО текст (выводится в нижней части страницы)</label>
                <textarea class="form-control text-editor"
                          data-name="seo_text"
                          data-type="seo"
                          data-block="advantages"
                          data-id="0">{{$advantages->seo_text_field}}</textarea>
            </div>
        </div>
    </div>

@endsection