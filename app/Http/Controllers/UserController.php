<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function getSignUp() {
        return view('user.signup');
    }

    public function postSignUp(Request $request) {
        $this->validate($request, [
           'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'name' => ''
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'name' => $request->input('name')
        ]);
        $user->save();

        Auth::login($user);

        return redirect()->route('user.profile');
    }

    public function getSignIn() {
        return view('user.signin');
    }

    public function postSignIn(Request $request) {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }


    public function getUserProfile() {
        return view('user.profile');
    }

    public function getLogout() {
        Auth::logout();

        return redirect()->route('product.index');
    }
}
