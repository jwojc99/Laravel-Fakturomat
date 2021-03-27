<?php

namespace App\Http\Controllers;
use App\Http\Requests\InvoicesStoreRequest;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Customer;

class InvoicesController extends Controller
{
    public function index(){
        $invoices = Invoice::with('customer')->get();
        return view('invoices.index',['invoices'=>$invoices]);
    }

    public function create(){
       // $customers=Customers::all();
        return view('invoices.create');
    }
    public function store(InvoicesStoreRequest $request){
        $invoice = new Invoice();
        $invoice->customer_id=$request->customer;
        $invoice->number=$request->number;
        $invoice->date=$request->date;
        $invoice->total=$request->total;
        $invoice->save();

        return redirect()->route('invoices.index')->with('message','Invoice has been ADDED');
    }
    public function edit($id){
        $invoice=Invoice::find($id);
        return view('invoices.edit',['invoice'=>$invoice]);
    }
    public function update($id,Request $request){
        $invoice = Invoice::find($id);

        $invoice->number=$request->number;
        $invoice->date=$request->date;
        $invoice->total=$request->total;
        $invoice->save();

        return redirect()->route('invoices.index')->with('message','Invoice has been CHANGED');
    }
    public function delete($id){
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect()->route('invoices.index')->with('message','Invoice has been DELETED');
    }
}
