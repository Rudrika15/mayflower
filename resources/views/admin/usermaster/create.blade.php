@extends('layouts.app')
@section('nav','User Master ')
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
            <h4>User Master Create</h4>
        </div>
        <div>
            <a href="{{ route('admin.usermaster.index') }}" class="btn addbtn btn-sm">Back</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <form action="{{ route('admin.usermaster.store') }}" enctype="multipart/form-data" method="POST" data-toggle="validator">
            @csrf
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" data-error='Name Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" data-error='Email Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password" data-error='Password Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Age:</strong>
                        <input type="text" class="form-control" placeholder="Enter Age" name="age" id="age" data-error='Age Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male1" value="male">
                            <label class="form-check-label" for="male1">
                              Male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female2" value="female">
                            <label class="form-check-label" for="female2">
                              Female
                            </label>
                          </div>
                        <div class="help-block with-errors"></div>
                        @error('gender')
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