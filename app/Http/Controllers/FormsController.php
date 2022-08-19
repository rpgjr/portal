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
