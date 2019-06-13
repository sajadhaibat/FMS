<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Add New Customer Payment
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->

@include('links')
    <link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">

    {{--<link rel="stylesheet" href="{{asset('demo.css')}}" />--}}
    <link rel="stylesheet" href="{{asset('dist/jquery.md.bootstrap.datetimepicker.style.css')}}" />

</head>

<body class="fixed-left">
<!-- Loader -->


<!-- Begin page -->

<div id="wrapper">
<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
<!-- LOGO -->

<div class="topbar-left">

<div class="">
<!--<a href="index.html" class="logo text-center">Admiria</a>--> <a href="{{ url('/') }}" class="logo"><img src="{{asset('images/logo-sm.png') }}" height="36" alt="logo"></a>
</div>


</div>
@include('menue')

<!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
<!-- Start right Content here -->

<div class="content-page">
<!-- Start content -->

<div class="content">
<!-- Top Bar Start -->

@include('header')
<!-- Page title -->
<ul class="list-inline menu-left mb-0">
<li class="list-inline-item"><button type="button" class="button-menu-mobile open-left waves-effect"><i class="ion-navicon"></i></button></li>
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Add New Customer Payment</h3></li>
</ul>

<div class="clearfix">
</div>
</div>
<!-- Top Bar End -->
<!-- ==================
                         PAGE CONTENT START
                         ================== -->

<div class="page-content-wrapper">

<div class="container-fluid">

<div class="row">

<div class="col-md-8 m-auto">

<div class="card m-b-20">

<div class="card-body"><h4 class="mt-0 header-title">Add New Customer Payment</h4>

<p class="text-muted m-b-30 font-14">You can add new customer payments from here</p>

<form class="" action="{{route('customerpayment.store')}}" enctype="multipart/form-data" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />


<div class="form-group row">
<label for="customer_id" class="col-sm-2 col-form-label">Customer Name
</label>

<div class="col-sm-10">
<select class="custom-select select2 customer" name="customer_id" id="customer_id" required>
<option  selected disabled>Select</option>
@foreach ($customer_names as $customer_name )

  <option value="{{ $customer_name->id }}">{{ $customer_name->name }}</option>

@endforeach


</select>
</div>
</div>


<div class="form-group row">
<label for="example-number-input" class="col-sm-2 col-form-label ">Total Loan Amount
</label>

<div class="col-sm-10">
<input class="form-control customer" type="number" placeholder="Customer Total Loan Amount" id="loan_amount" name="loan_amount" readonly="readonly" required>
</div>
</div>

<div class="form-group row">
<label for="example-number-input" class="col-sm-2 col-form-label">Paid Amount
</label>

<div class="col-sm-10">
<input class="form-control" type="number" placeholder="New Paid Amount" id="paid_amount" name="paid_amount" required>
</div>
</div>


<div class="form-group row">
<label for="example-number-input" class="col-sm-2 col-form-label">New Loan Amount
</label>

<div class="col-sm-10">
<input class="form-control" type="number" placeholder="New Loan Amount" id="new_loan_amount" name="new_loan_amount" readonly required>
</div>
</div>

<div class="form-group row">
<label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date
</label>

<div class="col-sm-10">
<input class="form-control" type="date" value="2019-02-19" id="example-datetime-local-input" name="date" required>
</div>
</div>
    <div class="form-group row">

        <label for="inputDate4" class="col-sm-2 col-form-label">Persian Date
        </label>
        <div class="col-sm-10">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text cursor-pointer" id="date4">Icon</span>
                </div>
                <input type="text" id="inputDate4" class="form-control" placeholder="تاریخ را انتخاب نمایید" aria-label="date4"
                       aria-describedby="date4" name="persian_date" required>
            </div>
        </div>
        <div class="col-sm-6" style="display: none">

            <div class="input-group" >
                <div class="input-group-prepend">
                    <span class="input-group-text cursor-pointer" id="date5">Icon</span>
                </div>
                <input type="text" id="inputDate5" class="form-control" placeholder="To Date" aria-label="date5"
                       aria-describedby="date5">
            </div>
        </div>
    </div>

<br>

<div class="form-group text-center">

<div><button type="submit" class="btn btn-outline-warning waves-effect waves-light m-r-5">Save</button>
   <button type="reset" class="btn btn-outline-warning waves-effect">Cancel</button>
</div>
</div>

</form>

</div>
</div>
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- container -->
</div>
<!-- Page content Wrapper -->
</div>
<!-- content -->
@include('footer')

</div>
<!-- End Right content here -->

</body>
<!-- END wrapper -->
<!-- jQuery  -->
<script src="{{asset('js/jquery.min.js')}}">
</script>
<script src="{{asset('js/popper.min.js')}}">
</script>
<!-- Popper for Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}">
</script>
<script src="{{asset('js/modernizr.min.js')}}">
</script>
<script src="{{asset('js/jquery.slimscroll.js')}}">
</script>
<script src="{{asset('js/waves.js')}}">
</script>
<script src="{{asset('js/jquery.nicescroll.js')}}">
</script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}">
</script>
<!-- Plugins js -->
<script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}">
</script>
<script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}">
</script>
<script src="{{asset('plugins/select2/js/select2.min.js')}}" type="text/javascript">
</script>
<script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript">
</script>

<script src="{{asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript">
</script>
<!-- Plugins Init js -->
<script src="{{asset('pages/form-advanced.js')}}">
</script>
<!-- App js -->
<script src="{{asset('js/app.js')}}">
</script>



<script>
$(document).ready(function(){

$(document).on('change','.customer',function(){

  var customer_id =$(this).val();
    console.log("hummm loooooo"+ customer_id);
    $.ajax({
      type:'get',
      url:'{!!URL::to('getloanamount')!!}',
      data:{'id':customer_id},
      success:function(data){

      //  console.log('success');
        console.log(data);
        $('#loan_amount').val(data);

      },
      error:function(){

      }
    });
});
});
</script>

<script>
$("document").ready(function(){
    $('#paid_amount').on('input',function(e){
        $('#new_loan_amount').val( $('#loan_amount').val() - $('#paid_amount').val());
    });
});
</script>
<script src="{{asset('src/jquery.md.bootstrap.datetimepicker.js')}}" type="text/javascript"></script>
<!-- <script src="../dist/jquery.md.bootstrap.datetimepicker.js" type="text/javascript"></script> -->

<script type="text/javascript">
    $('#date1').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate1',
        targetDateSelector: '#inputDate1-1',
        dateFormat: 'yyyy-MM-dd',
        isGregorian: false,
        enableTimePicker: true,
        disableBeforeToday: true,
        disabledDates: [new Date(), new Date(2018, 9, 11), new Date(2018, 9, 12), new Date(2018, 9, 13), new Date(2018, 9, 14)]
    });

    $('#date2').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate2',
        selectedDate: new Date('2018/9/30'),
        isGregorian: true
    });

    $('#date3').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate3',
        monthsToShow: [1, 1]
    });
    $('#date3-1').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate3-1',
        monthsToShow: [1, 1],
        rangeSelector: true
    });

    $('#date4').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate4',
        fromDate: true,
        groupId: 'rangeSelector1'
    });
    $('#date5').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate5',
        toDate: true,
        groupId: 'rangeSelector1',
        placement: 'top'
    });
    $('#date6').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate6',
        inLine: true,
        rangeSelector: true
    });
</script>
<!-- Mirrored from themesbrand.com/admiria/layouts/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Dec 2018 02:54:49 GMT -->

</html>
