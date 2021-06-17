<div class="topbar">

    <nav class="navbar-custom">
        <div class="dropdown notification-list nav-pro-img">

            <div class="list-inline-item hide-phone app-search">
                <form role="search" class="">
                    <div class="form-group pt-1">
                        <input type="text" class="form-control" placeholder="Search..">
                        <a href="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <ul class="list-inline float-right mb-0 mr-3">
            <!-- language-->
            {{-- <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ti-email noti-icon"></i>
                    @if (App\Models\Message::where('status', 0)->get())
                        <span class="badge badge-danger heartbit  a-animate-blink  noti-icon-badge">
                            {{ App\Models\Message::where('status', 0)->count() }}
                        </span>
                    @else
                        <span class="badge badge-danger heartbit">
                        </span>
                    @endif
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title align-self-center">
                        @if (count(App\Models\Message::where('status', 0)->get()))
                            <h5>
                                <span class="badge badge-danger float-right">Anda Memiliki
                                    {{ App\Models\Message::where('status', 0)->count() }} pesan belum di
                                    baca</span>
                            </h5>

                        @else
                            <h5>
                                <span class="badge badge-danger float-right">Belum ada pesan
                            </h5>
                        @endif
                    </div>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        Lihat semua pesan
                    </a>
                </div>

            </li> --}}

            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt="user"
                        class="rounded-circle img-thumbnail">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5>{{ Auth::user()->name }}</h5>
                    </div>
                    {{-- <a class="dropdown-item" href="#">
                        <i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#">
                        <span class="badge badge-success float-right">5</span>
                        <i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                    <div class="dropdown-divider"></div> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <span class="dropdown-item">
                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <i class="mdi mdi-logout m-r-5 text-muted"></i>Keluar
                            </x-responsive-nav-link>
                        </span>
                    </form>
                </div>
            </li>
        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

        <div class="clearfix"></div>

    </nav>

</div>
