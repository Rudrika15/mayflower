@extends('layouts.app')
@section('nav','User')
@section('content')

<!-- alert messages -->
<!-- @if ($message = Session::get('success'))
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
@endif -->
<!-- end alerts -->

<div class="box-content card danger">
    <!-- Header -->
    <div class="card-head">
        <div>
            <h4>Edit User</h4>
        </div>
        <div>
            <a href="{{ route('users.index') }}" class="btn addbtn btn-sm">Back</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">

        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id],'data-toggle'=>'validator']) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','required','data-error'=>'Name Field is required','required')) !!}
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control','required')) !!}
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','data-minlength'=>'6','id'=>'inputPassword','required')) !!}
                    <div class="help-block with-errors">Minimum of 6 characters</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','data-match'=>'#inputPassword','data-match-error'=>'Whoops, these do not match' ,'required')) !!}
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control')) !!}

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn addbtn waves-effect waves-light">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>


    <!-- end card -->
</div>

@endsection