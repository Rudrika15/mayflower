@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'Package Detail')
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
                <h4>Package Detail Management</h4>
            </div>
            <div>
                <a href="{{ route('admin.packagedetail.create') }}" class="btn addbtn btn-sm">ADD</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>Package Name</th>
                        <th>For Package Names</th>
                        <th>Sample Type</th>
                        <th>Test Type</th>
                        <th>Instructions</th>
                        <th>Status</th>
                        <th width="190px">Action</th>
                    </tr>
                    @foreach ($packagedetail as $packagedetailData)
                        <tr>
                            <td>{{ $packagedetailData->packageName }}</td>
                            <td>{{$packagedetailData->forPackageNames}}</td>
                            <td>
                                {{ $packagedetailData->sampleType }}
                                
                                {{-- @foreach ($sampleType as $sampleTypes)
                                    {{$sampleTypes['sampleName']}}
                                @endforeach --}}
                            </td>
                            <td>{{ $packagedetailData->testType }}</td>
                            <td>{{ $packagedetailData->instructionS }}</td>
                            <td>
                                @if ($packagedetailData->status === 'Y')
                                    Yes
                                @elseif($packagedetailData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.packagedetail.edit', $packagedetailData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.packagedetail.delete', $packagedetailData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $packagedetail->withQueryString()->links('pagination::bootstrap-5') !!}

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
