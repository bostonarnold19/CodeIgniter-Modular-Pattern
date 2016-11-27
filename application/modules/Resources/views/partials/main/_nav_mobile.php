<nav class="navbar navbar-inverse navbar-fixed-top visible-xs nav-custom-bg-color">
    <div class="container">
        <form class="navbar-form navbar-form-custom" role="search">
            <div class="input-group">
                <input type="text" class="search-input-custom form-control">
                <span class="input-group-btn">
                    <button class="search-button-custom" type="button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
    <div class="container subnav-mobile-background-custom">
        <ul class="nav navbar-nav navbar-mobile-custom">
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-home fa-2x"></span>
                </a>
            </li>
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-shopping-cart fa-2x"></span>
                </a>
            </li>
            <!-- @if (Auth::guest()) -->
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-info fa-2x"></span>
                </a>
            </li>
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-phone fa-2x"></span>
                </a>
            </li>
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-bars fa-2x"></span>
                </a>
            </li>
      <!--      @else
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-envelope fa-2x"></span>
                </a>
            </li>
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-bell fa-2x"></span>
                </a>
            </li>
            <li class="navbar-mobile-icon-custom">
                <a href="#" class="nav-custom-text-color">
                    <span class="fa fa-bars fa-2x"></span>
                </a>
            </li>
            @endif -->
        </ul>
    </div>
</nav>
<div class="nav-mobile-space-custom visible-xs"></div>