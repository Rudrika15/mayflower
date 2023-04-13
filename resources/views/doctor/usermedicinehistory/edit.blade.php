@extends('layouts.app')
@section('nav', 'User Medicine History')
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
                <h4>User Medicine History Edit</h4>
            </div>
            <div>
                <a href="{{ route('doctor.usermedicinehistory.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('doctor.usermedicinehistory.update') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="id" id="id" value="{{ $usermedicinehistory->id }}">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>User Name:</strong>
                            <select class="form-control" data-error='userId Field is required' required name="userId" id="userId" value="{{$usermedicinehistory->userId}}">
                                <option value="" selected disabled> Select User Name </option>
                               
                                @foreach ($users as $userData)
                                <option value="{{ $userData->id }}"
                                    {{ $userData->id == $usermedicinehistory->userId ? 'selected' : '' }}>
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
                            <strong>Medicine:</strong>
                            <input type="text" class="form-control" data-error='Medicine Field is required' required
                                placeholder="Medicine" name="medicine" id="medicine" value="{{$usermedicinehistory->medicine}}">
                            <div class="help-block with-errors"></div>
                            @error('medicine')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>medicine Details:</strong>
                            <input type="text" class="form-control" data-error='Medicine Details Field is required' required
                                placeholder="Medicine Details" name="medicineDetails" id="medicineDetails" value="{{$usermedicinehistory->medicineDetails}}">
                            <div class="help-block with-errors"></div>
                            @error('medicineDetails')
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
