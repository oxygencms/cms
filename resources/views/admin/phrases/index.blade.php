@extends('admin.layout')

@section('title', 'Phrases')

@section('content')

    <div class="row">
        <div class="col-12 d-flex align-items-center mb-3">
            <h1>Phrases</h1>

            <div class="ml-auto d-flex justify-content-end">
                <div>
                    <a href="{{ route('phrase.create') }}" class="btn">
                        Create <i class="far fa-edit"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <vue-good-table
        :columns="[
            {label: 'Group', field: 'group'},
            {label: 'Key', field: 'key'},
            {label: 'Text', field: 'text.en'},
            {label: 'Actions', field: 'actions', width: '100px', globalSearchDisabled: false, sortable: false},
        ]"
        :rows="models"
        :search-options="{enabled: true}"
        :pagination-options="{enabled: true}"
    >
        <template slot="table-row" slot-scope="props">
            <span v-if="props.column.label === 'Actions'" class="action-links">
                <a :href="props.row.edit_url" title="Edit">edit</a>

                <a @click.prevent="confirmAndDestroy(props.row)" href="#" title="Delete">
                    delete
                </a>
            </span>

            <span v-else v-text="props.formattedRow[props.column.field]"></span>
        </template>
    </vue-good-table>

    {{--<table-component :data="fetchTableData">--}}
        {{--<table-column :show="tableColumnShow('group')" label="Group"></table-column>--}}
        {{--<table-column show="key" label="Key"></table-column>--}}
        {{--<table-column :show="tableColumnShow('text')" label="Text"></table-column>--}}
        {{--<table-column label="Actions" :filterable="false" :sortable="false">--}}
            {{--<template slot-scope="row">--}}
                {{--<a :href="row.edit_url">Edit</a>--}}
                {{--<a href="" @click.prevent="confirmAndDelete(row)">Delete</a>--}}
            {{--</template>--}}
        {{--</table-column>--}}
    {{--</table-component>--}}

@endsection