@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

@section('nav', 'Appointment')
@section('content')
    <div class="box-content card">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Appointment</h4>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <div class="table-responsive">
                <!-- table start -->
                <table class="table table-bordered">
                    <tr>
                        <th>User Name</th>
                        {{-- <th>Name</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Female</th>
                        <th>Specilist</th>
                        <th>Experience</th>--}} 
                        <th>Status</th> 
                        <th width="280px">Action</th>
                    </tr>
                    {{-- @foreach ($appointment as $appointmentData)
                        <tr>
                            <td>{{ $appointmentData->name }}</td>
            
                            <td>
                                @if ($appointmentData->status === 'Y')
                                    Yes
                                @elseif($appointmentData->status === 'N')
                                    No
                                @else
                                    Delete
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="">Edit</a>
                                    {{ route('admin.appointment.edit', $appointmentData->id) }}
                                <a onclick="return myFunction();" class="btn btn-danger btn-sm"
                                    href="{{ route('admin.appointment.delete', $appointmentData->id) }}">Delete</a>

                            </td>
                        </tr>
                    @endforeach  --}}
                </table>
                <!-- end table responsive class -->
            </div>
            {!! $appointment->withQueryString()->links('pagination::bootstrap-5') !!}

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
