<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\AppServiceProvider;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

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

    public function login(\Illuminate\Http\Request $request)
    {

        $user = DB::table('Customer')->where('username', $request->username)->first();
        if ($user->username === $request->username && $user->password === $request->password) {
            if($request->username==='admin')
            {
                return view('admin.admin');
            }

            session(['user'=>$user]);
            return view('home');
        } else {
            dd('wrong');
        }
    }
}
