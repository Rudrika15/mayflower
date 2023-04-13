@extends('layouts.app')
@section('nav','User Package')
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
                <h4>User Package Edit</h4>
            </div>
            <div>
                <a href="{{ route('admin.userpackage.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.userpackage.update') }}" method="POST" data-toggle="validator">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $userpackage->id }}">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Package Detail Name:</strong>
                            <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"
                                name="packageDetailId" id="packageDetailId" data-error='Package Detail Name Field is required' required>
                                <option selected disabled>Select Package Detail Name</option>
                                @foreach ($packagedetail as $packagedetailData)
                                    <option value="{{ $packagedetailData->id }}"
                                        {{ $packagedetailData->id == $userpackage->packageDetailId ? 'selected' : '' }}>
                                        {{ $packagedetailData->forPackageNames }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="help-block with-errors"></div>

                        @error('packageDetailId')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date Of Purchase:</strong>
                            <input type="date" class="form-control" data-error='Date Of Purchase Field is required' required
                                placeholder="Date Of Purchase" name="dateOfPurchase" id="dateOfPurchase"
                                value="{{ $userpackage->dateOfPurchase }}">
                            <div class="help-block with-errors"></div>
                            @error('dateOfPurchase')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Valid Up to:</strong>
                            <input type="date" class="form-control" data-error='Valid Up to Field is required' required
                                placeholder="valid Up to" name="validUpto" id="validUpto"
                                value="{{ $userpackage->validUpto }}">
                            <div class="help-block with-errors"></div>
                            @error('validUpto')
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
