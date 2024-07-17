@extends('layout')

@section('content')

@push('title')
  <title>Registration</title>  
@endpush

@if(session('success'))
<script>
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
</script>
@endif
 
@if(session('wrong'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('wrong') }}'
    });
</script>
@endif

<form class="row g-3" action = "{{url('/')}}/login" method = "POST">
    @csrf
    <div class="col-md-6">
      <div class="ml-3 mb-3 mt-3">      
      <x-input type="email" name="email" label="enter your email" />
      <x-input type="password" name="password" label="enter password" />
      
      <div class="d-flex justify-content-center mt-4">
      <button type="submit" class="btn btn-primary">Login</button> 
    </div>
    </div>
    </div> 
</form>

@endsection