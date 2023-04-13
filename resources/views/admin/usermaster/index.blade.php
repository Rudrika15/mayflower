@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'User Master')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="box-content card">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>User Master Management</h4>
            </div>
            <div>
                <a href="{{ route('admin.usermaster.create') }}" class="btn addbtn btn-sm">ADD</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($usermaster as $usermasterData)
                        <tr>
                            <td>{{ $usermasterData->userName }}</td>
                            <td>{{ $usermasterData->name }}</td>
                            <td>{{ $usermasterData->email }}</td>
                            <td>{{ $usermasterData->age }}</td>
                            <td>{{ $usermasterData->gender }}</td>
                            <td>
                                @if ($usermasterData->status === 'Y')
                                    Yes
                                @elseif($usermasterData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.usermaster.edit', $usermasterData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.usermaster.delete', $usermasterData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $usermaster->withQueryString()->links('pagination::bootstrap-5') !!}

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
