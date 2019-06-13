<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Add New mall to Stock
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->

@include('links')

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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Add New Mall to Stock</h3></li>
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

<div class="col-12">

<div class="card m-b-20">

<div class="card-body"><h4 class="mt-0 header-title">Add New Mall</h4>

<p class="text-muted m-b-30 font-14">You can add new  malls to stock from here </p>

<form class="" action="{{route('stock.store')}}" enctype="multipart/form-data" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />


<div class="form-group row">
<label for="1" class="col-sm-2 col-form-label">Vendor List
</label>

<div class="col-sm-10">
<select class="custom-select" name="vendor_id" id="1" required>
<option selected disabled>Select</option>

@foreach ($vendor as $ven)
<option value="{{ $ven->id }}">{{$ven->name}}</option>
@endforeach
</select>
</div>
</div>

<div class="form-group row">
<label for="item" class="col-sm-2 col-form-label">Items
</label>

<div class="col-sm-10">
<select class="custom-select" id="item" name="item" required>
<option selected disabled>Select</option>

@foreach ($items as $item)
<option>{{$item->item}}</option>
@endforeach
</select>
</div>
</div>

<div class="form-group row">
<label for="example-number-input" class="col-sm-2 col-form-label" >Quantity
</label>

<div class="col-sm-10">
<input class="form-control" type="number" required placeholder="Number of Items" id="quantity" name="quantity">
</div>
</div>

    <div class="form-group row">
        <label for="example-number-input" class="col-sm-2 col-form-label" >Mazdori Price
        </label>

   <div class="col-sm-10">
            <input class="form-control" type="number" step="any" required placeholder="Mazdori Price" id="mazdori_price" name="mazdori_price">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-number-input" class="col-sm-2 col-form-label">Total Mazdori
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number" required placeholder="Total Mazdori" id="total_mazdori" name="total_mazdori" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="example-text-input" class="col-sm-2 col-form-label">Truck Number
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="text" required id="example-text-input" placeholder="Truck Number" name="carnumber">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-2 col-form-label">Chalan Number
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number"  required id="example-text-input" placeholder="Chalan Number" name="bill_number">
        </div>
    </div>
    <div class="form-group row">
        <label for="kaldarrent" class="col-sm-2 col-form-label">Car Rent (Kal)
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number" placeholder="Car Rent in kaldar" id="kaldarrent" name="kaldarrent" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="rate" class="col-sm-2 col-form-label">Kaldar Rate
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number" placeholder="Kaldar Rate" id="rate" name="rate" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="carrent" class="col-sm-2 col-form-label">Car Rent (AFG)
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number" placeholder="Car Rent in Afghani" id="carrent" name="carrent" required readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="carrent" class="col-sm-2 col-form-label">Monshiana (Kal)
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number" placeholder="Monshiana of Rent" id="monshiana" name="monshiana" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="carrent" class="col-sm-2 col-form-label">Kanta (AFG)
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number" placeholder="Kanta in Afghani" id="kanta" name="kanta" required >
        </div>
    </div>
    <div class="form-group row">
        <label for="carrent" class="col-sm-2 col-form-label">Sharwalli (AFG)
        </label>

        <div class="col-sm-10">
            <input class="form-control" type="number" placeholder="Sharwalli in Afghani" id="sharwalli" name="sharwalli" required >
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
                    <span class="input-group-text required cursor-pointer" id="date4">Icon</span>
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
                <input type="text" id="inputDate5"  class="form-control" placeholder="To Date" aria-label="date5"
                       aria-describedby="date5">
            </div>
        </div>
    </div>

<div class="form-group text-center">

<div><button type="submit" class="btn btn-outline-purple waves-effect waves-light m-r-5">Save</button>
   <button type="reset" class="btn btn-outline-purple waves-effect">Cancel</button>
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
@include('scripts')
<script src="{{asset('src/jquery.md.bootstrap.datetimepicker.js')}}" type="text/javascript"></script>
<!-- <script src="../dist/jquery.md.bootstrap.datetimepicker.js" type="text/javascript"></script> -->


<script type="text/javascript">

    $("document").ready(function(){

        $('#quantity').on('input',function(e){
            $('#total_mazdori').val($('#mazdori_price').val() * $('#quantity').val());
        });

        $('#mazdori_price').on('input',function(e){
            $('#total_mazdori').val($('#quantity').val() * $('#mazdori_price').val());
        });
    });
</script>
<script>
    $("document").ready(function(){
        $('#kaldarrent').on('input',function(e){
            $('#carrent').val( (parseInt($('#kaldarrent').val()) * parseInt($('#rate').val())) / 1000  );
        });
        $('#rate').on('input',function(e){
            $('#carrent').val( (parseInt($('#kaldarrent').val()) * parseInt($('#rate').val())) / 1000  );
        });
    });
</script>
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
</html>
