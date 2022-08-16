<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AlumniList;
use App\Models\Courses;
use App\Models\UserAccounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

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
                'studNumber' => 'required|unique:user_accounts',
                'email' => 'required|unique:user_accounts',
                'number' => 'required|unique:user_accounts',
                'address' => 'required',
                'username' => 'required|unique:user_accounts',
                'password' => 'required|min:8',
            ]);

            $account = new UserAccounts();
            $account->lastName = $request->lastName;
            $account->firstName = $request->firstName;
            $account->middleName = $request->middleName;
            $account->courseID = $request->courseID;
            $account->batch = $request->batch;
            $account->gender = $request->gender;
            $account->bday = $request->bday;
            $account->studNumber = $request->studNumber;
            $account->email = $request->email;
            $account->number = $request->number;
            $account->address = $request->address;
            $account->username = $request->username;
            $account->password = Hash::make($request->password);
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

        $account = UserAccounts::where('username', '=', $request->username)->first();
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
            'adminID' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('adminID', '=', $request->adminID)->first();
        if($admin) {
            if($request->password) {
                $request->session()->put('loginAdminID', $admin->adminID);
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
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('/');
        }
    }

    public function logoutAdmin() {
        if(Session::has('loginAdminID')) {
            Session::pull('loginAdminID');
            return redirect('/');
        }
    }

}