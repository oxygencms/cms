@extends('oxygencms::admin.layout')

@section('title', 'Edit Permission')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Edit Permission</h1>
        </div>
    </div>

    <form action="{{ route('permission.update', $permission) }}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('patch') !!}

        @include('admin.permissions._form-fields')

        <button class="btn btn-primary" type="submit">Update</button>
    </form>

@endsection