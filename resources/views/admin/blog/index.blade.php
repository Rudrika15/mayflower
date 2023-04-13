@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'Blog')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="box-content card">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Blog</h4>
            </div>
            <div>
                <a href="{{ route('admin.blog.create') }}" class="btn addbtn btn-sm">ADD</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>detail</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($blog as $blogData)
                        <tr>
                            <td>{{ $blogData->title }}</td>
                            <td>{!! $blogData->detail !!}</td>
                            <td> <img src="{{ asset('blogphotos/' . $blogData->photo) }}" width="100"
                                height="100" class="img">
                        </td>
                            <td>
                                @if ($blogData->status === 'Y')
                                    Yes
                                @elseif($blogData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.blog.edit',$blogData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.blog.delete',$blogData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach 
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $blog->withQueryString()->links('pagination::bootstrap-5') !!}

        </div>

        <!-- end card -->

    </div>
    <script>
        function myFunction() {
            if (!confirm("Are You Sure to delete this"))
                event.preventDefault();
        }
    </script>
@endsection
