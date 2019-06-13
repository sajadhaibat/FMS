<?php

namespace App\Http\Controllers;

use App\PaymentToExchanger;
use Illuminate\Http\Request;

class PaymentToExchangerController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paytoexchanger = new PaymentToExchanger;
        $paytoexchanger->exchange_id = $request->exchanger_id;
        $paytoexchanger->paid_amount = $request->paid_amount;
        $paytoexchanger->date = $request->date;
        $paytoexchanger->persiandate = $request->persian_date;
        $paytoexchanger->save();
        $exchange_id = $request->input('exchanger_id');
        \DB::table('exchanges')->where('id',$exchange_id)->increment('our_paid_amount',$request->paid_amount);
        return redirect()->back();

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

        $exchanger_id = \DB::table('payment_to_exchangers')->where('id',$id)->value('exchange_id');
        $afghani_pay = \DB::table('payment_to_exchangers')->where('id',$id)->value('paid_amount');
        $dec =  \DB::table('exchanges')->where('id',$exchanger_id)->decrement('our_paid_amount',$afghani_pay);

        $del = PaymentToExchanger::findorfail($id);
        $del->delete();
        return redirect(route('exchange.index'));
    }
}
