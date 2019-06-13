<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Buy and Sale Customers
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->


    <!-- Table css -->

    <link href="{{ asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">
    <!-- Basic Css files -->

    @include('links')

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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Buy and Sale Customers</h3></li>
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

                            <div class="card-body"><h4 class="mt-0 header-title">Buy and Sale Customers</h4>

                                <p class="text-muted m-b-30 font-14">See customers from here.</p>

                                <a class="btn btn-outline-purple" href="#" data-toggle="modal" data-target=".bs-example-modal-lg"> Add New Out Customer</a>
                                <a class="btn btn-outline-purple" href="#" data-toggle="modal" data-target="#payment"> Out Customer Payment</a>


                                <br>
                                <br>
                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th data-priority="1">Name
                                                </th>
                                                <th data-priority="1">Address
                                                </th>
                                                <th data-priority="1">phone
                                                </th>
                                                <th data-priority="1">Total Amount
                                                </th>
                                                <th data-priority="1">Paid Amount
                                                </th>
                                                <th data-priority="1">Loan Amount
                                                </th>
                                                <th data-priority="6">See Records
                                                </th>
                                                <th data-priority="6">Edit
                                                </th>

                                            </tr></thead><tbody>
                                            @foreach ($css as $cs)

                                                <tr>
                                                    <td>{{ucfirst($cs->name)}}</td>
                                                    <td>{{ucfirst($cs->address)}}</td>
                                                    <td>{{$cs->phone}}</td>
                                                    <td>{{$cs->total_amount}} AF</td>
                                                    <td>{{$cs->paid_amount}} AF</td>
                                                    <td>{{$cs->total_amount - $cs->paid_amount }} AF</td>
                                                    <td>  <a href="{{ url('singlebuyandsalerecords',$cs->id) }}" class="btn btn-outline-purple">See Records</a></td>

                                                    <td>
                                                        <form action="#" method="POST" >
                                                            <input type="hidden" name="_method" value="delete">
                                                            {!! csrf_field() !!}
                                                            <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-purple" ><i class="fa fa-remove"> </i></button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                                        <div class="modal-dialog modal-lg">

                                            <div class="modal-content">

                                                <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Item</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <form class="" action="{{route('buyandsalecustomers.store')}}" enctype="multipart/form-data" method="post">
                                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                                    <div class="modal-body">
                                                        <div class="col-md-12">

                                                            <div class="form-group">

                                                                <input type="text" class="form-control" id="username" placeholder="Name" name="name" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">

                                                            <div class="form-group">

                                                                <input type="text" class="form-control" id="username" placeholder="Address" name="address" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">

                                                            <div class="form-group">

                                                                <input type="number" class="form-control" id="username" placeholder="Phone Number" name="phone" required="">
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-purple waves-effect waves-light">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>

                                    <div  class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                                        <div class="modal-dialog modal-lg">

                                            <div class="modal-content">

                                                <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Out Customer Payment</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <form class="" action="{{route('buyandsalepayment.store')}}" enctype="multipart/form-data" method="post">
                                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                                    <div class="modal-body">
                                                        <div class="col-md-12">

                                                            <div class="form-group">

                                                                <select class="form-control" name="customer_id">
                                                                    <option selected disabled>Select Customer</option>
                                                                    @foreach($css as $cs)
                                                                        <option value="{{$cs->id}}">{{$cs->name}}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">

                                                            <div class="form-group">

                                                                <input type="text" class="form-control" id="username" placeholder="Total Amount" name="total_amount" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">

                                                            <div class="form-group">

                                                                <input type="number" class="form-control" id="username" placeholder="Paid Amount" name="paid_amount" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="col-md-12" placeholder="Write description (تفصیل)" name="description" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control" type="date" value="2019-02-19" id="example-datetime-local-input" name="date" required>
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

                                                            <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-purple waves-effect waves-light">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
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
@include('scripts')
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
{{-- <script src="{{asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')}}" type="text/javascript"></script>
<script>$(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
</script> --}}
<!-- App js -->



</html>
