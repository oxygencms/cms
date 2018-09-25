@extends('users.layout')

@section('title', 'Dashboard')

@section('users.content')

    <section class="section profile-details">
        <div class="container dashboard">
            <div class="form-section">
                <h2 class="form-title">
                    <span class="fa fa-home"></span> Invites
                </h2>

                <ul class="invites-list">
                    <li class="invites-item">
                        <div class="invite-trigger">
                            <div class="event-img">
                                <img src="{{ asset('images/placeholder.png') }}" alt="">
                            </div>

                            <div class="event-summary">
                                <h3>
                                    Sample Name
                                </h3>

                                <a href="#" class="show-more main-btn">Show info</a>
                            </div>
                        </div>

                        <ul class="details-list">
                            <li class="detail-item">
                                <div class="detail-point">
                                    Community
                                </div>

                                <div class="detail-description">
                                    Community loreum ipsum
                                </div>
                            </li>

                            <li>
                                <a href="#" class="main-btn">venue details</a>
                                <a href="#" class="main-btn">accept</a>
                                <a href="#" class="main-btn">decline</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="form-section">
                <h2 class="form-title">
                    <span class="fa fa-home"></span> Local Games looking for players
                </h2>

                <ul class="local-game-list">
                    <li class="local-game-item">
                        <div class="game-wrapper">
                            <div class="event-img">
                                <img src="{{ asset('images/placeholder.png') }}" alt="">
                            </div>

                            <a href="#" class="main-btn">Show info</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>



@endsection
