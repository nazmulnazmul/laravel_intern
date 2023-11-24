@extends('frontend.master')
@section('main_content')
                
    <div class="col-lg-12">
      <div class="blog-post">
        @foreach ($posts as $post)
          <div class="down-content">
            <span>{{ $post->tittle }}</span>
            <p>{{ $post->des }}</p>
          </div>
        @endforeach
      </div>
    </div>  
  @endsection
    