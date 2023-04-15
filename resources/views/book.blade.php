@extends('layouts.welcomeapp')

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
<!-- Header -->

<!-- end header  -->
<!-- card -->
<div class="container">
    <div class="card mt-5" style="max-width: 80rem;">
        <form action="{{route('bookstore')}}" enctype="multipart/form-data" method="post" data-toggle="validator">
            @csrf

            <input type="hidden" name="packageId" value="{{$packageId}}">

            <div class="row p-3">

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" data-error='Name Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Age:</strong>
                        <input type="text" class="form-control" placeholder="Enter Age" name="age" id="age" data-error='Age Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('age')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Contact:</strong>
                        <input type="text" class="form-control" placeholder="Enter Contact" name="contact" id="contact" data-error='Contact Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('contact')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Height:</strong>
                        <input type="text" class="form-control" placeholder="Enter Height" name="height" id="height" data-error='Height Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('height')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Weight:</strong>
                        <input type="text" class="form-control" placeholder="Enter Weight" name="weight" id="weight" data-error='Weight Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('weight')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Bmi:</strong>
                        <input type="text" class="form-control" placeholder="Enter Bmi" name="bmi" id="bmi" data-error='Bmi Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('bmi')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" data-error='Email Field is required' required>
                        <div class="help-block with-errors"></div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 mb-3 form-group text-center">
                    <button type="submit" class="btn addbtn waves-effect waves-light">Submit</button>
                </div>
            </div>
        </form>
    </div>


    @endsection