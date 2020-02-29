
<div class="c-sidebar c-sidebar-dark bg-gradient-dark c-sidebar-fixed c-sidebar-lg-show c-sidebar-unfoldable" id="sidebar">
    <div class="c-sidebar-brand">
        <a href="{{ route('admin.index') }}" class="text-light">
            {{ config("app.name") }} - Administration
        </a>
    </div>

    <ul class="c-sidebar-nav" data-drodpown-accordion="true">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.index') }}">
                <i class="c-sidebar-nav-icon text-light fas fa-fw fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
