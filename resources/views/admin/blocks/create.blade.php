@extends('oxygencms::admin.layout')

@section('title', 'Create Block')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Create Block</h1>
        </div>
    </div>

    <form action="{{ route('block.store') }}" method="POST">
        {!! csrf_field() !!}

        @include('admin.blocks._form-fields')

        <button class="btn btn-primary" type="submit">Save</button>
    </form>

@endsection