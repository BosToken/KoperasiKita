<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Coa;
use App\Dictionary;
use App\Journal;
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

    public function coadestroy($id){
        Coa::find($id)->delete();
        return redirect()->action('AdminController@coa');
    }

    public function updatecoa(Request $request, $id){
        Coa::where('id', $id)->update([
            'parent_id' => $request->parent_id,
            'title' => $request->title,
            'code' => $request->code,
        ]);
        return redirect()->action('AdminController@coa');
    }

    public function storecoa(Request $request)
    {
        $parent_id = $request->parent_id;
        $title = $request->title;
        $code = $request->code;

        $coa = new Coa();
        $coa->parent_id = $parent_id;
        $coa->title = $title;
        $coa->code = $code;
        $coa->save();

        return redirect()->action('AdminController@coa');
    }

    public function dictionary(){
        $user = Session::get('user');
        $dictionary = Dictionary::get();
        $setting = AdminSetting::get();
        return view('admin.data.dictionary', compact('user', 'dictionary', 'setting'));
    }

    public function dictionarydestroy($id){
        Dictionary::find($id)->delete();
        return redirect()->action('AdminController@dictionary');
    }

    public function updatedictionary(Request $request, $id){
        Dictionary::where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'formula' => $request->formula,
            'type' => $request->type,
        ]);
        return redirect()->action('AdminController@dictionary');
    }

    public function storedictionary(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $formula = $request->formula;
        $type = $request->type;

        $dictionary = new Dictionary();
        $dictionary->title = $title;
        $dictionary->body = $body;
        $dictionary->formula = $formula;
        $dictionary->type = $type;
        $dictionary->save();

        return redirect()->action('AdminController@dictionary');
    }
    
    public function journal(){
        $user = Session::get('user');
        $journal = Journal::get();
        $setting = AdminSetting::get();
        return view('admin.data.journal', compact('user', 'journal', 'setting'));
    }

    public function journaldestroy($id){
        Journal::find($id)->delete();
        return redirect()->action('AdminController@journal');
    }

    public function updatejournal(Request $request, $id){
        Journal::where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'discharge' => $request->discharge,
            'credit' => $request->credit,
        ]);
        return redirect()->action('AdminController@journal');
    }

    public function storejournal(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $discharge = $request->discharge;
        $credit = $request->credit;

        $journal = new Journal();
        $journal->title = $title;
        $journal->body = $body;
        $journal->discharge = $discharge;
        $journal->credit = $credit;
        $journal->save();

        return redirect()->action('AdminController@journal');
    }
}
