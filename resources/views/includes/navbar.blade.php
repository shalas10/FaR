<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo">
            <span><img src="build/assets/images/logo-sm.png" alt="logo-small" class="logo-sm"/></span>
            <span><img src="build/assets/images/logo.png" alt="logo-large" class="logo-lg" /></span>
        </a>
    </div>
    <!-- Navbar -->
    <nav class="navbar-custom">
        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input" type="search" placeholder="Search here.." /> <a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap"><i class="mdi mdi-close-circle"></i></a>
            </div>
        </div>

        {{-- Profil --}}
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="build/assets/images/avatar.jpg" alt="profile-user" class="rounded-circle"/>
                    <span class="ml-1 nav-user-name hidden-sm">Faishal Shalas<i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" : href="route('profile.edit')">
                        <i class="dripicons-user text-muted mr-2"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="dripicons-exit text-muted mr-2"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>

        {{-- Tombol Sidebar --}}
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                  <i class="mdi mdi-menu nav-icon"></i>
                </button>
            </li>
        </ul>

        {{-- COBA2 PROFIL --}}
        {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div> --}}
        {{-- END COBA2 --}}

    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->