@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'User Package')
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
                <h4>User Package Management</h4>
            </div>
            <div>
                <a href="{{ route('admin.userpackage.create') }}" class="btn addbtn btn-sm">ADD</a>
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
                        <th>PackageDetail Name</th>
                        <th>DateOfPurchase</th>
                        <th>ValidUpto</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($userpackage as $userpackageData)
                        <tr>
                            <td>{{ $userpackageData->userName }}</td>
                            <td>{{ $userpackageData->forPackageNames }}</td>
                            <td>{{ $userpackageData->dateOfPurchase }}</td>
                            <td>{{ $userpackageData->validUpto }}</td>
                            <td>
                                @if ($userpackageData->status === 'Y')
                                    Yes
                                @elseif($userpackageData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.userpackage.edit', $userpackageData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.userpackage.delete', $userpackageData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
                <!-- end table responsive class -->
            </div>
        </div>

        <!-- end card -->

        {!! $userpackage->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>


    <script>
        function myFunction() {
            if (!confirm("Are You Sure to delete this"))
                event.preventDefault();
        }
    </script>
@endsection
