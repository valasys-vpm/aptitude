<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <div class="b-bg">
                <i class="feather icon-trending-up"></i>
            </div>
            <span class="b-title">Admin Panel</span>
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
            
        </ul>
        <ul class="navbar-nav ml-auto">
            
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>{{ Auth::user()->name }}</span>
                            <a href="{{ route('logout') }}" class="dud-logout" title="Logout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="feather icon-lock"></i> Sign Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->
