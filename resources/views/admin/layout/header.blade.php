<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button>

    <a class="c-header-brand d-sm-none" href="#">
        {{ config("app.name") }} - Administration
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>

    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{ route('home') }}"><i class="fa fa-home"></i>Dashboard</a></li>
{{--        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{ route('account.index') }}"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>--}}
    </ul>
    <ul class="c-header-nav mfs-auto">
        <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="/images/admin/default-avatar.svg" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
{{--                <a class="dropdown-item" href="{{ route('account.index') }}">--}}
{{--                    Paramètres de compte--}}
{{--                </a>--}}
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
    <div class="c-subheader justify-content-between px-3">
        <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}"><i class="fa fa-home"></i> Dashboard</a>
            </li>
            @yield('breadcrumbs')
        </ol>
    </div>
</header>

