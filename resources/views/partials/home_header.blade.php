<header id="header" role="banner">
    <div class="jt_row container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand normal logo" href="{{ route('home_path') }}"><div class="logo_slikhuset"></div></a>
            <a class="navbar-brand mini" href="{{ route('home_path') }}"><div class="logo_slikhuset dark"></div></a>
            <a class="navbar-brand mini darker" href="{{ route('home_path') }}"><div class="logo_slikhuset dark"></div></a>
        </div>

        <nav class="collapse navbar-collapse navbar-right navbar-main-collapse" role="navigation">
            <ul id="nav" class="nav navbar-nav navigation">
                <li class="page-scroll menu-item {{ Request::is('/') ? 'current' : '' }}"><a href="{{ route('home_path') }}">Forside</a></li>
                <li class="page-scroll menu-item {{ Request::is('kolding') ? 'current' : '' }}"><a href="{{ route('kolding_path') }}">Kolding</a></li>
                <li class="page-scroll menu-item {{ Request::is('horsens') ? 'current' : '' }}"><a href="{{ route('horsens_path') }}">Horsens</a></li>
                <li class="page-scroll menu-item {{ Request::is('nyheder') ? 'current' : '' }}"><a href="{{ route('nyheder_path') }}">Nyheder</a></li>
            </ul>
        </nav>
    </div>
</header>