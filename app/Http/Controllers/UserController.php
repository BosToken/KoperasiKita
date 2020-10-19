<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function store(Request $request)
    {
        $username = $request->username;
        $contact = $request->contact;
        $email = $request->email;
        $password = $request->password;

        $cekData = User::where('email', $request->email)->exists();

        if ($cekData) {
            return redirect('/login')->with('gagal', 'Email Has Been Registered');
        }
        if ($password !== $password) {
            return redirect('/login');
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
            $this->validate($request,[
                'email'=>'required',
                'password'=>'required'
            ]);
            $proses = User::where('username', $request->username)->where('password', $request->password)->first();
            if($proses){
                Session::put('id', $proses->id);
                Session::put('username', $proses->username);
                Session::put('contact', $proses->contact);
                Session::put('email', $proses->email);
                Session::put('password', $proses->password);
                Session::put('img_url', $proses->img_url);
                Session::put('role_id', $proses->role_id);
                Session::put('status', true);
                return redirect('/user/dashboard');
            }
            else{
                Session::flush();
                return redirect('/login');
            }
        }

}
