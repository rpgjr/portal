<?php

namespace App\Http\Controllers;

use App\Models\UserAccounts;
use Session;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function landing() {
        return view('home');
    }

    public function register() {
        return view('login.register');
    }

    public function index() {
        $data = array();
        if(Session::has('loginID')) {
            $data = UserAccounts::where('username', '=', Session::get('loginID'))->first();
        }
        return view('user.index', compact('data'));
    }

    public function login() {
        return view('login.login');
    }
}
