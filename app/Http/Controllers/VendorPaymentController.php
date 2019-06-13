<?php

namespace App\Http\Controllers;

use App\Vendorlist;
use App\VendorPayment;
use Illuminate\Http\Request;

class VendorPaymentController extends Controller
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
        $vendor_names = Vendorlist::all();
        return view ('vendor.vendorpayments',compact('vendor_names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vendor_payment = new VendorPayment;
        $vendor_payment->vendor_id=$request->vendor_id;
        $vendor_payment->loan_amount=$request->loan_amount;
        $vendor_payment->new_paid_amount=$request->new_pay_amount;
        $vendor_payment->rate=$request->rate;
        $vendor_payment->new_loan_amount=$request->new_loan_amount_kaldar;
        $vendor_payment->afghani_pay_amount=$request->new_loan_amount;
        $vendor_payment->description=$request->description;
        $vendor_payment->date=$request->date;
        $vendor_payment->persiandate=$request->persian_date;
        $vendor_payment->save();
        $vendor_id = $request->input('vendor_id');
        \DB::table('vendorlists')->where('id',$vendor_id)->increment('kaldar_payment',$request->new_pay_amount);
        \DB::table('vendorlists')->where('id',$vendor_id)->increment('our_paid_amount',$request->new_loan_amount);

        return redirect(route('vendor.index'));
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
        //
        $vendor_id = \DB::table('vendor_payments')->where('id',$id)->value('vendor_id');
        $paid = \DB::table('vendor_payments')->where('id',$id)->value('new_paid_amount');
        $afghani_pay = \DB::table('vendor_payments')->where('id',$id)->value('afghani_pay_amount');

        $vendor= \DB::table('vendorlists')->where('id',$vendor_id)->decrement('kaldar_payment',$paid);
        $vafgh= \DB::table('vendorlists')->where('id',$vendor_id)->decrement('our_paid_amount',$afghani_pay);

        $del = VendorPayment::findorfail($id);
        $del->delete();
        return redirect(route('vendor.index'));
    }
}
