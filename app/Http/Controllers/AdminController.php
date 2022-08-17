<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\Admin;
use Excel;
use App\Models\AlumniList;
use App\Models\Careers;
use App\Models\Tracers;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('admin.index', compact('admin'));
    }

    public function addListAlumni()
    {
        $alumni = AlumniList::all();
        return view('admin.add-list', compact('alumni'));
    }

    public function addAlumni(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new UsersImport, $request->file('excel_file'));
        return redirect()->back();
    }

    public function adminCareer() {
        $data = Session()->get('loginID');
        $career = Careers::all();
        return view('admin-career.index', compact('career', 'data'));
    }

    public function deleteAlumniList($studNumber) {
        $alumni = AlumniList::where('studNumber', '=', $studNumber);
        $alumni->delete();

        return redirect(route('admin.addList'));
    }

    public function careerRequest() {
        $data = Session()->get('loginID');
        $career = DB::table('careers')->where('carRequest', '=', 0)->get();
        return view('admin-career.request', compact('career', 'data'));
    }

    // Alumni Tracer return view only
    public function adminTracer() {
        $tracer = Tracers::all();
        return view('admin-tracer.index', compact('tracer'));
    }
}
