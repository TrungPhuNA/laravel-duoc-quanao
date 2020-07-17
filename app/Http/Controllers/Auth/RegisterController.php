<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Providers\RouteServiceProvider;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends MenuController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
//        $this->middleware('guest');
    }

    public function getFormRegister()
    {
        $title_page = 'Đăng ký';
        $menu_parent = self::getMenus();
        return view('auth.user.register', compact('title_page','menu_parent'));
    }

    public function postRegister(Request $request)
    {
        $data               = $request->except("_token");

        $data['password']   =  Hash::make($data['password']);
        $data['created_at'] = Carbon::now();
        $id = User::insertGetId($data);


        if ($id) {
            \Session::flash('toastr', [
                'type'    => 'success',
                'message' => 'Đăng ký thành công'
            ]);

            if (\Auth::guard('nd')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->intended('/');
            }

            return redirect()->route('get.login');
        }

        return redirect()->back();
    }
}
