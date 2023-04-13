@extends('layouts.app')
@section('nav', 'Blog')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
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
                <h4>Blog Edit</h4>
            </div>
            <div>
                <a href="{{ route('admin.blog.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.blog.update') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $blog->id }}">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" class="form-control" data-error='Title Name Field is required' required
                                placeholder="Title" name="title" id="title" value="{{$blog->title}}">
                            <div class="help-block with-errors"></div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Detail:</strong>
                                <textarea class="form-control" id="detail" placeholder="Enter the Description" data-error='Detail Field is required' required
                                    name="detail">{!! $blog->detail !!}</textarea>
                            <div class="help-block with-errors"></div>
                            @error('detail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Photo:</strong>
                            <input type="file" class="form-control" data-error='Photo Field is required' placeholder="Photo"
                                name="photo" id="photo"><br>
    
                            <img src="{{ asset('blogphotos/' . $blog->photo) }}" width="100" height="100"
                                class="img">
    
                            <div class="help-block with-errors"></div>
                            @error('photo')
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
            .create(document.querySelector('#detail'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
