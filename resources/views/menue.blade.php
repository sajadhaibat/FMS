<div class="sidebar-inner slimscrollleft">

<div id="sidebar-menu">
<ul>
  <li><a href="{{ url('/') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i>

  <span> Dashboard
  </span></a></li>

<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-network"></i>

<span> Vendors
<span class="pull-right"><i class="mdi mdi-chevron-right"></i>
</span>
</span></a>
<ul class="list-unstyled">
<li><a href="{{ route('vendor.create') }}">Add New Vendor</a></li>
<li><a href=" {{ route('vendor.index') }}">Vendors List</a></li>
<li><a href="{{ route('vendorpayment.create') }}">Vendors Payments</a></li>
</ul></li>


<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i>

<span>Customers

<span class="pull-right"><i class="mdi mdi-chevron-right"></i>
</span>
</span></a>
<ul class="list-unstyled">
<li><a href="{{ route('customer.create') }}">Add New Customer</a></li>
<li><a href="{{ route('customer.index') }}">Customer List</a></li>
<li><a href="{{ route('customersales.create') }}">Sales to Customer</a></li>
<li><a href="{{ route('customerpayment.create') }}">Customer Payments</a></li>

</ul></li>


<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i>

<span>Stock

<span class="pull-right"><i class="mdi mdi-chevron-right"></i>
</span>
</span></a>
<ul class="list-unstyled">
<li><a href="{{route('stock.create') }}">Add New Mall</a></li>
<li><a href="{{route('stock.index') }}">Available Malls</a></li>
<li><a href="{{route('item.index') }}">Available Items</a></li>
</ul></li>

    <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-check"></i>

            <span>Buy and Sale

<span class="pull-right"><i class="mdi mdi-chevron-right"></i>
</span>
</span></a>
        <ul class="list-unstyled">
            <li><a href="{{route('buyandsale.index')}}">Available Malls</a></li>
            <li><a href="{{route('buyandsalecustomers.index') }}">Customers</a></li>
        </ul></li>

<li><a href="{{ route('bill.index') }}" class="waves-effect"><i class="mdi mdi-book"></i>

<span> Bills
</span></a></li>


<li><a href="{{route('exchange.index')}}" class="waves-effect" ><i class="mdi mdi-chart-areaspline"></i>
<span> Exchanges
</span></a></li>

<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-newspaper"></i>

<span>Daily Expenses

<span class="pull-right"><i class="mdi mdi-chevron-right"></i>
</span>
</span></a>
<ul class="list-unstyled">
<li><a href="{{route('expenses.index')}}">Expenses</a></li>
<li><a href="{{route('staff.index')}}">Staff List</a></li>
</ul></li>

    <li><a href="{{ url('average') }}" class="waves-effect"><i class="mdi mdi-appnet"></i>

            <span> Average
</span></a></li>

<li class="menu-title">Help & Support</li>
<li><a href="{{ url('aboutus') }}" class="waves-effect"><i class="mdi mdi-help-circle"></i>

<span> About Us
</span></a></li>

<li>
  <a href="{{ route('logout') }}" class="waves-effect" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="mdi mdi-quicktime"></i>
        <span> Log Out
        </span>
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
  </li>

</ul>
</div>

<div class="clearfix">
</div>
</div>
