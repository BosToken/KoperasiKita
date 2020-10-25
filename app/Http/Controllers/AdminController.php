<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Coa;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function adminSetting(){
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('admin.setting.admin-setting', compact('user', 'setting'));
    }

    public function updateadmin(Request $request, $id){
        AdminSetting::where('id', $id)->update([
            'app_title' => $request->app_title,
            'lang' => $request->lang,
            'email' => $request->email,
            'img_url' => $request->img_url,
        ]);
        return redirect()->action('AdminController@adminSetting');
    }

    public function userSetting(){
        $user = Session::get('user');
        $userrole = User::get();
        $setting = AdminSetting::get();

        return view('admin.setting.user-setting', compact('user', 'userrole', 'setting'));
    }

    public function userDelete($id){

        User::find($id)->delete();
        return redirect()->action('AdminController@userSetting');
    }

    public function updateuser(Request $request, $id){
        User::where('id', $id)->update([
            'username' => $request->username,
            'contact' => $request->contact,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id,
        ]);
        return redirect()->action('AdminController@userSetting');
    }

    public function dashboard(){
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('admin.dashboard', compact('user' , 'setting'));
    }

    public function coa(){
        $user = Session::get('user');
        $coa = Coa::get();
        $setting = AdminSetting::get();
        return view('admin.data.coa', compact('user', 'coa', 'setting'));
    }



    public function __construct(){
        $this->middleware('cek_login');
    }
}
