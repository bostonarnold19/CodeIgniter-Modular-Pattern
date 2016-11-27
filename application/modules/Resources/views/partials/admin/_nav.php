<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Shopter's Panel</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="{{ route('dashboard') }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->profile->first_name }}  <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="{{ Request::is('dashboard') ? "active" : "" }}">
                <a href="{{ route('dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="{{ Request::is('manage/user/access', 'manage/shop/setting') ? "active" : "" }}">
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> User Management <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="{{ route('manage.user.access') }}"><i class="fa fa-user"></i> User Access</a>
                    </li>
                    <li>
                        <a href="{{ route('manage.shop.setting') }}"><i class="fa fa-home"></i> Shop Settings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>