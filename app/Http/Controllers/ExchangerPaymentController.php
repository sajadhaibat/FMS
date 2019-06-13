<?php

namespace App\Http\Controllers;

use App\ExchangerPayment;
use Illuminate\Http\Request;

class ExchangerPaymentController extends Controller
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
        $payment = new ExchangerPayment;
        $payment->exchange_id = $request->exchanger_id;
        $payment->ex_paid_amount = $request->ex_paid_amount;
        $payment->rate = $request->rate;
        $payment->afghani = $request->afghani;
        $payment->date = $request->date;
        $payment->persiandate = $request->persian_date;
        $payment->save();
        $exchanger_id = $request->input('exchanger_id');
        \DB::table('exchanges')->where('id',$exchanger_id)->increment('ex_paid_amount',$request->ex_paid_amount);
        \DB::table('exchanges')->where('id',$exchanger_id)->increment('ex_afghani_amount',$request->afghani);

        return redirect(route('exchange.index'));



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
        $exchanger_id = \DB::table('exchanger_payments')->where('id',$id)->value('exchange_id');
        $paid = \DB::table('exchanger_payments')->where('id',$id)->value('ex_paid_amount');
        $afghani_pay = \DB::table('exchanger_payments')->where('id',$id)->value('afghani');

        $kal=\DB::table('exchanges')->where('id',$exchanger_id)->decrement('ex_paid_amount',$paid);
        $afg= \DB::table('exchanges')->where('id',$exchanger_id)->decrement('ex_afghani_amount',$afghani_pay);

        $del = ExchangerPayment::findorfail($id);
        $del->delete();
        return redirect(route('exchange.index'));
    }
}
