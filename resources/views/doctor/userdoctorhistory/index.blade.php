@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'User Doctor History ')
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
                <h4>User Doctor History Management</h4>
            </div>
            <div>
                <a href="{{ route('doctor.userdoctorhistory.create') }}" class="btn addbtn btn-sm">ADD</a>
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
                        <th>Title</th>
                        <th>Upload Date</th>
                        <th>Suggestion</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($userDoctorHistory as $userDoctorHistoryData)
                        <tr>
                            <td>{{ $userDoctorHistoryData->userName }}</td>
                            <td>{{ $userDoctorHistoryData->title }}</td>
                            <td>{{ $userDoctorHistoryData->uploadDate }}</td>
                            <td>{{ $userDoctorHistoryData->suggestion }}</td>
                            <td>
                                @if ($userDoctorHistoryData->status === 'Y')
                                    Yes
                                @elseif($userDoctorHistoryData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('doctor.userdoctorhistory.edit', $userDoctorHistoryData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('doctor.userdoctorhistory.delete', $userDoctorHistoryData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach 
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $userDoctorHistory->withQueryString()->links('pagination::bootstrap-5') !!}

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
