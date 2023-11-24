<div class="position-relative">
    <!--Nav Start-->
    <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom">
        <div class="container-fluid navbar-inner">
            <a href="{{ url("dashboard/index.html") }}" class="navbar-brand">
                <!--Logo start-->
                <img width="88" src="{{ asset('assets/img/logo.png') }}" class="iq-logo" viewBox="0 0 88 43" fill="none"alt="">
                <!--logo End-->
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon"> 
                    <svg width="20px" height="20px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                    </svg>
                </i>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="navbar-toggler-bar bar1 mt-2"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="align-items-center navbar-nav ms-auto navbar-list mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0 d-flex align-items-center" href="{{ url("#") }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="caption ms-3">
                                <h6 class="mb-0 caption-title d-md-imline">{{ auth()->user()->name }}</h6>
                                <p class="mb-0 caption-sub-title d-md-inline">
                                    @if (auth()->user()->hasRole('admin'))
                                        Admin
                                    @elseif (auth()->user()->hasRole('staff'))
                                        Staff TU
                                    @elseif (auth()->user()->hasRole('guru'))
                                        Guru
                                    @elseif (auth()->user()->hasRole('kepsek'))
                                        Kepala Sekolah
                                    @endif
                                </p>
                                {{-- <span class="d-none ">{{ auth()->user()->name }}</span> --}}
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><button class="dropdown-item" type="submit">Logout</button></li>
                            </form>
                        </ul>
                    </li>                    

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link py-0 d-flex align-items-center" href="{{ url("#") }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="caption ms-3 d-none d-md-block">
                                <h6 class="mb-0 caption-title">{{ auth()->user()->name }}</h6>
                                <p class="mb-0 caption-sub-title">
                                    @if (auth()->user()->hasRole('admin'))
                                        Admin
                                    @elseif (auth()->user()->hasRole('staff'))
                                        Staff TU
                                    @elseif (auth()->user()->hasRole('guru'))
                                        Guru
                                    @elseif (auth()->user()->hasRole('kepsek'))
                                        Kepala Sekolah
                                    @endif
                                </p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><button class="dropdown-item" type="submit">Logout</button></li>
                            </form>
                        </ul>
                    </li> --}}
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!--Nav End-->
</div>