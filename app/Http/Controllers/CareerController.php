<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;
use DB;

class CareerController extends Controller
{
    public function index() {
        $data = Session()->get('loginID');
        $account = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->get();
        $career = DB::table('careers')->where('carRequest', '=', 1)->get();
        $userID = DB::table('tbl_alumni')->where('username', '=', Session()->get('loginID'))->first('userID')->userID;
        $applicant = DB::table('career_applicants')->where('userID', '=', $userID)->get();
        return view('career.index', compact('career', 'data', 'account', 'applicant'));
    }

    public function addJob(Request $request) {
        $this->validate($request,[
            'job_name' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'category' => 'required',
            'email' => 'required',
            'number' => 'required',
            'username' => 'required',
            'carRequest' => 'required',
        ]);

        $career = new Careers();
        $career->job_name = $request->input('job_name');
        $career->company = $request->input('company');
        $career->salary = $request->input('salary');
        $career->description = $request->input('description');
        $career->category = $request->input('category');
        $career->email = $request->input('email');
        $career->number = $request->input('number');
        $career->username = $request->input('username');
        $career->carRequest = $request->input('carRequest');
        $career->save();

        if(Session()->get('loginID')) {
            return back()->with('success', 'Wait for the admin to Approve your Job Posting. Thank you.');
        }
        elseif(Session()->get('loginAdminID')) {
            return redirect(route('admin.careerIndex'));
        }
        else {
            echo "Error";
        }
    }

    public function update(Request $request, $careerID) {
        $career = DB::table('careers')->where('careerID', '=', $careerID)->update([
            'job_name' => $request->input('job_name'),
            'company' => $request->input('company'),
            'salary' => $request->input('salary'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
        ]);

        if(Session()->get('loginID')) {
            return redirect(route('career.index'));
        }
        elseif(Session()->get('loginAdminID')) {
            return redirect(route('admin.careerIndex'));
        }
    }

    public function delete($careerID) {
        $career = DB::table('careers')->where('careerID', '=', $careerID)->delete();

        if(Session()->get('loginID')) {
            return redirect(route('career.index'));
        }
        elseif(Session()->get('loginAdminID')) {
            return redirect(route('admin.careerIndex'));
        }
    }

    public function approveCareer($careerID) {
        $career = DB::table('careers')->where('careerID', '=', $careerID)->update(['carRequest' => 1]);

        return redirect(route('admin.careerRequest'));
    }

    public function applyCareer(Request $request) {
        $request->validate([
            'userID' => 'required',
            'careerID' => 'required',
        ]);

        $applicant = DB::insert('insert into career_applicants (userID, careerID) values (?, ?)', [$request->userID, $request->careerID]);

        return redirect(route('career.index'));
    }
}
