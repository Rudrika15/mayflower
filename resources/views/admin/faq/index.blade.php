@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'FAQ')
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
                <h4>FAQ</h4>
            </div>
            <div>
                <a href="{{ route('admin.faq.create') }}" class="btn addbtn btn-sm">ADD</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>Question</th>
                        <th>Ans</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($faq as $faqData)
                        <tr>
                            <td>{{ $faqData->question }}</td>
                            <td>{!! $faqData->ans !!}</td>
                            <td>
                                @if ($faqData->status === 'Y')
                                    Yes
                                @elseif($faqData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.faq.edit',$faqData->id) }}">Edit</a>
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.faq.delete',$faqData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach 
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $faq->withQueryString()->links('pagination::bootstrap-5') !!}

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
