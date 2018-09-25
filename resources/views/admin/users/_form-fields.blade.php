<div class="row">
    <!-- name -->
    <div class="form-group col-6">
        <label for="name">Name <strong>*</strong></label>
        <input type="text"
               class="form-control {{ $errors->has('name') ? 'is-invalid' : null }}"
               id="name"
               name="name"
               placeholder="Enter user name..."
               value="{{ old('name', optional($user)->name) }}"
        >
        {!! $errors->first('name', '<small class="form-text text-danger">:message</small>') !!}
    </div>

    <!-- email -->
    <div class="form-group col-6">
        <label for="email">Email <strong>*</strong></label>
        <input type="email"
               class="form-control {{ $errors->has('email') ? 'is-invalid' : null }}"
               id="email"
               name="email"
               placeholder="Enter user email..."
               value="{{ old('email', optional($user)->email) }}"
        >
        {!! $errors->first('email', '<small class="form-text text-danger">:message</small>') !!}
    </div>

    <div class="form-group col-6">
        <!-- phone -->
        <div class="row">
            <div class="col-12 mb-4">
                <label for="phone">Phone <strong>*</strong></label>
                <input type="text"
                       class="form-control {{ $errors->has('phone') ? 'is-invalid' : null }}"
                       id="phone"
                       name="phone"
                       placeholder="Enter user phone..."
                       value="{{ old('phone', optional($user)->phone) }}"
                >
                {!! $errors->first('phone', '<small class="form-text text-danger">:message</small>') !!}
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-control mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="active" value="0">
                        <input type="checkbox"
                               class="custom-control-input"
                               name="active"
                               value="1"
                               id="active"
                                {{ old('active', optional($user)->active) == 1 ? 'checked' : null }}
                        >
                        <label class="custom-control-label"
                               style="width: 100%;"
                               for="active"
                        >
                            The user is active
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-6">
        <label for="roles" class="control-label">Roles</label>
        <select class="form-control"
                multiple="multiple"
                id="roles"
                name="roles[]"
        >
            @foreach($roles as $role)
                <option value="{{ $role->name }}"
                        @php $old_and_current = old('roles', $user->roles->pluck('name')->all()) @endphp
                        {{ in_array($role->name, $old_and_current) ? 'selected' : null }}
                >{{ $role->name }}</option>
            @endforeach
        </select>
        <p class="help-block"></p>
    </div>
</div>