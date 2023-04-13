@extends('layouts.app')
@section('nav', 'Test Detail')
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
    <div class="box-content card">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Test Detail Create</h4>
            </div>
            <div>
                <a href="{{ route('admin.testdetail.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.testdetail.store') }}" method="POST" data-toggle="validator"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Test Name:</strong>
                            <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"
                                name="testName" id="testName" data-error='Test Name Field is required' required>
                                <option selected disabled>Select Test Name</option>
                                @foreach ($test as $testData)
                                    <option value="{{ $testData->id }}">{{ $testData->testName }}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                            @error('testName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Test Detail Name:</strong>
                            <input type="text" class="form-control" data-error='Test Detail Name Field is required'
                                placeholder="Test Detail Name" name="testDetailName" id="testDetailName">
                            <div class="help-block with-errors"></div>
                            @error('testDetailName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Rate:</strong>
                            <input type="text" class="form-control" data-error='Rate Field is required'
                                placeholder="Rate" name="rate" id="rate">
                            <div class="help-block with-errors"></div>
                            @error('rate')
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
