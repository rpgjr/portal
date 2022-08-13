<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index() {
        $career = Careers::all();
        return view('career.index', compact('career'));
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
        ]);

        $career = new Careers();
        $career->job_name = $request->input('job_name');
        $career->company = $request->input('company');
        $career->salary = $request->input('salary');
        $career->description = $request->input('description');
        $career->category = $request->input('category');
        $career->email = $request->input('email');
        $career->number = $request->input('number');
        $result = $career->save();

        if($result) {
            return redirect(route('career.index'));
        }
        else {
            echo "Error";
        }
    }

    public function update(Request $request, $id) {
        $career = Careers::find($id);
        $input = $request->all();
        $career->fill($input)->save();

        return redirect(route('career.index'));
    }

    public function delete($id) {
        $career = Careers::find($id);
        $career->delete();

        return redirect(route('career.index'));
    }
}
