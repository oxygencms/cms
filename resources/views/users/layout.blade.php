@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="img-container" style="background-image: url('{{ asset('/images/hero.jpg') }}');">
                <h1 class="hero-title"> Profile heading </h1>
            </div>
        </div>
    </section>

    <div class="dashboard-sub-nav">
        <div class="container dashboard">
            <ul class="profile-nav">
                <li class="{{ activeIfPath('user/*/dashboard') }}">
                    <a href="{{ route('user.dashboard', auth()->user()) }}">
                        @lang('links.dashboard')
                    </a>
                </li>

                <li class="{{ activeIfPath('user/*/profile') }}">
                    <a href="{{ route('user.profile', auth()->user()) }}">
                        @lang('links.my-profile')
                    </a>
                </li>

                <li class="{{ activeIfPath('user/*/community') }}">
                    <a href="{{ route('user.community', auth()->user()) }}">
                        @lang('links.my-communities')
                    </a>
                </li>
            </ul>
        </div>
    </div>

    @yield('users.content')

@endsection