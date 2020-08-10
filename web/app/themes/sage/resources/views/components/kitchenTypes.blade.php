<div class="kitchen-types">
  <div class="container">
    <div class="row">
      <div class="kitchen-types__viewport">
        <ul class="kitchen-types__list">
          <li class="kitchen-types__item active">Все</li>
          @if(isset($types))
            @for($i = 0; $i < 8; $i++)
              <li class="kitchen-types__item" data-id="{{$types[$i]['term_id']}}">{{$types[$i]['name']}}</li>
            @endfor
          @endif
        </ul>
      </div>
      @if(isset($types) && count($types) > 8)
        <?php
          $items = array_slice($types, 8);
          array_unshift($items, array(
            "name" => "Еще",
            "isActive" => true
          ));
        ?>
        @component(
          'components.dropdown',
          [
            "items" => $items,
            "menu_classes" => "dropdown-menu-right"
          ]
        )
        @endcomponent
      @endif
    </div>
  </div>
</div>