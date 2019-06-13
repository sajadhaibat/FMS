<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Login to FMS
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->

@include('links')
</head>

<body class="fixed-left">
<!-- Loader -->

<div id="preloader">

<div id="status">

<div class="spinner">
</div>
</div>
</div>
<!-- Begin page -->

<div class="accountbg">
</div>

<div class="wrapper-page">

<div class="card">

<div class="card-body">


<div class="p-3"><h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>

<p class="text-muted text-center">Sign in to continue to FMS</p>

<form class="form-horizontal m-t-30" role="form" method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<label for="username">Username
</label>
<input type="text" class="form-control" id="username" name="email" value="{{ old('email') }}" placeholder="Enter username">

@if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<label for="userpassword">Password
</label>
<input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
@if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
</div>

<div class="form-group row m-t-20">

<div class="col-sm-6">

<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customControlInline">
<label class="custom-control-label" for="customControlInline">Remember me
</label>
</div>
</div>

<div class="col-sm-6 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
</div>
</div>

</form>
</div>
</div>
</div>

<div class="m-t-40 text-center">


</div>
</div>
<!-- jQuery  -->

<!-- App js -->
@include('scripts')
</body>
</html>
