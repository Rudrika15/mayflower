@extends('layouts.app')
@section('nav', 'Permission')
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
                        <strong>Whoops!</strong> {{ __('There were some problems with your input') }}.<br><br>
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
                            <h4>Permission Management</h4>
                        </div>
                        <div>
                            <a href="{{ route('permissions.create') }}" class="btn addbtn btn-sm">Add Permission</a>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="card-content">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Guard</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->guard_name }}</td>
                                            <td><a href="{{ route('permissions.edit', $permission->id) }}"
                                                    class="btn btn-success">Edit</a>

                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['permissions.destroy', $permission->id],
                                                    'style' => 'display:inline',
                                                ]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Collapsable Card Example -->
                </div>
            </div>
        </div>
    </div>
@endsection
