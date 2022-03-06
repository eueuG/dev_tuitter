<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tweet;
use App\Models\User;

class HomeController extends Controller
{
    public function showHome()
    {
        $user = Auth::user();
        $tweets = Tweet::orderBy('created_at', 'desc')->paginate(50);
        return view('home',['user' => $user, 'tweets' => $tweets]);
    }

    public function showProfile(Request $request){
        if($request){
            //なんか画面からユーザーの情報をゲットしたい。もしくはURLを生成する
            $user = User::where('email', $request->email)->first();

            return view('user.profile',['user' => $user]);
        }

        return view('user.profile', ['user' => Auth::user()]);
    }

    public function createTweet(Request $request)
    {
        $tweet = new Tweet();

        $tweet->fill([
            'user_id' => Auth::user()->id,
            'content' => $request->input('content'),
        ])->save();

        return redirect()->route('show.home');
    }
}
