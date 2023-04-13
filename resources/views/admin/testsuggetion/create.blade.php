@extends('layouts.app')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
    @php
        Session::forget('success');
    @endphp
</div>
@endif
    <div class="box-content card danger">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Testsuggetion Create</h4>
            </div>
            <div>
                <a href="{{ route('admin.testsuggetion.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.testsuggetion.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Master Name:</strong>
                            <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"
                                name="masterName" id="masterName">
                                <option selected disabled>Select Master Name</option>
                                @foreach ($master as $master)
                                    <option value="{{ $master->id }}">{{ $master->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('masterName')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Parameter:</strong>
                            <input type="text" class="form-control 'data-error'=>'Name Field is required','required'"
                                placeholder="parameter" name="parameter" id="parameter">
                            <div class="help-block with-errors"></div>
                            @error('parameter')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Value:</strong>
                            <input type="text" class="form-control" placeholder="value" name="value" id="value">
                            <div class="help-block with-errors"></div>
                            @error('value')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Opration:</strong>
                            <input type="text" class="form-control" placeholder="opration" name="opration"
                                id="opration">
                            <div class="help-block with-errors"></div>
                            @error('opration')
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
