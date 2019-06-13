<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Stock List
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App Icons -->

    <!-- DataTables -->

    <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->

    <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
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
                <!--<a href="index.html" class="logo text-center">Admiria</a>--> <a href="{{url('/')}}"
                                                                                    class="logo"><img
                            src="{{asset('images/logo-sm.png')}}" height="36" alt="logo"></a>
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
                <li class="list-inline-item">
                    <button type="button" class="button-menu-mobile open-left waves-effect"><i class="ion-navicon"></i>
                    </button>
                </li>
                <li class="hide-phone list-inline-item app-search"><h3 class="page-title">Stock List</h3></li>
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

                        <div class="card">

                            <div class="card-body">
                                <h4 class="mt-0 header-title">Stock List</h4>

                                <p class="text-muted m-b-30 font-14">See all available malls in stock from here.</p>
                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Item
                                        </th>
                                        <th>Vendor
                                        </th>
                                        <th>Quantity
                                        </th>
                                        <th>Sold
                                        </th>
                                        <th>Available
                                        </th>
                                        <th>Chalan Number
                                        </th>
                                        <th>Car Number
                                        </th>
                                        <th>Car Rent (Kal)
                                        </th>
                                        <th>Car Rent (AFG)
                                        </th>
                                        <th>Date
                                        </th>
                                        <th>Persian Date
                                        </th>
                                        <th>Sales Detail
                                        </th>
                                        <th>Edit
                                        </th>
                                        <th>Delete
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($stocks as $stock)
                                        @if($stock->quantity == $stock->sold)
                                        <tr style="color: #e84126;">
                                            <td>{{ucfirst($stock->item)}}</td>
                                            <td>{{$stock->vendor->name}}</td>
                                            <td>{{$stock->quantity}}</td>
                                            <td>{{$stock->sold}}</td>
                                            <td>{{$stock->quantity -$stock->sold }}</td>
                                            <td>{{$stock->bill_number}}</td>
                                            <td>{{$stock->carnumber}}</td>
                                            <td>{{$stock->kaldarrent}} ({{$stock->rate}}) Kal</td>
                                            <td>{{$stock->carrent}} AF</td>
                                            <td>{{$stock->date}}</td>
                                            <td>{{$stock->persiandate}}</td>
                                            <td>  <a href="{{ url('singlestockrecords',$stock->id) }}" class="btn btn-outline-danger">Sales Detail</a></td>
                                            <td><a href="{{route('stock.edit',$stock->id)}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>
                                            <td>
                                                <form action="{{route('stock.destroy',$stock->id)}}" method="POST" >
                                                    <input type="hidden" name="_method" value="delete">
                                                    {!! csrf_field() !!}
                                                    <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-danger" ><i class="fa fa-remove"> </i></button>

                                                </form>
                                            </td>

                                        </tr>
                                   @else
                                            <tr>
                                                <td>{{ucfirst($stock->item)}}</td>
                                                <td>{{$stock->vendor->name}}</td>
                                                <td>{{$stock->quantity}}</td>
                                                <td>{{$stock->sold}}</td>
                                                <td>{{$stock->quantity -$stock->sold }}</td>
                                                <td>{{$stock->bill_number}}</td>
                                                <td>{{$stock->carnumber}}</td>
                                                <td>{{$stock->kaldarrent}} ({{$stock->rate}}) Kal</td>
                                                <td>{{$stock->carrent}} AF</td>
                                                <td>{{$stock->date}}</td>
                                                <td>{{$stock->persiandate}}</td>
                                                <td>  <a href="{{ url('singlestockrecords',$stock->id) }}" class="btn btn-outline-purple">Sales Detail</a></td>

                                                <td><a href="{{route('stock.edit',$stock->id)}}" class="btn btn-purple"><i class="fa fa-edit"></i></a></td>
                                                <td>
                                                    <form action="{{route('stock.destroy',$stock->id)}}" method="POST" >
                                                        <input type="hidden" name="_method" value="delete">
                                                        {!! csrf_field() !!}
                                                        <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-purple" ><i class="fa fa-remove"> </i></button>
                                                    </form>
                                                </td>
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
            <!-- container -->
        </div>
        <!-- Page content Wrapper -->
    </div>
    <!-- content -->
    @include('footer')

</div>
<!-- End Right content here -->

<!-- END wrapper -->
<!-- jQuery  -->
@include('scripts')
<!-- Datatable js -->
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
</body>


</html>
