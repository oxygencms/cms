@extends('admin.layout')

@section('title', 'Users')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Users</h1>
        </div>
    </div>

    <table-component :data="models">
        <table-column show="name" label="Name"></table-column>
        <table-column show="email" label="Email"></table-column>
        <table-column label="Roles">
            <template slot-scope="row">
                <span class="badge badge-secondary mr-1"
                      v-text="role.name"
                      v-for="role in row.roles"
                ></span>
            </template>
        </table-column>

        <table-column label="Actions" :filterable="false" :sortable="false">
            <template slot-scope="row">
                <a :href="row.edit_url">edit</a>
                {{--<a href="#" @click.prevent="confirmAndDestroy(row)">delete</a>--}}
            </template>
        </table-column>
    </table-component>

@endsection