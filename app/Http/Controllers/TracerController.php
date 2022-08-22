<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use DB;

class TracerController extends Controller
{
    public function index() {
        return view('tracer.index');
    }

    public function answerForm() {
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        $courses = Courses::all();
        return view('tracer.form', compact('courses', 'account'));
    }
}
