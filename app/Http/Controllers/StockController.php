<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendorlist;
use App\Stock;
use App\Item;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $stocks = Stock::with('vendor')->latest()->get();
      $items = Item::with('vendor')->latest()->get();
      return view ('stock.stocklist',compact('stocks','items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $vendor = Vendorlist::all();
      $items = Item::with('vendor')->get();
      return view ('stock.addtostock',compact('vendor','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $stock = new Stock;
      $stock->vendor_id=$request->vendor_id;
      $stock->item=$request->item;
      $stock->quantity=$request->quantity;
      $stock->date=$request->date;
      $stock->carnumber=$request->carnumber;
      $stock->mazdori_price=$request->mazdori_price;
      $stock->total_mazdori=$request->total_mazdori;
      $stock->bill_number=$request->bill_number;
        $stock->persiandate=$request->persian_date;
      $stock->carrent=$request->carrent;
        $stock->monshiana=$request->monshiana;
        $stock->kanta=$request->kanta;
        $stock->sharwalli=$request->sharwalli;
        $stock->kaldarrent=$request->kaldarrent;
        $stock->rate=$request->rate;
        $stock->save();
      return redirect(route('stock.index'));
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
        $edit =Stock::findorfail($id);
        return view('stock.editstock',compact('edit'));
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
        $stock = Stock::findorfail($id);
        $stock->item=$request->item;
        $stock->quantity=$request->quantity;
        $stock->date=$request->date;
        $stock->carnumber=$request->carnumber;
        $stock->mazdori_price=$request->mazdori_price;
        $stock->total_mazdori=$request->total_mazdori;
        $stock->bill_number=$request->bill_number;
        $stock->persiandate=$request->persian_date;
        $stock->carrent=$request->carrent;
        $stock->monshiana=$request->monshiana;
        $stock->kanta=$request->kanta;
        $stock->sharwalli=$request->sharwalli;
        $stock->kaldarrent=$request->kaldarrent;
        $stock->rate=$request->rate;
        $stock->save();
        return redirect(route('stock.index'));
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
        $del = Stock::findorfail($id);
        $del->delete();
        return redirect(route('stock.index'));
    }
}
