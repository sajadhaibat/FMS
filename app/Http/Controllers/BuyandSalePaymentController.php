<?php

namespace App\Http\Controllers;

use App\BuyandSalePayment;
use Illuminate\Http\Request;

class BuyandSalePaymentController extends Controller
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
        //
        $buysale = new BuyandSalePayment;
        $buysale->buyandsalecustomer_id=$request->customer_id;
        $buysale->total_amount=$request->total_amount;
        $buysale->paid_amount=$request->paid_amount;
        $buysale->description=$request->description;
        $buysale->date=$request->date;
        $buysale->persiandate=$request->persian_date;

        $buysale->save();

        $customer_id = $request->input('customer_id');
        \DB::table('buyand_sale_customers')->where('id',$customer_id)->increment('total_amount',$request->total_amount);
        \DB::table('buyand_sale_customers')->where('id',$customer_id)->increment('paid_amount',$request->paid_amount);

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
        $buyandsalecustomer_id = \DB::table('buyand_sale_payments')->where('id',$id)->value('buyandsalecustomer_id');

        $total_amount = \DB::table('buyand_sale_payments')->where('id',$id)->value('total_amount');
        $paid_amount = \DB::table('buyand_sale_payments')->where('id',$id)->value('paid_amount');

        $decrement =  \DB::table('buyand_sale_customers')->where('id',$buyandsalecustomer_id)->decrement('total_amount',$total_amount);
        $decrement1 =  \DB::table('buyand_sale_customers')->where('id',$buyandsalecustomer_id)->decrement('paid_amount',$paid_amount);

        $del = BuyandSalePayment::findorfail($id);
        $del->delete();
        return redirect()->back();
    }
}
