<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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

        return redirect()->route('product.index');
    }
}
