<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Coa;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function adminSetting(){
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('admin.setting.admin-setting', compact('user', 'setting'));
    }

    public function dashboard(){
        $user = Session::get('user');
        return view('admin.dashboard', compact('user'));
    }

    public function coa(){
        $user = Session::get('user');
        $coa = Coa::get();
        return view('admin.data.coa', compact('user', 'coa'));
    }
}
