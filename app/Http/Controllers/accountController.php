<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class accountController extends Controller
{
    //
    public function index(){
    //$accounts = DB :: select('select * from account');
        $accounts = DB::table('account')->get();    
        return view('account.list',['accounts'=>$accounts]);
    }   
}
