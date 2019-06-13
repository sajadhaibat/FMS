<?php

namespace App\Http\Controllers;

use App\AdvanceSalary;
use App\Bill;
use App\BuyandSale;
use App\BuyandSaleOtherCustomer;
use App\BuyandSalePayment;
use App\ExchangerPayment;
use App\PaymentToExchanger;
use App\Salary;
use App\Staff;
use App\VendorPayment;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Customer;
use App\CustomerSales;
use App\CustomerPayment;
use App\Stock;
use App\Vendorlist;
use App\User;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }

public function index(){

  $countcustomers = Customer::all()->count();
  $countvendors = Vendorlist::all()->count();
    $ex_averages = DB::table('exchanger_payments')->avg('rate');
    $ven_averages = DB::table('bills')->avg('todaykaldar');
  $total_loan_amount = DB::table('customers')->sum('loan_amount');
    $total_loan_ex = DB::table('exchanges')->sum('our_paid_amount');
    $total_loan_ex_af = DB::table('exchanges')->sum('ex_afghani_amount');
    $total_commission = DB::table('bills')->sum('commission');
    $total_monshiana = DB::table('bills')->sum('monshiana');
    $total_mazdori = DB::table('stocks')->sum('total_mazdori');
    $ven_loan1 = DB::table('vendorlists')->whereRaw('kaldar_payment > kaldar_paid_amount')->sum('kaldar_payment');
   $ven_loan2 = DB::table('vendorlists')->whereRaw('kaldar_payment > kaldar_paid_amount')->sum('kaldar_paid_amount');
   $our_loan_ven1 = DB::table('vendorlists')->whereRaw('kaldar_payment < kaldar_paid_amount')->sum('kaldar_payment');
    $our_loan_ven2= DB::table('vendorlists')->whereRaw('kaldar_payment < kaldar_paid_amount')->sum('kaldar_paid_amount');
    $bills = Bill::count();


    $csp = DB::table('customers')->sum('paid_amount');
    $outcsp = DB::table('buyand_sale_customers')->sum('paid_amount');
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

    $available_afghani = ($csp + $outcsp)  - $maz - $kanta - $sharwalli - $our_pay_to_ex - $exp - $salary - $adv;
    $available_kaldar =  ($ex_pay + $rent_monshiana ) - $venp - $rent;

    $ex_loan = $total_loan_ex - $total_loan_ex_af;
    $avg = $ven_averages - $ex_averages;

    $ven_loan = $ven_loan1 - $ven_loan2;
    $our_loan_ven = $our_loan_ven1 - $our_loan_ven2;
  return view('index',compact('countcustomers','countvendors','bills','total_loan_amount','total_commission','total_monshiana','available_afghani','available_kaldar','avg','ex_loan','total_mazdori','ven_loan','our_loan_ven'));
}



 public function singlecustomerrecords($id){

  $sales = CustomerSales::whereHas('customer',function($query) use($id){
    $query->where('customer_id',$id);

  })->with('stock')->get();
     $othersales = BuyandSaleOtherCustomer::whereHas('customer',function($query) use($id){
         $query->where('customer_id',$id);
     })->with('stock')->latest()->get();

  $total_loan_amount = Customer::where('id', $id)->first();

  $payments = CustomerPayment::whereHas('customer',function($query) use($id){
    $query->where('customer_id',$id);
  })->get();

  return view ('customer.singlecustomerrecords',compact('sales','total_loan_amount','customer_name','payments','othersales'));

}

 public function getloanamount(Request $request){

  //$total_loan_amount = DB::table('customers')->select('loan_amount')->where('id',$request->id)->get();
     $total_loan_amount = DB::table('customers')->where('id',$request->id)->value('loan_amount');

     return response()->json($total_loan_amount);

}
    public function getadvanceamount(Request $request){

        $total_advance_amount = DB::table('staff')->where('id',$request->id)->value('advance');

        return response()->json($total_advance_amount);

    }


    public function getvendorpaidamount(Request $request){

        //$total_loan_amount = DB::table('customers')->select('loan_amount')->where('id',$request->id)->get();

        $paid_amount = DB::table('vendorlists')->where('id',$request->id)->value('kaldar_paid_amount');
        $our = DB::table('vendorlists')->where('id',$request->id)->value('kaldar_payment');
        $loan_amount = $our - $paid_amount;

        return response()->json($loan_amount);

    }


public function singlevendorrecords($id){

 $vendors = Stock::whereHas('vendor',function($query) use($id){
   $query->where('vendor_id',$id);
 })->latest()->get();
 $payments = VendorPayment::whereHas('vendor',function($query) use($id){
     $query->where('vendor_id',$id);
 })->latest()->get();

    return view ('vendor.singlevendorrecords',compact('vendors','payments'));

}


    public function singlestaffrecords($id){

        $salaries = Salary::whereHas('staff',function($query) use($id){
            $query->where('staff_id',$id);
        })->latest()->get();
        $advances = AdvanceSalary::whereHas('staff',function($query) use($id){
            $query->where('staff_id',$id);
        })->latest()->get();
        return view ('staff.singlestaffrecords',compact('salaries','advances'));

    }

    public function singlestockrecords($id){

        $sales = CustomerSales::whereHas('customer',function($query) use($id){
            $query->where('stock_id',$id);
        })->latest()->get();
        return view ('stock.singlestockrecords',compact('sales'));

    }



public function generatebill($id){

  $stocks = Stock::with('vendor','customersales')->where('id', $id)->get();

  return view ('stock.generatebill',compact('stocks'));

}

public function aboutus(){

  return view ('aboutus');

}

public function changepassword(){

  return view ('changepassword');

}


public function newpassword(){

  $user = User::find(Auth::user()->id);

  if(Hash::check(Input::get('passwordold'), $user['password']) && Input::get('password') == Input::get('confirmpassword')){

    $user->password = bcrypt(Input::get('password'));
      $user->save();
      return redirect (url('/'));

  }
  else {
    return "not changed";
  }

}
    public function contactus(Request $request){
        Mail::send('email',['name'=>$request->name,'email'=>$request->email,'subject'=>$request->subject,'jan'=>$request->message],function ($mail) use($request){
            $mail->from($request->email,$request->name);
            $mail->to('info@devzoneict.com','FMS');
        });
        Session::flash('success_message','Thanks for sending us message we will get to you soon!');
        return redirect('/');

    }
    public function singlebill($id){

        $bills = Bill::where('id',$id)->get();
        return view('bill.singlebill',compact('bills'));


    }
    public function singlevendorbills($id){

        $bills = Bill::where('vendor_id',$id)->latest()->get();
        return view('vendor.vendorbills',compact('bills'));

    }





    public function pdf(){

        return view('bill.singlebill');
    }


        public function export_pdf($id)
        {


            view()->share('bills',DB::table('bills')->where('id' , $id)->get());
//
            $pdf = PDF::loadView('bill.singlebill');
            return $pdf->download('search_result.pdf');

       //     $pdf = PDF::loadView('billpdf');
           // return view('billpdf',compact('th'));
//            $data = Bill::where('id', $id)->first();
//          //  dd($data);
//
//            $pdf = PDF::loadview('billpdf', $data);
////
//            //$pdf->save(storage_path().'_filename.pdf');
//            return $pdf->download('customers');
        }

    public function singleexchangerrecords($id){

        $payments = ExchangerPayment::whereHas('exchange',function($query) use($id){
            $query->where('exchange_id',$id);
        })->latest()->get();

        $ourpayments = PaymentToExchanger::whereHas('exchange',function($query) use($id){
            $query->where('exchange_id',$id);
        })->latest()->get();
        return view ('exchange.singleexchangerrecords',compact('payments','ourpayments'));

    }


        public function average(){

            $exchanger_rates = ExchangerPayment::latest()->get();
            $vendors_rate= Bill::latest()->get();
            $ex_averages = DB::table('exchanger_payments')->avg('rate');
            $ven_averages = DB::table('bills')->avg('todaykaldar');

            return view('average',compact('ex_averages','ven_averages','vendors_rate','exchanger_rates'));
        }
    public function getaverage(Request $request){

      $fromdate = $request->input('fromdate');
        $todate = $request->input('todate');
        $ven_averages = DB::table('bills')->whereBetween('created_at',[$fromdate , $todate])->avg('todaykaldar');
        $ex_averages = DB::table('exchanger_payments')->whereBetween('created_at',[$fromdate , $todate])->avg('rate');

        $average = $ven_averages - $ex_averages;
        dd($average);

        //$articles = KhachHang::all()->whereBetween('CreateDate', [$start, $end])->get();

        return view('average',compact('k'));
    }

    public function invoice($id){

        $bills = Bill::where('vendor_id',$id)->latest()->paginate(15);
        return view ('vendor.invoices',compact('bills'));
    }

    public function singleshopsales($id){

        $sales = BuyandSale::whereHas('buyandsalecustomer',function($query) use($id){
            $query->where('customersale_id',$id);
        })->latest()->get();

          $othersales = BuyandSaleOtherCustomer::whereHas('customer',function($query) use($id){
            $query->where('customersale_id',$id);
        })->latest()->get();
        return view ('kharidofrosh.singleshopsales',compact('sales','othersales'));

    }

    public function singlebuyandsalerecords($id){

        $sales = BuyandSale::whereHas('buyandsalecustomer',function($query) use($id){
            $query->where('buyandsalecustomer_id',$id);
        })->latest()->get();


        $payments = BuyandSalePayment::whereHas('buyandsalecustomer',function($query) use($id){
            $query->where('buyandsalecustomer_id',$id);
        })->latest()->get();
        return view ('kharidofrosh.singlebuyandsalerecords',compact('sales','payments'));

    }

}
