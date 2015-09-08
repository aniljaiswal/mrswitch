<ul class="nav navbar-nav">
    <li><a href="{{url('profile/index')}}">Mr. Switch</a></li>
    @if (Auth::check())
        <li @if (Request::is('profile/visits*')) class="active" @endif>
            <a href="/profile/visits">My Visits</a>
        </li>
        <li @if (Request::is('profile/payments*')) class="active" @endif>
            <a href="/profile/payments">Payments</a>
        </li>
    @endif
</ul>

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="/auth/login">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false">{{ Auth::user()->name }}
               <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/profile/settings">Settings</a></li>
                <li><a href="/auth/logout">Logout</a></li>
            </ul>
        </li>
    @endif
</ul>

<div class="clearfix"></div>
