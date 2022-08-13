<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\Admin;
use Excel;
use App\Models\AlumniList;

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
}
