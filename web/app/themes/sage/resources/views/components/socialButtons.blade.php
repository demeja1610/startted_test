@if(isset($buttons))
  <div class="social-buttons">
    @foreach ($buttons as $button)
      <a 
        href="{{$button['link']}}" 
        class="social-buttons__item" 
        @if(isset($button['title'])) title="{{$button['title']}}" aria-label="{{$button['title']}}" @endif
        target="_blank"
        rel="noopener noreferrer"
      >
        @if(isset($button['icon']))
          @include('icon::' . $button['icon'], ['width' => "20", 'height' => '20', 'class' => 'social-buttons__icon'])
        @else
          {{isset($button['title']) ? $button['title'] : ''}}
        @endif
      </a>
    @endforeach
  </div>
@endif