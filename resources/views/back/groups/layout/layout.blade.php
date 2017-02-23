@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование планировки'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Название планировки</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->layout_name_field}}"
                       data-name="layout_name"
                       data-type="string"
                       data-block="layout"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Вид ссылки в адресной строке</label>
                <input class="form-control slug string"
                       type="text" placeholder=""
                       value="{{$item->slug_field}}"
                       data-name="slug"
                       data-block="layout"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Минимальная площадь</label>
                <input class="form-control float"
                       type="text" placeholder=""
                       value="{{$item->min_area_field}}"
                       data-name="min_area"
                       data-type="float"
                       data-block="layout"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Максимальная площадь</label>
                <input class="form-control float"
                       type="text" placeholder=""
                       value="{{$item->max_area_field}}"
                       data-name="max_area"
                       data-type="float"
                       data-block="layout"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Изображение планировки</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->layout_scheme_field->link}}?{{$item->layout_scheme_field->cache_index}}"
                                             class="kv-preview-data file-preview-image"
                                             title="{{$item->layout_scheme_field->alt}}" alt="{{$item->layout_scheme_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption"
                                             title="{{$item->layout_scheme_field->alt}}">{{$item->layout_scheme_field->name_field}}
                                            <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="layout"
                                                   data-type="images" data-id="{{$item->id_field}}" data-name="alt"
                                                   value="{{$item->layout_scheme_field->alt}}">
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
                               data-block="layout"
                               data-name="layout_scheme"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Изображение расположения планировки в комплексе</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->complex_scheme_field->link}}?{{$item->complex_scheme_field->cache_index}}"
                                             class="kv-preview-data file-preview-image"
                                             title="{{$item->complex_scheme_field->alt}}" alt="{{$item->complex_scheme_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption"
                                             title="{{$item->complex_scheme_field->alt}}">{{$item->complex_scheme_field->name_field}}
                                            <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="layout"
                                                   data-type="images" data-id="{{$item->id_field}}" data-name="alt"
                                                   value="{{$item->complex_scheme_field->alt}}">
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
                               data-block="layout"
                               data-name="complex_scheme"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label> Левый текстовый блок (под планировкой)</label>
                <textarea class="form-control text-editor"
                          data-name="facts"
                          data-type="text"
                          data-block="layout"
                          data-id="{{$item->id_field}}">{{$item->facts_field}}</textarea>
            </div>

            <div class="form-group">
                <label> Правый текстовый блок (под планировкой)</label>
                <textarea class="form-control text-editor"
                          data-name="descr"
                          data-type="text"
                          data-block="layout"
                          data-id="{{$item->id_field}}">{{$item->descr_field}}</textarea>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" class="minimal bool"
                           data-name="balcony"
                           data-type="bool"
                           data-block="layout"
                           data-id="{{$item->id_field}}"
                           @if($item->balcony_field) checked @endif>

                    Доступна планировка с балконом (галочка - доступна)
                </label>
            </div>

            <div class="form-group">
                <label>PDF планировка</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <p style="font-size: 120px;"><i class="fa fa-file-pdf-o "></i></p>
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-actions">
                                            <input type="text"
                                                   class="form-control title"
                                                   data-block="layout"
                                                   data-name="title"
                                                   data-type="file"
                                                   value="{{$item->pdf_field->title}}"
                                                   data-id="{{$item->id_field}}"
                                                   placeholder="Имя файла при скачивании">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Удалить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Отмена</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать …</span>
                        <input type="file" class="form-control files"
                               data-block="layout"
                               data-name="pdf"
                               data-type="file"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="box box box-success">

        <div class="box-header with-border">
            <h3 class="box-title">СЕО поля для редактирования</h3>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Тайтл</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->seo_title_field}}"
                       data-name="seo_title"
                       data-type="seo"
                       data-block="layout"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Ключевые слова</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->seo_keywords_field}}"
                       data-name="seo_keywords"
                       data-type="seo"
                       data-block="layout"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Описание страницы</label>
                <textarea class="form-control text"
                          data-name="seo_description"
                          data-type="seo"
                          data-block="layout"
                          data-id="{{$item->id_field}}">{{$item->seo_description_field}}</textarea>
            </div>
            <div class="form-group">
                <label>СЕО текст (выводится в нижней части страницы)</label>
                <textarea class="form-control text-editor"
                          data-name="seo_text"
                          data-type="seo"
                          data-block="layout"
                          data-id="{{$item->id_field}}">{{$item->seo_text_field}}</textarea>
            </div>
        </div>
    </div>
@endsection