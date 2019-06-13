<div class="topbar"><nav class="navbar-custom">
<!-- Search input -->

<div class="search-wrap" id="search-wrap">

<div class="search-bar">
<input class="search-input" type="search" placeholder="Search"> <a href="#" class="close-search toggle-search" data-target="#search-wrap"><i class="mdi mdi-close-circle"></i></a>
</div>
</div>
<ul class="list-inline float-right mb-0">
<!-- Search -->
<li class="list-inline-item dropdown notification-list"><a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap"><i class="mdi mdi-magnify noti-icon"></i></a></li>
<!-- Fullscreen -->
<li class="list-inline-item dropdown notification-list hidden-xs-down"><a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i class="mdi mdi-fullscreen noti-icon"></i></a></li>

<!-- User-->
<li class="list-inline-item dropdown notification-list"><a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

    <img src="{{asset('images')}}\{{$profile->banner}}" alt="user" class="rounded-circle"></a>

<div class="dropdown-menu dropdown-menu-right profile-dropdown">
<a class="dropdown-item" href="{{ route('profile.create') }}" ><i class="dripicons-user text-muted"></i>Change Profile</a>
 <a class="dropdown-item" href="{{ url('changepassword') }}"><i class="dripicons-gear text-muted"></i>Change Password</a>
<a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
<div class="dropdown-divider">
</div>
<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted"></i>
      Logout
    </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</div>
</li>
</ul>
