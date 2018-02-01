<?php

namespace App\Http\Controllers;
use App\transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function createQuotation(){
        return view('quotation.create_quotation');
    }

    public function saveTransaction(Request $request){
        $this->validate($request,[
           'title' => 'required',
           'machine_type' => 'required',
           'priority' => 'required',
           'message' => 'required',
           'price' => 'required'
        ]);

        $transaction = new transaction([
           'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'machine_type' => $request->input('machine_type'),
            'message' => $request->input('message'),
            'price' => $request->get('price'),
            'priority' =>$request->input('priority')
        ]);
        $transaction->save();
        $invoice = fopen(Auth::user()->name .'.docx','w') or die('Unable to Open File');
        $line = '**************\n IT Solutions\n **************';



        return redirect()->back()->with('status','Transaction Completed Successfully, Kindly Collect Invoice');


    }
}
