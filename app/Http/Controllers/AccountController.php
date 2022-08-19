<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Alumni;
use App\Models\AlumniList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function regUser(Request $request) {
        if(AlumniList::where('studNumber', '=', $request->studNumber)->first() && AlumniList::where('lastName', '=', $request->lastName)->first() && AlumniList::where('firstName', '=', $request->firstName)->first()) {
            $request->validate([
                'lastName' => 'required',
                'firstName' => 'required',
                'middleName' => 'required',
                'courseID' => 'required',
                'batch' => 'required',
                'gender' => 'required',
                'bday' => 'required',
                'age' => 'required',
                'religion' => 'required',
                'studNumber' => 'required|unique:tbl_alumni',
                'email' => 'required|unique:tbl_alumni',
                'number' => 'required|unique:tbl_alumni',
                'cityAddress' => 'required',
                'username' => 'required|unique:tbl_alumni',
                'password' => 'required|min:8',
                'accessType' => 'required',
            ]);

            $account = new Alumni();
            $account->lastName = $request->lastName;
            $account->firstName = $request->firstName;
            $account->middleName = $request->middleName;
            $account->courseID = $request->courseID;
            $account->batch = $request->batch;
            $account->gender = $request->gender;
            $account->bday = $request->bday;
            $account->age = $request->age;
            $account->religion = $request->religion;
            $account->studNumber = $request->studNumber;
            $account->email = $request->email;
            $account->number = $request->number;
            $account->cityAddress = $request->cityAddress;
            $account->username = $request->username;
            $account->password = Hash::make($request->password);
            $account->accessType = $request->accessType;
            $result = $account->save();

            if($result) {
                $request->session()->put('loginID', $account->username);
                return redirect(route('homepage'));
            }
            else {
                return back()->with('fail', 'There is a problem creating your account');
            }
        }
        else {
            return back()->with('fail', 'Error: You cannot create an account yet.');
        }

    }

    public function login() {
        return view('login.login-user');
    }

    public function loginUser(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $account = Alumni::where('username', '=', $request->username)->first();
        if($account) {
            if(Hash::check($request->password, $account->password)) {
                $request->session()->put('loginID', $account->username);
                return redirect(route('homepage'));
            }
            else {
                return back()->with('fail', 'The password is incorrect.');
            }
        }
        else {
            return back()->with('fail', 'This username is not yet registered.');
        }
    }

    public function loginAdmin() {
        return view('login.login-admin');
    }

    public function login_admin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', '=', $request->username)->first();
        if($admin) {
            if($request->password) {
                $request->session()->put('loginAdminID', $admin->username);
                return redirect(route('admin.index'));
            }
            // if(Hash::check($request->password, $admin->password)) {
            //     $request->session()->put('adminID', $admin->adminID);
            //     return redirect(route('homepage'));
            // }
            else {
                return back()->with('fail', 'The password is incorrect.');
            }
        }
        else {
            return back()->with('fail', 'This username is not yet registered.');
        }
    }

    public function logout() {
        if(Session()->has('loginID')) {
            Session()->pull('loginID');
            return redirect('/');
        }
    }

    public function logoutAdmin() {
        if(Session()->has('loginAdminID')) {
            Session()->pull('loginAdminID');
            return redirect('/');
        }
    }

}
