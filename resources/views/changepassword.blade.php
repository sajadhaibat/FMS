<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>User Setting
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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Change Setting</h3></li>
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

<div class="col-10 m-auto">

<div class="card m-b-20">

<div class="card-body">

<form class="" action="{{route('newpassword')}}" enctype="multipart/form-data" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />


<h4> Change Password</h4>
<br>

  <div class="form-group row{{ $errors->has('passwordold') ? ' has-error' : '' }}">
  <label for="example-password-input" class="col-sm-2 col-form-label"> Current Password
  </label>

  <div class="col-sm-10">
  <input class="form-control" type="password"  id="example-password-input" name="passwordold">
  </div>
  @if ($errors->has('passwordold'))
      <span class="help-block">
          <strong>{{ $errors->first('passwordold') }}</strong>
      </span>
  @endif
  </div>

  <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
  <label for="example-password-input" class="col-sm-2 col-form-label"> New Password
  </label>

  <div class="col-sm-10">
  <input class="form-control" type="password"  id="example-password-input" name="password">
  </div>
  @if ($errors->has('password'))
      <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
      </span>
  @endif
  </div>

  <div class="form-group row">
  <label for="example-password-input" class="col-sm-2 col-form-label">Confirm Password
  </label>

  <div class="col-sm-10">
  <input class="form-control" name="confirmpassword" type="password"  id="example-password-input">
  </div>
  </div>



<div class="form-group text-center">

<div><button type="submit" class="btn btn-pink waves-effect waves-light m-r-5">Save</button>
   <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
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
@include('scripts')


</html>
