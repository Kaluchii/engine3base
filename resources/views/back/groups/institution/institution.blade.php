@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Заведения'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название заведения</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->title_field}}"
                       data-name="title"
                       data-block="institution"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Иконка маркера</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->marker_icon_field->link}}" class="kv-preview-data file-preview-image"
                                             title="{{$item->marker_icon_field->alt}}" alt="{{$item->marker_icon_field->alt}}"
                                             style="width:auto;height:160px;">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption"
                                             title="{{$item->marker_icon_field->alt}}">{{$item->marker_icon_field->name_field}}
                                            <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="institution"
                                                   data-type="images" data-id="{{$item->id_field}}" data-name="alt"
                                                   value="{{$item->marker_icon_field->alt}}">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files"
                            class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Remove</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload"
                            class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Browse …</span>
                        <input type="file" class="form-control file"
                               data-block="institution"
                               data-name="marker_icon"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
            </div>

        </div>

        <div class="box box-info group-item-widget"
             data-block="marker">
            <div class="box-header with-border">
                <h3 class="box-title"> Метки на карте </h3>
                <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
            </div>
            <div class="box-body">
                <div class="groupflat-widget group-item-wrap">
                    @foreach($item->marker_group as $item_marker)
                        @include('back.groups.marker.marker_box', ['item' => $item_marker])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection