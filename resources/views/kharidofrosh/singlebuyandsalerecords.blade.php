<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    {{--<title> @foreach ($payments as $key=>$payment)--}}
    {{--@if ($key>0)--}}
    {{--@break--}}
    {{--@endif--}}
    {{--{{ucfirst($payment->exchange->exchanger)}} Records--}}
    {{--@endforeach--}}
    {{--</title>--}}
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->
    <title> @foreach ($sales as $key=>$sale)
            @if ($key>0)
                @break
            @endif
            {{ucfirst($sale->buyandsalecustomer->name)}} Records
        @endforeach
    </title>

    <!-- Table css -->

    <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->


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
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">
                        @foreach ($sales as $key=>$sale)
                            @if ($key>0)
                                @break
                            @endif
                            {{ucfirst($sale->buyandsalecustomer->name)}} Records
                        @endforeach

                    </h3></li>

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

                            <div class="card-body"><h4 class="mt-0 header-title">@foreach ($sales as $key=>$sale)
                                        @if ($key>0)
                                            @break
                                        @endif
                                        {{ucfirst($sale->buyandsalecustomer->name)}}
                                    @endforeach  Records</h4>

                                <p class="text-muted m-b-30 font-14">See @foreach ($sales as $key=>$sale)
                                        @if ($key>0)
                                            @break
                                        @endif
                                        {{ucfirst($sale->buyandsalecustomer->name)}}
                                    @endforeach  Records from here.</p>

                                <div class="table-rep-plugin">

                                    <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                        <table id="datatable" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Name
                                                </th>
                                                <th data-priority="1">Item
                                                </th>
                                                <th data-priority="3">quantity
                                                </th>
                                                <th data-priority="3">Date
                                                </th>
                                                <th data-priority="1">Persian Date
                                                </th>

                                                <th data-priority="6">Delete
                                                </th>
                                            </tr></thead><tbody>

                                            @foreach ($sales as $sale)

                                                <tr>
                                                    <td>{{ ucfirst($sale->buyandsalecustomer->name)}}</td>
                                                    <td>{{ $sale->customersale->stock->item }}</td>
                                                    <td>{{ $sale->quantity }}</td>
                                                    <td>{{ $sale->date }}</td>
                                                    <td>{{ $sale->persiandate }}</td>
                                                    <td>
                                                        <form action="{{route('buyandsale.destroy',$sale->id)}}" method="POST" >
                                                            <input type="hidden" name="_method" value="delete">
                                                            {!! csrf_field() !!}
                                                            <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-indigo" ><i class="fa fa-remove"> </i></button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                                <br> <br>
                                <hr>

                                <h5>Customer Payments</h5>
                                <br>

                                <div class="table-rep-plugin">

                                <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
                                <table id="datatable1" class="table table-striped">
                                <thead>
                                <tr>
                                <th>Name
                                </th>
                                <th data-priority="3">Total Amount
                                </th>
                                    <th data-priority="3">Paid Amount
                                    </th>
                                <th data-priority="3">Date
                                </th>
                                <th data-priority="3">Persian Date
                                </th>

                                <th data-priority="6">Delete
                                </th>
                                </tr></thead><tbody>

                                @foreach ($payments as $payment)

                                <tr>
                                <td>{{ $payment->buyandsalecustomer->name}}</td>
                                <td>{{ $payment->total_amount }} AF</td>
                                    <td>{{ $payment->paid_amount }} AF</td>
                                    <td>{{ $payment->date }}</td>
                                <td>{{ $payment->persiandate }}</td>
                                <td>
                                <form action="{{route('buyandsalepayment.destroy',$payment->id)}}" method="POST" >
                                <input type="hidden" name="_method" value="delete">
                                {!! csrf_field() !!}
                                <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-indigo" ><i class="fa fa-remove"> </i></button>
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
@include('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}">
</script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}">
</script>
<!-- Responsive examples -->
<script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}">
</script>
<script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}">
</script>
<!-- App js -->

<script type="text/javascript">$(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>
<script type="text/javascript">$(document).ready(function () {
        $('#datatable1').DataTable();
    });
</script>
{{-- <script src="assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js" type="text/javascript"></script>
<script>$(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
</script> --}}
<!-- App js -->



</html>
