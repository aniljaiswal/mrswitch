<header>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="{{url('profile/index')}}" title="Mr. Switch" class="navbar-brand">
          <img src="/img/mr_switch_logo.png" width="46" height="40" alt="Mr. Switch"/>
          <b>Mr. Switch</b>
        </a>
      </div>
      <nav class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search Everywhere...">
          </div>
          <button type="submit" class="btn btn-default">Go!</button>
        </form>
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
      </nav>
    </div>
  </div> <!-- / .navigation -->
</header>
