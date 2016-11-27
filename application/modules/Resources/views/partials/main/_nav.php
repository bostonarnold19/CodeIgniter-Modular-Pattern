<nav class="navbar navbar-inverse navbar-fixed-top nav-custom-bg-color hidden-xs">
    <div class="container container-fluid-custom-width">
        <ul class="nav navbar-nav">
            <li>
                <a class="navbar-brand nav-custom-text-color" href="#">Shopter</a>
            </li>
            <li>
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="search-input-custom form-control">
                        <span class="input-group-btn">
                            <button class="search-button-custom" type="button">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- @if (Auth::guest()) -->
            <li>
                <a class="nav-custom-text-color" href="#">Login</a>
            </li>
            <li>
                <a class="nav-custom-text-color" href="#">Register</a>
            </li>
            <!-- @else
            <li class="dropdow">
                <a href="#" class="dropdown-toggle dropdown-toggle-custom" data-toggle="dropdown" role="button" aria-expanded="true">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                    <li><a class="dropdown-list-custom" href="#">Items</a></li>
                </ul>
            </li>
            <li class="dropdow">
                <a href="#" class="dropdown-toggle dropdown-toggle-custom" data-toggle="dropdown" role="button" aria-expanded="true">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                    <li><a class="dropdown-list-custom" href="#">Messages</a></li>
                </ul>
            </li>
            <li class="dropdow">
                <a href="#" class="dropdown-toggle dropdown-toggle-custom" data-toggle="dropdown" role="button" aria-expanded="true">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                    <li><a class="dropdown-list-custom" href="#">Notifications</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-custom-text-color" href="{{ route('profile.index') }}">{{ Auth::user()->profile->first_name }}</a>
            </li>
            <li class="dropdow">
                <a href="#" class="dropdown-toggle dropdown-toggle-custom" data-toggle="dropdown" role="button" aria-expanded="true">
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                    <li><a class="dropdown-list-custom" href="#">Shop Name</a></li>
                    <li><a class="dropdown-list-custom" href="#">Shop Management</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-list-custom" href="#">Settings</a></li>
                    <li><a class="dropdown-list-custom" href="#">Earning Preferences</a></li>
                    <li><a class="dropdown-list-custom" href="#">Shop Associates</a></li>
                    <li><a class="dropdown-list-custom" href="#">Report a Problem</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-list-custom" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
            @endif -->
        </ul>
    </div> <!-- container -->
</nav> <!-- nav -->