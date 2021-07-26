@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card lay-customizer">
                <div class="card-block">
                    <h5>Layout</h5>
                    <hr>
                    <div class="theme-color layout-type">
                        <a href="#!" class="" data-value="menu-dark" data-toggle="tooltip" title="Default Layout"><span></span><span></span></a>
                        <a href="#!" class="active" data-value="menu-light" data-toggle="tooltip" title="Light"><span></span><span></span></a>
                        <a href="#!" class="" data-value="dark" data-toggle="tooltip" title="Dark"><span></span><span></span></a>
                        <a href="#!" class="" data-value="reset" data-toggle="tooltip" title="Reset">Reset to Default</a>
                    </div>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="box-layouts">
                            <label for="box-layouts" class="cr"></label>
                        </div>
                        <label>Box Layouts</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card lay-customizer">
                <div class="card-block">
                    <h5>Background</h5>
                    <hr>
                    <div class="theme-color laybg-color small">
                        <a href="#!" class="" data-value="#04a9f5" style="background:#04a9f5"></a>
                        <a href="#!" class="" data-value="#ff5252" style="background:#ff5252"></a>
                        <a href="#!" class="" data-value="#9575CD" style="background:#9575CD"></a>
                        <a href="#!" class="active" data-value="#23b7e5" style="background:#23b7e5"></a>
                        <a href="#!" class="" data-value="#424448" style="background:#424448"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #1de9b6 0%, #1dc4e9 100%)" style="background:linear-gradient(to right, #1de9b6 0%, #1dc4e9 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #899FD4 0%, #A389D4 100%)" style="background:linear-gradient(to right, #899FD4 0%, #A389D4 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #4facfe 0%, #00f2fe 100%)" style="background:linear-gradient(to right, #4facfe 0%, #00f2fe 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #667eea 0%, #764ba2 100%)" style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #f77062 0%, #fe5196 100%)" style="background:linear-gradient(to right, #f77062 0%, #fe5196 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #9be15d 0%, #00e3ae 100%)" style="background:linear-gradient(to right, #9be15d 0%, #00e3ae 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #b224ef 0%, #7579ff 100%)" style="background:linear-gradient(to right, #b224ef 0%, #7579ff 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #0acffe 0%, #495aff 100%)" style="background:linear-gradient(to right, #0acffe 0%, #495aff 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #01a9ac 0%, #01dbdf 100%)" style="background:linear-gradient(to right, #01a9ac 0%, #01dbdf 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #fe5d70 0%, #fe909d 100%)" style="background:linear-gradient(to right, #fe5d70 0%, #fe909d 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #0ac282 0%, #0df3a3 100%)" style="background:linear-gradient(to right, #0ac282 0%, #0df3a3 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #fe9365 0%, #feb798 100%)" style="background:linear-gradient(to right, #fe9365 0%, #feb798 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #f075c7 0%, #9191ff 100%)" style="background:linear-gradient(to right, #f075c7 0%, #9191ff 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #b275f0 0%, #7575f0 100%)" style="background:linear-gradient(to right, #b275f0 0%, #7575f0 100%)"></a>
                        <a href="#!" class="" data-value="linear-gradient(to right, #A445B2 0%, #D41872 52%, #FF0066 100%)" style="background:linear-gradient(to right, #A445B2 0%, #D41872 52%, #FF0066 100%)"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card lay-customizer">
                <div class="card-block">
                    <h5>Background Image</h5>
                    <hr>
                    <div class="theme-color bg-images">
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/bg1.jpg')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/thumb_bg1.jpg')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/bg3.jpg')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/thumb_bg3.jpg')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/bg4.jpg')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/thumb_bg4.jpg')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/bg5.jpg')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/thumb_bg5.jpg')"></a>
                    </div>
                </div>
            </div>
            <div class="card lay-customizer">
                <div class="card-block">
                    <h5>Background Pattern</h5>
                    <hr>
                    <div class="theme-color bg-images pattern">
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/1.png')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/1.png')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/2.png')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/2.png')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/3.png')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/3.png')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/4.png')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/4.png')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/5.png')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/5.png')"></a>
                        <a href="#!" class="" data-value="url('{{ asset('public/template') }}/assets/images/bg-images/6.png')" style="background-image:url('{{ asset('public/template') }}/assets/images/bg-images/6.png')"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card lay-customizer">
                <div class="card-block">
                    <h5>Navbar</h5>
                    <hr>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="caption-hide">
                            <label for="caption-hide" class="cr"></label>
                        </div>
                        <label>Menu Title Hide</label>
                    </div>
                    <div class="form-group mb-3">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="icon-colored" checked>
                            <label for="icon-colored" class="cr"></label>
                        </div>
                        <label>Icon Color</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h6>Menu Dropdown Icon</h6>
                            <div class="theme-color">
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in-1" id="drpicon-1" checked onchange="drpicon('style1')">
                                        <label for="drpicon-1" class="cr"><i class="feather icon-chevron-right"></i></label>
                                    </div>
                                </div>
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in-1" id="drpicon-2" onchange="drpicon('style2')">
                                        <label for="drpicon-2" class="cr"><i class="feather icon-chevrons-right"></i></label>
                                    </div>
                                </div>
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in-1" id="drpicon-3" onchange="drpicon('style3')">
                                        <label for="drpicon-3" class="cr"><i class="feather icon-plus"></i></label>
                                    </div>
                                </div>
                            </div>
                            <h6>Menu List Icon</h6>
                            <div class="theme-color">
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in" id="subitem-1" checked onchange="menuitemicon('style1')">
                                        <label for="subitem-1" class="cr"><i class=" "> </i>     </label>
                                    </div>
                                </div>
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in" id="subitem-2" onchange="menuitemicon('style2')">
                                        <label for="subitem-2" class="cr"><i class="feather icon-minus"></i></label>
                                    </div>
                                </div>
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in" id="subitem-3" onchange="menuitemicon('style3')">
                                        <label for="subitem-3" class="cr"><i class="feather icon-check"></i></label>
                                    </div>
                                </div>
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in" id="subitem-4" onchange="menuitemicon('style4')">
                                        <label for="subitem-4" class="cr"><i class="icon feather icon-corner-down-right"></i></label>
                                    </div>
                                </div>
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in" id="subitem-5" onchange="menuitemicon('style5')">
                                        <label for="subitem-5" class="cr"><i class="icon feather icon-chevrons-right"></i></label>
                                    </div>
                                </div>
                                <div class="form-group d-inline">
                                    <div class="radio radio-primary d-inline">
                                        <input type="radio" name="radio-in" id="subitem-6" onchange="menuitemicon('style6')">
                                        <label for="subitem-6" class="cr"><i class="icon feather icon-chevron-right"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h6>Active Color</h6>
                            <div class="theme-color active-color small">
                                <a href="#!" class=" active" data-value="active-default"></a>
                                <a href="#!" class="" data-value="active-blue"></a>
                                <a href="#!" class="" data-value="active-red"></a>
                                <a href="#!" class="" data-value="active-purple"></a>
                                <a href="#!" class="" data-value="active-lightblue"></a>
                                <a href="#!" class="" data-value="active-dark"></a>
                            </div>
                            <h6>Menu Title Color</h6>
                            <div class="theme-color title-color small">
                                <a href="#!" class=" active" data-value="title-default"></a>
                                <a href="#!" class="" data-value="title-blue"></a>
                                <a href="#!" class="" data-value="title-red"></a>
                                <a href="#!" class="" data-value="title-purple"></a>
                                <a href="#!" class="" data-value="title-lightblue"></a>
                                <a href="#!" class="" data-value="title-dark"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Layout</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <h6>To use this layout for your project add <code><strong>layout-6</strong></code> class in <code><strong>&lt;body&gt;</strong></code> tag.</h6>
                    <pre>
                                                <code class="language-markup">
                                                    &lt;body class="layout-6"&gt;
                                                    &lt;/body&gt;
                                                </code>
                                            </pre>
                    <h6>also you need to add <code><strong>menu-light, brand-lightblue, icon-colored, menupos-static</strong></code> class in <code><strong>&lt;nav&gt;</strong></code> tag.</h6>
                    <pre>
                                                <code class="language-markup">
                                                    &lt;!-- [ navigation menu ] start --&gt;
                                                    &lt;nav class="pcoded-navbar menu-light brand-lightblue icon-colored menupos-static"&gt;
                                                    &lt;/nav&gt;
                                                    &lt;!-- [ navigation menu ] end --&gt;
                                                </code>
                                            </pre>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Page Layout</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                                            <pre>
                                                <code class="language-markup">
                                                    &lt;!DOCTYPE html&gt;
                                                    &lt;html lang="en"&gt;

                                                    &lt;head&gt;
                                                        &lt;title&gt;Datta Able - Bootstrap 4 premium admin template&lt;/title&gt;
                                                        &lt;!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries --&gt;
                                                        &lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;
                                                        &lt;!--[if lt IE 10]&gt;
                                                    		&lt;script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"&gt;&lt;/script&gt;
                                                    		&lt;script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"&gt;&lt;/script&gt;
                                                    		&lt;![endif]--&gt;
                                                        &lt;!-- Meta --&gt;
                                                        &lt;meta charset="utf-8"&gt;
                                                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"&gt;
                                                        &lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;
                                                        &lt;meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." /&gt;
                                                        &lt;meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template"&gt;
                                                        &lt;meta name="author" content="Codedthemes" /&gt;

                                                        &lt;!-- Favicon icon --&gt;
                                                        &lt;link rel="icon" href="{{ asset('public/template') }}/assets/images/favicon.ico" type="image/x-icon"&gt;
                                                        &lt;!-- fontawesome icon --&gt;
                                                        &lt;link rel="stylesheet" href="{{ asset('public/template') }}/assets/fonts/fontawesome/css/fontawesome-all.min.css"&gt;
                                                        &lt;!-- animation css --&gt;
                                                        &lt;link rel="stylesheet" href="{{ asset('public/template') }}/assets/plugins/animation/css/animate.min.css"&gt;
                                                        &lt;!-- prism css --&gt;
                                                        &lt;link rel="stylesheet" href="{{ asset('public/template') }}/assets/plugins/prism/css/prism.min.css"&gt;
                                                        &lt;!-- vendor css --&gt;
                                                        &lt;link rel="stylesheet" href="{{ asset('public/template') }}/assets/css/style.css"&gt;

                                                    &lt;/head&gt;

                                                    &lt;body class="layout-6"&gt;
                                                        &lt;!-- [ Pre-loader ] start --&gt;
                                                        &lt;div class="loader-bg"&gt;
                                                            &lt;div class="loader-track"&gt;
                                                                &lt;div class="loader-fill"&gt;&lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- [ Pre-loader ] End --&gt;

                                                        &lt;!-- [ navigation menu ] start --&gt;
                                                        &lt;nav class="pcoded-navbar menu-light brand-lightblue icon-colored menupos-static"&gt;
                                                            &lt;div class="navbar-wrapper"&gt;
                                                                &lt;div class="navbar-brand header-logo"&gt;
                                                                    &lt;a href="index.html" class="b-brand"&gt;
                                                                        &lt;div class="b-bg"&gt;
                                                                            &lt;i class="feather icon-trending-up"&gt;&lt;/i&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;span class="b-title"&gt;Datta Able&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                    &lt;a class="mobile-menu" id="mobile-collapse" href="#!"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class="navbar-content scroll-div"&gt;
                                                                    &lt;ul class="nav pcoded-inner-navbar"&gt;
                                                                        &lt;li class="nav-item pcoded-menu-caption"&gt;
                                                                            &lt;label&gt;Navigation&lt;/label&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item"&gt;
                                                                            &lt;a href="index.html" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-home"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Dashboard&lt;/span&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li class="nav-item pcoded-menu-caption"&gt;
                                                                            &lt;label&gt;Other&lt;/label&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="Menu levels Menu level 2.1 Menu level 2.2" class="nav-item pcoded-hasmenu"&gt;
                                                                            &lt;a href="#!" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-menu"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Menu levels&lt;/span&gt;&lt;/a&gt;
                                                                            &lt;ul class="pcoded-submenu"&gt;
                                                                                &lt;li class=""&gt;&lt;a href="" class=""&gt;Menu Level 2.1&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class="pcoded-hasmenu"&gt;
                                                                                    &lt;a href="#!" class=""&gt;Menu level 2.2&lt;/a&gt;
                                                                                    &lt;ul class="pcoded-submenu"&gt;
                                                                                        &lt;li class=""&gt;&lt;a href="" class=""&gt;Menu level 3.1&lt;/a&gt;&lt;/li&gt;
                                                                                        &lt;li class=""&gt;&lt;a href="" class=""&gt;Menu level 3.2&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;/ul&gt;
                                                                                &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="Disabled Menu" class="nav-item disabled"&gt;&lt;a href="#!" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-power"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Disabled menu&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li data-username="Sample Page" class="nav-item active"&gt;&lt;a href="sample-page.html" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-sidebar"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Sample page&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class="nav-item pcoded-menu-caption"&gt;
                                                                            &lt;label&gt;Support&lt;/label&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="Documentation" class="nav-item"&gt;&lt;a href="docs.html" class="nav-link" target="_blank"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-book"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Documentation&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li data-username="Need Support" class="nav-item"&gt;&lt;a href="https://codedthemes.support-hub.io/" class="nav-link" target="_blank"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-help-circle"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Need
                                                                                    support ?&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/nav&gt;
                                                        &lt;!-- [ navigation menu ] end --&gt;

                                                        &lt;!-- [ Header ] start --&gt;
                                                        &lt;header class="navbar pcoded-header navbar-expand-lg navbar-light"&gt;
                                                            &lt;div class="m-header"&gt;
                                                                &lt;a class="mobile-menu" id="mobile-collapse1" href="#!"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
                                                                &lt;a href="index.html" class="b-brand"&gt;
                                                                    &lt;div class="b-bg"&gt;
                                                                        &lt;i class="feather icon-trending-up"&gt;&lt;/i&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;span class="b-title"&gt;Datta Able&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/div&gt;
                                                            &lt;a class="mobile-menu" id="mobile-header" href="#!"&gt;
                                                                &lt;i class="feather icon-more-horizontal"&gt;&lt;/i&gt;
                                                            &lt;/a&gt;
                                                            &lt;div class="collapse navbar-collapse"&gt;
                                                                &lt;ul class="navbar-nav mr-auto"&gt;
                                                                    &lt;li&gt;&lt;a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"&gt;&lt;i class="feather icon-maximize"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li class="nav-item dropdown"&gt;
                                                                        &lt;a class="dropdown-toggle" href="#!" data-toggle="dropdown"&gt;Dropdown&lt;/a&gt;
                                                                        &lt;ul class="dropdown-menu"&gt;
                                                                            &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li class="nav-item"&gt;
                                                                        &lt;div class="main-search"&gt;
                                                                            &lt;div class="input-group"&gt;
                                                                                &lt;input type="text" id="m-search" class="form-control" placeholder="Search . . ."&gt;
                                                                                &lt;a href="#!" class="input-group-append search-close"&gt;
                                                                                    &lt;i class="feather icon-x input-group-text"&gt;&lt;/i&gt;
                                                                                &lt;/a&gt;
                                                                                &lt;span class="input-group-append search-btn btn btn-primary"&gt;
                                                                                    &lt;i class="feather icon-search input-group-text"&gt;&lt;/i&gt;
                                                                                &lt;/span&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                                &lt;ul class="navbar-nav ml-auto"&gt;
                                                                    &lt;li&gt;
                                                                        &lt;div class="dropdown"&gt;
                                                                            &lt;a class="dropdown-toggle" href="#!" data-toggle="dropdown"&gt;&lt;i class="icon feather icon-bell"&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;div class="dropdown-menu dropdown-menu-right notification"&gt;
                                                                                &lt;div class="noti-head"&gt;
                                                                                    &lt;h6 class="d-inline-block m-b-0"&gt;Notifications&lt;/h6&gt;
                                                                                    &lt;div class="float-right"&gt;
                                                                                        &lt;a href="#!" class="m-r-10"&gt;mark as read&lt;/a&gt;
                                                                                        &lt;a href="#!"&gt;clear all&lt;/a&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;ul class="noti-body"&gt;
                                                                                    &lt;li class="n-title"&gt;
                                                                                        &lt;p class="m-b-0"&gt;NEW&lt;/p&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="media"&gt;
                                                                                            &lt;img class="img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;John Doe&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;30 min&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;New ticket Added&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="n-title"&gt;
                                                                                        &lt;p class="m-b-0"&gt;EARLIER&lt;/p&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="media"&gt;
                                                                                            &lt;img class="img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;Joseph William&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;30 min&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;Prchace New Theme and make payment&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="media"&gt;
                                                                                            &lt;img class="img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;Sara Soudein&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;30 min&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;currently login&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                &lt;/ul&gt;
                                                                                &lt;div class="noti-footer"&gt;
                                                                                    &lt;a href="#!"&gt;show all&lt;/a&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href="#!" class="displayChatbox"&gt;&lt;i class="icon feather icon-mail"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;div class="dropdown drp-user"&gt;
                                                                            &lt;a href="#!" class="dropdown-toggle" data-toggle="dropdown"&gt;
                                                                                &lt;i class="icon feather icon-settings"&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="dropdown-menu dropdown-menu-right profile-notification"&gt;
                                                                                &lt;div class="pro-head"&gt;
                                                                                    &lt;img src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"&gt;
                                                                                    &lt;span&gt;John Doe&lt;/span&gt;
                                                                                    &lt;a href="auth-sign-in-social.html" class="dud-logout" title="Logout"&gt;
                                                                                        &lt;i class="feather icon-log-out"&gt;&lt;/i&gt;
                                                                                    &lt;/a&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;ul class="pro-body"&gt;
                                                                                    &lt;li&gt;&lt;a href="#!" class="dropdown-item"&gt;&lt;i class="feather icon-settings"&gt;&lt;/i&gt; Settings&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;li&gt;&lt;a href="user-profile.html" class="dropdown-item"&gt;&lt;i class="feather icon-user"&gt;&lt;/i&gt; Profile&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;li&gt;&lt;a href="email-inbox.html" class="dropdown-item"&gt;&lt;i class="feather icon-mail"&gt;&lt;/i&gt; My Messages&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;li&gt;&lt;a href="auth-lock-screen.html" class="dropdown-item"&gt;&lt;i class="feather icon-lock"&gt;&lt;/i&gt; Lock Screen&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;/ul&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/header&gt;
                                                        &lt;!-- [ Header ] end --&gt;

                                                        &lt;!-- [ chat user list ] start --&gt;
                                                        &lt;section class="header-user-list"&gt;
                                                            &lt;div class="h-list-header"&gt;
                                                                &lt;div class="input-group"&gt;
                                                                    &lt;input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . ."&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class="h-list-body"&gt;
                                                                &lt;a href="#!" class="h-close-text"&gt;&lt;i class="feather icon-chevrons-right"&gt;&lt;/i&gt;&lt;/a&gt;
                                                                &lt;div class="main-friend-cont scroll-div"&gt;
                                                                    &lt;div class="main-friend-list"&gt;
                                                                        &lt;div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;
                                                                                &lt;div class="live-status"&gt;3&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-c-green"&gt;Typing . . &lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alia&lt;small class="d-block text-muted"&gt;10 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Suzen&lt;small class="d-block text-muted"&gt;15 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;
                                                                                &lt;div class="live-status"&gt;3&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-c-green"&gt;Typing . . &lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alia&lt;small class="d-block text-muted"&gt;10 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Suzen&lt;small class="d-block text-muted"&gt;15 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;
                                                                                &lt;div class="live-status"&gt;3&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-c-green"&gt;Typing . . &lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alia&lt;small class="d-block text-muted"&gt;10 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Suzen&lt;small class="d-block text-muted"&gt;15 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;
                                                                                &lt;div class="live-status"&gt;3&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-c-green"&gt;Typing . . &lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="3" data-status="online" data-username="Alice"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="4" data-status="offline" data-username="Alia"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Alia&lt;small class="d-block text-muted"&gt;10 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media userlist-box  " data-id="5" data-status="offline" data-username="Suzen"&gt;
                                                                            &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="{{ asset('public/template') }}/assets/images/user/avatar-4.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body"&gt;
                                                                                &lt;h6 class="chat-header"&gt;Suzen&lt;small class="d-block text-muted"&gt;15 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/section&gt;
                                                        &lt;!-- [ chat user list ] end --&gt;

                                                        &lt;!-- [ chat message ] start --&gt;
                                                        &lt;section class="header-chat"&gt;
                                                            &lt;div class="h-list-header"&gt;
                                                                &lt;h6&gt;Josephin Doe&lt;/h6&gt;
                                                                &lt;a href="#!" class="h-back-user-list"&gt;&lt;i class="feather icon-chevron-left"&gt;&lt;/i&gt;&lt;/a&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class="h-list-body"&gt;
                                                                &lt;div class="main-chat-cont scroll-div"&gt;
                                                                    &lt;div class="main-friend-chat"&gt;
                                                                        &lt;div class="media chat-messages"&gt;
                                                                            &lt;a class="media-left photo-table" href="#!"&gt;&lt;img class="media-object img-radius img-radius m-t-5" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body chat-menu-content"&gt;
                                                                                &lt;div class=""&gt;
                                                                                    &lt;p class="chat-cont"&gt;hello Datta! Will you tell me something&lt;/p&gt;
                                                                                    &lt;p class="chat-cont"&gt;about yourself?&lt;/p&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;p class="chat-time"&gt;8:20 a.m.&lt;/p&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media chat-messages"&gt;
                                                                            &lt;div class="media-body chat-menu-reply"&gt;
                                                                                &lt;div class=""&gt;
                                                                                    &lt;p class="chat-cont"&gt;Ohh! very nice&lt;/p&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;p class="chat-time"&gt;8:22 a.m.&lt;/p&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="media chat-messages"&gt;
                                                                            &lt;a class="media-left photo-table" href="#!"&gt;&lt;img class="media-object img-radius img-radius m-t-5" src="{{ asset('public/template') }}/assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body chat-menu-content"&gt;
                                                                                &lt;div class=""&gt;
                                                                                    &lt;p class="chat-cont"&gt;can you help me?&lt;/p&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;p class="chat-time"&gt;8:20 a.m.&lt;/p&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class="h-list-footer"&gt;
                                                                &lt;div class="input-group"&gt;
                                                                    &lt;input type="file" class="chat-attach" style="display:none"&gt;
                                                                    &lt;a href="#!" class="input-group-prepend btn btn-success btn-attach"&gt;
                                                                        &lt;i class="feather icon-paperclip"&gt;&lt;/i&gt;
                                                                    &lt;/a&gt;
                                                                    &lt;input type="text" name="h-chat-text" class="form-control h-send-chat" placeholder="Write hear . . "&gt;
                                                                    &lt;button type="submit" class="input-group-append btn-send btn btn-primary"&gt;
                                                                        &lt;i class="feather icon-message-circle"&gt;&lt;/i&gt;
                                                                    &lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/section&gt;
                                                        &lt;!-- [ chat message ] end --&gt;

                                                        &lt;!-- [ Main Content ] start --&gt;
                                                        &lt;div class="pcoded-main-container"&gt;
                                                            &lt;div class="pcoded-wrapper"&gt;
                                                                &lt;div class="pcoded-content"&gt;
                                                                    &lt;div class="pcoded-inner-content"&gt;
                                                                        &lt;!-- [ breadcrumb ] start --&gt;
                                                                        &lt;div class="page-header"&gt;
                                                                            &lt;div class="page-block"&gt;
                                                                                &lt;div class="row align-items-center"&gt;
                                                                                    &lt;div class="col-md-12"&gt;
                                                                                        &lt;div class="page-header-title"&gt;
                                                                                            &lt;h5 class="m-b-10"&gt;Layout&lt;/h5&gt;
                                                                                        &lt;/div&gt;
                                                                                        &lt;ul class="breadcrumb"&gt;
                                                                                            &lt;li class="breadcrumb-item"&gt;&lt;a href="index.html"&gt;&lt;i class="feather icon-home"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                                                                            &lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Page Layouts&lt;/a&gt;&lt;/li&gt;
                                                                                            &lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Layout&lt;/a&gt;&lt;/li&gt;
                                                                                        &lt;/ul&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;!-- [ breadcrumb ] end --&gt;
                                                                        &lt;div class="main-body"&gt;
                                                                            &lt;div class="page-wrapper"&gt;
                                                                                &lt;!-- [ Main Content ] start --&gt;
                                                                                &lt;div class="row"&gt;
                                                                                    &lt;!-- [ light-layout ] start --&gt;
                                                                                    &lt;div class="col-sm-12"&gt;

                                                                                    &lt;/div&gt;
                                                                                    &lt;!-- [ light-layout ] end --&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;!-- [ Main Content ] end --&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- [ Main Content ] end --&gt;

                                                        &lt;!-- Warning Section start --&gt;
                                                        &lt;!-- Older IE warning message --&gt;
                                                        &lt;!--[if lt IE 11]&gt;
                                                            &lt;div class="ie-warning"&gt;
                                                                &lt;h1&gt;Warning!!&lt;/h1&gt;
                                                                &lt;p&gt;You are using an outdated version of Internet Explorer, please upgrade
                                                                   &lt;br/&gt;to any of the following web browsers to access this website.
                                                                &lt;/p&gt;
                                                                &lt;div class="iew-container"&gt;
                                                                    &lt;ul class="iew-download"&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href="http://www.google.com/chrome/"&gt;
                                                                                &lt;img src="{{ asset('public/template') }}/assets/images/browser/chrome.png" alt="Chrome"&gt;
                                                                                &lt;div&gt;Chrome&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href="https://www.mozilla.org/en-US/firefox/new/"&gt;
                                                                                &lt;img src="{{ asset('public/template') }}/assets/images/browser/firefox.png" alt="Firefox"&gt;
                                                                                &lt;div&gt;Firefox&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href="http://www.opera.com"&gt;
                                                                                &lt;img src="{{ asset('public/template') }}/assets/images/browser/opera.png" alt="Opera"&gt;
                                                                                &lt;div&gt;Opera&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href="https://www.apple.com/safari/"&gt;
                                                                                &lt;img src="{{ asset('public/template') }}/assets/images/browser/safari.png" alt="Safari"&gt;
                                                                                &lt;div&gt;Safari&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie"&gt;
                                                                                &lt;img src="{{ asset('public/template') }}/assets/images/browser/ie.png" alt=""&gt;
                                                                                &lt;div&gt;IE (11 & above)&lt;/div&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;p&gt;Sorry for the inconvenience!&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;![endif]--&gt;
                                                        &lt;!-- Warning Section Ends --&gt;

                                                        &lt;!-- Required Js --&gt;
                                                        &lt;script src="{{ asset('public/template') }}/assets/js/vendor-all.min.js"&gt;&lt;/script&gt;
                                                        &lt;script src="{{ asset('public/template') }}/assets/plugins/bootstrap/js/bootstrap.min.js"&gt;&lt;/script&gt;
                                                        &lt;script src="{{ asset('public/template') }}/assets/js/pcoded.min.js"&gt;&lt;/script&gt;

                                                        &lt;!-- prism Js --&gt;
                                                        &lt;script src="{{ asset('public/template') }}/assets/plugins/prism/js/prism.min.js"&gt;&lt;/script&gt;

                                                    &lt;/body&gt;

                                                    &lt;/html&gt;
                                                </code>
                                            </pre>
                </div>
            </div>
        </div>
    </div>
@endsection
