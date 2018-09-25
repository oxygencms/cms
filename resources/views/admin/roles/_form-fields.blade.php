<div class="row">
    <div class="form-group col-6">
        <!-- name -->
        <div class="form-group">
            <label for="name">Name <strong>*</strong></label>
            <input type="text"
                   class="form-control {{ $errors->has("name") ? 'is-invalid' : null }}"
                   id="{{ "name" }}"
                   name="{{ "name" }}"
                   placeholder="Enter role name..."
                   value="{{ old("name", optional($role)->name) }}"
            >
            {!! $errors->first("name", '<small class="form-text text-danger">:message</small>') !!}
        </div>
    </div>

    <div class="form-group col-6">
        <label for="permissions" class="control-label">Permissions</label>
        <select class="form-control o-long-select"
                id="permissions"
                multiple="multiple"
                name="permissions[]"
        >
            @foreach($permissions as $permission)
                <option value="{{ $permission }}"
                        @php $old_and_current = old('permissions', $role->permissions->pluck('name')->all()) @endphp
                        {{ in_array($permission, $old_and_current) ? 'selected' : null }}
                >{{ $permission }}</option>
            @endforeach
        </select>
        <p class="help-block"></p>
    </div>
</div>