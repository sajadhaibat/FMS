<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Add New Item
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->

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
 <a href="{{ url('/') }}" class="logo"><img src="{{asset('images/logo-sm.png')}}" height="36" alt="logo"></a>
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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Add New Item</h3></li>
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

<div class="col-lg-6 col-lg-offset-2 m-auto">

<div class="card m-b-20">

<div class="card-body"><h4 class="mt-0 header-title">Add New Item</h4>

<p class="text-muted m-b-30 font-14">You can add your new Items here.</p>

<form class="" action="{{route('item.store')}}" enctype="multipart/form-data" method="post">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

<div class="form-group">
<label>Item Name
</label>
<div>
<input type="text" class="form-control"  name="item"  placeholder="Enter Item Name" required>
</div>
</div>

<div class="form-group">

<div><button type="submit" class="btn btn-orange waves-effect waves-light m-r-5">Save</button>
   <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
</div>
</div>
</form>
</div>
</div>
</div>
<!-- end col -->
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

<!-- END wrapper -->
<!-- jQuery  -->
@include('scripts')
<!-- Parsley js -->
<script type="text/javascript" src="{{asset('plugins/parsleyjs/parsley.min.js')}}">
</script>
<script type="text/javascript">$(document).ready(function() {
                $('form').parsley();
            });
</script>
<!-- App js -->

</body>
</html>
