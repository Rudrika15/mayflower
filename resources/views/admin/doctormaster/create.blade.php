@extends('layouts.app')
@section('nav','Doctor Master')
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

    <div class="box-content card danger">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Doctor Master Create</h4>
            </div>
            <div>
                <a href="{{ route('admin.doctormaster.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.doctormaster.store') }}" method="POST" enctype="multipart/form-data"  data-toggle="validator">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class="form-control" data-error='Name Field is required' required
                            placeholder="Name" name="name" id="name">
                        <div class="help-block with-errors"></div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" class="form-control" data-error='Email Field is required' required
                            placeholder="Email" name="email" id="email">
                        <div class="help-block with-errors"></div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" class="form-control" data-error='Password Field is required' required
                            placeholder="password" name="password" id="password">
                        <div class="help-block with-errors"></div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Photo:</strong>
                        <input type="file" class="form-control" data-error='Photo Field is required'
                            placeholder="Photo" name="photo" id="photo">
                        <div class="help-block with-errors"></div>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male1" value="male" data-error='Gender Field is required' required>
                            <label class="form-check-label" for="male1">
                              Male
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
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
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Specilist:</strong>
                        <input type="text" class="form-control" data-error='Specilist Field is required' required
                            placeholder="Specilist" name="specilist" id="specilist">
                        <div class="help-block with-errors"></div>
                        @error('specilist')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Experience:</strong>
                        <input type="text" class="form-control" data-error='Experience Field is required' required
                            placeholder="Experience" name="experience" id="experience">
                        <div class="help-block with-errors"></div>
                        @error('experience')
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
