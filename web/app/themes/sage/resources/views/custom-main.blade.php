{{--
  Template Name: Custom Main Page
--}}

@extends('layouts.app')
@section('content')
  @component('components.searchBanner') @endcomponent
  <?php
    $taxes = get_terms(array(
      'taxonomy' => 'kitchen_type',
      'hide_empty' => 0, 
      'orderby' => 'id', 
    ));
    foreach ($taxes as $key => $tax) {
      $taxes[$key] = (array)$tax;
    };
  ?>
  @component('components.kitchenTypes', 
    [
      "types" => $taxes,
    ]
  )
  @endcomponent
  @component('components.posts', 
    [
      "post_type" => 'restaurants',
      "posts_per_page" => '-1'
    ]
  )
  @endcomponent
@endsection
