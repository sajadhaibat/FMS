<!DOCTYPE html>
<html>

<!-- Mirrored from themesbrand.com/admiria/layouts/vertical/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Dec 2018 02:55:33 GMT -->


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Available Items
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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Items List</h3></li>
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

<div class="card-body"><h4 class="mt-0 header-title">Items List</h4>

<p class="text-muted m-b-30 font-14">See all available items from here.</p>

<a class="btn btn-outline-purple" href="#" data-toggle="modal" data-target=".bs-example-modal-lg"> Add New Item</a>


<br>
<br>
<div class="table-rep-plugin">

<div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
<table id="tech-companies-1" class="table table-striped">
<thead>
<tr>
<th data-priority="1">Item
</th>

<th data-priority="6">Delete
</th>

</tr></thead><tbody>
@foreach ($items as $item)

<tr>
<td>{{ucfirst($item->item)}}</td>
<td>
  <form action="{{route('item.destroy',$item->id)}}" method="POST" >
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
                <form class="" action="{{route('item.store')}}" enctype="multipart/form-data" method="post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                    <div class="modal-body">
                        <div class="col-md-12">

                            <div class="form-group">

                                <input type="text" class="form-control" id="username" placeholder="Item Name" name="item" required="">
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
{{-- <script src="{{asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')}}" type="text/javascript"></script>
<script>$(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
</script> --}}
<!-- App js -->



</html>
