@extends('back.layout')
@section('content')

@include('back.content-top', ['title' => 'Квартиры на главной'])


<div class="row">
    <div class="col-xs-12">
        <div class="box table-widget">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Квартиры
                </h3>
                <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                <div class="col-xs-5 pull-right">
                    <input type="text" class="form-control add-item"
                           data-name="flat_name"
                           data-block="flat"
                            placeholder="Название элемента"
                    >
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                       aria-describedby="example2_info"
                       data-block="flats_block">
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
                            colspan="1" aria-label="">Вес</th>
                        <th  tabindex="0"  rowspan="1"
                             colspan="1" aria-label="">Удаление</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($flats_block->flat_group as $item)
                        @include('back.groups.flat.flat_row',['item' => $item])
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