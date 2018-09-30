@extends('oxygencms::admin.layout')

@section('title', 'Edit Phrase')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Edit Phrase</h1>
        </div>
    </div>

    <form action="{{ route('phrase.update', $phrase) }}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('patch') !!}

        @include('admin.phrases._form-fields')

        <button class="btn btn-primary" type="submit">Update</button>
    </form>

@endsection