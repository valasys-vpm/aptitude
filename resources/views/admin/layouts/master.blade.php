<!DOCTYPE html>
<html lang="en">

<head>
    <title>VM-Aptitude Portal</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('public/template') }}/assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('public/template') }}/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('public/template') }}/assets/plugins/animation/css/animate.min.css">
    <!-- prism css -->
    <link rel="stylesheet" href="{{ asset('public/template') }}/assets/plugins/prism/css/prism.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('public/template') }}/assets/css/style.css">

    @yield('style')

</head>

<body class="layout-6">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

@include('admin.layouts.sidebar')

@include('admin.layouts.header')

<!-- [ chat user list ] start -->
<section class="header-user-list">
    <div class="h-list-header">
        <div class="input-group">
            <input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
        </div>
    </div>
    <div class="h-list-body">
        <a href="#!" class="h-close-text"><i class="feather icon-chevrons-right"></i></a>
        <div class="main-friend-cont scroll-div">
            <div class="main-friend-list">
                <div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing  . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing  . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing  . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing  . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ chat user list ] end -->

<!-- [ chat message ] start -->
<section class="header-chat">
    <div class="h-list-header">
        <h6>Josephin Doe</h6>
        <a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
    </div>
    <div class="h-list-body">
        <div class="main-chat-cont scroll-div">
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">hello Datta! Will you tell me something</p>
                            <p class="chat-cont">about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">can you help me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-list-footer">
        <div class="input-group">
            <input type="file" class="chat-attach" style="display:none">
            <a href="#!" class="input-group-prepend btn btn-success btn-attach">
                <i class="feather icon-paperclip"></i>
            </a>
            <input type="text" name="h-chat-text" class="form-control h-send-chat" placeholder="Write hear . . ">
            <button type="submit" class="input-group-append btn-send btn btn-primary">
                <i class="feather icon-message-circle"></i>
            </button>
        </div>
    </div>
</section>
<!-- [ chat message ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                @include('admin.layouts.breadcrumb')
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        @include('admin.layouts.alert')

                        @yield('content')
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

<!-- Warning Section start -->
<!-- Older IE warning message -->
<!--[if lt IE 11]>
<div class="ie-warning">
<h1>Warning!!</h1>
<p>You are using an outdated version of Internet Explorer, please upgrade
    <br/>to any of the following web browsers to access this website.
</p>
<div class="iew-container">
    <ul class="iew-download">
        <li>
            <a href="http://www.google.com/chrome/">
                <img src="{{ asset('public/template') }}/assets/images/browser/chrome.png" alt="Chrome">
                <div>Chrome</div>
            </a>
        </li>
        <li>
            <a href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="{{ asset('public/template') }}/assets/images/browser/firefox.png" alt="Firefox">
                <div>Firefox</div>
            </a>
        </li>
        <li>
            <a href="http://www.opera.com">
                <img src="{{ asset('public/template') }}/assets/images/browser/opera.png" alt="Opera">
                <div>Opera</div>
            </a>
        </li>
        <li>
            <a href="https://www.apple.com/safari/">
                <img src="{{ asset('public/template') }}/assets/images/browser/safari.png" alt="Safari">
                <div>Safari</div>
            </a>
        </li>
        <li>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="{{ asset('public/template') }}/assets/images/browser/ie.png" alt="">
                <div>IE (11 & above)</div>
            </a>
        </li>
    </ul>
</div>
<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="{{ asset('public/template') }}/assets/js/vendor-all.min.js"></script>
<script src="{{ asset('public/template') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('public/template') }}/assets/js/pcoded.min.js"></script>

<!-- prism Js -->
<script src="{{ asset('public/template') }}/assets/plugins/prism/js/prism.min.js"></script>
<script>
    $('.layout-type > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('.layout-type > a').removeClass('active');
        $(this).addClass('active');
        $('head').append('<link rel="stylesheet" class="layout-css" href="">');
        if (temp == "menu-dark") {
            $('.pcoded-navbar').removeClassPrefix('menu-');
            $('.pcoded-navbar').removeClass('navbar-dark');
        }
        if (temp == "menu-light") {
            $('.pcoded-navbar').removeClassPrefix('menu-');
            $('.pcoded-navbar').removeClass('navbar-dark');
            $('.pcoded-navbar').addClass(temp);
        }
        if (temp == "reset") {
            location.reload();
        }
        if (temp == "dark") {
            $('.pcoded-navbar').removeClassPrefix('menu-');
            $('.pcoded-navbar').addClass('navbar-dark');
            $('.layout-css').attr("href", "assets/css/layouts/dark.css");
        } else {
            $('.layout-css').attr("href", "");
        }
    });
    // Background images
    $('.bg-images > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('body').removeAttr('style');
        $('.bg-images > a').removeClass('active');
        $('body').css({'background-image':temp,'background-size':'cover'});
    });
    // Background pattern
    $('.bg-images.pattern > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('body').removeAttr('style');
        $('.bg-images.pattern > a').removeClass('active');
        $('body').css({'background-image':temp,'background-size':'auto'});
    });
    // Background Color
    $('.laybg-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('body').removeAttr('style');
        $('.laybg-color > a').removeClass('active');
        $(this).addClass('active');
        $('body').css('background',temp);
    });
    // Active Color
    $('.active-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('.active-color > a').removeClass('active');
        $(this).addClass('active');
        if (temp == "active-default") {
            $('.pcoded-navbar').removeClassPrefix('active-');
        } else {
            $('.pcoded-navbar').removeClassPrefix('active-');
            $('.pcoded-navbar').addClass(temp);
        }
    });
    // Caption Hide
    $('#caption-hide').change(function() {
        if ($(this).is(":checked")) {
            $('.pcoded-navbar').addClass('caption-hide');
        } else {
            $('.pcoded-navbar').removeClass('caption-hide');
        }
    });
    // title Color
    $('.title-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('.title-color > a').removeClass('active');
        $(this).addClass('active');
        if (temp == "title-default") {
            $('.pcoded-navbar').removeClassPrefix('title-');
        } else {
            $('.pcoded-navbar').removeClassPrefix('title-');
            $('.pcoded-navbar').addClass(temp);
        }
    });
    // Menu Icon Color
    $('#icon-colored').change(function() {
        if ($(this).is(":checked")) {
            $('.pcoded-navbar').addClass('icon-colored');
        } else {
            $('.pcoded-navbar').removeClass('icon-colored');
        }
    });
    // Box layouts
    $('#box-layouts').change(function() {
        if ($(this).is(":checked")) {
            $('body').addClass('container');
            $('body').addClass('box-layout');
        } else {
            $('body').removeClass('container');
            $('body').removeClass('box-layout');
        }
    });
    // Menu Dropdown icon
    function drpicon(temp) {
        if (temp == "style1") {
            $('.pcoded-navbar').removeClassPrefix('drp-icon-');
        } else {
            $('.pcoded-navbar').removeClassPrefix('drp-icon-');
            $('.pcoded-navbar').addClass('drp-icon-' + temp);
        }
    }
    // Menu subitem icon
    function menuitemicon(temp) {
        if (temp == "style1") {
            $('.pcoded-navbar').removeClassPrefix('menu-item-icon-');
        } else {
            $('.pcoded-navbar').removeClassPrefix('menu-item-icon-');
            $('.pcoded-navbar').addClass('menu-item-icon-' + temp);
        }
    }
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script>

<script>
    $(".alert-dismissible").fadeTo(5000,500).slideUp(500,function(){$(".alert-dismissible").slideUp(500)});
</script>

@yield('javascript')

</body>
</html>
