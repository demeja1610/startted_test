@if(isset($post_type))
  <div class="posts">
    <h2 class="container posts__title">
      @php
        $obj = get_post_type_object($post_type);
        echo $obj->labels->name;
      @endphp
    </h2>
    <div class="container">
      <div class="row">
        @php
          $args = array(  
            'posts_per_page'  => isset($posts_per_page) ? $posts_per_page : '-1' ,
            'post_type' => $post_type,
            'orderby' => array('date ' => 'ASC')
          );
          $query = new WP_Query( $args );
          global $post;
        @endphp
        @if($query->have_posts())
          @while($query->have_posts())
            {{$query->the_post()}}
            @component('components.postPreview')
            @endcomponent
          @endwhile
        @endif
        {{wp_reset_postdata()}}
      </div>
    </div>
  </div>
@endif