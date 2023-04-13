@extends('layouts.app')
@section('nav','User Lab Report')
@section('content')
<!-- alert messages -->
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
    <strong>Oh snap!</strong> {{__('There were some problems with your input')}}.
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- end alerts -->
<div class="box-content card danger">
    <!-- Header -->
    <div class="card-head">
        <div>
            <h4>User Lab Report Edit</h4>
        </div>
        <div>
            <a href="{{ route('admin.userlabreport.index') }}" class="btn addbtn btn-sm">Back</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <form action="{{route('admin.userlabreport.update')}}" method="POST" data-toggle="validator">
            @csrf
            <input type="hidden" name="userLabReportId" value="{{$userLabReport->id}}">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User Name:</strong>
                        <select name="userId" id="userId" data-error='User Field is required' required class="form-control">
                            <option disabled selected>--Select your option--</option>
                            @foreach($user as $user)
                            <option value="{{$user->id}}" {{ old('userId', $userLabReport->userId) == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
                            @endforeach
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Test Center Name:</strong>
                        <select name="testCenterId" id="testCenterId" data-error='Center Field is required' required class="form-control">
                            <option disabled selected>--Select your option--</option>
                            @foreach($testCenter as $testCenter)
                            <option value="{{$testCenter->id}}" {{ old('testCenterId', $userLabReport->testCenterId) == $testCenter->id ? 'selected' : '' }}>{{$testCenter->name}}</option>
                            @endforeach
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Document:</strong>
                        <input type="file" class="form-control" name="document" id="document">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Notes:</strong>
                        <input type="text" value="{{$userLabReport->note}}" class="form-control" placeholder="Add Notes" name="note" id="note">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 form-group text-center">
                    <button type="submit" class="btn addbtn waves-effect waves-light">Submit</button>
                </div>
            </div>
        </form>
    </div>


    <!-- end card -->
</div>
@endsection