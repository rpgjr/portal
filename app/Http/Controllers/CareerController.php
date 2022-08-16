<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;
use DB;

class CareerController extends Controller
{
    public function index() {
        $data = Session()->get('loginID');
        $career = DB::table('careers')->where('carRequest', '=', 1)->get();
        return view('career.index', compact('career', 'data'));
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

    public function update(Request $request, $id) {
        $career = Careers::find($id);
        $input = $request->all();
        $career->fill($input)->save();

        if(Session()->get('loginID')) {
            return redirect(route('career.index'));
        }
        elseif(Session()->get('loginAdminID')) {
            return redirect(route('admin.careerIndex'));
        }
    }

    public function delete($id) {
        $career = Careers::find($id);
        $career->delete();

        if(Session()->get('loginID')) {
            return redirect(route('career.index'));
        }
        elseif(Session()->get('loginAdminID')) {
            return redirect(route('admin.careerIndex'));
        }
    }

    public function approveCareer($id) {
        $career = Careers::find($id);
        $career->carRequest = 1;
        $career->save();

        return redirect(route('admin.careerRequest'));
    }
}
