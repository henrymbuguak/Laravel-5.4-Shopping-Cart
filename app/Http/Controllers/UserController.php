<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;

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
        if (Session::has('oldUrl')) {
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

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
            if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }


    public function getUserProfile() {
        $orders = Auth::user()->orders;
        $orders->transform(function ($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;

        });
        return view('user.profile',['orders' => $orders]);
    }

    public function getLogout() {
        Auth::logout();

        return redirect()->route('user.signin');
    }
}
