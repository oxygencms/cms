@extends('oxygencms::admin.layout')

@section('title', 'Create Phrase')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Create Phrase</h1>
        </div>
    </div>

    <form action="{{ route('phrase.store') }}" method="POST">
        {!! csrf_field() !!}

        @include('admin.phrases._form-fields')

        <button class="btn btn-primary" type="submit">Save</button>
    </form>

@endsection