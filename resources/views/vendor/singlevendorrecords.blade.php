<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title> @foreach ($vendors as $key=>$vendor)
  @if ($key>0)
    @break
  @endif
  {{ucfirst($vendor->vendor->name)}} Records
@endforeach
</title>
<meta content="Admin Dashboard" name="description">
<meta content="Themesbrand" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App Icons -->


<!-- Table css -->
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
  @foreach ($vendors as $key=>$vendor)
    @if ($key>0)
      @break
    @endif
    {{ucfirst($vendor->vendor->name)}} Records

  </h3></li>
     @endforeach
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

<div class="col-12">

<div class="card m-b-20">
@foreach ($vendors as $key=>$vendor)
  @if ($key>0)
    @break
  @endif
  <div class="card-body"><h4 class="mt-0 header-title">{{ucfirst($vendor->vendor->name)}} Records</h4>


<p class="text-muted m-b-30 font-14">See Vendor Records here.</p>
    <a class="btn btn-outline-teal" href="{{ route('singlevendorbills',$vendor->vendor->id) }}">Click To See Bills </a>
    <a class="btn btn-outline-teal" href="{{ url('invoice',$vendor->vendor->id) }}">Click To See Invoices </a>

    @endforeach
    <br> <br>
<div class="table-rep-plugin">

<div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
<table id="datatable" class="table table-striped table-bordered">
<thead>
<tr>
<th>Name
</th>
<th data-priority="1">Item
</th>
<th data-priority="3">Quantity
</th>

<th data-priority="6">Date
</th>
  <th data-priority="6">Persian Date
  </th>
<th data-priority="6">Generate Bill
</th>
<th data-priority="6">Delete
</th>
</tr></thead><tbody>

@foreach ($vendors as $vendor)

<tr>
<td>{{ $vendor->vendor->name }}</td>
<td>{{ $vendor->item }}</td>
<td>{{ $vendor->quantity }}</td>
<td>{{ $vendor->date }}</td>
  <td>{{ $vendor->persiandate }}</td>
<td>  <a href="{{ url('generatebill',$vendor->id) }}" class="btn btn-outline-teal">Generate Bill</a></td>
<td>
  <form action="{{route('stock.destroy',$vendor->id)}}" method="POST" >
          <input type="hidden" name="_method" value="delete">
                {!! csrf_field() !!}
            <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-teal" ><i class="fa fa-remove"> </i></button>
    </form>
</td>

</tr>
@endforeach

</tbody>
</table>
</div>
</div>
    <br>
    <br>
    <hr>
    <h2>Vendor Payments</h2>

    <div class="table-rep-plugin">

      <div class="table-responsive table-bordered b-0" data-pattern="priority-columns">
        <table id="datatable1" class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>Name
            </th>
            <th data-priority="3">Loan amount (Kal)
            </th>

            <th data-priority="6">Paid Amount (Kal)
            </th>
            <th data-priority="6">New Loan Amount (Kal)
            </th>
            <th data-priority="6">Description(تفصیل)
            </th>
            <th data-priority="6">Date
            </th>
            <th data-priority="6">Persian Date
            </th>

            <th data-priority="6">Delete
            </th>
          </tr></thead><tbody>

          @foreach ($payments as $payment)

            <tr>
              <td>{{ $payment->vendor->name }}</td>
              <td>{{ $payment->loan_amount }} Kal</td>
              <td>{{ $payment->new_paid_amount }} ({{ $payment->rate }}) Kal</td>
              <td>{{ $payment->new_loan_amount }} Kal</td>
              <td>{{ $payment->description }}</td>
              <td>{{ $payment->date }}</td>
              <td>{{ $payment->persiandate }}</td>
              <td>
                <form action="{{route('vendorpayment.destroy',$payment->id)}}" method="POST" >
                  <input type="hidden" name="_method" value="delete">
                  {!! csrf_field() !!}
                  <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-teal" ><i class="fa fa-remove"> </i></button>
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
</div>
<!-- End Right content here -->
</div>
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

</body>

</html>
