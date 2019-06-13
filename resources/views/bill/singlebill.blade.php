<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Single Bill
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->

    <!-- DataTables -->


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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Single Bill</h3></li>
            </ul>

            <div class="clearfix">
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- ==================
                                 PAGE CONTENT START
                                 ================== -->

        <div class="page-content-wrapper" style="background-color: white;">

            <div class="container-fluid">
                <div class="row" style="border-bottom: 2px solid darkgrey">
                <div class="col-md-12 ">
                    <img src="{{asset('Untitled-1.png')}}" class="img img-responsive text-center" style="width: 100%;height: 400px">
                </div>
                    @foreach($bills as $bill)
                <div class="col-md-6">
                    <p style="font-size: 16px;font-weight: bold">Date: {{$bill->stock->date}}</p>

                    <p style="font-size: 16px;font-weight: bold">Date: {{$bill->stock->persiandate}} </p>
                </div>
                    <div class="col-md-6  text-right" style="padding-right: 20px">
                    <p class="" style="direction: rtl;font-size: 16px;font-weight: bold"> نمبر مسلسل: </p>

                    <p  style="direction: rtl;font-size: 16px;font-weight: bold">بیجک بنام:   {{$bill->stock->vendor->name}}</p>


                </div>

                </div>
                <div class="row" style="border-bottom: 2px solid darkgrey">
                    <div class="col-md-8 text-center" style="border-right: 2px solid darkgrey">
                        <br><br><br><br>

                        <p class="text-right" style="direction: rtl;font-size: 16px;font-weight: bold; padding-right: 30px">لاری نمبر: {{$bill->stock->carnumber}}</p>
                        <p class="text-right" style="direction: rtl;font-size: 16px;font-weight: bold; padding-right: 30px"> چلان نمبر: {{$bill->stock->bill_number}}</p>
                        <br>
                        <br>
                        <br><br><br><br><br><br>
                        <p  style="direction: rtl;font-size: 16px;font-weight: bold; padding-right: 30px">خام افغانی: {{$bill->kham_afghani}}</p>
                        <p style="direction: rtl;font-size: 16px;font-weight: bold; padding-right: 30px">جمله مصارف: {{$bill->total_spent}}</p>
                        <p style="direction: rtl;font-size: 16px;font-weight: bold; padding-right: 30px">پخه افغانی: {{$bill->pakha_afghani}}</p>
                        <p style="direction: rtl;font-size: 16px;font-weight: bold; padding-right: 30px; color: red;">پخه کلدار: ({{$bill->todaykaldar}}) {{$bill->pakha_kaldar}} </p>

                    </div>
                    <div class="col-md-4 text-right" style="padding-right: 20px">
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold"> تعداد: {{$bill->stock->quantity}}</li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold"> گمرک: </li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold"> کانته: {{$bill->stock->kanta}}  </li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold">  شاروالی: {{$bill->stock->sharwalli}}</li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold">کرایه: {{$bill->stock->carrent}}</li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold">کمیشن: {{$bill->commission}}</li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold">مزدوری: {{$bill->stock->total_mazdori}}</li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold">منشیانه: {{$bill->monshiana}}</li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold"> مارکیت فیس: {{$bill->market_fee}}</li>
                            <li class="list-group-item" style="direction: rtl;font-size: 16px;font-weight: bold"> جمله مصارف: {{$bill->total_spent}}</li>

                        </ul>
                    </div>

                </div>
                <br>

                <div class="row">
                <div class="col-md-12">
                <div class="d-print-none">

                    <div class="pull-right"><a href="javascript:window.print()" class="btn btn-danger waves-effect waves-light"><i class="fa fa-print"></i> Print</a>
                    </div>
                </div>
                </div>
            </div>
                <br>
                @endforeach
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
<!-- Datatable js -->



</html>
