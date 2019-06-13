<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use Illuminate\Support\Facades\DB;


class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bills = Bill::with('stock')->latest()->get();
      $total_commission = DB::table('bills')->sum('commission');
        $total_mazdori = DB::table('stocks')->sum('total_mazdori');
        $total_monshiana = DB::table('bills')->sum('monshiana');
      return view ('bill.bills',compact('bills','total_commission','total_monshiana','total_mazdori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $bills = new Bill;
      $bills->stock_id=$request->stock_id;
      $bills->vendor_id=$request->vendor_id;
    //  $stock->vendor_id=$request->vendor_name->id;
      $bills->commissionpercentage=$request->commissionpercentage;
      $bills->commission=$request->commission;
      $bills->mercenary=$request->mazdori;
      $bills->monshiana=$request->monshiana;
      $bills->market_fee=$request->marketfee;
      $bills->total_spent=$request->totalspent;
      $bills->total_spent=$request->totalspent;
      $bills->kham_afghani=$request->khamafghani;
      $bills->pakha_afghani=$request->pakhaafghani;
      $bills->todaykaldar=$request->todaykaldar;
      $bills->pakha_kaldar=$request->pakhakaldar;
      $bills->save();
        $vendor_id = $request->input('vendor_id');
        \DB::table('vendorlists')->where('id',$vendor_id)->increment('paid_amount',$request->pakhaafghani);
        \DB::table('vendorlists')->where('id',$vendor_id)->increment('kaldar_paid_amount',$request->pakhakaldar);

        return redirect(route('bill.index'));
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
        $vendor_id = \DB::table('bills')->where('id',$id)->value('vendor_id');
        $pakha_afghani = \DB::table('bills')->where('id',$id)->value('pakha_afghani');
        $pakha_kaldar = \DB::table('bills')->where('id',$id)->value('pakha_kaldar');
        $vendor= \DB::table('vendorlists')->where('id',$vendor_id)->decrement('kaldar_paid_amount',$pakha_kaldar);
        $vafghani= \DB::table('vendorlists')->where('id',$vendor_id)->decrement('paid_amount',$pakha_afghani);
        $del = Bill::findorfail($id);
        $del->delete();
        return redirect(route('vendor.index'));



    }
}
