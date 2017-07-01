<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Размер планировки {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="area_list">Удалить</button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Размер планировки</label>
            <input class="form-control float"
                   type="text" placeholder=""
                   value="{{$item->area_field}}"
                   data-name="area"
                   data-type="float"
                   data-block="area_list"
                   data-id="{{$item->id_field}}">
        </div>
    </div>
</div>