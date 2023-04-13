@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'Test Detail')
@section('content')
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
    <div class="box-content card ">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Test Detail</h4>
            </div>
            <div>
                <a href="{{ route('admin.testdetail.create') }}" class="btn addbtn btn-sm">ADD</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>Test Name</th>
                        <th>Test Detail Name</th>
                        <th>Rate</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($testdetail as $testdetailData)
                        <tr>
                            <td>{{ $testdetailData->testName }}</td>
                            <td>{{ $testdetailData->testDetailName }}</td>
                            <td>{{ $testdetailData->rate }}</td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.testdetail.edit', $testdetailData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.testdetail.delete', $testdetailData->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $testdetail->withQueryString()->links('pagination::bootstrap-5') !!}

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
