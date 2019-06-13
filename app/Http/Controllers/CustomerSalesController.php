<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Vendorlist;
use App\Stock;
use App\Item;
use App\CustomerSales;
class CustomerSalesController extends Controller
{

    public function index()
    {
        return 123;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    //    $available = Stock::whereHas('vendors',function ($query) use ($vendors){
      //      $query->where('quantity',);
    //    })->get();
      $vendors = Vendorlist::all();
      $stocks = \DB::select("SELECT * FROM `stocks` WHERE quantity > sold");

      $customers = Customer::all();
      return view ('customer.customersales',compact('customers','vendors','stocks'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $customersales = new CustomerSales;
      $customersales->customer_id=$request->customer_id;
      $customersales->stock_id=$request->itemquantity;
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

        $stock_id = $request->input('itemquantity');

       // dd($request->itemquantity);

        \DB::table('stocks')->where('id',$stock_id)->increment('sold',$request->customer_quantity);

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
        $customer_id = \DB::table('customer_sales')->where('id',$id)->value('customer_id');
        $stock_id = \DB::table('customer_sales')->where('id',$id)->value('stock_id');
        $quantity = \DB::table('customer_sales')->where('id',$id)->value('customer_quantity');
        $paid_amount = \DB::table('customer_sales')->where('id',$id)->value('paid_amount');
        $loan_amount = \DB::table('customer_sales')->where('id',$id)->value('loan_amount');

        $stock= \DB::table('stocks')->where('id',$stock_id)->decrement('sold',$quantity);
        $cspaid= \DB::table('customers')->where('id',$customer_id)->decrement('paid_amount',$paid_amount);
        $csloan= \DB::table('customers')->where('id',$customer_id)->decrement('loan_amount',$loan_amount);
        $del = CustomerSales::findorfail($id);
        $del->delete();
        return redirect(route('customer.index'));

    }
}
