@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'About Us')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="box-content card">
    <!-- Header -->
    <div class="card-head">
        <div>
            <h4>About Us</h4>
        </div>
        <div>
            <a href="{{ route('admin.aboutus.create') }}" class="btn addbtn btn-sm">ADD</a>
        </div>
    </div>
    <!-- end header  -->
    <!-- card -->
    <div class="card-content">
        <div class="table-responsive">
            <!-- table start -->
            <table class="table table-bordered">
                <tr>
                    <th>Text</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($aboutus as $aboutusData)
                <tr>
                    <td>{!! $aboutusData->text !!}</td>
                    <td>{!! $aboutusData->type !!}</td>
                    <td>
                        @if ($aboutusData->status === 'Y')
                        Yes
                        @elseif($aboutusData->status === 'N')
                        No
                        @else
                        Delete
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{ route('admin.aboutus.edit',$aboutusData->id) }}">Edit</a>
                        <a onclick="return myFunction();" class="btn btn-danger btn-sm" href="{{ route('admin.aboutus.delete',$aboutusData->id) }}">Delete</a>

                    </td>
                </tr>
                @endforeach
            </table>
            <!-- end table responsive class -->
        </div>
        {!! $aboutus->withQueryString()->links('pagination::bootstrap-5') !!}

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