<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Validator;
use Session;

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

        // $this->validate($request, [
        //     'email'=>'required',
        //     'password'=>'required'
        // ]);
        // $procces = User::where('email', $request->email)->where('password', $request->password)->first();
        // if(count($procces)>0){
        //     Session::put('id',$procces->id);
        //     Session::put('username',$procces->username);
        //     Session::put('contact',$procces->contact);
        //     Session::put('email',$procces->emailv);
        //     Session::put('password',$procces->password);
        //     Session::put('img_url',$procces->img_url);
        //     return redirect('/user/dashboard');
        // }
        // else{
        // return redirect('/login');
        // }
    }
    public function dashboard(){
        $user = Session::get('user');
        return view('user.dashboard', compact('user'));
    }
}
