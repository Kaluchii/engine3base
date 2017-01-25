@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Общие настройки сайта'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля страницы</h3>
        </div>


        <div class="box-body">

            <div class="form-group">
                <label>Номер телефона</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->phone_field}}"
                       data-name="phone"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Логотип</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$static_all_site->logo_field->link}}?{{$static_all_site->logo_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$static_all_site->logo_field->alt}}" alt="{{$static_all_site->logo_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$static_all_site->logo_field->alt}}">{{$static_all_site->logo_field->name_field}} <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="static_all_site" data-type="images" data-id="0" data-name="alt">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="static_all_site"
                               data-name="logo"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Копирайт</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->copyright_field}}"
                       data-name="copyright"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Ссылка на ВК</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->vk_field}}"
                       data-name="vk"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на Инстаграмм</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->inst_field}}"
                       data-name="inst"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на Фейсбук</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->fb_field}}"
                       data-name="fb"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Метрики (script)</label>
                <textarea class="form-control text"
                          data-name="metrik_script"
                          data-type="text"
                          data-block="static_all_site"
                          data-id="0">{{$static_all_site->metrik_script_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Метрики (noscript)</label>
                <textarea class="form-control text"
                          data-name="metrik_noscript"
                          data-type="text"
                          data-block="static_all_site"
                          data-id="0">{{$static_all_site->metrik_noscript_field}}</textarea>
            </div>

        </div>
    </div>
@endsection