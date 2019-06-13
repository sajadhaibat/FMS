<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Financial Management system for ..
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->
<!-- C3 charts css -->

<link href="{{asset('plugins/c3/c3.min.css')}}" rel="stylesheet" type="text/css">
@include('links')
</head>

<body class="fixed-left">
<!-- Loader -->
<!--
<div id="preloader">

<div id="status">

<div class="spinner">
</div>
</div>
</div>
-->
<!-- Begin page -->

<div id="wrapper">
<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
<!-- LOGO -->

<div class="topbar-left">

<div class="">
<a href="{{url('/')}}" class="logo"><img src="{{asset('images/logo-sm.png')}}" height="36" alt="logo"></a>
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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Dashboard</h3></li>
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

<div class="col-md-6 col-lg-6 col-xl-3">

<div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-dark mr-0 float-right"><i class="mdi mdi-cash-multiple"></i>
</span>

<div class="mini-stat-info">

<span class="counter text-dark">{{$available_afghani}} AFG
</span> Available Money (AFG)
</div>

<div class="clearfix">
</div>

<p class="mb-0 m-t-20 text-muted">Available Money:  {{$available_afghani}} AFG
</div>
</div>

<div class="col-md-6 col-lg-6 col-xl-3">

<div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-cash-100"></i>
</span>

<div class="mini-stat-info">

<span class="counter text-purple">{{$available_kaldar}} Kal
</span> Available Money (Kal)
</div>

<div class="clearfix">
</div>

<p class="text-muted mb-0 m-t-20"> Available Money:  {{$available_kaldar}} Kal

</p>
</div>
</div>

    <div class="col-md-6 col-lg-6 col-xl-3">

        <div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-cash-multiple"></i>
</span>

            <div class="mini-stat-info">

<span class="counter text-teal">{{$ven_loan}} Kal
</span> Loan Amount On Vendors (Kal)
            </div>

            <div class="clearfix">
            </div>

            <p class="text-muted mb-0 m-t-20" style="font-size: small;">Loan Amount On Vendors: {{$ven_loan}} Kal
            </p>
        </div>
    </div>
<div class="col-md-6 col-lg-6 col-xl-3">

<div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-buffer"></i>
</span>

<div class="mini-stat-info">

<span class="counter text-teal">{{$our_loan_ven}} Kal
</span> Vendors Loan Amount on Us
</div>

<div class="clearfix">
</div>

<p class="text-muted mb-0 m-t-20" style="font-size:small;"> Vendors Loan Amount on Us: {{$our_loan_ven}} Kal

</p>
</div>
</div>


</div>
    <div class="row">

        <div class="col-md-6 col-lg-6 col-xl-3">

            <div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-warning mr-0 float-right"><i class="mdi mdi-worker"></i>
</span>

                <div class="mini-stat-info">

<span class="counter text-warning">{{$total_loan_amount}} AFG
</span> Loan Amount On Customers
                </div>

                <div class="clearfix">
                </div>

                <p class="mb-0 m-t-20 text-muted" style="font-size: small;">Loan Amount On Customers:  {{$total_loan_amount}} AFG
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">

            <div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-success mr-0 float-right"><i class="mdi mdi-human-greeting"></i>
</span>

                <div class="mini-stat-info">

<span class="counter text-success">{{$ex_loan}} AFG
</span> Loan Amount of Exchangers
                </div>

                <div class="clearfix">
                </div>

                <p class="text-muted mb-0 m-t-20" style="font-size: small;">Loan Amount of Exchangers: {{$ex_loan}} AFG

                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">

            <div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-call-split"></i>
</span>

                <div class="mini-stat-info">

<span class="counter text-purple">{{$total_commission}} AFG
</span> Total Commission
                </div>

                <div class="clearfix">
                </div>

                <p class="text-muted mb-0 m-t-20">Total Commission: {{$total_commission}} AFG
                </p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">

            <div class="mini-stat clearfix bg-white">

<span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-grease-pencil"></i>
</span>

                <div class="mini-stat-info">

<span class="counter text-brown">{{$total_monshiana}} AFG
</span> Total Monshiana
                </div>

                <div class="clearfix">
                </div>

                <p class="text-muted mb-0 m-t-20" style="font-size: medium;"> Total Monshiana: {{$total_monshiana}}
                </p>
            </div>
        </div>


    </div>

<div class="row">

<div class="col-xl-8">

<div class="row">

<div class="col-md-9 pr-md-0">

<div class="card m-b-20" style="height: 486px;">

<div class="card-body"><h4 class="mt-0 header-title">Graph of Exchanger</h4>

<div class="text-center">

<div class="btn-group m-t-20" role="group" aria-label="Basic example"><button type="button" class="btn btn-secondary">Day</button> <button type="button" class="btn btn-secondary">Month</button> <button type="button" class="btn btn-secondary">Year</button>
</div>
</div>

<div id="combine-chart" class="m-t-20">
</div>
</div>
</div>
</div>

<div class="col-md-3 pl-md-0">

<div class="card m-b-20" style="height: 486px;">

<div class="card-body">

<div class="m-b-20">

<p>Total Mazdori</p><h5>{{$total_mazdori}}</h5>

<span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(103,168,228,0.3)"],"stroke": ["rgba(103,168,228,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1
</span>
</div>

<div class="m-b-20">

<p>Total Bills</p><h5>{{$bills}}</h5>

<span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(74,193,142,0.3)"],"stroke": ["rgba(74,193,142,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1
</span>
</div>

<div class="m-b-20">

<p>Rates Average</p><h5>{{$avg}}</h5>

<span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(232, 65, 38,0.3)"],"stroke": ["rgba(232, 65, 38,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1
</span>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-4">

<div class="card m-b-20">

<div class="card-body"><h4 class="mt-0 header-title"></h4>
<ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
<li class="list-inline-item"><h5 class="mb-0" style="font-size: medium">{{$countvendors}}</h5>

<p class="text-muted font-14"> Total Vendors  </p></li>
<li class="list-inline-item"><h5 class="mb-0" style="font-size: medium">{{$countcustomers}}</h5>

<p class="text-muted font-14" style="font-size: small">Total Customers</p></li>
</ul>

    <div id="donut-chart">
    </div>
</div>
</div>
</div>
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

<!-- END wrapper -->
<!-- jQuery  -->
@include('scripts')
</body>
</html>
