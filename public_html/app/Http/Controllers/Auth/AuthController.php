<?php

namespace App\Http\Controllers\Auth;

//use Illuminate\Http\LoginRequest;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Auth;
//use Illuminate\Routing\Controller;
//use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Model\Users;

//use App\Http\Requests\LoginRequest;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate() {
//        if (Auth::attempt(['email' => $email, 'password' => $password]))
//        {
//            return redirect()->intended('dashboard');
//        }
    }

    public function showLoginForm() {
        if (!Auth::check()) {
            return view('auth/login');
        } else {
            return redirect('/');
        }
    }

    public function login(LoginRequest $request) {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {

            //check permission, if is admin will do not login in web
            $checkUser = Users::where('username', $request->username)->first();
            if (intval($checkUser->userType) == 1) {
                return 'ID or password is incorrect .';
            }

            Auth::login(Auth::user(), true);
            return redirect(route('adminHome'));
        }
        return 'ID or password is incorrect .';
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function loginAdmin(LoginRequest $request) {
        $user = \Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $checkUser = Users::where('username', $request->username)->first();
            if (intval($checkUser->userType) == 0) {
                return view('auth/login', [
                    'message' => "username or password is incorrect"
                ]);
            }

            Auth::login(\Auth::user(), true);
            return redirect('/admin');
        }
        return view('auth/login', [
            'message' => "username or password is incorrect"
        ]);
    }

    public function showRegistrationForm() {
        return view('auth/register');
    }

    public function register(RegisterRequest $request) {
        User::create([
            'fullname' => $request['fullname'],
            'email' => $request['email'],
            'username' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return 'success';
    }

}
