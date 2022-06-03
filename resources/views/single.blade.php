@extends('layouts.app')

@section('content')
  <div class="">
    <div class="">
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
      @endwhile
    </div>
  </div>
@endsection
