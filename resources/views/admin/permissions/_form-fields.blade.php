<div class="row">
    <div class="form-group col-6">
        <!-- name -->
        <div class="form-group">
            <label for="name">Name <strong>*</strong></label>
            <input type="text"
                   class="form-control {{ $errors->has("name") ? 'is-invalid' : null }}"
                   id="{{ "name" }}"
                   name="{{ "name" }}"
                   placeholder="Enter permission name..."
                   value="{{ old("name", optional($permission)->name) }}"
            >
            {!! $errors->first("name", '<small class="form-text text-danger">:message</small>') !!}
        </div>
    </div>
</div>