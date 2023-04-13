@extends('layouts.app')
@section('nav', 'Doctor Profile')
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
                <h4>Doctor Profile Edit</h4>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('doctor.doctormaster.profileupdate') }}" method="POST" enctype="multipart/form-data"
                data-toggle="validator">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class="form-control" data-error='Name Field is required' required
                            placeholder="Name" name="name" id="name" value="{{ Auth::user()->name }}">
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
                            placeholder="Email" name="email" id="email" value="{{ Auth::user()->email }}">
                        <div class="help-block with-errors"></div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Photo:</strong>
                        <input type="file" class="form-control" data-error='Photo Field is required' placeholder="Photo"
                            name="photo" id="photo"><br>

                        <img src="{{ asset('doctormasterphotos/' . $doctor->photo) }}" width="100" height="100"
                            class="img">

                        <div class="help-block with-errors"></div>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        @if ($doctor->gender == 'male')
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="male"
                                    checked>
                                <label class="form-check-label" for="gender1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">
                                <label class="form-check-label" for="gender2">
                                    Female
                                </label>
                            </div>
                        @else
                            @if ($doctor->gender == 'female')
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1"
                                        value="male">
                                    <label class="form-check-label" for="gender1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender2"
                                        value="female" checked>
                                    <label class="form-check-label" for="gender2">
                                        Female
                                    </label>
                                </div>
                            @endif
                        @endif
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
                            placeholder="Specilist" name="specilist" id="specilist"
                            value="{{ $doctor->specilist }}">
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
                            placeholder="Experience" name="experience" id="experience"
                            value="{{ $doctor->experience }}">
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
