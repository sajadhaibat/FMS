<?php

namespace App\Http\Controllers;

use App\AdvanceSalary;
use Illuminate\Http\Request;

class AdvanceSalaryController extends Controller
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
        $advance = new AdvanceSalary;
        $advance->staff_id = $request->staff_id;
        $advance->amount = $request->amount;
        $advance->date = $request->date;
        $advance->persiandate = $request->persian_date;
        $advance->save();
        $staff_id = $request->input('staff_id');
        \DB::table('staff')->where('id',$staff_id)->increment('advance',$request->amount);
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
        $staff_id = \DB::table('advance_salaries')->where('id',$id)->value('staff_id');
        $paid = \DB::table('advance_salaries')->where('id',$id)->value('amount');
       $ad = \DB::table('staff')->where('id',$staff_id)->decrement('advance',$paid);
        $del = AdvanceSalary::findorfail($id);
        $del->delete();
        return redirect(route('staff.index'));

    }
}
