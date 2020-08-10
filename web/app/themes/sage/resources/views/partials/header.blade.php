<header class="header">
  <div class="container">
    <div class="row">
      @component('components.logo') @endcomponent
      <div class="wrapper">
        @component('components.searchForm',  ["placeholder" => 'Поиск заведений и блюд']) @endcomponent
        @component(
          'components.dropdown',
          [
            "items" => array(
              array(
                "name" => "Русский",
                "isActive" => true
              ),
              array(
                "name" => "English",
                "isActive" => false
              )
            ),
            'modifier' => 'language'
          ]
        )
        @endcomponent
        @component(
          'components.dropdown',
          [
            "items" => array(
              array(
                "name" => "Казань",
                "isActive" => true
              ),
              array(
                "name" => "Москва",
                "isActive" => false
              )
            ),
            'modifier' => 'city'
          ]
        )
        @endcomponent
        @component('components.user') @endcomponent
      </div>
      <button class="header__toggler">
        <span class="header__toggler-icon"></span>
      </button>
    </div>
  </div>
</header>