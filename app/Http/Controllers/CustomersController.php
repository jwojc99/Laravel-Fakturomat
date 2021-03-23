<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();

        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name=$request->name;
        $customer->address=$request->address;
        $customer->nip=$request->nip;
        $customer->save();
        return redirect()->route('customers.index')->with('message','Customer has been ADDED');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //sluzy do tego zeby pokazac palny resource
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customers.edit',compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer=Customer::find($id);
        $customer->name=$request->name;
        $customer->address=$request->address;
        $customer->nip=$request->nip;
        $customer->save();
        return redirect()->route('customers.index')->with('message','Customer has been CHANGED');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Customer::destroy($id);
       return redirect()->route('customers.index')->with('message','Customer has been DELETED');
    //    $customer = Customer::find($id);
    //     $customer->delete();
    //     return redirect()->route('customers.index')->with('message','Customer has been CHANGED');

    }
}
