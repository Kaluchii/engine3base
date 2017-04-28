@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование преимущества'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->title_field}}"
                       data-name="title"
                       data-block="advantage"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Изображение</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->advantage_field->link}}?{{$item->advantage_field->cache_index}}"
                                             class="kv-preview-data file-preview-image"
                                             title="{{$item->advantage_field->alt}}" alt="{{$item->advantage_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption"
                                             title="{{$item->advantage_field->alt}}">{{$item->advantage_field->name_field}}
                                            <br> </div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="advantage"
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
                               data-block="advantage"
                               data-name="advantage"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Текст преимущества</label>
                <textarea class="form-control text-editor"
                          data-name="descr"
                          data-type="text"
                          data-block="advantage"
                          data-id="{{$item->id_field}}">{{$item->descr_field}}</textarea>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" class="minimal bool"
                           data-name="fact_visible"
                           data-type="bool"
                           data-block="advantage"
                           data-id="{{$item->id_field}}"
                           @if($item->fact_visible_field) checked @endif>
                    Отображать зеленый блок (галочка - отображать)
                </label>
            </div>

            <div class="form-group">
                <label>Иконка для зеленого блока</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->fact_field->link}}?{{$item->fact_field->cache_index}}"
                                             class="kv-preview-data file-preview-image"
                                             title="{{$item->fact_field->alt}}" alt="{{$item->fact_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption"
                                             title="{{$item->fact_field->alt}}">{{$item->fact_field->name_field}}
                                            <br> </div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="advantage"
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
                               data-block="advantage"
                               data-name="fact"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Текст в зеленом блоке</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->green_text_field}}"
                       data-name="green_text"
                       data-type="string"
                       data-block="advantage"
                       data-id="{{$item->id_field}}">
            </div>
        </div>
    </div>
@endsection