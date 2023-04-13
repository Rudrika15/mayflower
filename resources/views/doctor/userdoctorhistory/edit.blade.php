@extends('layouts.app')
@section('nav','User Doctor History ')
@section('content')
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
<div class="box-content card danger">
    <!-- Header -->
    <div class="card-head">
        <div>
            <h4>User Doctor History Edit</h4>
        </div>
        <div>
            <a href="{{ route('doctor.userdoctorhistory.index') }}" class="btn addbtn btn-sm">Back</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <form action="{{ route('doctor.userdoctorhistory.update') }}" enctype="multipart/form-data" method="POST" data-toggle="validator">
            @csrf
            <input type="hidden" name="userDocid" id="id" value="{{ $userDoctorHistory->id }}">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User Name:</strong>
                        <select class="form-control" data-error='userId Field is required' required name="userId" id="userId" value="{{$userDoctorHistory->userId}}">
                            <option value="" selected disabled> Select User Name </option>
                           
                            @foreach ($users as $userData)
                            <option value="{{ $userData->id }}"
                                {{ $userData->id == $userDoctorHistory->userId ? 'selected' : '' }}>
                                {{ $userData->name }}</option>
                        @endforeach
                        </select>
                        <div class="help-block with-errors"></div>
                        @error('userId')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title" id="Title" data-error='Title Field is required' required value="{{$userDoctorHistory->title}}">
                        <div class="help-block with-errors"></div>
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>uploadDate:</strong>
                        <input type="date" class="form-control" data-error='uploadDate Field is required' required name="uploadDate" id="uploadDate" value="{{$userDoctorHistory->uploadDate}}">
                        <div class="help-block with-errors"></div>
                        @error('uploadDate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Suggestion:</strong>
                        <input type="text" class="form-control"  data-error='suggestion Field is required' required placeholder="suggestion" name="suggestion" id="suggestion" value="{{$userDoctorHistory->suggestion}}">
                        <div class="help-block with-errors"></div>
                        @error('suggestion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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