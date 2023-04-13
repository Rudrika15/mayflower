@extends('layouts.app')
@section('nav', 'User Lab Report')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('content')

    <!-- alert messages -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong><i class="fa fa-warning ico"></i> {{ $message }}</strong>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong>Oh snap!</strong> {{ __('There were some problems with your input') }}.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- end alerts -->
    <div class="box-content card">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>User Lab Report Management</h4>
            </div>
            <div>
                <a href="{{ route('admin.userlabreport.create') }}" class="btn addbtn btn-sm">ADD</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>User</th>
                        <th>Test Center</th>
                        <th>Document</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($userLabReport as $userLabReportData)
                        <tr>
                            <td>{{ $userLabReportData->userName }}</td>
                            <td>{{ $userLabReportData->centerName }}</td>
                            <td>{{ $userLabReportData->document }}
                            </td>
                            <td>{{ $userLabReportData->note }}</td>
                            <td>
                                @if ($userLabReportData->status === 'Y')
                                    Yes
                                @elseif($userLabReportData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.userlabreport.edit', $userLabReportData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.userlabreport.delete', $userLabReportData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $userLabReport->withQueryString()->links('pagination::bootstrap-5') !!}

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
