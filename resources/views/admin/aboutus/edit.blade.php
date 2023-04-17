@extends('layouts.app')
@section('nav', 'About Us')
@section('content')
<!-- alert messages -->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

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
            <h4>About Us Edit</h4>
        </div>
        <div>
            <a href="{{ route('admin.aboutus.index') }}" class="btn addbtn btn-sm">Back</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <form action="{{ route('admin.aboutus.update') }}" method="POST" data-toggle="validator">
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $aboutus->id }}">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Text:</strong>
                        <textarea id="editor" class="form-control" data-error='Text Name Field is required' required placeholder="Text Name" name="text" id="text">{!! $aboutus->text !!}"</textarea>
                        <div class="help-block with-errors"></div>
                        @error('text')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Type:</strong>
                        <select name="type" class="form-control" id="type" data-error='Center Field is required' required>
                            <option selected disabled>--select your option--</option>
                            <option value="About" @if (old('type')=="About" ) {{ 'selected' }} @endif>About</option>
                            <option value="Quote" @if (old('type')=="Quote" ) {{ 'selected' }} @endif>Quote</option>
                            <option value="SubQuote" @if (old('type')=="SubQuote" ) {{ 'selected' }} @endif>Sub Quote</option>
                        </select>
                        <div class="help-block with-errors"></div>
                        @error('type')
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

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection