@extends('layout')
@push('title')
    <title>Customer</title>
@endpush
@section('content')

<h1>Customers</h1>

{{-- @php
foreach ($customers as $customer){
 echo $customer." ";
}
@endphp --}}

{{-- <ul>
@php
foreach ($customers as $cuslis){
    echo '<li>'.$cuslis.'</li>';
}
@endphp 
</ul>--}}

{{-- @if(session('delete'))
<script>
    Swal.fire({
        title: 'Success!',
        text: '{{ session('delete') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
</script>
@endif --}}

{{-- @if(session('delete'))
<script>
Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
    
      Swal.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
      });
    }
  });
</script>
@endif --}}

@if(session('update'))
<script>
    Swal.fire({
        title: 'Success!',
        text: '{{ session('update') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
</script>
@endif

<div class="d-flex justify-content-end mt-6">
<a class="nav-link ms-auto" href="{{route('register.r')}}">
    <button type="submit" class="btn btn-primary">Add</button> 
</a>
</div>
<div
    class="table-responsive">
    <table
        class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
               <tr class="">
                <td scope="row">{{ $customer -> id }}</td>
                <td>{{ $customer -> name }}</td>
                <td>{{ $customer -> email }}</td>
                <td>{{ $customer -> gender }}</td>
                <td>{{ $customer -> address }}</td>
                <td>
                    <span class="badge badge-success">Active</span>
                    
                    {{-- @if ($customer->status == "1")
                    <a href="">
                        <span class="badge badge-success">Active</span>
                    </a>
                    @else
                    <a href="">
                        <span class="badge badge-danger">Inactive</span>
                    </a>
                    @endif --}}
                </td>

                <td>
                    {{-- <a href="{{ url('/') }}/delete/{{ $customer->id }}"> --}}
                    <a id="delete" href="{{ route('customer.del',['id'=> $customer->id]) }}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </a>
                    <a href="{{ url('/') }}/edit/{{ $customer->id }}">
                    <button type="submit" class="btn btn-success">Edit</button>
                    </a>
                </td>
            </tr> 
            @endforeach
            
        </tbody>
    </table>
</div>

<script>
    $(document).on("click", "#delete", function (e) {
    e.preventDefault();
    var link = $(this).attr("href");
    

    Swal.fire({
        title: 'Are you sure?',
        // text: "You won't be able to Delete this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = link;
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }else{
            Swal.fire(
                'Cancelled!',
                'Your imaginary file is safe.',
                'error'
            )
        }
    });

});
</script>
@endsection
