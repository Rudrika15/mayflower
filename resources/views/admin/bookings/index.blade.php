@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'Doctor Master')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong><i class="fa fa-warning ico"></i> {{ $message }}</strong>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Oh snap!</strong> {{ __('There were some problems with your input') }}.
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="box-content card">
    <!-- Header -->
    <div class="card-head">
        <div>
            <h4>Bookings</h4>
        </div>

    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <div class="table-responsive">
            <!-- table start -->
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Age</th>
                    <th>Package</th>
                    <!-- <th width="280px">Action</th> -->
                </tr>
                @foreach ($booking as $bookings)
                <tr>
                    <td>{{ $bookings->name }}</td>
                    <td>{{ $bookings->email }}</td>
                    <td>{{ $bookings->contact }}</td>
                    <td>{{ $bookings->age }}</td>
                    <td>{{ $bookings->packageName }}</td>

                    <!-- <td>
                        <a class="btn btn-success btn-sm" href="{{ route('admin.doctormaster.edit', $bookings->userId) }}">Edit</a>
                        <a onclick="return myFunction();" class="btn btn-danger btn-sm" href="{{ route('admin.doctormaster.delete', $bookings->userId) }}">Delete</a>

                    </td> -->
                </tr>
                @endforeach
            </table>
            <!-- end table responsive class -->
        </div>
        {!! $booking->withQueryString()->links('pagination::bootstrap-5') !!}

    </div>

    <!-- end card -->

</div>
<script>
    function myFunction() {
        if (!confirm("Are You Sure to delete this"))
            event.preventDefault();
    }
</script>
@endsection