@extends('layouts.app')
@section('nav','Test Center')
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
                <h4>Test Center Create</h4>
            </div>
            <div>
                <a href="{{ route('admin.testcenter.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.testcenter.update') }}" method="POST"  data-toggle="validator">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $testcenter->id }}">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class="form-control" data-error='Name Field is required' required
                            placeholder="Name" name="name" id="name" value="{{$testcenter->name}}">
                        <div class="help-block with-errors"></div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" class="form-control" data-error='Address Field is required' required
                            placeholder="Address" name="address" id="address" value="{{$testcenter->address}}">
                        <div class="help-block with-errors"></div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Map:</strong>
                        <input type="text" class="form-control" data-error='Map Field is required' required
                            placeholder="Map" name="map" id="map" value="{{$testcenter->map}}">
                        <div class="help-block with-errors"></div>
                        @error('map')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>City:</strong>
                        <input type="text" class="form-control" data-error='City Field is required' required
                            placeholder="City" name="city" id="city" value="{{$testcenter->city}}">
                        <div class="help-block with-errors"></div>
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Landmark:</strong>
                        <input type="text" class="form-control" data-error='Landmark Field is required' required
                            placeholder="Landmark" name="landmark" id="landmark" value="{{$testcenter->landmark}}">
                        <div class="help-block with-errors"></div>
                        @error('landmark')
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
