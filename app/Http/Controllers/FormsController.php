<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\ExitInterview;
use App\Models\PDS;
use App\Models\SASForm;
use Illuminate\Http\Request;
use DB;

class FormsController extends Controller
{
    public function index() {;
        $userID = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->first('userID')->userID;
        $pds = DB::table('pds')->where('userID', '=', $userID)->get();
        $exit = DB::table('exit_interview')->where('userID', '=', $userID)->get();
        $sas = DB::table('sas_form')->where('userID', '=', $userID)->get();

        return view('forms.index', compact('pds', 'exit', 'sas'));
    }

// Exit Interview
    public function exitInteview() {
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        $courses = Courses::all();
        return view('forms.exit-form', compact('courses', 'account'));
    }

// SAS Form
    public function sasForm() {
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        return view('forms.sas-form', compact('account'));
    }

// Personal Data Sheet
    public function pdsForm() {
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        $courses = Courses::all();
        return view('forms.pds-form', compact('courses', 'account'));
    }

// Personal Data Sheet Answers
    public function pdsAnswer(Request $request) {
        $request->validate([
            'userID' => 'required',
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'bday' => 'required',
            'number' => 'required',
            'email' => 'required',
            'religion' => 'required',
            'courseID' => 'required',
            'batch' => 'required',
            'cityAddress' => 'required',
            'fathersName' => 'required',
            'fathersNumber' => 'required',
            'mothersName' => 'required',
            'mothersNumber' => 'required',
            'office' => 'required',
            'position' => 'required',
            'officeDates' => 'required',
            'submissionDate' => 'required',
        ]);

        // $answers = DB::insert('insert into pds (userID, lastName, firstName, middleName, gender, age, bday, number, email, religion, courseID, batch, cityAddress, provincialAddress, fathersName, fathersNumber, mothersName, mothersNumber, office, position, officeDates, seminar1, seminar1Date, seminar2, seminar2Date, seminar3, seminar3Date, submissionDate) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
        //     $request->input('userID'),
        //     $request->input('lastName'),
        //     $request->input('firstName'),
        //     $request->input('middleName'),
        //     $request->input('gender'),
        //     $request->input('age'),
        //     $request->input('bday'),
        //     $request->input('number'),
        //     $request->input('email'),
        //     $request->input('religion'),
        //     $request->input('courseID'),
        //     $request->input('batch'),
        //     $request->input('cityAddress'),
        //     $request->input('provincialAddress'),
        //     $request->input('fathersName'),
        //     $request->input('fathersNumber'),
        //     $request->input('mothersName'),
        //     $request->input('mothersNumber'),
        //     $request->input('office'),
        //     $request->input('position'),
        //     $request->input('officeDates'),
        //     $request->input('seminar1'),
        //     $request->input('seminar1Date'),
        //     $request->input('seminar2'),
        //     $request->input('seminar2Date'),
        //     $request->input('seminar3'),
        //     $request->input('seminar3Date'),
        //     $request->input('submissionDate'),
        // ]);

        $answers = new PDS();

        $answers->userID = $request->input('userID');
        $answers->lastName = $request->input('lastName');
        $answers->firstName = $request->input('firstName');
        $answers->middleName = $request->input('middleName');
        $answers->gender = $request->input('gender');
        $answers->age = $request->input('age');
        $answers->bday = $request->input('bday');
        $answers->number = $request->input('number');
        $answers->email = $request->input('email');
        $answers->religion = $request->input('religion');
        $answers->courseID = $request->input('courseID');
        $answers->batch = $request->input('batch');
        $answers->cityAddress = $request->input('cityAddress');
        $answers->provincialAddress = $request->input('provincialAddress');
        $answers->fathersName = $request->input('fathersName');
        $answers->fathersNumber = $request->input('fathersNumber');
        $answers->mothersName = $request->input('mothersName');
        $answers->mothersNumber = $request->input('mothersNumber');
        $answers->office = $request->input('office');
        $answers->position = $request->input('position');
        $answers->officeDates = $request->input('officeDates');
        $answers->seminar1 = $request->input('seminar1');
        $answers->seminar1Date = $request->input('seminar1Date');
        $answers->seminar2 = $request->input('seminar2');
        $answers->seminar2Date = $request->input('seminar2Date');
        $answers->seminar3 = $request->input('seminar3');
        $answers->seminar3Date = $request->input('seminar3Date');
        $answers->submissionDate = $request->input('submissionDate');

        $answers->save();

        $userID = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->first('userID')->userID;
        $pds = DB::table('pds')->where('userID', '=', $userID)->get();
        $exit = DB::table('exit_interview')->where('userID', '=', $userID)->get();
        $sas = DB::table('sas_form')->where('userID', '=', $userID)->get();

        return view('forms.index', compact('pds', 'exit', 'sas'));
    }

// Exit Interview Answers
    public function exitAnswers(Request $request) {
        $request->validate([
            'userID' => 'required',
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'civil_status' => 'required',
            'number' => 'required',
            'email' => 'required',
            'studNumber' => 'required',
            'courseID' => 'required',
            'year' => 'required',
            'cityAddress' => 'required',
            'emp_status' => 'required',
            'reason' => 'required',

            'sec1_q1' => 'required',
            'sec1_q2' => 'required',
            'sec1_q3' => 'required',
            'sec1_q4' => 'required',
            'sec1_q5' => 'required',
            'sec1_q6' => 'required',
            'sec1_q7' => 'required',

            'sec2_q1' => 'required',
            'sec2_q2' => 'required',
            'sec2_q3' => 'required',

            'sec3_q1' => 'required',
            'sec3_q2' => 'required',
            'sec3_q3' => 'required',

            'sec4_q1' => 'required',
            'sec4_q2' => 'required',
            'sec4_q3' => 'required',

            'sec5_q1' => 'required',
            'sec5_q2' => 'required',
            'sec5_q3' => 'required',

            'sec6_q1' => 'required',
            'sec6_q2' => 'required',
            'sec6_q3' => 'required',

            'sec7_q1' => 'required',
            'sec7_q2' => 'required',
            'sec7_q3' => 'required',

            'sec8_q1' => 'required',
            'sec8_q2' => 'required',
            'sec8_q3' => 'required',

            'sec9_q1' => 'required',
            'sec9_q2' => 'required',
            'sec9_q3' => 'required',

            'sec10_q1' => 'required',
            'sec10_q2' => 'required',
            'sec10_q3' => 'required',

            'sec11_q1' => 'required',
            'sec11_q2' => 'required',
            'sec11_q3' => 'required',

            'sec12_q1' => 'required',
            'sec12_q2' => 'required',
            'sec12_q3' => 'required',

            'sec13_q1' => 'required',
            'sec13_q2' => 'required',
            'sec13_q3' => 'required',

            'sec14_q1' => 'required',
            'sec14_q2' => 'required',
            'sec14_q3' => 'required',
        ]);

        $answers = new ExitInterview();
        $answers->userID = $request->input('userID');
        $answers->lastName = $request->input('lastName');
        $answers->firstName = $request->input('firstName');
        $answers->middleName = $request->input('middleName');
        $answers->gender = $request->input('gender');
        $answers->age = $request->input('age');
        $answers->civil_status = $request->input('civil_status');
        $answers->number = $request->input('number');
        $answers->email = $request->input('email');
        $answers->studNumber = $request->input('studNumber');
        $answers->courseID = $request->input('courseID');
        $answers->year = $request->input('year');
        $answers->cityAddress = $request->input('cityAddress');
        $answers->emp_status = $request->input('emp_status');
        $answers->reason = $request->input('reason');

        $answers->sec1_q1 = $request->input('sec1_q1');
        $answers->sec1_q2 = $request->input('sec1_q2');
        $answers->sec1_q3 = $request->input('sec1_q3');
        $answers->sec1_q4 = $request->input('sec1_q4');
        $answers->sec1_q5 = $request->input('sec1_q5');
        $answers->sec1_q6 = $request->input('sec1_q6');
        $answers->sec1_q7 = $request->input('sec1_q7');

        $answers->sec2_q1 = $request->input('sec2_q1');
        $answers->sec2_q2 = $request->input('sec2_q2');
        $answers->sec2_q3 = $request->input('sec2_q3');

        $answers->sec3_q1 = $request->input('sec3_q1');
        $answers->sec3_q2 = $request->input('sec3_q2');
        $answers->sec3_q3 = $request->input('sec3_q3');

        $answers->sec4_q1 = $request->input('sec4_q1');
        $answers->sec4_q2 = $request->input('sec4_q2');
        $answers->sec4_q3 = $request->input('sec4_q3');

        $answers->sec5_q1 = $request->input('sec5_q1');
        $answers->sec5_q2 = $request->input('sec5_q2');
        $answers->sec5_q3 = $request->input('sec5_q3');

        $answers->sec6_q1 = $request->input('sec6_q1');
        $answers->sec6_q2 = $request->input('sec6_q2');
        $answers->sec6_q3 = $request->input('sec6_q3');

        $answers->sec7_q1 = $request->input('sec7_q1');
        $answers->sec7_q2 = $request->input('sec7_q2');
        $answers->sec7_q3 = $request->input('sec7_q3');

        $answers->sec8_q1 = $request->input('sec8_q1');
        $answers->sec8_q2 = $request->input('sec8_q2');
        $answers->sec8_q3 = $request->input('sec8_q3');

        $answers->sec9_q1 = $request->input('sec9_q1');
        $answers->sec9_q2 = $request->input('sec9_q2');
        $answers->sec9_q3 = $request->input('sec9_q3');

        $answers->sec10_q1 = $request->input('sec10_q1');
        $answers->sec10_q2 = $request->input('sec10_q2');
        $answers->sec10_q3 = $request->input('sec10_q3');

        $answers->sec11_q1 = $request->input('sec11_q1');
        $answers->sec11_q2 = $request->input('sec11_q2');
        $answers->sec11_q3 = $request->input('sec11_q3');

        $answers->sec12_q1 = $request->input('sec12_q1');
        $answers->sec12_q2 = $request->input('sec12_q2');
        $answers->sec12_q3 = $request->input('sec12_q3');

        $answers->sec13_q1 = $request->input('sec13_q1');
        $answers->sec13_q2 = $request->input('sec13_q2');
        $answers->sec13_q3 = $request->input('sec13_q3');

        $answers->sec14_q1 = $request->input('sec14_q1');
        $answers->sec14_q2 = $request->input('sec14_q2');
        $answers->sec14_q3 = $request->input('sec14_q3');

        $answers->comment = $request->input('comment');

        $answers->save();

        $userID = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->first('userID')->userID;
        $pds = DB::table('pds')->where('userID', '=', $userID)->get();
        $exit = DB::table('exit_interview')->where('userID', '=', $userID)->get();
        $sas = DB::table('sas_form')->where('userID', '=', $userID)->get();

        return view('forms.index', compact('pds', 'exit', 'sas'));
    }

// SAS Form Answers
    public function sasAnswer(Request $request) {
        $request->validate([
            'userID' => 'required',
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'email' => 'required',
            'stakeholder' => 'required',
            'semesters' => 'required',

            'sas_q1' => 'required',
            'sas_q2' => 'required',
            'sas_q3' => 'required',
            'sas_q4' => 'required',
            'sas_q5' => 'required',
            'sas_q6' => 'required',
            'sas_q7' => 'required',
            'sas_q8' => 'required',
            'sas_q9' => 'required',
            'sas_q10' => 'required',

            'sas_q11' => 'required',
            'sas_q12' => 'required',
            'sas_q13' => 'required',
            'sas_q14' => 'required',
            'sas_q15' => 'required',
            'sas_q16' => 'required',
            'sas_q17' => 'required',
            'sas_q18' => 'required',
            'sas_q19' => 'required',
            'sas_q20' => 'required',

            'sas_q21' => 'required',
            'sas_q22' => 'required',
            'sas_q23' => 'required',
            'sas_q24' => 'required',
            'sas_q25' => 'required',
            'sas_q26' => 'required',
            'sas_q27' => 'required',
            'sas_q28' => 'required',
            'sas_q29' => 'required',
            'sas_q30' => 'required',

            'sas_q31' => 'required',
            'sas_q32' => 'required',
            'sas_q33' => 'required',
            'sas_q34' => 'required',
            'sas_q35' => 'required',
            'sas_q36' => 'required',
            'sas_q37' => 'required',
            'sas_q38' => 'required',
            'sas_q39' => 'required',
            'sas_q40' => 'required',

            'sas_q41' => 'required',
            'sas_q42' => 'required',
            'sas_q43' => 'required',
            'sas_q44' => 'required',
            'sas_q45' => 'required',
            'sas_q46' => 'required',
            'sas_q47' => 'required',
            'sas_q48' => 'required',
            'sas_q49' => 'required',
            'sas_q50' => 'required',

            'sas_q51' => 'required',
            'sas_q52' => 'required',
            'sas_q53' => 'required',
            'sas_q54' => 'required',
            'sas_q55' => 'required',
            'sas_q56' => 'required',
            'sas_q57' => 'required',
            'sas_q58' => 'required',
            'sas_q59' => 'required',
            'sas_q60' => 'required',

            'sas_q61' => 'required',
            'sas_q62' => 'required',
            'sas_q63' => 'required',
            'sas_q64' => 'required',
            'sas_q65' => 'required',
            'sas_q66' => 'required',
            'sas_q67' => 'required',
            'sas_q68' => 'required',
            'sas_q69' => 'required',
            'sas_q70' => 'required',

            'sas_q71' => 'required',
            'sas_q72' => 'required',
            'sas_q73' => 'required',
            'sas_q74' => 'required',
        ]);

        $answers = new SASForm();
        $answers->userID = $request->input('userID');
        $answers->lastName = $request->input('lastName');
        $answers->firstName = $request->input('firstName');
        $answers->middleName = $request->input('middleName');
        $answers->gender = $request->input('gender');
        $answers->age = $request->input('age');
        $answers->email = $request->input('email');
        $answers->stakeholder = $request->input('stakeholder');
        $answers->semesters = $request->input('semesters');

        $answers->sas_q1 = $request->input('sas_q1');
        $answers->sas_q2 = $request->input('sas_q2');
        $answers->sas_q3 = $request->input('sas_q3');
        $answers->sas_q4 = $request->input('sas_q4');
        $answers->sas_q5 = $request->input('sas_q5');
        $answers->sas_q6 = $request->input('sas_q6');
        $answers->sas_q7 = $request->input('sas_q7');
        $answers->sas_q8 = $request->input('sas_q8');
        $answers->sas_q9 = $request->input('sas_q9');
        $answers->sas_q10 = $request->input('sas_q10');

        $answers->sas_q11 = $request->input('sas_q11');
        $answers->sas_q12 = $request->input('sas_q12');
        $answers->sas_q13 = $request->input('sas_q13');
        $answers->sas_q14 = $request->input('sas_q14');
        $answers->sas_q15 = $request->input('sas_q15');
        $answers->sas_q16 = $request->input('sas_q16');
        $answers->sas_q17 = $request->input('sas_q17');
        $answers->sas_q18 = $request->input('sas_q18');
        $answers->sas_q19 = $request->input('sas_q19');
        $answers->sas_q20 = $request->input('sas_q20');

        $answers->sas_q21 = $request->input('sas_q21');
        $answers->sas_q22 = $request->input('sas_q22');
        $answers->sas_q23 = $request->input('sas_q23');
        $answers->sas_q24 = $request->input('sas_q24');
        $answers->sas_q25 = $request->input('sas_q25');
        $answers->sas_q26 = $request->input('sas_q26');
        $answers->sas_q27 = $request->input('sas_q27');
        $answers->sas_q28 = $request->input('sas_q28');
        $answers->sas_q29 = $request->input('sas_q29');
        $answers->sas_q30 = $request->input('sas_q30');

        $answers->sas_q31 = $request->input('sas_q31');
        $answers->sas_q32 = $request->input('sas_q32');
        $answers->sas_q33 = $request->input('sas_q33');
        $answers->sas_q34 = $request->input('sas_q34');
        $answers->sas_q35 = $request->input('sas_q35');
        $answers->sas_q36 = $request->input('sas_q36');
        $answers->sas_q37 = $request->input('sas_q37');
        $answers->sas_q38 = $request->input('sas_q38');
        $answers->sas_q39 = $request->input('sas_q39');
        $answers->sas_q40 = $request->input('sas_q40');

        $answers->sas_q41 = $request->input('sas_q41');
        $answers->sas_q42 = $request->input('sas_q42');
        $answers->sas_q43 = $request->input('sas_q43');
        $answers->sas_q44 = $request->input('sas_q44');
        $answers->sas_q45 = $request->input('sas_q45');
        $answers->sas_q46 = $request->input('sas_q46');
        $answers->sas_q47 = $request->input('sas_q47');
        $answers->sas_q48 = $request->input('sas_q48');
        $answers->sas_q49 = $request->input('sas_q49');
        $answers->sas_q50 = $request->input('sas_q50');

        $answers->sas_q51 = $request->input('sas_q51');
        $answers->sas_q52 = $request->input('sas_q52');
        $answers->sas_q53 = $request->input('sas_q53');
        $answers->sas_q54 = $request->input('sas_q54');
        $answers->sas_q55 = $request->input('sas_q55');
        $answers->sas_q56 = $request->input('sas_q56');
        $answers->sas_q57 = $request->input('sas_q57');
        $answers->sas_q58 = $request->input('sas_q58');
        $answers->sas_q59 = $request->input('sas_q59');
        $answers->sas_q60 = $request->input('sas_q60');

        $answers->sas_q61 = $request->input('sas_q61');
        $answers->sas_q62 = $request->input('sas_q62');
        $answers->sas_q63 = $request->input('sas_q63');
        $answers->sas_q64 = $request->input('sas_q64');
        $answers->sas_q65 = $request->input('sas_q65');
        $answers->sas_q66 = $request->input('sas_q66');
        $answers->sas_q67 = $request->input('sas_q67');
        $answers->sas_q68 = $request->input('sas_q68');
        $answers->sas_q69 = $request->input('sas_q69');
        $answers->sas_q70 = $request->input('sas_q70');

        $answers->sas_q71 = $request->input('sas_q71');
        $answers->sas_q72 = $request->input('sas_q72');
        $answers->sas_q73 = $request->input('sas_q73');
        $answers->sas_q74 = $request->input('sas_q74');

        $answers->save();

        $userID = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->first('userID')->userID;
        $pds = DB::table('pds')->where('userID', '=', $userID)->get();
        $exit = DB::table('exit_interview')->where('userID', '=', $userID)->get();
        $sas = DB::table('sas_form')->where('userID', '=', $userID)->get();

        return view('forms.index', compact('pds', 'exit', 'sas'));
    }

    // Data Privacy Notice
    public function dataPrivacy(Request $request) {
        $request->validate([
            'isAgreed' => 'required',
        ]);

        if(($request->isAgreed) == 'Agree') {
            return back();
        }
        else {
            return redirect(route('user.formsIndex'));
        }
    }
}
