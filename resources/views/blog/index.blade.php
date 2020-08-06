@extends('layouts.blog.app_blog')

@section('content')
<div class="row d-flex justify-content-around">
  @foreach ($posts as $post)
  <div class="col-lg-6 mx-auto mb-3">
    <div class="card">
    <img src="{{ $post->thumbnail }}" class="card-img-top">
      <div class="card-body">
      <a href="#" class="card-link">
        <h3 class="post-title">
          {{ $post->title }}
        </h3>
      </a>
        <p class="card-text">
          {{ Str::limit($post->content, 100) }}
        </p>
        <small class="text-muted">Posted by
          <a href="#">{{ $post->author }}</a>
          on {{ $post->created_at->diffForHumans() }}</small>
      </div>
    </div>
  </div>      
  @endforeach

  <!-- Pager -->
  <div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
  </div>
</div>
@endsection