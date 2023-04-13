@extends('layouts.app')
@section('nav', 'FAQ')
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
                <h4>FAQ Edit</h4>
            </div>
            <div>
                <a href="{{ route('admin.faq.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.faq.update') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $faq->id }}">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Question:</strong>
                            <input type="text" class="form-control" data-error='Question Field is required' required
                                placeholder="Question" name="question" id="question" value="{{$faq->question}}">
                            <div class="help-block with-errors"></div>
                            @error('question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Ans:</strong>
                                <textarea class="form-control" id="ans" placeholder="Enter the Description" data-error='Ans Field is required' required
                                    name="ans">{{$faq->ans}}</textarea>
                            <div class="help-block with-errors"></div>
                            @error('ans')
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
            .create(document.querySelector('#ans'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
