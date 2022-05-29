<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {
        return '/home';
        //例）return 'costs/index';
    }

    protected function loggedOut(Request $request)
    {
        return redirect('/');
    }

    public function username()
    {
        return 'user_id';
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:8'],
            'user_id' => ['required', 'string', 'min:8', 'max:32', 'unique:users'],
        ],[
            'password.required' => '必須項目です',
            'password.min' => '8文字以上入力してください',
            'user_id.required' => '必須項目です',
            'user_id.unique' => 'このIDはすでに使用されています',
        ]);
    }
}
