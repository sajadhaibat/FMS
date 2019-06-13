<?php

namespace App\Http\Controllers;

use App\BuyandSaleOtherCustomer;
use Illuminate\Http\Request;

class BuyandSaleOtherCustomersController extends Controller
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
        $sale_id = $request->input('sale_id');
        $csale_id=\DB::table('customer_sales')->where('id',$sale_id)->value('stock_id');
        $customersales = new BuyandSaleOtherCustomer;
        $customersales->customer_id=$request->customer_id;
        $customersales->stock_id=$csale_id;
        $customersales->customersale_id=$request->sale_id;
        $customersales->customer_quantity=$request->customer_quantity;
        $customersales->price_per_item=$request->price_per_item;
        $customersales->total_price=$request->total_price;
        $customersales->paid_amount=$request->paid_amount;
        $customersales->loan_amount=$request->loan_amount;
        $customersales->date=$request->date;
        $customersales->persiandate=$request->persian_date;
        $customersales->save();

        $customer_id = $request->input('customer_id');
        \DB::table('customers')->where('id',$customer_id)->increment('loan_amount',$request->loan_amount);
        \DB::table('customers')->where('id',$customer_id)->increment('paid_amount',$request->paid_amount);
        \DB::table('customer_sales')->where('id',$sale_id)->increment('sold',$request->customer_quantity);


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
        $customer_id = \DB::table('buyand_sale_other_customers')->where('id',$id)->value('customer_id');
        $sale_id = \DB::table('buyand_sale_other_customers')->where('id',$id)->value('customersale_id');

       // $stock_id = \DB::table('customer_sales')->where('id',$id)->value('stock_id');
        $quantity = \DB::table('buyand_sale_other_customers')->where('id',$id)->value('customer_quantity');

        $paid_amount = \DB::table('buyand_sale_other_customers')->where('id',$id)->value('paid_amount');

        $loan_amount = \DB::table('buyand_sale_other_customers')->where('id',$id)->value('loan_amount');

        \DB::table('customers')->where('id',$customer_id)->decrement('loan_amount',$loan_amount);
        \DB::table('customers')->where('id',$customer_id)->decrement('paid_amount',$paid_amount);
        \DB::table('customer_sales')->where('id',$sale_id)->decrement('sold',$quantity);

        $del = BuyandSaleOtherCustomer::findorfail($id);
        $del->delete();
        return redirect()->back();
    }
}
