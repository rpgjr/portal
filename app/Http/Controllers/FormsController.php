<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use DB;

class FormsController extends Controller
{
    public function index() {
        return view('forms.index');
    }

//Exit Inteview return views
    public function exitP1() {
        $courses = Courses::all();
        return view('forms.exitP1', compact('courses'));
    }

    public function exitP2() {
        return view('forms.exitP2');
    }

    public function exitP3() {
        return view('forms.exitP3');
    }

    public function exitP4() {
        return view('forms.exitP4');
    }

    public function exitP5() {
        return view('forms.exitP5');
    }

//Personal Data Sheet return views
    public function pdsP1() {
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        $courses = Courses::all();
        return view('forms.pdsP1', compact('courses', 'account'));
    }
    // public function pdsP1(Request $request) {
    //     $account = DB::table('tbl_alumni')->where('userID', '=', $userID)->update([
    //         'lastName' => $request->input('lastName'),
    //         'firstName' => $request->input('firstName'),
    //         'middleName' => $request->input('middleName'),
    //         'courseID' => $request->input('courseID'),
    //         'batch' => $request->input('batch'),
    //         'gender' => $request->input('gender'),
    //         'bday' => $request->input('bday'),
    //         'age' => $request->input('age'),
    //         'religion' => $request->input('religion'),
    //         'studNumber' => $request->input('studNumber'),
    //         'email' => $request->input('email'),
    //         'number' => $request->input('number'),
    //         'cityAddress' => $request->input('cityAddress'),
    //         'provincialAddress' => $request->input('provincialAddress'),
    //     ]);
    // }
    public function pdsP2() {
        return view('forms.pdsP2');
    }

//SAS Form return views
    public function sasP1() {
        $courses = Courses::all();
        return view('forms.sasP1', compact('courses'));
    }

    public function sasP2() {
        return view('forms.sasP2');
    }

    public function sasP3() {
        return view('forms.sasP3');
    }

    public function sasP4() {
        return view('forms.sasP4');
    }

    public function sasP5() {
        return view('forms.sasP5');
    }
}
