@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

{{-- @section('nav','User') --}}
@section('content')
<div class="box-content card">
    <!-- Header -->
    <div class="card-head">
        <div>
            <h4>Testsuggetion Management</h4>
        </div>
        <div>
            <a href="{{ route('admin.testsuggetion.create') }}" class="btn addbtn btn-sm">ADD</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <div class="table-responsive">
            <!-- table start -->
            <table class="table table-bordered">
                <tr>
                    <th>Master Name</th>
                    <th>Parameter</th>
                    <th>value</th>
                    <th>opration</th>
                    <th>User Name</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($testsuggetion as $testsuggetionData)
                <tr>
                    <td>{{$testsuggetionData->masterName}}</td>
                    <td>{{$testsuggetionData->parameter}}</td>
                    <td>{{$testsuggetionData->value}}</td>
                    <td>{{$testsuggetionData->opration}}</td>
                    <td>{{$testsuggetionData->userName}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{ route('admin.testsuggetion.edit',$testsuggetionData->id) }}">Edit</a>
                        <a onclick="return myFunction();" class="btn btn-danger btn-sm" href="{{ route('admin.testsuggetion.delete',$testsuggetionData->id) }}">Delete</a>

                    </td>
                </tr>
                @endforeach
            </table>
            <!-- end table responsive class -->
        </div>
    </div>

    <!-- end card -->
    
    {!! $testsuggetion->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
<script>
    function myFunction() {
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
    }
   </script>
@endsection