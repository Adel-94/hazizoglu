<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class GameController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //dd($request->cookie('highscore'));
        $game = 0;
        return view('game', compact('game'));
    }

    public function get_score() {
        $user = User::findOrFail(Auth::user()->id);
        return array(['score'=>$user->score]);
    }


    public function check_cookie(Request $request) {
        //dd($request->cookie());
        $status = true;
        if ($request->hash == md5($request->value.'check_cookie')) {
            $score = (int)$request->value;
            $find = User::findOrFail(Auth::user()->id);
            $find->score = $score;
            $find->save();
        }
        else $status = false;

        return response()->json(['status'=>$status]);
    }
}
