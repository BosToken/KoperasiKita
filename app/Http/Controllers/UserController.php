<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Validator;
use Session;

class UserController extends Controller
{
    public function login(){
        $setting = AdminSetting::get();
        return view('login', compact('setting'));
    }
    public function store(Request $request)
    {
        $username = $request->username;
        $contact = $request->contact;
        $email = $request->email;
        $password = $request->password;

        $cekData = User::where('email', $request->email)->exists();

        if ($cekData) {
            return redirect('login')->with('gagal', 'Email Has Been Registered');
        }
        if ($password !== $password) {
            return redirect('login');
        } else {
            $user = new User();
            $user->email = $email;
            $user->contact = $contact;
            $user->username = $username;
            $user->password = $password;
            $user->img_url = 'https://placewaifu.com/image/700';
            $user->role_id = '2';

            $user->save();

            $request->session()->put('logged_in', true);
            $data = User::where('email', $request->email);
            $request->session()->put('user', $data->first());

            return redirect('/user/dashboard');
        }
    }
    public function check (Request $request) {
        $data = User::where('email',$request->email)->where('password',$request->password)->first();
        if($data) {
            $request->session()->put('logged_in', true);
            $request->session()->put('user', $data);
            $request->session()->put('role', User::find($data->id)->first());
            return redirect('/user/dashboard');
        }
           else {
            return redirect('/login');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('/login');
    }

    public function dashboard(){
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.dashboard', compact('user', 'setting'));
    }
    
    
    public function index(){
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('welcome', compact('user', 'setting'));
    }

    public function profile(){
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.profile', compact('user', 'setting'));
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/logout');
    }
}
