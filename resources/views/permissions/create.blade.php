@extends('layouts.app')
@section('nav','Permission')


@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <p>{{ $message }}</p>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Whoops!</strong> {{__('There were some problems with your input')}}.<br><br>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="box-content card">
                <!-- Header -->
                <div class="card-head">
                    <div>
                        <h4>Add Permission</h4>
                    </div>
                    <div>
                        <a href="{{ route('permissions.index') }}" class="btn addbtn btn-sm">Back</a>
                    </div>
                </div>

                <!-- card -->
                <div class="card-content">
                    <div class="table-responsive">
                <!-- Card Body -->
                <div class="card-body">
                   
                    <form method="POST" action="{{ route('permissions.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Name" required>

                            @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                            @endif
                        </div><br>

                        <div class="col-xs-12 col-sm-12 col-md-12 form-group text-center">
                        <button type="submit" class="btn addbtn waves-effect waves-light">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Collapsable Card Example -->
        </div>
    </div>
</div>
@endsection