<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class transactionController extends Controller
{
    //
    public function list($id){
        //$transactions = DB::select('select * from transaction where transaction_from=? or transaction_to=?',[$id,$id]);
        $transactions = DB::table('transaction')
        ->where('transaction_from',$id)
        ->orwhere('transaction_to',$id)->get();
        return view('transaction.tlist',['transactions'=>$transactions]);
    }
    public function doTransaction(Request $request){
        //tiim dans bga esehiig shalgad bhq bol aldaanii medee og
        $check_accountF = $request->transaction_from;
        $check_accountT = $request->transaction_to;
        $acc_from = DB::select('select account_number from account where account_number=?',[$check_accountF]);
        $acc_to = DB::select('select account_number from account where account_number=?',[$check_accountT]);
        
        if($acc_from == null or $acc_to == null){
            return redirect()->back() ->with('alert', 'Дансны мэдээлэл буруу байна!');
        }

        //dansnii uldegdel hureltsej bh ystoi
        $t_amount = $request->transaction_amount;
        $acc_amount = DB::select('select account_balance from account where account_number=? and account_balance >= ?', 
        [$check_accountF,$t_amount]);
        if($acc_amount == null){
            return redirect()->back() ->with('alert', 'Дансны үлдэгдэл хүрэлцэхгүй байна!');
        } 
    
        //transaction table ruu insert hiine
        DB::insert('insert into transaction(transaction_from,transaction_to,transaction_amount,transaction_description,created_at)
        values(?,?,?,?,now())',
        [$request->transaction_from, $request->transaction_to, $request->transaction_amount, $request->transaction_description]);

        //Shiljuuleg hiisnii dra dansnii uldegdel hasahdana 
        DB::update('UPDATE account AS T1
        INNER JOIN transaction T2
            ON T1.account_number = ?
        SET T1.account_balance = (T1.account_balance - ?)',
        [$check_accountF,$t_amount]);
        
        //huleen avagchiin dansnii uldegdel orlogiin hemjeegeer nemegdene
        DB::update('UPDATE account AS T1
        INNER JOIN transaction T2
            ON T1.account_number = ?
        SET T1.account_balance = (T1.account_balance + ?)',
         [$check_accountT,$t_amount]);

        return redirect()->back()->withSuccess('Шилжүүлэг амжилттай');

    }
}
