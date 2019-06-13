<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Vendor List
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->

<!-- DataTables -->

<link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
<!-- Responsive datatable examples -->
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
  <!--<a href="index.html" class="logo text-center">Admiria</a>--> <a href="{{url('/')}}" class="logo"><img src="{{asset('images/logo-sm.png')}}" height="36" alt="logo"></a>
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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">Vendors List</h3></li>
</ul>

<div class="clearfix">
</div>
</div>
<!-- Top Bar End -->
<!-- ==================
                         PAGE CONTENT START
                         ================== -->

<div class="page-content-wrapper">

<div class="container-fluid" >

<div class="row">

<div class="col-12">

<div class="card">

<div class="card-body " >
  <h4 class="mt-0 header-title">Vendors List</h4>

  <p class="text-muted m-b-30 font-14">See all vendors from here.</p>


  <table  class="table table-striped  table-bordered"  id="datatable" >
  <thead>
  <tr>
  <th>Name
  </th>
  <th data-priority="1">Phone
  </th>

  <th data-priority="1">Address
  </th>
    <th data-priority="3">Pakha Kaldar
    </th>
  <th data-priority="3">Pakha Afghani
  </th>
    <th data-priority="3">Our Paid Amount (Kal)
    </th>
    <th data-priority="3">Our Paid Amount (AFG)
    </th>
    <th data-priority="6">Loan Amount (Kal)
    </th>
  <th data-priority="6">Loan Amount (AFG)
  </th>
  <th data-priority="6">See All Records
  </th>
  <th data-priority="6">Edit
  </th>

  </tr></thead><tbody>
  @foreach ($vendors as $vendor)

  <tr>
  <td>{{ucfirst($vendor->name)}}</td>
  <td>{{$vendor->phone}}</td>
  <td>{{$vendor->address}}</td>
    <td><b>{{$vendor->kaldar_paid_amount}} </b>Kal</td>
    <td><b>{{$vendor->paid_amount}} </b>AFG</td>
    <td><b>{{$vendor->kaldar_payment}} </b>Kal</td>
    <td><b>{{$vendor->our_paid_amount}}</b> AFG</td>
    @if($vendor->our_paid_amount < $vendor->paid_amount)
      <td style="color: #e84126;"><b>{{$vendor->kaldar_payment-$vendor->kaldar_paid_amount}}</b> Kal</td>
      <td style="color: #e84126;"><b>{{$vendor->our_paid_amount-$vendor->paid_amount}}</b> AFG</td>
    @else
      <td><b>{{$vendor->kaldar_payment-$vendor->kaldar_paid_amount}}</b> Kal</td>
      <td><b>{{$vendor->our_paid_amount-$vendor->paid_amount}}</b> AFG</td>
    @endif
  <td>  <a href="{{ url('singlevendorrecords',$vendor->id) }}" class="btn btn-outline-teal">See Records</a></td>
  <td><a href="{{route('vendor.edit',$vendor->id)}}" class="btn btn-teal"><i class="fa fa-edit"></i></a></td>


  </tr>
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

<!-- App js -->

<script type="text/javascript">$(document).ready(function () {
                $('#datatable').DataTable();
            });
</script>
</body>
</html>
