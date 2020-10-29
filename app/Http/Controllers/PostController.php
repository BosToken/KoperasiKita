<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Post;
use Session;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post=Post::get();
        $user = Session::get('user');
        $setting = AdminSetting::get();
        return view('user.post', compact('post', 'user' , 'setting'));      
    }

    public function store(Request $request)
    {
        $period = $request->period;
        $beginning_balance = $request->beginning_balance;
        $debit_mutation = $request->debit_mutation;
        $credit_mutation = $request->credit_mutation;
        $ending_balance = $request->ending_balance;

        $post = new Post();
        $post->period = $period;
        $post->beginning_balance = $beginning_balance;
        $post->debit_mutation = $debit_mutation;
        $post->credit_mutation = $credit_mutation;
        $post->ending_balance = $ending_balance;
        $post->save();

        return redirect()->action('PostController@index');
    }
}
