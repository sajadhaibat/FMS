
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Edit Vendor
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->

    @include('links')

    {{--<link rel="stylesheet" href="{{asset('demo.css')}}" />--}}
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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Edit Vendor</h3></li>
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

                            <div class="card-body"><h4 class="mt-0 header-title">Edit Vendor</h4>

                                <p class="text-muted m-b-30 font-14">Edit Vendor Details from here </p>

                                <form class="" action="{{route('vendor.update',$edit->id)}}" enctype="multipart/form-data" method="post">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                    <input type="hidden" name="_method" value="PUT">


                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label" >Name
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required placeholder="Customer Name" id="quantity" name="name" value="{{$edit->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label" >Address
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required placeholder="Customer Address" id="mazdori_price" name="address" value="{{$edit->address}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">Phone Number
                                        </label>

                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" required placeholder="Customer Phone Number" id="total_mazdori" name="phone" value="{{$edit->phone}}">
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

</div>
<!-- End Right content here -->

</body>
<!-- END wrapper -->
<!-- jQuery  -->
@include('scripts')

</html>
