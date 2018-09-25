@extends('admin.layout')

@section('title', 'Create Role')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Create Role</h1>
        </div>
    </div>

    <form action="{{ route('role.store') }}" method="POST">
        {!! csrf_field() !!}

        @include('admin.roles._form-fields')

        <button class="btn btn-primary" type="submit">Save</button>
    </form>

@endsection