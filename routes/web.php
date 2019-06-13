<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/','PageController@index' );
Route::get('aboutus','PageController@aboutus');

Route::resource('vendor','VendorController');
Route::resource('customer','CustomerController');
Route::resource('stock','StockController');
Route::resource('customersales','CustomerSalesController');
Route::resource('item','ItemController');
Route::resource('customerpayment','CustomerPaymentController');
Route::resource('bill','BillController');
Route::resource('profile','ProfileController');
Route::resource('staff','StaffController');
Route::resource('salary','SalaryController');
Route::resource('expenses','DailyExpensesController');
Route::resource('vendorpayment','VendorPaymentController');
Route::resource('exchange','ExchangeController');
Route::resource('exchangerpayment','ExchangerPaymentController');
Route::resource('paymenttoexchanger','PaymentToExchangerController');
Route::resource('advance','AdvanceSalaryController');
Route::resource('buyandsalecustomers','BuyandSaleCustomerController');
Route::resource('buyandsale','BuyandSaleController');
Route::resource('buyandsalepayment','BuyandSalePaymentController');
Route::resource('buyandsaleothercustomer','BuyandSaleOtherCustomersController');


Route::get('bill/pdf/','PageController@export_pdf');
Route::get('billpdf','PageController@pdf');
Route::get('singlecustomerrecords/{id}','PageController@singlecustomerrecords');
Route::get('singlestaffrecords/{id}','PageController@singlestaffrecords');
Route::get('getloanamount','PageController@getloanamount');
Route::get('getvendorpaidamount','PageController@getvendorpaidamount');
Route::get('getadvanceamount','PageController@getadvanceamount');
Route::get('singlevendorbills/{id}','PageController@singlevendorbills')->name('singlevendorbills');

Route::get('singlevendorrecords/{id}','PageController@singlevendorrecords');
Route::get('singleexchangerrecords/{id}','PageController@singleexchangerrecords');
Route::get('singlestockrecords/{id}','PageController@singlestockrecords');
Route::get('singlebill/{id}','PageController@singlebill');

Route::get('generatebill/{id}','PageController@generatebill');
Route::get('changepassword','PageController@changepassword');
Route::post('newpassword','PageController@newpassword')->name('newpassword');
Route::get('contact_us','PageController@contactus');
Route::get('average','PageController@average');
Route::get('getaverage','PageController@getaverage');
Route::get('invoice/{id}','PageController@invoice');
Route::get('singleshopsales/{id}','PageController@singleshopsales');
Route::get('singlebuyandsalerecords/{id}','PageController@singlebuyandsalerecords');
Route::get('count','PageController@count');




