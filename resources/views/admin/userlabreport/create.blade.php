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
            <h4>User Lab Report Create</h4>
        </div>
        <div>
            <a href="{{ route('admin.userlabreport.index') }}" class="btn addbtn btn-sm">Back</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <form action="{{route('admin.userlabreport.store')}}" method="POST" data-toggle="validator" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Test Center Name:</strong>
                        <select name="testCenterId" id="testCenterId" data-error='Center Field is required' required class="form-control">
                            <option disabled selected>--Select your option--</option>
                            @foreach($testCenter as $testCenter)
                            <option value="{{$testCenter->id}}">{{$testCenter->name}}</option>
                            @endforeach
                        </select>
                        <div class="help-block with-errors"></div>
                        @error('testCenterId')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Document:</strong>
                        <input type="file" class="form-control" data-error='Document Field is required' required name="document" id="document">
                        <div class="help-block with-errors"></div>
                        @error('document')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Notes:</strong>
                        <input type="text" class="form-control" placeholder="Add Notes" data-error='Notes Field is required' required name="note" id="note">
                        <div class="help-block with-errors"></div>
                        @error('note')
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