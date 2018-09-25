@extends('admin.layout')

@section('title', 'Edit Role')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Edit Role</h1>
        </div>
    </div>

    <form action="{{ route('role.update', $role) }}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('patch') !!}

        @include('admin.roles._form-fields')

        <button class="btn btn-primary" type="submit">Update</button>
    </form>

@endsection