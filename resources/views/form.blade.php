@extends('layout')

@section('content')

@push('title')
  <title>Registration</title>  
@endpush

  {{-- @if(session('success'))
  <script>
      Swal.fire({
          title: 'Success!',
          text: '{{ session('success') }}',
          icon: 'success',
          confirmButtonText: 'OK'
      });
  </script>
@endif --}}

    <form class="row g-3" action = "{{url('/')}}/register" method = "POST">
      @csrf
      <div class="col-md-6">
        <div class="ml-3 mb-3 mt-3">
        {{-- <x-input type="text" name="id" label="enter your id" />        --}}
        <x-input type="text" name="name" label="enter your name" />        
        <x-input type="email" name="email" label="enter your email" />
        <x-input type="text" name="Address" label="enter your address" />   
        <x-select name="gender" label="Select gender" :options="['male' =>'male' ,'female' => 'female', 'others' => 'others']" />
        <x-input type="password" name="password" label="enter password" />
        <x-input type="password" name="c_password" label="enter password again" />
        
        <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary">Submit</button> 
      </div>
      </div>
      </div>

  {{-- <div class="col-md-6">
        <label for="inputName4" class="form-label">Name</label>
        <input type="name" name="name"class="form-control" id="inputName4">
        <span class ="text-danger">
          @error('name')
            {{ $message }}
          @enderror
        </span>
    </div> --}}
  {{-- <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email"class="form-control" id="inputEmail4">
    <span class ="text-danger">
      @error('email')
        {{ $message }}
      @enderror
    </span>
   </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" >
    <span class ="text-danger">
      @error('address')
        {{ $message }}
      @enderror
    </span>
   </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="inputCity"> --}}
    {{-- <span class ="text-danger">
      @error('city')
        {{ $message }}
      @enderror
    </span> --}}
   {{-- </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4"> --}}
    {{-- <span class ="text-danger">
      @error('password')
        {{ $message }}
      @enderror
    </span> --}}
   {{-- </div> --}}
  <!-- <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
   </div> -->
  {{-- <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
   </div> --}}
  {{-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
   </div> --}}
  {{-- <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
   </div> --}}
  
   </form>

@endsection
