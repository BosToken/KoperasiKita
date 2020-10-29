<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use App\Coa;
use App\Dictionary;
use App\Journal;
use App\Post;
use App\Role;
use App\SystemLog;
use App\Transaction;
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
        $journal = Journal::get();
        $dictionary = Dictionary::get();
        $coa = Coa::get();
        $transaction = Transaction::get();
        return view('admin.dashboard', compact('coa' , 'transaction' , 'journal' , 'dictionary' , 'user' , 'setting'));
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
            'num_approximate' => $request->num_approximate,
            'parent_id' => $request->parent_id,
            'title' => $request->title,
            'code' => $request->code,
            'headdet' => $request->headdet,
            'dk' => $request->dk,
        ]);
        return redirect()->action('AdminController@coa');
    }

    public function storecoa(Request $request)
    {
        $num_approximate = $request->num_approximate;
        $parent_id = $request->parent_id;
        $title = $request->title;
        $code = $request->code;
        $headdet = $request->headdet;
        $dk = $request->dk;

        $coa = new Coa();
        $coa->num_approximate = $num_approximate;
        $coa->parent_id = $parent_id;
        $coa->title = $title;
        $coa->code = $code;
        $coa->headdet = $headdet;
        $coa->dk = $dk;
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

    public function post(){
        $user = Session::get('user');
        $post = Post::get();
        $setting = AdminSetting::get();
        return view('admin.data.post', compact('user', 'post', 'setting'));
    }

    public function postdestroy($id){
        Post::find($id)->delete();
        return redirect()->action('AdminController@post');
    }

    public function updatepost(Request $request, $id){
        Post::where('id', $id)->update([
            'period' => $request->period,
            'beginning_balance' => $request->beginning_balance,
            'debit_mutation' => $request->debit_mutation,
            'credit_mutation' => $request->credit_mutation,
            'ending_balance' => $request->beginning_balance,
        ]);
        return redirect()->action('AdminController@post');
    }

    public function storepost(Request $request)
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

        return redirect()->action('AdminController@post');
    }

    public function systemLog(){
        $user = Session::get('user');
        $systemlog = SystemLog::get();
        $setting = AdminSetting::get();
        return view('admin.data.system_log', compact('user', 'systemlog', 'setting'));
    }

    public function systemLogdestroy($id){
        SystemLog::find($id)->delete();
        return redirect()->action('AdminController@systemLog');
    }

    public function updatesystemLog(Request $request, $id){
        SystemLog::where('id', $id)->update([
            'event' => $request->event,
            'num_transaction' => $request->num_transaction,
            'num_evidence' => $request->num_evidence,
            'body' => $request->body,
            'operator' => $request->operator,
        ]);
        return redirect()->action('AdminController@systemLog');
    }

    public function storesystemLog(Request $request)
    {
        $event = $request->event;
        $num_evidence = $request->num_evidence;
        $num_transaction = $request->num_transaction;
        $body = $request->body;
        $operator = $request->operator;

        $systemlog = new SystemLog();
        $systemlog->event = $event;
        $systemlog->num_evidence = $num_evidence;
        $systemlog->num_transaction = $num_transaction;
        $systemlog->body = $body;
        $systemlog->operator = $operator;
        $systemlog->save();

        return redirect()->action('AdminController@systemLog');
    }

    public function transaction(){
        $user = Session::get('user');
        $transaction = Transaction::get();
        $setting = AdminSetting::get();
        return view('admin.data.transaction', compact('user', 'transaction', 'setting'));
    }

    public function transactiondestroy($id){
        Transaction::find($id)->delete();
        return redirect()->action('AdminController@transaction');
    }

    public function updatetransaction(Request $request, $id){
        Transaction::where('id', $id)->update([
            'num_evidence' => $request->num_evidence,
            'type_transaction' => $request->type_transaction,
            'dictionary_id' => $request->dictionary_id,
            'body' => $request->body,
            'amount' => $request->amount,
            'operator' => $request->operator,
            'status' => $request->status,
        ]);
        return redirect()->action('AdminController@transaction');
    }

    public function storetransaction(Request $request)
    {
        $num_evidence = $request->num_evidence;
        $type_transaction = $request->type_transaction;
        $dictionary_id = $request->dictionary_id;
        $body = $request->body;
        $amount = $request->amount;
        $operator = $request->operator;
        $status = $request->status;

        $transaction = new Transaction();
        $transaction->num_evidence = $num_evidence;
        $transaction->type_transaction = $type_transaction;
        $transaction->dictionary_id = $dictionary_id;
        $transaction->body = $body;
        $transaction->amount = $amount;
        $transaction->operator = $operator;
        $transaction->status = $status;
        $transaction->save();

        return redirect()->action('AdminController@transaction');
    }
}
