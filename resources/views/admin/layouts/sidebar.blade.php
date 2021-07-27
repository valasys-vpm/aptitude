<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light brand-lightblue icon-colored menupos-static">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="javascript:void(0)" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-settings"></i>
                </div>
                <span class="b-title">Admin Panel</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:void(0)"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li data-username="dashboard" class="nav-item active"><a href="{{ route('admin.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>

                <li data-username="settings" class="nav-item pcoded-hasmenu">
                    <a href="javascript:void(0)" class="nav-link"><span class="pcoded-micon"><i class="feather feather icon-settings"></i></span><span class="pcoded-mtext">Settings</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('designation.index') }}" class="">Designations</a></li>
                        <li class=""><a href="{{ route('question.index') }}" class="">Questions</a></li>
                    </ul>
                </li>

                <li data-username="user" class="nav-item active"><a href="{{ route('user.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather feather icon-users"></i></span><span class="pcoded-mtext">User Managment</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
