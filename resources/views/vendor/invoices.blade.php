<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Invoices
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->


    <!-- Table css -->

    <link href="{{ asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">
    <!-- Basic Css files -->

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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Vendor Invoices</h3></li>
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

                    <div class="col-12 col-md-12 ">

                        <div class="card m-b-20">

                            <div class="card-body"><h4 class="mt-0 header-title">Vendor Invoices</h4>

                                <p class="text-muted m-b-30 font-14">See all vendor invoices from here.</p>

                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-bordered ">
                                            <thead>
                                            <tr>
                                                <th>Name
                                                </th>
                                                <th data-priority="1">Item
                                                </th>

                                                <th data-priority="1">Quantity
                                                </th>
                                                <th data-priority="6">Lari Number
                                                </th>
                                                <th data-priority="6">Kham Afghani
                                                </th>

                                                <th data-priority="6">Pakha Kaldar
                                                </th>
                                                <th data-priority="6">Date
                                                </th>
                                            </tr></thead><tbody>
                                            @foreach ($bills as $bill)

                                                <tr>
                                                    <td>{{ucfirst($bill->stock->vendor->name)}}</td>
                                                    <td>{{$bill->stock->item}}</td>
                                                    <td>{{$bill->stock->quantity}}</td>
                                                    <td>{{$bill->stock->carnumber}}</td>
                                                    <td><b>{{$bill->kham_afghani}}</b> AF</td>
                                                    <td><b>{{$bill->pakha_kaldar}} </b> kal</td>
                                                    <td>{{$bill->stock->date}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                            {{--<tfoot>--}}
                                            {{--<tr>--}}
                                            {{--<th id="total" colspan="2">Total Commission :</th>--}}

                                            {{--<td><b>{{ $total_commission }} AF</b></td>--}}
                                            {{--</tr>--}}
                                            {{--</tfoot>--}}
                                            {{--<tfoot>--}}
                                            {{--<tr>--}}
                                            {{--<th id="total1" colspan="2">Total Monshiana :</th>--}}

                                            {{--<td><b>{{ $total_monshiana }} AF</b></td>--}}
                                            {{--</tr>--}}
                                            {{--</tfoot>--}}
                                        </table>
                                        {{ $bills->links() }}
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

</html>
