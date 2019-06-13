<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Add New Vendor Payment
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->

    @include('links')
    {{--<link rel="stylesheet" href="{{asset('demo.css')}}" />--}}
    <link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">

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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Add New Payment</h3></li>
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

                    <div class="col-md-8 m-auto">

                        <div class="card m-b-20">

                            <div class="card-body"><h4 class="mt-0 header-title">Add New Vendor Payment</h4>

                                <p class="text-muted m-b-30 font-14">You can add new vendor payments from here</p>

                                <form class="" action="{{route('vendorpayment.store')}}" enctype="multipart/form-data" method="post">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />


                                    <div class="form-group row">
                                        <label for="vendor_id" class="col-sm-2 col-form-label">Vendor Name
                                        </label>

                                        <div class="col-sm-10">
                                            <select class="form-control select2 vendor " name="vendor_id" id="vendor_id" required>
                                                <option  selected disabled>Select</option>
                                                @foreach ($vendor_names as $vendor_name )

                                                    <option value="{{ $vendor_name->id }}">{{ $vendor_name->name }}</option>

                                                @endforeach


                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label ">Loan Amount (Kal)
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control customer" type="number" placeholder="Loan Amount in Kaldar" id="loan_amount" name="loan_amount" readonly="readonly" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">New Pay Amount (Kal)
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="New Pay Amount" id="new_pay_amount" name="new_pay_amount" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">Kaldar Rate
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="Kaldar Rate" id="rate" name="rate" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">New Loan Amount (Kal)
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="New Loan Amount in Kaldar" id="new_loan_amount_kaldar" name="new_loan_amount_kaldar" readonly required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">Payment in (AFG)
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="New Loan Amount in Afghani" id="new_loan_amount" name="new_loan_amount" readonly required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">Description
                                        </label>

                                        <div class="col-sm-10">
                                            <textarea  class="form-control" rows="3" placeholder="Description About Payment" name="description" ></textarea>                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and Time
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

                                    <div class="form-group text-center">

                                        <div><button type="submit" class="btn btn-outline-teal waves-effect waves-light m-r-5">Save</button>
                                            <button type="reset" class="btn btn-outline-teal waves-effect">Cancel</button>
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


<!-- End Right content here -->
</div>
</body>
<!-- END wrapper -->
<!-- jQuery  -->

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

<script>
    $(document).ready(function(){

        $(document).on('change','.vendor',function(){

            var vendor_id =$(this).val();
            console.log("hummm loooooo"+ vendor_id);
            $.ajax({
                type:'get',
                url:'{!!URL::to('getvendorpaidamount')!!}',
                data:{'id':vendor_id},
                success:function(data){

                    //  console.log('success');
                    console.log(data);
                    $('#loan_amount').val(data);

                },
                error:function(){

                }
            });
        });
    });
</script>

<script>
    $("document").ready(function(){
        $('#new_pay_amount').on('input',function(e){
            $('#new_loan_amount_kaldar').val( parseInt($('#new_pay_amount').val())+ parseInt($('#loan_amount').val()));
        });
        $('#vendor_id').on('input',function(e){
            $('#new_loan_amount_kaldar').val( parseInt($('#new_pay_amount').val())+ parseInt($('#loan_amount').val()));
        })
        $('#loan_amount').on('input',function(e){
            $('#new_loan_amount_kaldar').val( parseInt($('#new_pay_amount').val())+ parseInt($('#loan_amount').val()));
        });
        $('#rate').on('input',function(e){
            $('#new_loan_amount').val( (parseInt($('#new_pay_amount').val()) * parseInt($('#rate').val())) / 1000  );
        });
        $('#new_loan_amount_kaldar').on('input',function(e){
            $('#new_loan_amount').val( (parseInt($('#new_pay_amount').val()) * parseInt($('#rate').val())) / 1000  );
        });
        $('#new_pay_amount').on('input',function(e){
            $('#new_loan_amount').val( (parseInt($('#new_pay_amount').val()) * parseInt($('#rate').val())) / 1000  );
        });
    });
</script>
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
