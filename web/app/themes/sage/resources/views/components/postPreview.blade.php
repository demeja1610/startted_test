<div class="post-preview">
  @php
      $img = get_the_post_thumbnail_url($post->ID, 'medium');
      $name = get_the_title();
      $cur_terms = get_the_terms($post->ID, "kitchen_type");
  @endphp
  @if($img) <img src="{{$img}}" alt="{{$name}}" class="post-preview__image"> @endif
  <a href="{{get_permalink()}}" class="post-preview__name">{{$name}}</a>
  <div class="post-preview__terms">
    @if(is_array($cur_terms))
      @foreach($cur_terms as $cur_term)
        <a class="post-preview__term" href="{{get_term_link($cur_term->term_id, $cur_term->taxonomy)}}">{{$cur_term->name}}</a>
      @endforeach
    @endif
  </div>
</div>