<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Daily Expenses
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->
    <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->

    <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Daily Expenses</h3></li>
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

                            <div class="card-body"><h4 class="mt-0 header-title">Daily expenses</h4>

                                <p class="text-muted m-b-30 font-14">Calculate your daily expenses from here!</p>

                                <a class="btn btn-outline-success" href="#" data-toggle="modal" data-target=".bs-example-modal-lg"> Add New Expense</a>

                                <br>
                                <br>
                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="datatable" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th id="total" colspan="2">Total Available Money :</th>

                                                <td><b>{{ $available_afghani }} </b> Afghani</td>
                                                <td><b>{{ $available_kaldar }}</b> Kaldar</td>
                                            </tr>
                                            </thead>
                                            <thead>
                                            <tr>
                                                <th data-priority="1">Name
                                                </th>
                                                <th data-priority="6">Amount
                                                </th>
                                                <th data-priority="6">For(Reason of getting money)

                                                <th data-priority="6">Date
                                                </th>
                                                <th data-priority="6">Persian Date
                                                </th>

                                                <th data-priority="6">Delete
                                                </th>

                                            </tr></thead><tbody>

                                            @foreach($expenses as $expense)
                                                <tr>
                                                    <td>{{ucfirst($expense->staff->name)}}</td>
                                                    <td>{{$expense->money_amount}}</td>
                                                    <td>{{$expense->reason}}</td>
                                                    <td>{{$expense->date}}</td>
                                                    <td>{{$expense->persiandate}}</td>
                                                    <td>
                                                        <form action="{{route('expenses.destroy',$expense->id)}}" method="POST" >
                                                            <input type="hidden" name="_method" value="delete">
                                                            {!! csrf_field() !!}
                                                            <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-success" ><i class="fa fa-remove"> </i></button>
                                                        </form>
                                                    </td>

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

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Expense</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('expenses.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />




                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <select class="custom-select" name="staff_id">
                                                    <option selected disabled>Select staff</option>

                                                    @foreach ($staffs as $staff)
                                                        <option value="{{ $staff->id }}">{{$staff->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                        <div class="form-group">


                                                <input class="form-control" type="number" placeholder="Amount of Money" id="example-number-input" name="money_amount" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                        <div class="form-group">
                                                <textarea required="" class="form-control" rows="3" placeholder="Reason of Getting Money" name="reason"></textarea>                                        </div>
                                        </div>


                                        <div class="col-md-12">
                                        <div class="form-group">
                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="date" required>
                                            </div>
                                        </div>
                                        <div class="form-group">


                                            <div class="col-md-12">

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text cursor-pointer" id="date4" data-mdpersiandatetimepicker="" data-mdpersiandatetimepicker-group="rangeSelector1" data-fromdate="" data-original-title="" title="">Icon</span>
                                                    </div>
                                                    <input type="text" id="inputDate4" class="form-control" placeholder="تاریخ را انتخاب نمایید" aria-label="date4" aria-describedby="date4" name="persian_date" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="display: none">

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text cursor-pointer" id="date5" data-mdpersiandatetimepicker="" data-mdpersiandatetimepicker-group="rangeSelector1" data-todate="" data-original-title="" title="">Icon</span>
                                                    </div>
                                                    <input type="text" id="inputDate5" class="form-control" placeholder="To Date" aria-label="date5" aria-describedby="date5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">

                                            <div><button type="submit" class="btn btn-outline-success waves-effect waves-light m-r-5">Save</button>
                                                <button type="reset" class="btn btn-outline-success waves-effect">Cancel</button>
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

<!-- Responsive examples -->
<script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}">
</script>
<script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}">
</script>
<!-- App js -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable();
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

</html>
