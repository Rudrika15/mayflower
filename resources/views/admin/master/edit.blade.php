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
                <h4>Master Edit</h4>
            </div>
            <div>
                <a href="{{ route('admin.master.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.master.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $master->id }}">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                value="{{ $master->name }}">
                            <div class="help-block with-errors"></div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" class="form-control" placeholder="Description" name="description"
                                id="description" value="{{ $master->description }}">
                            <div class="help-block with-errors"></div>
                            @error('description')
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
