<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Average of Rates
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->
    <link href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

    <link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
    <!-- Basic Css files -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Rates Average</h3></li>
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

                            <div class="card-body"><h4 class="mt-0 header-title">Rates Average</h4>
                                <p class="text-muted m-b-30 font-14">See the Averages from here.</p>

                                <form class="" action="{{url('getaverage')}}" enctype="multipart/form-data" method="GET">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />



                                    <div class=" row">

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div>

                                                    <div class="input-group">
                                                        <input  class="form-control"  autocomplete="off" placeholder="From Date" id="datepicker-autoclose" name="fromdate" required>

                                                        <div class="input-group-append">

                                <span class="input-group-text"><i class="mdi mdi-calendar"></i>
                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- input-group -->
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div>

                                                <div class="input-group">
                                                    <input  class="form-control" autocomplete="off" placeholder="To Date" id="datepicker" name="todate" required>

                                                    <div class="input-group-append">

                                <span class="input-group-text"><i class="mdi mdi-calendar"></i>
                                                    </span>
                                                    </div>
                                                </div>
                                                <!-- input-group -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-outline-orange form-control">click to see average</button>
                                    </div>
                                        <div class="col-sm-3 form-group">
                                            <input  class="form-control" id="average" type="text" placeholder="Average Amount"  readonly="readonly" >

                                        </div>
                                </div>
                                </form>

<br>
                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th id="total">Total</th>

                                                <td><b>{{$ven_averages - $ex_averages}}</b></td>
                                            </tr>
                                            </thead>
                                            <thead>
                                            <tr>
                                                <th data-priority="1">Exchanger Rates Average <b style="font-size: larger">{{$ex_averages}}</b>
                                                </th>
                                                <th data-priority="1">Vendor Rates Average <b style="font-size: larger">{{$ven_averages}}</b>
                                                </th>

                                            </tr></thead><tbody>


                                                <tr>
                                                    <td> @foreach($exchanger_rates as $exchanger_rate)
                                                            {{$exchanger_rate->ex_paid_amount}} Kal   <b>({{$exchanger_rate->rate}} )</b> {{$exchanger_rate->afghani}} AF <br>
                                                    @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach($vendors_rate as $vendors_rat)
                                                            {{$vendors_rat->pakha_kaldar}} Kal   <b>({{$vendors_rat->todaykaldar}})</b> {{$vendors_rat->pakha_afghani}} AF<br>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
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

<script src="{{asset('src/jquery.md.bootstrap.datetimepicker.js')}}" type="text/javascript"></script>


</html>
