<tr role="row" class="odd" data-id="{{$item->id_field}}">


    {{-- Название  --}}
    <td class="sorting_1">
        <a href="map/{{$item->id_field}}" class="">{{$item->category_name_field}}</a>
    </td>

    {{-- Дата последнего редактирования --}}
    <td> {{$item->getField('updated_at')->getItem()->getDate()}} </td>

    {{-- Опубликовано  --}}
    {{--<td data-order="{{$item->show_field}}">
        <select class="form-control group-show"
                data-id="{{$item->id_field}}"
                data-block="marker_category"
                data-name="show">
            @if($item->show_field)
                <option value="false">Не опубликовано</option>
                <option value="true" selected>Опубликовано</option>
            @else
                <option value="false" selected>Не опубликовано</option>
                <option value="true">Опубликовано</option>
            @endif
        </select>
    </td>--}}

    {{-- Сортировака --}}
    <td data-order="{{$item->sorter_field}}">
        <input type="number" class="form-control group-sorter"
               data-id="{{$item->id_field}}"
               data-block="marker_category"
               data-name="sorter"
               value="{{$item->sorter_field}}">
    </td>

    {{-- Удаления  --}}
    <td>
        <button type="button" class="btn btn-block btn-primary group-remove-item" data-id="{{$item->id_field}}" data-block="marker_category">Удалить</button>
    </td>
</tr>