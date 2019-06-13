<!DOCTYPE html>
<html>

<!-- Mirrored from themesbrand.com/admiria/layouts/vertical/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Dec 2018 02:55:33 GMT -->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Exchangers List
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->


    <!-- Table css -->

    <link href="{{ asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">
    <!-- Basic Css files -->

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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Exchangers List</h3></li>
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

                    <div class="col-12 col-md-12 m-auto ">

                        <div class="card m-b-20">

                            <div class="card-body"><h4 class="mt-0 header-title">Exchangers List</h4>

                                <p class="text-muted m-b-30 font-14">See all Exchangers from here.</p>

                                <a class="btn btn-outline-indigo"  href="#"  data-toggle="modal" data-target=".bs-example-modal-lg"> Add New Exchanger</a>
                                <a class="btn btn-outline-indigo"  href="#"  data-toggle="modal" data-target="#bs-example-modal-lg">Exchanger Payments</a>
                                <a  href="#"  data-toggle="modal" data-target="#our-payment" class="btn btn-outline-indigo">Our Payments</a>

                                <br>
                                <br>
                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th data-priority="1">Exchanger Name
                                                </th>


                                                <th data-priority="6">Number
                                                </th>
                                                <th data-priority="6">Address
                                                </th>
                                                <th data-priority="6">Ex-Kaldar Amount
                                                </th>
                                                <th data-priority="6">Ex-Afghani Amount
                                                </th>
                                                <th data-priority="6">Our Paid Amount
                                                </th>
                                                <th data-priority="6">Loan Amount (Afghani)
                                                </th>
                                                <th data-priority="6">See Records
                                                </th>
                                                <th data-priority="6">Edit
                                                </th>


                                            </tr></thead><tbody>

                                            @foreach($exchanges as $exchange)
                                                <tr>
                                                    <td>{{ucfirst($exchange->exchanger)}}</td>
                                                    <td>{{$exchange->phone}}</td>
                                                    <td>{{$exchange->address}}</td>
                                                    <td>{{$exchange->ex_paid_amount}} Kal</td>
                                                    <td>{{$exchange->ex_afghani_amount}} AF</td>
                                                    <td>{{$exchange->our_paid_amount}} AF</td>

                                                    @if($exchange->our_paid_amount > $exchange->ex_afghani_amount)
                                                    <td>{{$exchange->our_paid_amount - $exchange->ex_afghani_amount}} AF</td>
                                                    @else
                                                        <td style="color: #e84126;">{{$exchange->our_paid_amount - $exchange->ex_afghani_amount}} AF</td>
                                                    @endif
                                                        <td>  <a href="{{ url('singleexchangerrecords',$exchange->id) }}" class="btn btn-outline-indigo">See Records</a></td>

                                                    <td><a href="{{ route('exchange.edit',$exchange->id)}}" class="btn btn-indigo"><i class="fa fa-edit"></i></a></td>


                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 m-t-30">


                        <!--  Modal content for the above example -->

                        <div  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">New Exchanger</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('exchange.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                        <div class="modal-body">
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="text" class="form-control" id="username" placeholder="Exchanger Name" name="name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="useremail" placeholder="Exchanger Phone Number" name="phone" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="text" class="form-control" id="useremail" placeholder="Exchanger Address" name="address" required="">
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-indigo waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                        <div id="bs-example-modal-lg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Payment From Exchanger</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('exchangerpayment.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <select class="form-control" name="exchanger_id" required>

                                                        <option selected disabled>Select Exchanger</option>
                                                        @foreach($exchanges as $exchange)
                                                            <option value="{{$exchange->id}}">{{ucfirst($exchange->exchanger)}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="ex_paid_amount" placeholder="Payment amount" name="ex_paid_amount" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="rate" placeholder="Kaldar Rate" name="rate" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="afghani" placeholder="Afghani amount" name="afghani" required="" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="datetime-local" value="2019-02-19T13:45:00" id="example-datetime-local-input" name="date" required>
                                                </div>
                                            </div>


                                            <div class="form-group">


                                                <div class="col-md-12">

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
                                            <div class="row">

                                                <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-indigo waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                        <div id="our-payment" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Our Payments to exchanger</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('paymenttoexchanger.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <select class="form-control" name="exchanger_id" required>

                                                        <option selected disabled>Select Exchanger</option>
                                                        @foreach($exchanges as $exchange)
                                                            <option value="{{$exchange->id}}">{{ucfirst($exchange->exchanger)}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="useremail" placeholder="Payment amount in Afgani" name="paid_amount" required="">
                                                </div>
                                            </div>



                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="datetime-local" value="2019-02-19T13:45:00" id="example-datetime-local-input" name="date" required>
                                                </div>
                                            </div>


                                            <div class="form-group">


                                                <div class="col-md-12">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text cursor-pointer" id="date9">Icon</span>
                                                        </div>
                                                        <input type="text" id="inputDate9" class="form-control" placeholder="تاریخ را انتخاب نمایید" aria-label="date4" aria-describedby="date4" name="persian_date" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" style="display: none">

                                                    <div class="input-group" >
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text cursor-pointer" id="date10">Icon</span>
                                                        </div>
                                                        <input type="text" id="inputDate10" class="form-control" placeholder="To Date" aria-label="date5"
                                                               aria-describedby="date5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-indigo waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>






                        <!-- /.modal -->
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
{{-- <script src="{{asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')}}" type="text/javascript"></script>
<script>$(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
</script> --}}
<!-- App js -->


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
    $('#date9').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate9',
        fromDate: true,
        groupId: 'rangeSelector1'
    });
    $('#date10').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate10',
        toDate: true,
        groupId: 'rangeSelector1',
        placement: 'top'
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

<script>
    $("document").ready(function(){
    $('#rate').on('input',function(e){
        $('#afghani').val( (parseInt($('#ex_paid_amount').val()) * parseInt($('#rate').val())) / 1000  );
    });
        $('#ex_paid_amount').on('input',function(e){
            $('#afghani').val( (parseInt($('#ex_paid_amount').val()) * parseInt($('#rate').val())) / 1000  );
        });
    });
</script>

</html>
