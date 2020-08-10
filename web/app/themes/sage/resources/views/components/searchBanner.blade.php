<div class="search-banner @if(isset($classes)) {{$classes}} @endif">
  <div class="container">
    <div class="row">
      <h1 class="col-12 search-banner__title">
        @if(isset($title)) {{$title}} @else Discover great places to eat <br>around you in Kazan @endif
      </h1>
      @component('components.searchForm',  
        [
          "placeholder" => 'Поиск заведений и блюд',
          "classes" => "col-md-5"
        ]
      )
      @endcomponent
    </div>
  </div>
</div>