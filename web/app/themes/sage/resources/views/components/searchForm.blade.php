<form class="search-form @if(isset($classes)) {{$classes}} @endif">
  @include('icon::lens', ['width' => "16", 'height' => '16', 'class' => 'search-form__icon'])
  <input type="text" class="search-form__input" @if(isset($placeholder)) placeholder="{{$placeholder}}" @endif>
</form>