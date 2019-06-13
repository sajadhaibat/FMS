<?php

namespace App\Http\Controllers;

use App\DailyExpense;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailyExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = Staff::all();
        $expenses = DailyExpense::latest()->get();

        $csp = DB::table('customers')->sum('paid_amount');
        $maz = DB::table('stocks')->sum('total_mazdori');
        $kanta = DB::table('stocks')->sum('kanta');
        $sharwalli = DB::table('stocks')->sum('sharwalli');
        $our_pay_to_ex = DB::table('exchanges')->sum('our_paid_amount');
        $exp = DB::table('daily_expenses')->sum('money_amount');
        $salary = DB::table('salaries')->sum('salary_quantity');
        $adv = DB::table('staff')->sum('advance');


        $ex_pay = DB::table('exchanges')->sum('ex_paid_amount');
        $rent_monshiana = DB::table('stocks')->sum('monshiana');
        $venp = DB::table('vendorlists')->sum('kaldar_payment');
        $rent = DB::table('stocks')->sum('kaldarrent');

        $available_afghani = $csp - $maz - $kanta - $sharwalli - $our_pay_to_ex - $exp - $salary - $adv;

        $available_kaldar =  ($ex_pay + $rent_monshiana ) - $venp - $rent;


        return view ('staff.expenses',compact('staffs','expenses','available_afghani','available_kaldar'));
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
        $expenses = new DailyExpense;
        $expenses->staff_id = $request->staff_id;
        $expenses->money_amount = $request->money_amount;
        $expenses->reason = $request->reason;
        $expenses->date = $request->date;
        $expenses->persiandate = $request->persian_date;
        $expenses->save();
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
        $del = DailyExpense::findorfail($id);
        $del->delete();
        return redirect()->back();
    }
}
