<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\UserAccounts;
use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    public function index() {
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        $courses = Courses::all();
        return view('profile.index', compact('account', 'courses'));
    }

    public function updateProfile(Request $request, $userID) {
        $account = DB::table('tbl_alumni')->where('userID', '=', $userID)->update([
            'lastName' => $request->input('lastName'),
            'firstName' => $request->input('firstName'),
            'middleName' => $request->input('middleName'),
            'courseID' => $request->input('courseID'),
            'batch' => $request->input('batch'),
            'gender' => $request->input('gender'),
            'bday' => $request->input('bday'),
            'age' => $request->input('age'),
            'religion' => $request->input('religion'),
            'studNumber' => $request->input('studNumber'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'cityAddress' => $request->input('cityAddress'),
            'provincialAddress' => $request->input('provincialAddress'),
        ]);

        return redirect(route('user.profileIndex'));

    }
}
