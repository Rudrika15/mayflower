@extends('layouts.app')
@section('nav', 'Package')
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
                <h4>Package Create</h4>
            </div>
            <div>
                <a href="{{ route('admin.package.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.package.store') }}" method="POST" data-toggle="validator">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Package Name:</strong>
                            <input type="text" class="form-control" data-error='Package Name Field is required' required
                                placeholder="Packge Name" name="packageName" id="packageName">
                            <div class="help-block with-errors"></div>
                            @error('packageName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="text" class="form-control" data-error='Price Field is required' required
                                placeholder="Price" name="price" id="price">
                            <div class="help-block with-errors"></div>
                            @error('price')
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
