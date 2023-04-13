@extends('layouts.app')
@section('nav', 'Role')
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
    @endif-->
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
                <h4>Role Create</h4>
            </div>
            <div>
                <a href="{{ route('roles.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">

            {!! Form::open(['route' => 'roles.store', 'method' => 'POST', 'data-toggle' => 'validator']) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, [
                            'placeholder' => 'Name',
                            'class' => 'form-control',
                            'data-error' => 'Name Field is required',
                            'required',
                        ]) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="chackall">
                        <div>
                            <strong>Permission:</strong>
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input all" type="checkbox" id="all" name="name"
                                    value="something">
                                <label class="form-check-label all" for="all"><strong>All Check</strong></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            @foreach ($permission as $value)
                                <div class="col-md-3">
                                    <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                        {{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div>
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

    <script type="text/javascript">
	    $('.all').on('change', function() {
	    	if(this.checked){
		    	$('.name').prop('checked', true);  
	    	}else{
	    		$('.name').prop('checked', false);
	    	}
		});
    </script>

@endsection
