<?php

namespace App\Http\Controllers;

use App\Models\Tracer;
use Illuminate\Http\Request;
use App\Models\Courses;
use DB;

class TracerController extends Controller
{
    public function index() {
        $userID = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->first('userID')->userID;
        $answers = DB::table('tracer_form')->where('userID', '=', $userID)->get();
        return view('tracer.index', compact('answers'));
    }

// Tracer Form
    public function answerForm() {
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        $courses = Courses::all();
        return view('tracer.form', compact('courses', 'account'));
    }

// Tracer Answers
    public function tracerAnswer(Request $request){


        $request->validate([
            'userID' => 'required',
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'courseID' => 'required',
            'number' => 'required',
            'email' => 'required',
            'ff_firstEmployment' => 'required',
            'cc_currentEmployment' => 'required',
            'cc_company',
            'cc_typeOfWork',
            'cc_position',
            'cc_status',
            'cc_income',
            'relatedToCourse',
            'cc_email',
            'cc_number',
            'ff_company',
            'ff_position',
            'ff_email',
            'ff_number',
        ]);

        $answers = new Tracer();

        $answers->userID = $request->input('userID');
        $answers->lastName = $request->input('lastName');
        $answers->firstName = $request->input('firstName');
        $answers->middleName = $request->input('middleName');
        $answers->courseID = $request->input('courseID');
        $answers->number = $request->input('number');
        $answers->email = $request->input('email');
        $answers->ff_firstEmployment = $request->input('ff_firstEmployment');
        $answers->cc_currentEmployment = $request->input('cc_currentEmployment');
        $answers->cc_company = $request->input('cc_company');
        $answers->cc_typeOfWork = $request->input('cc_typeOfWork');
        $answers->cc_position = $request->input('cc_position');
        $answers->cc_status = $request->input('cc_status');
        $answers->cc_income = $request->input('cc_income');
        $answers->relatedToCourse = $request->input('relatedToCourse');
        $answers->cc_email = $request->input('cc_email');
        $answers->cc_number = $request->input('cc_number');
        $answers->ff_company = $request->input('ff_company');
        $answers->ff_position = $request->input('ff_position');
        $answers->ff_email = $request->input('ff_email');
        $answers->ff_number = $request->input('ff_number');
        
        $answers->save();

        

        return redirect(route('user.tracerIndex'));

    }

    public function updateTracer(){
        $userID = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->first('userID')->userID;
        $answers = DB::table('tracer_form')->where('userID', '=', $userID)->get();
        $courses = Courses::all();
        return view('tracer.update', compact('answers', 'courses'));
    }

    public function update(Request $request, $tracerID){
        $tracer = DB::table('tracer_form')->where('tracerID', '=', $tracerID)->update([
            'userID' => $request->input('userID'),
            'lastName' => $request->input('lastName'),
            'firstName' => $request->input('firstName'),
            'middleName' => $request->input('middleName'),
            'courseID' => $request->input('courseID'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
            'ff_firstEmployment' => $request->input('ff_firstEmployment'),
            'cc_currentEmployment' => $request->input('cc_currentEmployment'),
            'cc_company' => $request->input('cc_company'),
            'cc_typeOfWork' => $request->input('cc_typeOfWork'),
            'cc_position' => $request->input('cc_position'),
            'cc_status' => $request->input('cc_status'),
            'cc_income' => $request->input('cc_income'),
            'relatedToCourse' => $request->input('relatedToCourse'),
            'cc_email' => $request->input('cc_email'),
            'cc_number' => $request->input('cc_number'),
            'ff_company' => $request->input('ff_company'),
            'ff_position' => $request->input('ff_position'),
            'ff_email' => $request->input('ff_email'),
            'ff_number' => $request->input('ff_number'),
        ]);

        return redirect(route('user.updateTracer'));
    }
}

