@extends('layouts.blog.app_blog')

@section('content')
<div class="row d-flex justify-content-around">
  <div class="col-lg-6 mx-auto">
    <div class="card">
      <img src="https://source.unsplash.com/random/100" class="card-img-top">
      <div class="card-body">
      <a href="#" class="card-link">
        <h3 class="post-title">
          Man must explore, and this is exploration at its greatest
        </h3>
      </a>
        <p class="card-text">
          Problems look mighty small from 150 miles up
        </p>
        <small class="text-muted">Posted by
          <a href="#">Start Bootstrap</a>
          on September 24, 2019</small>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-4">
    <div class="post-preview shadow">
      <img src="https://source.unsplash.com/random/200" class="card-img-top">
      <a href="post.html">
        <h2 class="post-title">
          Man must explore, and this is exploration at its greatest
        </h2>
        <h3 class="post-subtitle">
          Problems look mighty small from 150 miles up
        </h3>
      </a>
      <p class="post-meta">Posted by
        <a href="#">Start Bootstrap</a>
        on September 24, 2019</p>
    </div>
  </div>
  <div class="col-lg-6 col-md-4">
    <div class="post-preview shadow">
      <img src="https://source.unsplash.com/random/300" class="card-img-top">
      <a href="post.html">
        <h2 class="post-title">
          I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
        </h2>
        <h3 class="post-subtitle">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem, excepturi accusamus inventore
        </h3>
      </a>
      <p class="post-meta">Posted by
        <a href="#">Start Bootstrap</a>
        on September 18, 2019</p>
    </div>
  </div>
  <div class="col-lg-6 col-md-4">
    <div class="post-preview shadow">
      <img src="https://source.unsplash.com/random/400" class="card-img-top">
      <a href="post.html">
        <h2 class="post-title">
          Science has not yet mastered prophecy
        </h2>
        <h3 class="post-subtitle">
          We predict too much for the next year and yet far too little for the next ten.
        </h3>
      </a>
      <p class="post-meta">Posted by
        <a href="#">Start Bootstrap</a>
        on August 24, 2019</p>
    </div>
  </div>
  <div class="col-lg-6 col-md-4">
    <div class="post-preview shadow">
      <img src="https://source.unsplash.com/random/500" class="card-img-top">
      <a href="post.html">
        <h2 class="post-title">
          Failure is not an option
        </h2>
        <h3 class="post-subtitle">
          Many say exploration is part of our destiny, but it’s actually our duty to future generations.
        </h3>
      </a>
      <p class="post-meta">Posted by
        <a href="#">Start Bootstrap</a>
        on July 8, 2019</p>
    </div>
  </div>
  <!-- Pager -->
  <div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
  </div>
</div>
</div>
@endsection