<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\UserAccounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class AccountController extends Controller
{
    public function registerUser() {
        $courses = Courses::all();
        return view('login.register-user', compact('courses'));
    }

    public function regUser(Request $request) {
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
            return redirect('/');
        }
        else {
            return back()->with('fail', 'There is something wrong!');
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

    public function logout() {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('/');
        }
    }
}
