@extends('oxygencms::admin.layout')

@section('title', 'Permissions')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Permissions</h1>

            <div class="ml-auto d-flex justify-content-end">
                <div>
                    <a href="{{ route('permission.create') }}" class="btn">
                        Create <i class="far fa-edit"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <table-component :data="models">
        <table-column show="name" label="Name"></table-column>
        <table-column label="Actions" :filterable="false" :sortable="false">
            <template slot-scope="row">
                <a :href="row.edit_url">edit</a>
                <a href="#" @click.prevent="confirmAndDestroy(row)">delete</a>
            </template>
        </table-column>
    </table-component>

@endsection