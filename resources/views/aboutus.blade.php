<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>About Us
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
<li class="list-inline-item"><button type="button" class="button-menu-mobile open-left waves-effect"><i class="ion-navicon"></i></button></li>
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">About Us</h3></li>
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

              <div class="row">

                <div class="col-12">

                  <div class="text-center"><h5 class="pull-left">About Us</h5>
                    <br><br><br>

                    <p class="text-muted">DevZone is an experienced software development and information technology company based in Afghanistan.
                      DevZone was founded in 2017 to provide best IT services to people. We have enough research, design, development and implementation experience in various Communications and IT environments.
                      We're turned on by new ideas and new technology. We're providing best services, support, features, uptime, and site performance in various IT environments.
                      All our work is assuring quality control, timely delivery and fast turnaround. We are proud to be a part of our clients' team, If you're looking for right ICT services among thousands, Devzone will be the right choice!
                      MISSION: We provide ICT solutions to face real-world challenges. We earn and keep our client's trust by delivering standard quality services.</p>
                  </div>
                </div>
              </div>
<hr>
              <div class="row m-t-40">

                <div class="col-md-4">

                  <div><h6 class="font-14">Email Address</h6>

                    <p class="text-muted">info@devzoneict.com</p>
                  </div>

                  <div class="pt-3"><h6 class="font-14">Telephone number</h6>

                    <p class="text-muted">+93791643460</p>
                  </div>

                  <div class="pt-3"><h6 class="font-14">Address</h6>

                    <p class="text-muted">Ansari square, Kabul, Afghanistan</p>
                  </div>
                </div>
                <br><br><br>
                <div class="col-md-8">

                  <form class="form-custom" method="get" action="{{url('contact_us')}}">

                    <div class="row">

                      <div class="col-md-6">

                        <div class="form-group">
                          <label class="sr-only" for="username">Name
                          </label>
                          <input type="text" class="form-control" id="username" placeholder="Your Name" required="">
                        </div>
                      </div>

                      <div class="col-md-6">

                        <div class="form-group">
                          <label class="sr-only" for="useremail">Email address
                          </label>
                          <input type="email" class="form-control" id="useremail" placeholder="Your Email" required="">
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-12">

                        <div class="form-group">
                          <label class="sr-only" for="usersubject">Subject
                          </label>
                          <input type="text" class="form-control" id="usersubject" placeholder="Subject" required="">
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-12">

                        <div class="form-group">
<textarea class="form-control" rows="5" placeholder="Your Message....">
</textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-12 text-center"><button type="submit" class="btn btn-outline-dark waves-effect waves-light">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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
</body>

@include('scripts')



</html>
