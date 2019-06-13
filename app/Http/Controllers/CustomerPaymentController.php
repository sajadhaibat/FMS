<?php

namespace App\Http\Controllers;

use App\CustomerPayment;
use Illuminate\Http\Request;
use App\Customer;

class CustomerPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $customer_names = Customer::all();
        return view ('customer.customerpayment',compact('customer_names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $payment = new CustomerPayment;
        $payment->customer_id = $request->customer_id;
        $payment->paid_amount = $request->paid_amount;
        $payment->new_loan_amount = $request->new_loan_amount;
        $payment->date = $request->date;
        $payment->loan_amount = $request->loan_amount;
        $payment->save();
        $customer_id = $request->input('customer_id');

        \DB::table('customers')->where('id',$customer_id)->decrement('loan_amount',$request->paid_amount);
        \DB::table('customers')->where('id',$customer_id)->increment('paid_amount',$request->paid_amount);


        return redirect(route('customer.index'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $customer_id = \DB::table('customer_payments')->where('id',$id)->value('customer_id');
        $paid_amount = \DB::table('customer_payments')->where('id',$id)->value('paid_amount');
        $cspaid= \DB::table('customers')->where('id',$customer_id)->decrement('paid_amount',$paid_amount);
        $csloan= \DB::table('customers')->where('id',$customer_id)->increment('loan_amount',$paid_amount);
        $del = CustomerPayment::findorfail($id);
        $del->delete();
        return redirect()->back();

 }
}
