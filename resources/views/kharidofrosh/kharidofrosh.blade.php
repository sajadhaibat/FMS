<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Malls In Shop
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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Malls In Shop</h3></li>
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

                            <div class="card-body"><h4 class="mt-0 header-title">Shop Malls</h4>

                                <p class="text-muted m-b-30 font-14">See all malls in shop from here.</p>

                                <a class="btn btn-outline-indigo"  href="#"  data-toggle="modal" data-target=".bs-example-modal-lg"> Sale to Customers</a>
                                <a class="btn btn-outline-indigo"  href="#"  data-toggle="modal" data-target="#bs-example-modal-lg">Sale to Out</a>

                                <br>
                                <br>
                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="datatable" class="table table-striped table-bordered ">
                                            <thead>
                                            <tr>

                                                <th>Name
                                                </th>
                                                <th data-priority="1">Item
                                                </th>

                                                <th data-priority="1">Quantity
                                                </th>
                                                <th data-priority="1">Sold
                                                </th>
                                                <th data-priority="1">Available
                                                </th>
                                                <th data-priority="1">Price per Item
                                                </th>
                                                <th data-priority="3">Total Price
                                                </th>
                                                <th data-priority="6">Sales Details
                                                </th>


                                            </tr></thead><tbody>
                                            @foreach ($malls as $mall)
                                            @if($mall->customer_quantity == $mall->sold)
                                                <tr style="color: red;">
                                                    <td>{{ucfirst($mall->customer->name)}}</td>
                                                    <td>{{$mall->stock->item}}</td>
                                                    <td>{{$mall->customer_quantity}}</td>
                                                    <td>{{$mall->sold}}</td>
                                                    <td>{{$mall->customer_quantity - $mall->sold}}</td>
                                                    <td>{{$mall->price_per_item}}</td>
                                                    <td>{{$mall->total_price}} AF</td>
                                                    <td>  <a href="{{url('singleshopsales',$mall->id)}}" class="btn btn-outline-danger">Sale records</a></td>

                                                </tr>
                                                @else
                                                <tr>
                                                    <td>{{ucfirst($mall->customer->name)}}</td>
                                                    <td>{{$mall->stock->item}}</td>
                                                    <td>{{$mall->customer_quantity}}</td>
                                                    <td>{{$mall->sold}}</td>
                                                    <td>{{$mall->customer_quantity - $mall->sold}}</td>
                                                    <td>{{$mall->price_per_item}}</td>
                                                    <td>{{$mall->total_price}} AF</td>
                                                    <td>  <a href="{{url('singleshopsales',$mall->id)}}" class="btn btn-outline-purple">Sale records</a></td>

                                                </tr>
                                                @endif
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

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Sale To Customers</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <br>
                                    <form class="" action="{{route('buyandsaleothercustomer.store')}}" enctype="multipart/form-data" method="post" >
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

                                        <div class="form-group">


                                            <div class="col-md-12">
                                                <select id="ddlCreditCardType" name="customer_id" class="form-control" required>

                                                    <option selected disabled>Select Customer</option>
                                                     @foreach($css as $cs)
                                                    <option value="{{ $cs->id }}">{{$cs->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <select id="ddlCreditCardType" name="sale_id" class="form-control" required>
                                                    <option selected disabled>Select Item</option>
                                                    @foreach($malls as $mall)
                                                        @if($mall->customer_quantity > $mall->sold)
                                                            <option value="{{$mall->id}}"  >{{$mall->customer_quantity - $mall->sold}} {{$mall->stock->item}}</option>
                                                        @else
                                                            <option value="#" style="display: none;">{{$mall->customer_quantity - $mall->sold}} {{$mall->stock->item}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input id="quantity" name="customer_quantity" type="number" min="1" placeholder="Quantity For Customer" class="form-control" required>                                        </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <input id="price" name="price_per_item" placeholder="Price Per Item" type="Number" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <input id="totalprice" name="total_price" placeholder="Total Price" type="number" class="form-control" readonly="readonly">                                        </div>
                                        </div>


                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <input id="paidamount" name="paid_amount" placeholder="Paid Amount" type="number" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <input id="loanamount" name="loan_amount" placeholder="Loan Amount" type="text" class="form-control" readonly="readonly">                                        </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <input class="form-control" type="datetime-local" value="2019-02-19T13:45:00" id="example-datetime-local-input" name="date" required>
                                            </div>
                                        </div>


                                        <div class="form-group">

                                            <div class="col-md-12">

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

                                            <div><button type="submit" class="btn btn-outline-warning waves-effect waves-light m-r-5">Save</button>
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

                                    <div class="modal-header"><h5 class="modal-title mt-0" id="myLargeModalLabel">Sale To Out Of Customers</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form class="" action="{{route('buyandsale.store')}}" enctype="multipart/form-data" method="post">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <select class="form-control" name="sale_id" required>

                                                        <option selected disabled>Select Item</option>
                                                            @foreach($malls as $mall)
                                                                @if($mall->customer_quantity > $mall->sold)
                                                                <option value="{{$mall->id}}"  >{{$mall->customer_quantity - $mall->sold}} {{$mall->stock->item}}</option>
                                                    @else
                                                                <option value="#" style="display: none;">{{$mall->customer_quantity - $mall->sold}} {{$mall->stock->item}}</option>
                                                                @endif
                                                                @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <select class="form-control" name="customer_id" required>

                                                        <option selected disabled>Select Customer</option>
                                                        @foreach($customers as $customer)
                                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="number" class="form-control" id="quantity" placeholder="Item Quantity" name="quantity" required="">
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
                                                            <span class="input-group-text cursor-pointer" id="date40">Icon</span>
                                                        </div>
                                                        <input type="text" id="inputDate40" class="form-control" placeholder="تاریخ را انتخاب نمایید" aria-label="date4"
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

    $('#date6').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate6',
        inLine: true,
        rangeSelector: true
    });
</script>

<script type="text/javascript">

    $("document").ready(function(){
        $('#price').on('input',function(e){
            $('#totalprice').val( $('#quantity').val() * $('#price').val());
        });

        $('#quantity').on('input',function(e){
            $('#totalprice').val( $('#quantity').val() * $('#price').val());
        });

        $('#paidamount').on('input',function(e){
            $('#loanamount').val( $('#totalprice').val() - $('#paidamount').val());
        });


        $('#quantity').on('input',function(e){
            $('#loanamount').val( $('#totalprice').val() - $('#paidamount').val());
        });

        $('#price').on('input',function(e){
            $('#loanamount').val( $('#totalprice').val() - $('#paidamount').val());
        });

    })


</script>


</html>
