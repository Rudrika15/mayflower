@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('content')
@if (Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
    @php
        Session::forget('success');
    @endphp
</div>
@endif
    <div class="box-content card">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Master Management</h4>
            </div>
            <div>
                <a href="{{ route('admin.master.create') }}" class="btn addbtn btn-sm">ADD</a>
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
                        <th>Description</th>
                        <th>User Name</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($master as $masterData)
                        <tr>
                            <td>{{ $masterData->name }}</td>
                            <td>{{ $masterData->description }}</td>
                            <td>{{ $masterData->userName }}</td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.master.edit', $masterData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.master.delete', $masterData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $master->withQueryString()->links('pagination::bootstrap-5') !!}

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
