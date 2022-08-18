<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\UserAccounts;
use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    public function index() {
        $account = DB::table('user_accounts')->where('username', '=', Session()->get('loginID'))->get();
        $courses = Courses::all();
        return view('profile.index', compact('account', 'courses'));
    }
}
