<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Generate Bill
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->

@include('links')
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
<!--<a href="index.html" class="logo text-center">Admiria</a>--> <a href="{{url('/')}}" class="logo"><img src="{{asset('images/logo-sm.png')}}" height="36" alt="logo"></a>
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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Invoice</h3></li>
</ul>

<div class="clearfix">
</div></nav>
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

<div class="card-body">

<div class="row">

<div class="col-12">
@foreach ($stocks as $stock)
<div class="invoice-title"><h4 class="pull-right font-16"><strong>{{ ucfirst($stock->vendor->name) }}</strong></h4><h4 class="m-t-0">Billed To:</h4>
</div>
<hr>



<div class="row">

  <div class="col-6"><strong>Type:</strong>
<br>{{ ucfirst($stock->item) }}
</div>

  <div class="col-6 text-right"><strong>Quantity:</strong>
<br>{{ $stock->quantity}}
</div>
</div>
</div>
</div>


<div class="row ">

<div class="col-12 col-md-6 border-right">

<div class="panel panel-default ">

<div class="p-2"><h3 class="panel-title font-20"><strong>Order summary</strong></h3>
</div>

<div class="">

<div>
  <form class="form-custom" action="{{route('bill.store')}}" enctype="multipart/form-data" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
    <input type="hidden" name="stock_id" value="{{$stock->id}}">
    <input type="hidden" name="vendor_id" value="{{$stock->vendor->id}}">


  <div class="row">

  <div class="col-md-6">

  <div class="form-group">
  <label>Car rent
  </label>
  <input type="number" class="form-control" id="carrent" placeholder="Car Rent"  name="carrent" readonly value="{{ $stock->carrent }}">
  </div>
  </div>
@endforeach
  <div class="col-md-6">

  <div class="form-group">
  <label>Mazdori
  </label>
  <input type="number" class="form-control" id="mazdori" placeholder="Mazdori" required="" name="mazdori" value="{{ $stock->total_mazdori }}" readonly>
  </div>
  </div>

  <div class="col-md-6">

  <div class="form-group">
  <label >Monshiana
  </label>
  <input type="number" class="form-control" id="monshiana" placeholder="Monshiana" required="" name="monshiana">
  </div>
  </div>

  <div class="col-md-6">

  <div class="form-group">
  <label>Market fee
  </label>
  <input type="number" class="form-control" id="marketfee" placeholder="Market Fee" required="" name="marketfee">
  </div>
  </div>



  <div class="col-md-6">

  <div class="form-group">
  <label >Comission Percentage (%)
  </label>
  <input type="number" class="form-control" id="commissionpercentage" step="any" placeholder="Commission" required="" name="commissionpercentage">
  </div>
  </div>

  <div class="col-md-6">

  <div class="form-group">
  <label >Comission
  </label>
  <input type="number" class="form-control" id="commission" placeholder="Commission" required="" name="commission" readonly>
  </div>
  </div>

  </div>
</div>


</div>
</div>
</div>
<div class="col-12 col-md-6">

<div class="panel panel-default">
  <div class="p-2"><h3 class="panel-title font-20"><strong>Payment summary</strong></h3>
  </div>

<div class="row">

  <div class="col-md-3">

    <div class="form-group">
      <label>Kanta
      </label>
      <input type="number" class="form-control" id="kanta" placeholder="Kanta" required="" name="kanta" value="{{ $stock->kanta }}" readonly>
    </div>
  </div>

  <div class="col-md-3">

    <div class="form-group">
      <label>Sharwalli
      </label>
      <input type="number" class="form-control" id="sharwalli" placeholder="Sharwalli" required="" name="sharwalli" value="{{ $stock->sharwalli }}" readonly>
    </div>
  </div>
  <div class="col-md-6">

  <div class="form-group">
  <label >Total Spent
  </label>
  <input type="number" class="form-control" id="totalspent" name="totalspent" readonly="readonly">
  </div>
  </div>
</div>



<div class="row">
  <div class="col-md-6">

    <div class="form-group">
      <label>Kham Afghani
      </label>
      <input type="number" class="form-control" id="khamafghani" placeholder="Kham Afghani" required="" name="khamafghani" value="{{ $stock->customersales->sum('total_price') }}" readonly>
    </div>
  </div>
<div class="col-md-6">

<div class="form-group">
<label>Pakha Afghani
</label>
<input type="number" class="form-control" id="pakhaafghani" name="pakhaafghani" required="" readonly="readonly">
</div>
</div>


</div>

<div class="row">

<div class="col-md-6">

<div class="form-group">
<label>Today's Kaldar
</label>
<input type="number" class="form-control" id="todaykaldar" name="todaykaldar" placeholder="Today's Kaldar Price" required="">
</div>
</div>

<div class="col-md-6">

<div class="form-group">
<label >Pakha Kaldar
</label>
<input type="number" class="form-control" id="pakhakaldar" name="pakhakaldar"  required="" readonly="readonly">
</div>
</div>
</div>
<div class="d-print-none">
  <br>


  <div class="pull-centre">
     <button type="submit" class="btn btn-outline-teal waves-effect waves-light">Save</button>
  </div>
</div>
</form>

</div>
</div>

</div>
<!-- end row -->

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
</div>
</body>
<!-- END wrapper -->
<!-- jQuery  -->
@include('scripts')

<script type="text/javascript">

$("document").ready(function(){

//     $('#khamafghani').on('input',function(e){
//         $('#pakhaafghani').val( parseInt($('#khamafghani').val()) - parseInt($('#totalspent').val()));
//     });
//

//
// //
// $('#carrent').on('input',function(e){
//     $('#totalspent').val( parseInt($('#commission').val()) + parseInt($('#mazdori').val())+ parseInt($('#monshiana').val()) + parseInt($('#marketfee').val())+ parseInt($('#carrent').val()));
// });

  // $('#khamafghani').on('input',function(e){
  //     $('#totalspent').val( parseInt($('#commission').val()) + parseInt($('#mazdori').val())+ parseInt($('#monshiana').val()) + parseInt($('#marketfee').val()) + parseInt($('#carrent').val()));
  // });

  // $('#mazdori').on('input',function(e){
  //     $('#totalspent').val( parseInt($('#commission').val()) + parseInt($('#mazdori').val())+ parseInt($('#monshiana').val()) + parseInt($('#marketfee').val())+ parseInt($('#carrent').val()));
  // });
    $('#commissionpercentage').on('input',function(e){
        $('#commission').val((parseInt($('#khamafghani').val()) * $('#commissionpercentage').val())/100);
    });

    $('#monshiana').on('input',function(e){
        $('#totalspent').val( parseInt($('#commission').val()) + parseInt($('#mazdori').val())+ parseInt($('#monshiana').val()) + parseInt($('#marketfee').val())+ parseInt($('#carrent').val()) + parseInt($('#kanta').val()) + parseInt($('#sharwalli').val()));
    });
    //
    //
    $('#marketfee').on('input',function(e){
        $('#totalspent').val( parseInt($('#commission').val()) + parseInt($('#mazdori').val())+ parseInt($('#monshiana').val()) + parseInt($('#marketfee').val())+ parseInt($('#carrent').val()) + parseInt($('#kanta').val()) + parseInt($('#sharwalli').val()));
    });
    $('#commissionpercentage').on('input',function(e){
        $('#totalspent').val( parseInt($('#commission').val()) + parseInt($('#mazdori').val())+ parseInt($('#monshiana').val()) + parseInt($('#marketfee').val())+ parseInt($('#carrent').val()) + parseInt($('#kanta').val()) + parseInt($('#sharwalli').val())

        );
    });
  //

    $('#commissionpercentage').on('input',function(e){
        $('#pakhaafghani').val( parseInt($('#khamafghani').val()) - parseInt($('#totalspent').val()));
    });

    $('#monshiana').on('input',function(e){
        $('#pakhaafghani').val( parseInt($('#khamafghani').val()) - parseInt($('#totalspent').val()));
    });
    //
    //
    $('#marketfee').on('input',function(e){
        $('#pakhaafghani').val( parseInt($('#khamafghani').val()) - parseInt($('#totalspent').val()));
    });
    $('#commissionpercentage').on('input',function(e){
        $('#pakhaafghani').val( parseInt($('#khamafghani').val()) - parseInt($('#totalspent').val()));
    });

    $('#todaykaldar').on('input',function(e){
        $('#pakhakaldar').val( parseInt($('#pakhaafghani').val() * 1000) / parseInt($('#todaykaldar').val()));
    });

    //

    $('#commissionpercentage').on('input',function(e){
        $('#pakhakaldar').val( parseInt($('#pakhaafghani').val() * 1000) / parseInt($('#todaykaldar').val()));
    });

    $('#monshiana').on('input',function(e){
        $('#pakhakaldar').val( parseInt($('#pakhaafghani').val() * 1000) / parseInt($('#todaykaldar').val()));
    });
    //
    //
    $('#marketfee').on('input',function(e){
        $('#pakhakaldar').val( parseInt($('#pakhaafghani').val() * 1000) / parseInt($('#todaykaldar').val()));
    });
    $('#commissionpercentage').on('input',function(e){
        $('#pakhakaldar').val( parseInt($('#pakhaafghani').val() * 1000) / parseInt($('#todaykaldar').val()));
    });

});
</script>

{{--<script type="text/javascript">--}}

{{--$("document").ready(function(){--}}

    {{--// $('#khamafghani').on('input',function(e){--}}
    {{--//     $('#pakhaafghani').val( parseInt($('#khamafghani').val()) - parseInt($('#totalspent').val()));--}}
    {{--// });--}}

    {{--// $('#totalspent').on('input',function(e){--}}
    {{--//     $('#pakhaafghani').val( parseInt($('#khamafghani').val()) - parseInt($('#totalspent').val()));--}}
    {{--// });--}}

    {{--// $('#khamafghani').on('input',function(e){--}}
    {{--//     $('#commission').val((parseInt($('#khamafghani').val()) * parseInt($('#commissionpercentage').val()))/100);--}}
    {{--// });--}}
    {{--//--}}
    {{--// $('#commissionpercentage').on('input',function(e){--}}
    {{--//     $('#commission').val((parseInt($('#khamafghani').val()) * parseInt($('#commissionpercentage').val()))/100);--}}
    {{--// });--}}

{{--});--}}
{{--</script>--}}
</html>
