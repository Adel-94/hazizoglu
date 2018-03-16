@extends('layouts.game_layout')

@section('game_content')
    <div id="gamecontainer">
        <div id="gamescreen">
            <div id="sky" class="animated">
                <div class="logout_button"><a class="btn btn-primary pull-right" href="{{ route('home') }}">Şəxsi kabinetə keçid</a></div>
                <div id="flyarea">
                    <div id="ceiling" class="animated"></div>
                    <!-- This is the flying and pipe area container -->
                    <div id="player" class="bird animated"></div>

                    <div id="bigscore"></div>

                    <div id="splash"></div>

                    <div id="scoreboard">
                        <div id="medal"></div>
                        <div id="currentscore"></div>
                        <div id="highscore"></div>
                        <div id="replay"><img src="{{ asset('game_src/assets/replay.png') }}" alt="replay"></div>
                    </div>

                    <!-- Pipes go here! -->
                </div>
            </div>
            <div id="land" class="animated"><div id="debug"></div></div>
        </div>
    </div>
    <div class="boundingbox" id="playerbox"></div>
    <div class="boundingbox" id="pipebox"></div>
@endsection
