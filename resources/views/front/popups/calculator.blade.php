<div class="hide">
    <div class="white-popup mfp-with-anim mfp-hide calculator" id="calculator">
        <h4 class="calculator__title">Рассчитать рассрочку</h4>
        <p class="calculator__layout-name">{{$layout->superior_item->flat_title_field}} • {{$layout->layout_name_field}}</p>
        <hr class="calculator__hr">

        <div class="calculator__row">
            <p class="calculator__row-title">Выберите площадь, м²</p>
            <ul class="calculator__layout-area-list">
                <?php $i = 0 ?>
                @foreach($layout->area_list_group as $area_item)
                    <?php $i++ ?>
                    <li class="calculator__layout-area-item">
                        <button class="calculator__layout-area-btn @if($i == 1) calculator__layout-area-btn--active @endif" data-area="{{$area_item->area_field}}">{{$area_item->area_field}}</button>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="calculator__row">
            <p class="calculator__row-title">Стоимость</p>
            <p class="calculator__flat-cost" data-meter_tg_cost="{{$meter_cost_tg}}" data-meter_dollar_cost="{{$course->meter_cost_field}}"><span class="calculator__flat-cost-tg">25 780 440</span> тг (<span class="calculator__flat-cost-dollars">78 360</span> $)</p>
        </div>

        <div class="calculator__row">
            <p class="calculator__row-title">Ваш первоначальный взнос, тг <span class="calculator__clarification calculator__clarification--yellow-bg">не менее 30%</span></p>
            <div class="calculator__contribution-row">
                <input type="text" class="calculator__contribution-input" data-dollar_price="{{$course->dollar_field}}">
                <span class="calculator__contribution-dollar"></span>
            </div>
        </div>

        <div class="calculator__row">
            <p class="calculator__row-title">Срок рассрочки <span class="calculator__clarification">(от 1 до 12 месяцев)</span></p>
            <div class="calculator__digit-incrementer digit-incrementer">
                <button class="digit-incrementer__button digit-incrementer__button--dec">–</button>
                <input disabled type="text" class="digit-incrementer__result" value="1" readonly max="12" min="1" maxlength="2">
                <button class="digit-incrementer__button digit-incrementer__button--inc">+</button>
            </div>
        </div>

        <hr class="calculator__hr">
        <button class="calculator__calc">Рассчитать рассрочку</button>

        <div class="calculator__row calculator__row--payment">
            <p class="calculator__row-title">Ежемесячный платеж</p>
            <p class="calculator__payment"><span class="calculator__payment-tg-wrap"><span class="calculator__payment-tg"></span> тг </span><span class="calculator__payment-dollar-wrap">(<span class="calculator__payment-dollar"></span> $)</span></p>
        </div>
    </div>
</div>