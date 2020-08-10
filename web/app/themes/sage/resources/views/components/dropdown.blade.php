<div class="dropdown @if(isset($modifier)) dropdown--{{$modifier}} @endif">
  <?php 
    $active_item_id = array_search(true, array_column($items, 'isActive')); 
    $random_id = "dropdownMenuButton--" . bin2hex(random_bytes(5));
  ?>
  <button class="dropdown-toggle dropdown__toggle" type="button" id="{{$random_id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $items[$active_item_id]['name']; ?>
  </button>
  <div class="dropdown-menu dropdown__wrapper {{isset($menu_classes) ? $menu_classes : ''}}" aria-labelledby="{{$random_id}}">
    <ul class="dropdown__list">
      @foreach ($items as $key => $item)
        @if(!isset($item['isActive']) || $item['isActive'] != true)
          <li class="dropdown-item dropdown__item" data-id="{{$key}}">{{$item['name']}}</li>
        @endif
      @endforeach
    </ul>
  </div>
</div>