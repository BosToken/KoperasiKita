<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function dashboard(){
        $user = Session::get('user');
        return view('admin.dashboard', compact('user'));
    }
}
