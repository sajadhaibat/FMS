<?php

namespace App\Http\Controllers;

use App\BuyandSale;
use App\BuyandSaleCustomers;
use App\Customer;
use App\CustomerSales;
use Illuminate\Http\Request;

class BuyandSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer_id = \DB::table('customers')->where('name','=','دوکان')->value('id');
        $malls = CustomerSales::where('customer_id',$customer_id)->latest()->get();
        $customers= BuyandSaleCustomers::latest()->get();
        $css = Customer::latest()->get();
        return view ('kharidofrosh.kharidofrosh',compact('malls','customers','css'));
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
        $buysale = new BuyandSale;
        $buysale->buyandsalecustomer_id=$request->customer_id;
        $buysale->customersale_id=$request->sale_id;
        $buysale->quantity=$request->quantity;
        $buysale->date=$request->date;
        $buysale->persiandate=$request->persian_date;

        $buysale->save();

        $sale_id = $request->input('sale_id');
        \DB::table('customer_sales')->where('id',$sale_id)->increment('sold',$request->quantity);
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
        $customersale_id = \DB::table('buyand_sales')->where('id',$id)->value('customersale_id');
        $quantity = \DB::table('buyand_sales')->where('id',$id)->value('quantity');
        $decrement =  \DB::table('customer_sales')->where('id',$customersale_id)->decrement('sold',$quantity);

        $del = BuyandSale::findorfail($id);
        $del->delete();
        return redirect()->back();
    }
}
