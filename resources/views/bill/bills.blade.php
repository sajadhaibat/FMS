<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
<title>Bills
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
<li class="hide-phone list-inline-item app-search"><h3 class="page-title">All Bills</h3></li>
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
  <h4 class="mt-0 header-title">All Bills</h4>

  <p class="text-muted m-b-30 font-14">See all bills from here.</p>
  <table id="datatable" class="table table-striped table-bordered ">
  <thead>
  <tr>
    <th>Bill NO
    </th>
  <th>Name
  </th>
  <th data-priority="1">Item
  </th>

  <th data-priority="1">Quantity
    </th>
    <th data-priority="1">Bill Number
    </th>
  <th data-priority="3">CP (%)
  </th>
  <th data-priority="3">Commission
  </th>
  <th data-priority="6">Total spent
  </th>
  <th data-priority="6">Kham Afghani
  </th>
  <th data-priority="6">Pakha Afghani
  </th>
  <th data-priority="6">Pakha Kaldar
  </th>
  <th data-priority="6">View Bill
  </th>
    <th data-priority="6">Delete
    </th>

  </tr></thead><tbody>
  @foreach ($bills as $bill)

  <tr>
    <td>{{ $loop->iteration }}</td>
  <td>{{ucfirst($bill->stock->vendor->name)}}</td>
  <td>{{$bill->stock->item}}</td>
  <td>{{$bill->stock->quantity}}</td>
    <td>{{$bill->stock->bill_number}}</td>
  <td>{{$bill->commissionpercentage}}%</td>
    <td><b>{{$bill->commission}} </b>AF</td>
    <td><b>{{$bill->total_spent}} </b>AF</td>
  <td><b>{{$bill->kham_afghani}}</b> AF</td>
  <td><b>{{$bill->pakha_afghani}}</b> AF</td>
    <td><b>{{$bill->pakha_kaldar}}</b> ({{$bill->todaykaldar}}) kal</td>
  <td>  <a href="{{url('singlebill',$bill->id)}}" class="btn btn-outline-danger">View Bill</a></td>
    <td>
      <form action="{{route('bill.destroy',$bill->id)}}" method="POST" >
        <input type="hidden" name="_method" value="delete">
        {!! csrf_field() !!}
        <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-danger" ><i class="fa fa-remove"> </i></button>
      </form>
    </td>

  </tr>
  @endforeach

  </tbody>

    <tfoot>
    <tr>
      <th id="total" colspan="2">Total Mazdori :</th>

      <td><b>{{ $total_mazdori }} AF</b></td>
    </tr>
    </tfoot>
  <tfoot>
    <tr>
       <th id="total" colspan="2">Total Commission :</th>

      <td><b>{{ $total_commission }} AF</b></td>
    </tr>
  </tfoot>
  <tfoot>
    <tr>
       <th id="total1" colspan="2">Total Monshiana :</th>

      <td><b>{{ $total_monshiana }} AF</b></td>
    </tr>
  </tfoot>

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
