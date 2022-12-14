<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Courses;
use Session;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function landing() {
        return view('home');
    }

    public function register() {
        $courses = Courses::all();
        return view('login.register-user', compact('courses'));
    }

    public function index() {
        $data = array();
        if(Session::has('loginID')) {
            $data = Alumni::where('username', '=', Session::get('loginID'))->first();
        }
        return view('user.index', compact('data'));
    }

    public function login() {
        return view('login.login-user');
    }
}
