@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'Sample Type')
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
                <h4>Sample Type</h4>
            </div>
            <div>
                <a href="{{ route('admin.sampletype.create') }}" class="btn addbtn btn-sm">ADD</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>Sample Type</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($sampletype as $sampletypeData)
                        <tr>
                            <td>{{ $sampletypeData->sampleType }}</td>
                            <td>
                                @if ($sampletypeData->status === 'Y')
                                    Yes
                                @elseif($sampletypeData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.sampletype.edit', $sampletypeData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.sampletype.delete', $sampletypeData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $sampletype->withQueryString()->links('pagination::bootstrap-5') !!}

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
