<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('admin.home') }}">
        <img class="navbar-brand-full" src="/images/admin/retinens-large.png" width="89" height="25" alt="RETINENS WEB SHOP">
        <img class="navbar-brand-minimized" src="/images/admin/retinens-small.png" width="30" height="30" alt="RETINENS WEB SHOP">
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="{{ route('admin.home') }}">Administration</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="/images/admin/default-avatar.svg" alt="admin@bootstrapmaster.com">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fas fa-bell"></i> Updates--}}
                    {{--<span class="badge badge-info">42</span>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fa fa-envelope-o"></i> Messages--}}
                    {{--<span class="badge badge-success">42</span>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fa fa-tasks"></i> Tasks--}}
                    {{--<span class="badge badge-danger">42</span>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fa fa-comments"></i> Comments--}}
                    {{--<span class="badge badge-warning">42</span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-header text-center">--}}
                    {{--<strong>Settings</strong>--}}
                {{--</div>--}}
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fa fa-user"></i> Profile</a>--}}
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fa fa-wrench"></i> Settings</a>--}}
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fa fa-usd"></i> Payments--}}
                    {{--<span class="badge badge-secondary">42</span>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item" href="#">--}}
                    {{--<i class="fa fa-file"></i> Projects--}}
                    {{--<span class="badge badge-primary">42</span>--}}
                {{--</a>--}}
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); $('#logout-form').submit();">
                    <i class="fa fa-sign-out-alt"></i> Déconnexion
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>

