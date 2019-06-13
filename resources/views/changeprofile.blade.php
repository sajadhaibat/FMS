<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Change Profile
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->

<!--Morris Chart CSS -->

<link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
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
<li class="list-inline-item">
  <button type="button" class="button-menu-mobile open-left waves-effect"><i class="ion-navicon"></i></button></li>
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Change Profile</h3></li>
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

<div class="card-body"><h4 class="mt-0 header-title">change profile  </h4>
  <br>
  <form class="" action="{{route('profile.store')}}" enctype="multipart/form-data" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

  <div class="col-md-3 m-auto">
         <div class="text-center">
           <img src="//placehold.it/128" class="rounded-circle" alt="avatar">
           <h6>Upload a different photo...</h6>

           <input type="file" class="form-control" name="banner" required>
         </div>
       </div>

<!-- /.modal -->

<div class="row">

<br>
<br>
<br>
<br>
<div class="col-md-4 m-auto">

<div class="text-center">

 <button type="submit" class="btn btn-primary waves-effect waves-light">Save Change</button>

</div>
<!--  Modal content for the above example -->


<!-- /.modal -->
</div>


</div>
</form>
<!-- end row -->
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

</body>
</html>
