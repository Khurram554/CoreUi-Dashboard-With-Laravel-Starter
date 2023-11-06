<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">

            <x-coreui-icon class="icon icon-lg" icon="cil-menu" />
        </button>

        <a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
            </svg></a>
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        </ul>

        <ul class="header-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <x-coreui-icon class="icon icon-lg" icon="cil-bell" />
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <x-coreui-icon class="icon icon-lg" icon="cil-list-rich" />
                </a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <x-coreui-icon class="icon icon-lg" icon="cil-envelope-open" />
                </a></li>
        </ul>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}"
                            alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Account</div>
                    </div><a class="dropdown-item" href="#">

                        <x-coreui-icon class="icon me-2" icon="cil-bell" />
                        Updates
                        <span class="badge badge-sm bg-info ms-2">42</span></a>

                    <a class="dropdown-item" href="#">

                        <x-coreui-icon class="icon me-2" icon="cil-envelope-open" />
                        Messages<span class="badge badge-sm bg-success ms-2">42</span>
                    </a>

                    <a class="dropdown-item" href="#">

                        <x-coreui-icon class="icon me-2" icon="cil-task" />
                        Tasks<span class="badge badge-sm bg-success ms-2">42</span>
                    </a>

                    <a class="dropdown-item" href="#">

                        <x-coreui-icon class="icon me-2" icon="cil-comment-square" />
                        Comments<span class="badge badge-sm bg-success ms-2">42</span>
                    </a>


                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Settings</div>
                    </div>


                    <a class="dropdown-item" href="{{route('backend.profile.edit')}}">

                        <x-coreui-icon class="icon me-2" icon="cil-user" />
                        Profile
                    </a>

                    <a class="dropdown-item" href="#">

                        <x-coreui-icon class="icon me-2" icon="cil-settings" />
                        Settings
                    </a>

                    <a class="dropdown-item" href="#">

                        <x-coreui-icon class="icon me-2" icon="cil-credit-card" />
                        Payments
                    </a>

                    <a class="dropdown-item" href="#">

                        <x-coreui-icon class="icon me-2" icon="cil-file" />
                        Projects
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                        <x-coreui-icon class="icon me-2" icon="cil-lock-locked" />
                        Lock Account
                    </a>




                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    class="dropdown-item"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <x-coreui-icon class="icon me-2" icon="cil-account-logout" />
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>





                </div>
            </li>
        </ul>
    </div>
    <div class="header-divider"></div>
   @yield('breadcrum')
</header>
