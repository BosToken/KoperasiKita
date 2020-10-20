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
        return view('login.login');
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
    public function check (Request $req) {
            $this->validate($req,[
                'email'=>'required',
                'password'=>'required'
            ]);
            $proses=User::where('email',$req->email)->where('password',md5($req->password));
        if($proses->count()>0){
            $data=$proses->first();
            Session::put('id',$data->id);
            Session::put('email',$data->email);
            Session::put('contact',$data->contact);
            Session::put('username',$data->username);
            Session::put('img_url',$data->img_url);
            Session::put('password',$data->password);
            Session::put('role_id',$data->role_id);
            Session::put('login_status',true);
            return redirect('/user/dashboard');
        }else{
            Session::flash('alert_message','Email dan Password Anda Tidak Cocok');
            return redirect('login');
        }
        

}
}
