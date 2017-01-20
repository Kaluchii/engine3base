<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Метка {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="marker">Удалить</button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Широта</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->lat_field}}"
                   data-name="lat"
                   data-type="string"
                   data-block="marker"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Долгота</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->lon_field}}"
                   data-name="lon"
                   data-type="string"
                   data-block="marker"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Название</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->label_field}}"
                   data-name="label"
                   data-type="string"
                   data-block="marker"
                   data-id="{{$item->id_field}}">
        </div>

    </div>
</div>