<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends MenuController
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
//        $this->middleware('guest')->except('logout');
    }

    public function getFormLogin()
    {
        $title_page = 'Đăng nhập';
        $menu_parent = self::getMenus();
        return view('auth.user.login',compact('title_page','menu_parent'));
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (\Auth::guard('nd')->attempt(['email' => $request->email, 'password' => $request->password])) {
            \Session::flash('toastr', [
                'type'    => 'success',
                'message' => 'Đăng nhập thành công'
            ]);
            return redirect()->intended('/');
        }

        return redirect()->back();
    }

    public function getLogout()
    {
        \Auth::guard('nd')->logout();
        return redirect()->to('/');
    }
}
