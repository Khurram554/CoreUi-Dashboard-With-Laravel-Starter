<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="{{ route('backend.dashboard') }}">

                <x-coreui-icon class="nav-icon" icon="cil-speedometer" />
                Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

        <li class="nav-title">Profile Management</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                Profile </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>


    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
