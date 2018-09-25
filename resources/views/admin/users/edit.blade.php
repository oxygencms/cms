@extends('admin.layout')

@section('title', 'Edit User')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Edit User</h1>
        </div>
    </div>

    <form action="{{ route('user.update', $user) }}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('patch') !!}

        @include('admin.users._form-fields')

        <button class="btn btn-primary" type="submit">Update</button>
    </form>

@endsection