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
                       value="{{$item->flat_name_field}}"
                       data-name="flat_name"
                       data-type="string"
                       data-block="flat"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Панорама</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->panorame_field->link}}?{{$item->panorame_field->cache_index}}"
                                             class="kv-preview-data file-preview-image"
                                             title="{{$item->panorame_field->alt}}" alt="{{$item->panorame_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption"
                                             title="{{$item->panorame_field->alt}}">{{$item->panorame_field->name_field}}
                                            <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="flat"
                                                   data-type="images" data-id="{{$item->id_field}}" data-name="alt">
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
                                class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload"
                            class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span>
                    </button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="flat"
                               data-name="panorame"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Минимальная площадь</label>
                <input class="form-control float"
                       type="text" placeholder=""
                       value="{{$item->min_area_field}}"
                       data-name="min_area"
                       data-type="float"
                       data-block="flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Максимальная площадь</label>
                <input class="form-control float"
                       type="text" placeholder=""
                       value="{{$item->max_area_field}}"
                       data-name="max_area"
                       data-type="float"
                       data-block="flat"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Стоимость "от" млн</label>
                <input class="form-control int"
                       type="text" placeholder=""
                       value="{{$item->cost_field}}"
                       data-name="cost"
                       data-type="int"
                       data-block="flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Текст описание (Появляется при наведении)</label>
                <textarea class="form-control text"
                          data-name="description"
                          data-type="text"
                          data-block="flat"
                          data-id="{{$item->id_field}}">{{$item->description_field}}</textarea>
            </div>
        </div>
    </div>

@endsection