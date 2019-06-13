<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Staffs List
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->


    <!-- Table css -->

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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Staffs List</h3></li>
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

                            <div class="card-body"><h4 class="mt-0 header-title">Staffs List</h4>

                                <p class="text-muted m-b-30 font-14">See all staffs from here.</p>

                                <a class="btn btn-outline-brown" href="#" data-toggle="modal" data-target=".bs-example-modal-lg"> Add New staff</a>
                                <a class="btn btn-outline-brown" href="#"  data-toggle="modal" data-target="#bs-example-modal-lg">Pay Salary</a>
                                <a class="btn btn-outline-brown" href="#"  data-toggle="modal" data-target="#advance">Advance Money</a>

                                <br>
                                <br>
                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th data-priority="1">Name
                                                </th>


                                                <th data-priority="6">Number
                                                </th>
                                                <th>Advance Money</th>
                                                <th data-priority="6">See Records
                                                </th>
                                                <th data-priority="6">Edit
                                                </th>


                                            </tr></thead><tbody>

                                                @foreach($staffs as $staff)
                                                <tr>
                                                    <td>{{ucfirst($staff->name)}}</td>
                                                    <td>{{$staff->number}}</td>
                                                    <td>{{$staff->advance}} AF</td>
                                                    <td>  <a href="{{ url('singlestaffrecords',$staff->id) }}" class="btn btn-outline-brown">See Records</a></td>

                                                    <td><a href="{{route('staff.edit',$staff->id)}}" class="btn btn-brown"><i class="fa fa-edit"></i></a></td>


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

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Staff</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('staff.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                    <div class="modal-body">
                                        <div class="col-md-12">

                                            <div class="form-group">

                                                <input type="text" class="form-control" id="username" placeholder="Staff Name" name="name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            <div class="form-group">

                                                <input type="number" class="form-control" id="useremail" placeholder="Staff Phone Number" name="number" required="">
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-brown waves-effect waves-light">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                        <div id="bs-example-modal-lg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Salary</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('salary.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <select class="form-control" id="staffid" name="staff_id">

                                                        <option selected disabled>Select Staff</option>
                                                        @foreach($staffs as $staff)
                                                        <option value="{{$staff->id}}">{{ucfirst($staff->name)}}</option>
                                                            @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="advance_amount" placeholder="Advance Amount" name="advance" readonly required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="useremail" placeholder="Salary Quantity" name="salary_quantity" required="">
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

                                                <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-brown waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                        <div id="advance" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Advance Money</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('advance.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <select class="form-control" name="staff_id">

                                                        <option selected disabled>Select Staff</option>
                                                        @foreach($staffs as $staff)
                                                            <option value="{{$staff->id}}">{{ucfirst($staff->name)}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="advance" placeholder="Advanced Money" name="amount" required="">
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
                                                            <span class="input-group-text cursor-pointer" id="date40">Icon</span>
                                                        </div>
                                                        <input type="text" id="inputDate40" class="form-control" placeholder="تاریخ را انتخاب نمایید" aria-label="date40"
                                                               aria-describedby="date40" name="persian_date" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" style="display: none">

                                                    <div class="input-group" >
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text cursor-pointer" id="date50">Icon</span>
                                                        </div>
                                                        <input type="text" id="inputDate50" class="form-control" placeholder="To Date" aria-label="date50"
                                                               aria-describedby="date50">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-brown waves-effect waves-light">Save</button>
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
</div>
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
<script>
    $(document).ready(function(){

        $(document).on('change','#staffid',function(){

            var staff_id =$(this).val();
            console.log("hummm loooooo"+ staff_id);
            $.ajax({
                type:'get',
                url:'{!!URL::to('getadvanceamount')!!}',
                data:{'id':staff_id},
                success:function(data){

                    //  console.log('success');
                    console.log(data);
                    $('#advance_amount').val(data);

                },
                error:function(){

                }
            });
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
    $('#date40').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate40',
        fromDate: true,
        groupId: 'rangeSelector1'
    });
    $('#date50').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate50',
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
