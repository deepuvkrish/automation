<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('home');
    }
    function checklogin(Request $request)
    {
        $this->validate($request,[
            'email'         =>  'required|email',
            'password'      =>  'required|alphaNum|min:8'
        ]);

        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')

        );

        if(Auth::attempt($user_data))
        {
            return redirect('home');

        }
        else
        {
            return back()->with('error','wrong Login Details');
        }

    }
    function home()
    {
        return view('welcome');
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
?>