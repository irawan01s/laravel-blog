@section('title', 'Add Post')

@extends('layouts.dashboard.app_dashboard')
    
@section('content')
<div class="col-xl-7 col-lg-6">
  <div class="card shadow mb-4">
    <!-- Card Header -->
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Post</h6>                  
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <form class="needs-validation" novalidate>
        @include('dashboard.post.form')
      </form>
    </div>
  </div>
</div>    
@endsection


@section('script')
<script>
(function() {
  'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
})();
</script>
@endsection