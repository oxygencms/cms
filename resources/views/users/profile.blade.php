@extends('users.layout')

@section('title', 'Profile')

@section('users.content')

    <section class="section profile-details">
        <div class="container dashboard">
            <form action="{{ route('user.profile.update', $user) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="personal-info form-section">
                    <h2>@lang('headings.personal-information')</h2>

                    <div class="avatar">
                        <img src="{{ $user->uploadUrlByIntent('main') }}"
                             alt="profile-image"
                             class="img-responsive"
                        >

                        <div class="custom-upload">
                            <a href="#">@lang('links.add-photo')</a>
                            {!! $errors->first('photo', $error_message) !!}

                            <input type="file" name="photo" accept="image/*">
                        </div>
                    </div>

                    <div class="fields-wrapper">
                        <div class="field-container">
                            <input type="text"
                                   name="name"
                                   placeholder="@lang('labels.name')"
                                   value="{{ old('name', $user->name) }}"
                            >
                            {!! $errors->first('name', $error_message) !!}
                        </div>

                        <div class="field-container">
                            <input type="email"
                                   name="email"
                                   placeholder="@lang('labels.email')"
                                   value="{{ $user->email }}"
                                   disabled
                            >
                        </div>

                        <div class="field-container">
                            <input type="text"
                                   name="phone"
                                   placeholder="@lang('labels.phone')"
                                   value="{{ old('phone', $user->phone) }}"
                            >
                            {!! $errors->first('phone', $error_message) !!}
                        </div>

                        <button type="submit" class="main-btn submit">
                            @lang('links.user-profile-update')
                        </button>
                    </div>
                </div>
            </form>

            <form action="{{ route('user.password.update', $user) }}" method="post">
                @csrf
                @method('patch')

                <div class="personal-info form-section">
                    <h2>@lang('headings.change-password')</h2>

                    <div class="fields-wrapper">
                        <div class="field-container">
                            <input type="password"
                                   name="old_password"
                                   placeholder="@lang('labels.current-password')"
                            >
                            {!! $errors->first('old_password', $error_message) !!}
                        </div>

                        <div class="field-container">
                            <input type="password"
                                   name="password"
                                   placeholder="@lang('labels.new-password')"
                                   value="{{ old('password') }}"
                            >
                            {!! $errors->first('password', $error_message) !!}
                        </div>

                        <div class="field-container">
                            <input type="password"
                                   name="password_confirmation"
                                   placeholder="@lang('labels.confirm-new-password')"
                                   value="{{ old('password_confirmation') }}"
                            >
                            {!! $errors->first('password_confirmation', $error_message) !!}
                        </div>

                        <button type="submit" class="main-btn submit">
                            @lang('links.user-password-update')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection