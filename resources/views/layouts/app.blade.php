
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/apple/app.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/lightbox2/dist/css/lightbox.css') }}" rel="stylesheet" />
    {{--<script src="{{ asset('plugins/ionicons/dist/ionicons/ionicons.js') }}" type="defa15012573cb4ced7d9c95-text/javascript"></script>--}}

    <link href="{{ asset('plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <style>
        .app-sidebar .menu .menu-item .menu-icon-img
        {
            margin-right:16px !important;

        }

        .app-sidebar .menu .menu-item
        {
            margin-bottom:16px !important;
        }

        .select2-search { background-color: red; }
        .select2-search input { background-color: green; }
        .select2-results { background-color: yellow; }
    </style>

    @stack('css')
    @yield('css')
</head>
<body>

<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>


<div id="app" class="app app-header-fixed app-sidebar-fixed">

    <div id="header" class="app-header">

        @include('layouts.header')

        <div class="navbar-header d-none">
            <a href="index.html" class="navbar-brand"><span class="navbar-logo"><ion-icon name="cloud"></ion-icon></span> <b class="me-1">Color</b> Admin</a>
            <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>


        <div class="navbar-nav d-none">
            <div class="navbar-item navbar-form">
                <form action method="POST" name="search">
                    <div class="form-group">
                        <label for="search"></label>
                        <input type="text" class="form-control" placeholder="Enter keyword" id="search"/>
                        <button type="submit" class="btn btn-search"><ion-icon name="search"></ion-icon></button>
                    </div>
                </form>
            </div>
            <div class="navbar-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
                    <ion-icon name="notifications"></ion-icon>
                    <span class="badge">5</span>
                </a>
                <div class="dropdown-menu media-list dropdown-menu-end">
                    <div class="dropdown-header">NOTIFICATIONS (5)</div>
                    <a href="javascript:" class="dropdown-item media">
                        <div class="media-left">
                            <i class="fa fa-bug media-object bg-gray-400"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
                            <div class="text-muted fs-10px">3 minutes ago</div>
                        </div>
                    </a>
                    <a href="javascript:" class="dropdown-item media">
                        <div class="media-left">
                            <img src="{{ asset('img/user/user-1.jpg') }}" class="media-object" alt />
                            <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">John Smith</h6>
                            <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                            <div class="text-muted fs-10px">25 minutes ago</div>
                        </div>
                    </a>
                    <a href="javascript:" class="dropdown-item media">
                        <div class="media-left">
                            <img src="{{ asset('img/user/user-2.jpg') }}" class="media-object" alt />
                            <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Olivia</h6>
                            <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                            <div class="text-muted fs-10px">35 minutes ago</div>
                        </div>
                    </a>
                    <a href="javascript:" class="dropdown-item media">
                        <div class="media-left">
                            <i class="fa fa-plus media-object bg-gray-400"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"> New User Registered</h6>
                            <div class="text-muted fs-10px">1 hour ago</div>
                        </div>
                    </a>
                    <a href="javascript:" class="dropdown-item media">
                        <div class="media-left">
                            <i class="fa fa-envelope media-object bg-gray-400"></i>
                            <i class="fab fa-google text-warning media-object-icon fs-14px"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"> New Email From John</h6>
                            <div class="text-muted fs-10px">2 hour ago</div>
                        </div>
                    </a>
                    <div class="dropdown-footer text-center">
                        <a href="javascript:" class="text-decoration-none">View more</a>
                    </div>
                </div>
            </div>
            <div class="navbar-item navbar-user dropdown">
                <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                    <img src="{{ asset('img/user/user-13.jpg') }}" alt />
                    <span>
<span class="d-none d-md-inline">Adam Schwartz</span>
<b class="caret"></b>
</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-1">
                    <a href="extra_profile.html" class="dropdown-item">Edit Profile</a>
                    <a href="email_inbox.html" class="dropdown-item d-flex align-items-center">
                        Inbox
                        <span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span>
                    </a>
                    <a href="calendar.html" class="dropdown-item">Calendar</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a href="login.html" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>

    </div>


    <div id="sidebar" class="app-sidebar">

        @include('layouts.sidebar')

        <div class="app-sidebar-content d-none" data-scrollbar="true" data-height="100%">

            <div class="menu">
                <div class="menu-profile">
                    <a href="javascript:" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                        <div class="menu-profile-cover with-shadow"></div>
                        <div class="menu-profile-image">
                            <img src="{{ asset('img/user/user-13.jpg') }}" alt />
                        </div>
                        <div class="menu-profile-info">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    Sean Ngu
                                </div>
                                <div class="menu-caret ms-auto"></div>
                            </div>
                            <small>Frontend developer</small>
                        </div>
                    </a>
                </div>
                <div id="appSidebarProfileMenu" class="collapse">
                    <div class="menu-item pt-5px">
                        <a href="javascript:" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-cog"></i></div>
                            <div class="menu-text">Configuraciones</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="javascript:" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                            <div class="menu-text"> Enviar comentarios</div>
                        </a>
                    </div>
                    <div class="menu-item pb-5px">
                        <a href="javascript:" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                            <div class="menu-text"> Ayuda</div>
                        </a>
                    </div>
                    <div class="menu-divider m-0"></div>
                </div>
                <div class="menu-header">Navegacion</div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="pulse-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Dashboard</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="index.html" class="menu-link"><div class="menu-text">Dashboard v1</div></a>
                        </div>
                        <div class="menu-item">
                            <a href="index_v2.html" class="menu-link"><div class="menu-text">Dashboard v2</div></a>
                        </div>
                        <div class="menu-item">
                            <a href="index_v3.html" class="menu-link"><div class="menu-text">Dashboard v3</div></a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Email</div>
                        <div class="menu-badge">10</div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="email_inbox.html" class="menu-link">
                                <div class="menu-text">Inbox</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="email_compose.html" class="menu-link">
                                <div class="menu-text">Compose</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="email_detail.html" class="menu-link">
                                <div class="menu-text">Detail</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a href="widget.html" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="nutrition-outline" class="bg-blue"></ion-icon>
                        </div>
                        <div class="menu-text">Widgets <span class="menu-label">NEW</span></div>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="color-filter-outline" class="bg-indigo"></ion-icon>
                        </div>
                        <div class="menu-text">UI Elements <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="ui_general.html" class="menu-link">
                                <div class="menu-text">General <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_typography.html" class="menu-link">
                                <div class="menu-text">Typography</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_tabs_accordions.html" class="menu-link">
                                <div class="menu-text">Tabs & Accordions</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_unlimited_tabs.html" class="menu-link">
                                <div class="menu-text">Unlimited Nav Tabs</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_modal_notification.html" class="menu-link">
                                <div class="menu-text">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_widget_boxes.html" class="menu-link">
                                <div class="menu-text">Widget Boxes</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_media_object.html" class="menu-link">
                                <div class="menu-text">Media Object</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_buttons.html" class="menu-link">
                                <div class="menu-text">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_icon_fontawesome.html" class="menu-link">
                                <div class="menu-text">FontAwesome</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_icon_bootstrap.html" class="menu-link">
                                <div class="menu-text">Bootstrap Icons <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_icon_simple_line_icons.html" class="menu-link">
                                <div class="menu-text">Simple Line Icons</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_icon_ionicons.html" class="menu-link">
                                <div class="menu-text">Ionicons</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_tree.html" class="menu-link">
                                <div class="menu-text">Tree View</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_language_bar_icon.html" class="menu-link">
                                <div class="menu-text">Language Bar & Icon</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_social_buttons.html" class="menu-link">
                                <div class="menu-text">Social Buttons</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_tour.html" class="menu-link">
                                <div class="menu-text">Intro JS</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_offcanvas_toasts.html" class="menu-link">
                                <div class="menu-text">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item ">
                    <a href="bootstrap_5.html" class="menu-link">
                        <div class="menu-icon-img">
                            <img src="{{ asset('img/logo/logo-bs5.png') }}" alt />
                        </div>
                        <div class="menu-text">Bootstrap 5 <span class="menu-label">NEW</span></div>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="briefcase-outline" class="bg-gradient-purple-indigo"></ion-icon>
                        </div>
                        <div class="menu-text">Form Stuff <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="form_elements.html" class="menu-link">
                                <div class="menu-text">Form Elements <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_plugins.html" class="menu-link">
                                <div class="menu-text">Form Plugins <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_slider_switcher.html" class="menu-link">
                                <div class="menu-text">Form Slider + Switcher</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_validation.html" class="menu-link">
                                <div class="menu-text">Form Validation</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_wizards.html" class="menu-link">
                                <div class="menu-text">Wizards <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_wysiwyg.html" class="menu-link">
                                <div class="menu-text">WYSIWYG</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_editable.html" class="menu-link">
                                <div class="menu-text">X-Editable</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_multiple_upload.html" class="menu-link">
                                <div class="menu-text">Multiple File Upload</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_summernote.html" class="menu-link">
                                <div class="menu-text">Summernote</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_dropzone.html" class="menu-link">
                                <div class="menu-text">Dropzone</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub active">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="grid-outline" class="bg-green"></ion-icon>
                        </div>
                        <div class="menu-text">Tables</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="table_basic.html" class="menu-link">
                                <div class="menu-text">Basic Tables</div>
                            </a>
                        </div>
                        <div class="menu-item has-sub active">
                            <a href="javascript:" class="menu-link">
                                <div class="menu-text">Managed Tables</div>
                                <div class="menu-caret"></div>
                            </a>
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="table_manage.html" class="menu-link">
                                        <div class="menu-text">Default</div>
                                    </a>
                                </div>
                                <div class="menu-item active">
                                    <a href="table_manage_buttons.html" class="menu-link">
                                        <div class="menu-text">Buttons</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_colreorder.html" class="menu-link">
                                        <div class="menu-text">ColReorder</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_fixed_columns.html" class="menu-link">
                                        <div class="menu-text">Fixed Column</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_fixed_header.html" class="menu-link">
                                        <div class="menu-text">Fixed Header</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_keytable.html" class="menu-link">
                                        <div class="menu-text">KeyTable</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_responsive.html" class="menu-link">
                                        <div class="menu-text">Responsive</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_rowreorder.html" class="menu-link">
                                        <div class="menu-text">RowReorder</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_scroller.html" class="menu-link">
                                        <div class="menu-text">Scroller</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_select.html" class="menu-link">
                                        <div class="menu-text">Select</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_combine.html" class="menu-link">
                                        <div class="menu-text">Extension Combination</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="logo-apple-appstore" class="bg-lime text-black"></ion-icon>
                        </div>
                        <div class="menu-text">POS System <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="pos_customer_order.html" target="_blank" class="menu-link">
                                <div class="menu-text">Customer Order</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_kitchen_order.html" target="_blank" class="menu-link">
                                <div class="menu-text">Kitchen Order</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_counter_checkout.html" target="_blank" class="menu-link">
                                <div class="menu-text">Counter Checkout</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_table_booking.html" target="_blank" class="menu-link">
                                <div class="menu-text">Table Booking</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_menu_stock.html" target="_blank" class="menu-link">
                                <div class="menu-text">Menu Stock</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="infinite-outline" class="bg-gradient-cyan-blue"></ion-icon>
                        </div>
                        <div class="menu-text">Front End <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="/color-admin/frontend/one-page-parallax/" target="_blank" class="menu-link">
                                <div class="menu-text">One Page Parallax</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/frontend/blog/" target="_blank" class="menu-link">
                                <div class="menu-text">Blog</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/frontend/forum/" target="_blank" class="menu-link">
                                <div class="menu-text">Forum</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/frontend/e-commerce/" target="_blank" class="menu-link">
                                <div class="menu-text">E-Commerce</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/frontend/corporate/" target="_blank" class="menu-link">
                                <div class="menu-text">Corporate <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="archive-outline" class="bg-gradient-cyan-indigo"></ion-icon>
                        </div>
                        <div class="menu-text">Email Template</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="email_system.html" class="menu-link">
                                <div class="menu-text">System Template</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="email_newsletter.html" class="menu-link">
                                <div class="menu-text">Newsletter Template</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="podium-outline" class="bg-gradient-yellow-red"></ion-icon>
                        </div>
                        <div class="menu-text">Chart</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="chart-flot.html" class="menu-link">
                                <div class="menu-text">Flot Chart</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="chart-js.html" class="menu-link">
                                <div class="menu-text">Chart JS</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="chart-d3.html" class="menu-link">
                                <div class="menu-text">d3 Chart</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="chart-apex.html" class="menu-link">
                                <div class="menu-text">Apex Chart</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a href="calendar.html" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="calendar-outline" class="bg-pink"></ion-icon>
                        </div>
                        <div class="menu-text">Calendar</div>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="map-outline" class="bg-pink"></ion-icon>
                        </div>
                        <div class="menu-text">Map</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="map_vector.html" class="menu-link">
                                <div class="menu-text">Vector Map</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="map_google.html" class="menu-link">
                                <div class="menu-text">Google Map</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="images-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Gallery</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="gallery.html" class="menu-link">
                                <div class="menu-text">Gallery v1</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="gallery_v2.html" class="menu-link">
                                <div class="menu-text">Gallery v2</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="cog-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Page Options <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="page_blank.html" class="menu-link">
                                <div class="menu-text">Blank Page</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_footer.html" class="menu-link">
                                <div class="menu-text">Page with Footer</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_fixed_footer.html" class="menu-link">
                                <div class="menu-text">Page with Fixed Footer <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_without_sidebar.html" class="menu-link">
                                <div class="menu-text">Page without Sidebar</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_right_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Right Sidebar</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_minified_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Minified Sidebar</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_two_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Two Sidebar</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_line_icons.html" class="menu-link">
                                <div class="menu-text">Page with Line Icons</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_ionicons.html" class="menu-link">
                                <div class="menu-text">Page with Ionicons</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_full_height.html" class="menu-link">
                                <div class="menu-text">Full Height Content</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_wide_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Wide Sidebar</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_light_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Light Sidebar</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_mega_menu.html" class="menu-link">
                                <div class="menu-text">Page with Mega Menu</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_top_menu.html" class="menu-link">
                                <div class="menu-text">Page with Top Menu</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_boxed_layout.html" class="menu-link">
                                <div class="menu-text">Page with Boxed Layout</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_mixed_menu.html" class="menu-link">
                                <div class="menu-text">Page with Mixed Menu</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_boxed_layout_with_mixed_menu.html" class="menu-link">
                                <div class="menu-text">Boxed Layout with Mixed Menu</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_transparent_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Transparent Sidebar</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_search_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Search Sidebar <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_with_hover_sidebar.html" class="menu-link">
                                <div class="menu-text">Page with Hover Sidebar <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="heart-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Extra <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="extra_timeline.html" class="menu-link">
                                <div class="menu-text">Timeline</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_coming_soon.html" class="menu-link">
                                <div class="menu-text">Coming Soon Page</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_search_results.html" class="menu-link">
                                <div class="menu-text">Search Results</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_invoice.html" class="menu-link">
                                <div class="menu-text">Invoice</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_404_error.html" class="menu-link">
                                <div class="menu-text">404 Error Page</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_profile.html" class="menu-link">
                                <div class="menu-text">Profile Page</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_scrum_board.html" class="menu-link">
                                <div class="menu-text">Scrum Board <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_cookie_acceptance_banner.html" class="menu-link">
                                <div class="menu-text">Cookie Acceptance Banner <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_orders.html" class="menu-link">
                                <div class="menu-text">Orders <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_order_details.html" class="menu-link">
                                <div class="menu-text">Order Details <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_products.html" class="menu-link">
                                <div class="menu-text">Products <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="extra_product_details.html" class="menu-link">
                                <div class="menu-text">Product Details <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Login & Register</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="login.html" class="menu-link">
                                <div class="menu-text">Login</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="login_v2.html" class="menu-link">
                                <div class="menu-text">Login v2</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="login_v3.html" class="menu-link">
                                <div class="menu-text">Login v3</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="register_v3.html" class="menu-link">
                                <div class="menu-text">Register v3</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="flower-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Version <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="/color-admin/admin/html/" class="menu-link">
                                <div class="menu-text">HTML</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/ajax/" class="menu-link">
                                <div class="menu-text">AJAX</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/angularjs/" class="menu-link">
                                <div class="menu-text">ANGULAR JS</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/angularjs14/" class="menu-link">
                                <div class="menu-text">ANGULAR JS 14</div>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="/color-admin/admin/vuejs/" class="menu-link">
                                <div class="menu-text">VUE JS</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/reactjs/" class="menu-link">
                                <div class="menu-text">REACT JS</div>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="/color-admin/admin/material/" class="menu-link">
                                <div class="menu-text">MATERIAL DESIGN</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/apple/" class="menu-link">
                                <div class="menu-text">APPLE DESIGN</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/transparent/" class="menu-link">
                                <div class="menu-text">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/facebook/" class="menu-link">
                                <div class="menu-text">FACEBOOK DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="/color-admin/admin/google/" class="menu-link">
                                <div class="menu-text">GOOGLE DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="medkit-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Helper</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="helper_css.html" class="menu-link">
                                <div class="menu-text">Predefined CSS Classes</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:" class="menu-link">
                        <div class="menu-icon">
                            <ion-icon name="list-outline"></ion-icon>
                        </div>
                        <div class="menu-text">Menu Level</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item has-sub">
                            <a href="javascript:" class="menu-link">
                                <div class="menu-text">Menu 1.1</div>
                                <div class="menu-caret"></div>
                            </a>
                            <div class="menu-submenu">
                                <div class="menu-item has-sub">
                                    <a href="javascript:" class="menu-link">
                                        <div class="menu-text">Menu 2.1</div>
                                        <div class="menu-caret"></div>
                                    </a>
                                    <div class="menu-submenu">
                                        <div class="menu-item"><a href="javascript:" class="menu-link"><div class="menu-text">Menu 3.1</div></a></div>
                                        <div class="menu-item"><a href="javascript:" class="menu-link"><div class="menu-text">Menu 3.2</div></a></div>
                                    </div>
                                </div>
                                <div class="menu-item"><a href="javascript:" class="menu-link"><div class="menu-text">Menu 2.2</div></a></div>
                                <div class="menu-item"><a href="javascript:" class="menu-link"><div class="menu-text">Menu 2.3</div></a></div>
                            </div>
                        </div>
                        <div class="menu-item"><a href="javascript:" class="menu-link"><div class="menu-text">Menu 1.2</div></a></div>
                        <div class="menu-item"><a href="javascript:" class="menu-link"><div class="menu-text">Menu 1.3</div></a></div>
                    </div>
                </div>

                <div class="menu-item d-flex">
                    <a href="javascript:" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><ion-icon name="arrow-back" class="me-1"></ion-icon> <div class="menu-text">Collapse</div></a>
                </div>

            </div>

        </div>

    </div>
    <div class="app-sidebar-bg"></div>
    <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <div id="content" class="app-content">


        @yield('content')
        @include('layouts.footer')


    </div>

    <a href="javascript:" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

</div>

@include('profile.change_password')


<script src="{{ asset('js/vendor.min.js') }}" ></script>
<script src="{{ asset('js/app.min.js') }}" ></script>


<script src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}" ></script>

<script src="{{ asset('plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js') }}" ></script>

<script src="{{ asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.flash.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.html5.min.js') }}" ></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.print.min.js') }}" ></script>
<script src="{{ asset('plugins/pdfmake/build/pdfmake.min.js') }}" ></script>
<script src="{{ asset('plugins/pdfmake/build/vfs_fonts.js') }}" ></script>
<script src="{{ asset('plugins/jszip/dist/jszip.min.js') }}" ></script>

<script src="{{ asset('plugins/select2/dist/js/select2.full.min.js') }}" ></script>


<script src="{{ asset('plugins/@highlightjs/cdn-assets/highlight.min.js') }}" ></script>
<script src="{{ asset('js/demo/render.highlight.js') }}" ></script>

@stack('js')
@yield('js')

<script>
    $(document).ready(function () {
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
        $("select").select2({
            theme: "bootstrap-5",
            containerCssClass : "bg-dark text-white"
        });
    })
</script>

</body>
</html>
