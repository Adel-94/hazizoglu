@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Şəxsi kabinet</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="{{ route('game') }}" class="btn btn-primary">Oyuna basla</a>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Ad</label>
                            <input class="form-control" id="name" readonly value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Nomre</label>
                            <input class="form-control" id="phone" readonly value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Mail</label>
                            <input class="form-control" id="email" readonly value="{{ Auth::user()->email }}">
                        </div>
                        <div class="col-md-6">
                            <label for="score">Ballar</label>
                            <input class="form-control" id="score" readonly value="{{ Auth::user()->score }}">
                        </div>
                        <div class="col-md-6">
                            <!-- Trigger Button HTML -->
                            <br>
                            <input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#toggleDemo" value="Ayarlar">
                        </div>
                    </div>
                        <!-- Collapsible Element HTML -->
                        <div id="toggleDemo" class="collapse">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <br>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Sifreni deyismek</div>
                                            <div class="panel-body">
                                                <label for="pass">Sifre</label>
                                                <input class="form-control" id="pass" name="pass">
                                                <label for="c_pass">Sifre tekrar</label>
                                                <input class="form-control" id="c_pass" name="c_pass">
                                                <br>
                                                <button class="form-control" type="submit">Gonder</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
