<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper_2/modern/form-elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:56 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Form Elements | GNACC -  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Theme Config Js -->
        <script src="assets/js/hyper-config.js"></script>

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom topnav-navbar">
                <div class="container-fluid detached-nav">

                    <!-- Topbar Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index-2.php" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo" height="22">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index-2.php" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12"> 
                                <span class="align-middle d-none d-lg-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-notification-3-line noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-3" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->
                        
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-apps-2-line noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="notification-list d-none d-sm-inline-block">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                <i class="ri-settings-3-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="notification-list d-none d-sm-inline-block">
                            <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
                                <i class="ri-moon-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="notification-list d-none d-md-inline-block">
                            <a class="nav-link" href="#" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Dominic Keller</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a href="index-2.php" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index-2.php" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button type="button" class="bg-transparent button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </button>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.php">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                                aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">5</span>
                                <span> Dashboards </span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="dashboard-analytics.php">Analytics</a>
                                    </li>
                                    <li>
                                        <a href="index-2.php">Ecommerce</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-projects.php">Projects</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-crm.php">CRM</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-wallet.php">E-Wallet</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item">Apps</li>

                        <li class="side-nav-item">
                            <a href="apps-calendar.php" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Calendar </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-chat.php" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Chat </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
                                class="side-nav-link">
                                <i class="uil uil-tachometer-fast"></i>
                                <span class="badge bg-danger text-white float-end">New</span>
                                <span> CRM </span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="crm-projects.php">Project</a>
                                    </li>
                                    <li>
                                        <a href="crm-orders-list.php">Orders List</a>
                                    </li>
                                    <li>
                                        <a href="crm-clients.php">Clients</a>
                                    </li>
                                    <li>
                                        <a href="crm-management.php">Management</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Ecommerce </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-ecommerce-products.php">Products</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-products-details.php">Products Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-orders.php">Orders</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-orders-details.php">Order Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-customers.php">Customers</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-shopping-cart.php">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-checkout.php">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-sellers.php">Sellers</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                                class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-email-inbox.php">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.php">Read Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                                aria-controls="sidebarProjects" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Projects </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProjects">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-projects-list.php">List</a>
                                    </li>
                                    <li>
                                        <a href="apps-projects-details.php">Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-projects-gantt.php">Gantt <span
                                                class="badge rounded-pill bg-light text-dark font-10 float-end">New</span></a>
                                    </li>
                                    <li>
                                        <a href="apps-projects-add.php">Create Project</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-social-feed.php" class="side-nav-link">
                                <i class="uil-rss"></i>
                                <span> Social Feed </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
                                class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Tasks </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-tasks.php">List</a>
                                    </li>
                                    <li>
                                        <a href="apps-tasks-details.php">Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-kanban.php">Kanban Board</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-file-manager.php" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> File Manager </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Custom</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                                class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="pages-profile.php">Profile</a>
                                    </li>
                                    <li>
                                        <a href="pages-profile-2.php">Profile 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.php">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="pages-faq.php">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="pages-pricing.php">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="pages-maintenance.php">Maintenance</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                                            aria-controls="sidebarPagesAuth">
                                            <span> Authentication </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarPagesAuth">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="pages-login.php">Login</a>
                                                </li>
                                                <li>
                                                    <a href="pages-login-2.php">Login 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-register.php">Register</a>
                                                </li>
                                                <li>
                                                    <a href="pages-register-2.php">Register 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-logout.php">Logout</a>
                                                </li>
                                                <li>
                                                    <a href="pages-logout-2.php">Logout 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-recoverpw.php">Recover Password</a>
                                                </li>
                                                <li>
                                                    <a href="pages-recoverpw-2.php">Recover Password 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-lock-screen.php">Lock Screen</a>
                                                </li>
                                                <li>
                                                    <a href="pages-lock-screen-2.php">Lock Screen 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-confirm-mail.php">Confirm Mail</a>
                                                </li>
                                                <li>
                                                    <a href="pages-confirm-mail-2.php">Confirm Mail 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false"
                                            aria-controls="sidebarPagesError">
                                            <span> Error </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarPagesError">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="pages-404.php">Error 404</a>
                                                </li>
                                                <li>
                                                    <a href="pages-404-alt.php">Error 404-alt</a>
                                                </li>
                                                <li>
                                                    <a href="pages-500.php">Error 500</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="pages-starter.php">Starter Page</a>
                                    </li>
                                    <li>
                                        <a href="pages-preloader.php">With Preloader</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.php">Timeline</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="landing.php" target="_blank" class="side-nav-link">
                                <i class="uil-globe"></i>
                                <span class="badge bg-secondary text-light float-end">New</span>
                                <span> Landing </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"
                                class="side-nav-link">
                                <i class="uil-window"></i>
                                <span> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="layouts-horizontal.php" target="_blank">Horizontal</a>
                                    </li>
                                    <li>
                                        <a href="layouts-vertical.php" target="_blank">Vertical</a>
                                    </li>
                                    <li>
                                        <a href="layouts-full.php" target="_blank">Full View</a>
                                    </li>
                                    <li>
                                        <a href="layouts-hover.php" target="_blank">Hover Menu</a>
                                    </li>
                                    <li>
                                        <a href="layouts-compact.php" target="_blank">Compact</a>
                                    </li>
                                    <li>
                                        <a href="layouts-icon-view.php" target="_blank">Icon View</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item mt-1">Components</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI"
                                class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> Base UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="ui-accordions.php">Accordions</a>
                                    </li>
                                    <li>
                                        <a href="ui-alerts.php">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="ui-avatars.php">Avatars</a>
                                    </li>
                                    <li>
                                        <a href="ui-badges.php">Badges</a>
                                    </li>
                                    <li>
                                        <a href="ui-breadcrumb.php">Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a href="ui-buttons.php">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="ui-cards.php">Cards</a>
                                    </li>
                                    <li>
                                        <a href="ui-carousel.php">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="ui-dropdowns.php">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="ui-embed-video.php">Embed Video</a>
                                    </li>
                                    <li>
                                        <a href="ui-grid.php">Grid</a>
                                    </li>
                                    <li>
                                        <a href="ui-list-group.php">List Group</a>
                                    </li>
                                    <li>
                                        <a href="ui-modals.php">Modals</a>
                                    </li>
                                    <li>
                                        <a href="ui-notifications.php">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="ui-offcanvas.php">Offcanvas</a>
                                    </li>
                                    <li>
                                        <a href="ui-placeholders.php">Placeholders</a>
                                    </li>
                                    <li>
                                        <a href="ui-pagination.php">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="ui-popovers.php">Popovers</a>
                                    </li>
                                    <li>
                                        <a href="ui-progress.php">Progress</a>
                                    </li>
                                    <li>
                                        <a href="ui-ribbons.php">Ribbons</a>
                                    </li>
                                    <li>
                                        <a href="ui-spinners.php">Spinners</a>
                                    </li>
                                    <li>
                                        <a href="ui-tabs.php">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="ui-tooltips.php">Tooltips</a>
                                    </li>
                                   <li>
                                        <a href="ui-typography.php">Typography</a>
                                    </li>
                                    <li>
                                        <a href="ui-utilities.php">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false"
                                aria-controls="sidebarExtendedUI" class="side-nav-link">
                                <i class="uil-package"></i>
                                <span> Extended UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExtendedUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="extended-dragula.php">Dragula</a>
                                    </li>
                                    <li>
                                        <a href="extended-range-slider.php">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="extended-ratings.php">Ratings</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollbar.php">Scrollbar</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollspy.php">Scrollspy</a>
                                    </li>
                                    <li>
                                        <a href="extended-treeview.php">Treeview</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="widgets.php" class="side-nav-link">
                                <i class="uil-layer-group"></i>
                                <span> Widgets </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons"
                                class="side-nav-link">
                                <i class="uil-streering"></i>
                                <span> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="icons-remixicons.php">Remix Icons</a>
                                    </li>
                                    <li>
                                        <a href="icons-mdi.php">Material Design</a>
                                    </li>
                                    <li>
                                        <a href="icons-unicons.php">Unicons</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts"
                                class="side-nav-link">
                                <i class="uil-chart"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false"
                                            aria-controls="sidebarApexCharts">
                                            <span> Apex Charts </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarApexCharts">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="charts-apex-area.php">Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-bar.php">Bar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-bubble.php">Bubble</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-candlestick.php">Candlestick</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-column.php">Column</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-heatmap.php">Heatmap</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-line.php">Line</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-mixed.php">Mixed</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-timeline.php">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-boxplot.php">Boxplot</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-treemap.php">Treemap</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-pie.php">Pie</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-radar.php">Radar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-radialbar.php">RadialBar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-scatter.php">Scatter</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-polar-area.php">Polar Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-sparklines.php">Sparklines</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarChartJSCharts" aria-expanded="false"
                                            aria-controls="sidebarChartJSCharts">
                                            <span> ChartJS </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarChartJSCharts">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="charts-chartjs-area.php">Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-bar.php">Bar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-line.php">Line</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-other.php">Other</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="charts-brite.php">Britecharts</a>
                                    </li>
                                    <li>
                                        <a href="charts-sparkline.php">Sparklines</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms"
                                class="side-nav-link">
                                <i class="uil-document-layout-center"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="form-elements.php">Basic Elements</a>
                                    </li>
                                    <li>
                                        <a href="form-advanced.php">Form Advanced</a>
                                    </li>
                                    <li>
                                        <a href="form-validation.php">Validation</a>
                                    </li>
                                    <li>
                                        <a href="form-wizard.php">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="form-fileuploads.php">File Uploads</a>
                                    </li>
                                    <li>
                                        <a href="form-editors.php">Editors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables"
                                class="side-nav-link">
                                <i class="uil-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="tables-basic.php">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatable.php">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps"
                                class="side-nav-link">
                                <i class="uil-location-point"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="maps-google.php">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.php">Vector Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                                aria-controls="sidebarMultiLevel" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultiLevel">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                                            aria-controls="sidebarSecondLevel">
                                            <span> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarSecondLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                            <span> Third Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarThirdLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                        <span> Item 2 </span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="sidebarFourthLevel">
                                                        <ul class="side-nav-forth-level">
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.1</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--- End Sidemenu -->

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-soft-dark btn-sm">Upgrade</a>
                    </div>
                    <!-- end Help Box -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->

            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">GNACC</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Elements</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Input Types</h4>
                                        <p class="text-muted font-14">
                                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#input-types-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#input-types-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Text</label>
                                                                <input type="text" id="simpleinput" class="form-control">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-email" class="form-label">Email</label>
                                                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-password" class="form-label">Password</label>
                                                                <input type="password" id="example-password" class="form-control" value="password">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Show/Hide Password</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                                                    <div class="input-group-text" data-password="false">
                                                                        <span class="password-eye"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-palaceholder" class="form-label">Placeholder</label>
                                                                <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Text area</label>
                                                                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-readonly" class="form-label">Readonly</label>
                                                                <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-disable" class="form-label">Disabled</label>
                                                                <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                                            </div>
            
                                                            <div class="mb-3">
                                                                <label for="example-static" class="form-label">Static control</label>
                                                                <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                                            </div>
        
                                                            <div class="mb-0">
                                                                <label for="example-helping" class="form-label">Helping text</label>
                                                                <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                                <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                            </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                
                                                            <div class="mb-3">
                                                                <label for="example-select" class="form-label">Input Select</label>
                                                                <select class="form-select" id="example-select">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-multiselect" class="form-label">Multiple Select</label>
                                                                <select id="example-multiselect" multiple class="form-control">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Default file input</label>
                                                                <input type="file" id="example-fileinput" class="form-control">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-date" class="form-label">Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="date">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-month" class="form-label">Month</label>
                                                                <input class="form-control" id="example-month" type="month" name="month">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-time" class="form-label">Time</label>
                                                                <input class="form-control" id="example-time" type="time" name="time">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-week" class="form-label">Week</label>
                                                                <input class="form-control" id="example-week" type="week" name="week">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-number" class="form-label">Number</label>
                                                                <input class="form-control" id="example-number" type="number" name="number">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="example-color" class="form-label">Color</label>
                                                                <input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
                                                            </div>
                
                                                            <div class="mb-0">
                                                                <label for="example-range" class="form-label">Range</label>
                                                                <input class="form-range" id="example-range" type="range" name="range" min="0" max="100">
                                                            </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="input-types-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;simpleinput&quot; class=&quot;form-label&quot;&gt;Text&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;simpleinput&quot; class=&quot;form-control&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-email&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                                                            &lt;input type=&quot;email&quot; id=&quot;example-email&quot; name=&quot;example-email&quot; class=&quot;form-control&quot; placeholder=&quot;Email&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-password&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                            &lt;input type=&quot;password&quot; id=&quot;example-password&quot; class=&quot;form-control&quot; value=&quot;password&quot;&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;password&quot; class=&quot;form-label&quot;&gt;Show/Hide Password&lt;/label&gt;
                                                            &lt;div class=&quot;input-group input-group-merge&quot;&gt;
                                                                &lt;input type=&quot;password&quot; id=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;Enter your password&quot;&gt;
                                                                &lt;div class=&quot;input-group-text&quot; data-password=&quot;false&quot;&gt;
                                                                    &lt;span class=&quot;password-eye&quot;&gt;&lt;/span&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-palaceholder&quot; class=&quot;form-label&quot;&gt;Placeholder&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-palaceholder&quot; class=&quot;form-control&quot; placeholder=&quot;placeholder&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-textarea&quot; class=&quot;form-label&quot;&gt;Text area&lt;/label&gt;
                                                            &lt;textarea class=&quot;form-control&quot; id=&quot;example-textarea&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-readonly&quot; class=&quot;form-label&quot;&gt;Readonly&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-readonly&quot; class=&quot;form-control&quot; readonly=&quot;&quot; value=&quot;Readonly value&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-disable&quot; class=&quot;form-label&quot;&gt;Disabled&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;example-disable&quot; disabled=&quot;&quot; value=&quot;Disabled value&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-static&quot; class=&quot;form-label&quot;&gt;Static control&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;example-static&quot; value=&quot;email@example.com&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-helping&quot; class=&quot;form-label&quot;&gt;Helping text&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-helping&quot; class=&quot;form-control&quot; placeholder=&quot;Helping text&quot;&gt;
                                                            &lt;span class=&quot;help-block&quot;&gt;&lt;small&gt;A block of help text that breaks onto a new line and may extend beyond one line.&lt;/small&gt;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-select&quot; class=&quot;form-label&quot;&gt;Input Select&lt;/label&gt;
                                                            &lt;select class=&quot;form-select&quot; id=&quot;example-select&quot;&gt;
                                                                &lt;option&gt;1&lt;/option&gt;
                                                                &lt;option&gt;2&lt;/option&gt;
                                                                &lt;option&gt;3&lt;/option&gt;
                                                                &lt;option&gt;4&lt;/option&gt;
                                                                &lt;option&gt;5&lt;/option&gt;
                                                            &lt;/select&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-multiselect&quot; class=&quot;form-label&quot;&gt;Multiple Select&lt;/label&gt;
                                                            &lt;select id=&quot;example-multiselect&quot; multiple class=&quot;form-control&quot;&gt;
                                                                &lt;option&gt;1&lt;/option&gt;
                                                                &lt;option&gt;2&lt;/option&gt;
                                                                &lt;option&gt;3&lt;/option&gt;
                                                                &lt;option&gt;4&lt;/option&gt;
                                                                &lt;option&gt;5&lt;/option&gt;
                                                            &lt;/select&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-fileinput&quot; class=&quot;form-label&quot;&gt;Default file input&lt;/label&gt;
                                                            &lt;input type=&quot;file&quot; id=&quot;example-fileinput&quot; class=&quot;form-control&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-date&quot; class=&quot;form-label&quot;&gt;Date&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-date&quot; type=&quot;date&quot; name=&quot;date&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-month&quot; class=&quot;form-label&quot;&gt;Month&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-month&quot; type=&quot;month&quot; name=&quot;month&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-time&quot; class=&quot;form-label&quot;&gt;Time&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-time&quot; type=&quot;time&quot; name=&quot;time&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-week&quot; class=&quot;form-label&quot;&gt;Week&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-week&quot; type=&quot;week&quot; name=&quot;week&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-number&quot; class=&quot;form-label&quot;&gt;Number&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-number&quot; type=&quot;number&quot; name=&quot;number&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-color&quot; class=&quot;form-label&quot;&gt;Color&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-color&quot; type=&quot;color&quot; name=&quot;color&quot; value=&quot;#727cf5&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-0&quot;&gt;
                                                            &lt;label for=&quot;example-range&quot; class=&quot;form-label&quot;&gt;Range&lt;/label&gt;
                                                            &lt;input class=&quot;form-range&quot; id=&quot;example-range&quot; type=&quot;range&quot; name=&quot;range&quot; min=&quot;0&quot; max=&quot;100&quot;&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Floating labels</h4>
                                        <p class="text-muted font-14">
                                            Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and <code>&lt;label&gt;</code> elements in <code>.form-floating</code> to enable floating labels with Bootstrap’s textual form fields. A <code>placeholder</code> is required on each <code>&lt;input&gt;</code> as our method of CSS-only floating labels uses the <code>:placeholder-shown</code> pseudo-element. Also note that the <code>&lt;input&gt;</code> must come first so we can utilize a sibling selector (e.g., <code>~</code>).
                                        </p>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#floating-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="floating-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h5 class="mb-3">Example</h5>
                                                        <div class="form-floating mb-3">
                                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                            <label for="floatingInput">Email address</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                            <label for="floatingPassword">Password</label>
                                                        </div>
                                                
                                                        <h5 class="mb-3 mt-4">Textareas</h5>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                                style="height: 100px"></textarea>
                                                            <label for="floatingTextarea">Comments</label>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-lg-6">
                                                        <h5 class="mb-3">Selects</h5>
                                                        <div class="form-floating">
                                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label for="floatingSelect">Works with selects</label>
                                                        </div>
                                                
                                                        <h5 class="mb-3 mt-4">Layout</h5>
                                                        <div class="row g-2">
                                                            <div class="col-md">
                                                                <div class="form-floating">
                                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com"
                                                                        value="mdo@example.com">
                                                                    <label for="floatingInputGrid">Email address</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="form-floating">
                                                                    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <label for="floatingSelectGrid">Works with selects</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="floating-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                              
                                                    &lt;div class=&quot;form-floating mb-3&quot;&gt;
                                                            &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInput&quot; placeholder=&quot;name@example.com&quot; /&gt;
                                                            &lt;label for=&quot;floatingInput&quot;&gt;Email address&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;form-floating&quot;&gt;
                                                        &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;floatingPassword&quot; placeholder=&quot;Password&quot; /&gt;
                                                        &lt;label for=&quot;floatingPassword&quot;&gt;Password&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;form-floating&quot;&gt;
                                                        &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Leave a comment here&quot; id=&quot;floatingTextarea&quot; style=&quot;height: 100px;&quot;&gt;&lt;/textarea&gt;
                                                        &lt;label for=&quot;floatingTextarea&quot;&gt;Comments&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;form-floating&quot;&gt;
                                                        &lt;select class=&quot;form-select&quot; id=&quot;floatingSelect&quot; aria-label=&quot;Floating label select example&quot;&gt;
                                                            &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                        &lt;/select&gt;
                                                        &lt;label for=&quot;floatingSelect&quot;&gt;Works with selects&lt;/label&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;row g-2&quot;&gt;
                                                        &lt;div class=&quot;col-md&quot;&gt;
                                                            &lt;div class=&quot;form-floating&quot;&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInputGrid&quot; placeholder=&quot;name@example.com&quot; value=&quot;mdo@example.com&quot; /&gt;
                                                                &lt;label for=&quot;floatingInputGrid&quot;&gt;Email address&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col-md&quot;&gt;
                                                            &lt;div class=&quot;form-floating&quot;&gt;
                                                                &lt;select class=&quot;form-select&quot; id=&quot;floatingSelectGrid&quot; aria-label=&quot;Floating label select example&quot;&gt;
                                                                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                &lt;/select&gt;
                                                                &lt;label for=&quot;floatingSelectGrid&quot;&gt;Works with selects&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 class="header-title">Select</h4>
                                                <p class="text-muted font-14">
                                                    <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to trigger the custom styles.
                                                </p>

                                                <ul class="nav nav-tabs nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#form-select-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            Preview
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#form-select-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Code
                                                        </a>
                                                    </li>
                                                </ul> <!-- end nav-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="form-select-preview">
                                                        <select class="form-select mb-3">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>     
                                                        <select class="form-select form-select-lg mb-3">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <select class="form-select form-select-sm mb-3">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select> 
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                            <select class="form-select" id="inputGroupSelect01">
                                                              <option selected>Choose...</option>
                                                              <option value="1">One</option>
                                                              <option value="2">Two</option>
                                                              <option value="3">Three</option>
                                                            </select>
                                                        </div>   
                                                        <div class="input-group">
                                                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                              <option selected>Choose...</option>
                                                              <option value="1">One</option>
                                                              <option value="2">Two</option>
                                                              <option value="3">Three</option>
                                                            </select>
                                                            <button class="btn btn-outline-secondary" type="button">Button</button>
                                                        </div>                                
                                                    </div> <!-- end preview-->
                                                
                                                    <div class="tab-pane" id="form-select-code">
                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;select class=&quot;form-select mb-3&quot;&gt;
                                                                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                &lt;/select&gt;     
                                                                &lt;select class=&quot;form-select form-select-lg mb-3&quot;&gt;
                                                                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                &lt;/select&gt;
                                                                &lt;select class=&quot;form-select form-select-sm mb-3&quot;&gt;
                                                                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                &lt;/select&gt; 
                                                                &lt;div class=&quot;input-group mb-3&quot;&gt;
                                                                    &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
                                                                    &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
                                                                    &lt;option selected&gt;Choose...&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                    &lt;/select&gt;
                                                                &lt;/div&gt;   
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect04&quot; aria-label=&quot;Example select with button addon&quot;&gt;
                                                                    &lt;option selected&gt;Choose...&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                    &lt;/select&gt;
                                                                    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
                                                                &lt;/div&gt;  
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                    </div> <!-- end preview code-->
                                                </div> <!-- end tab-content-->

                                            </div> <!-- end col -->
    
                                            <div class="col-lg-6">
                                                <h4 class="header-title mt-5 mt-lg-0">Switches</h4>
                                                <p class="text-muted font-14">
                                                    A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.
                                                </p>

                                                <ul class="nav nav-tabs nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#custom-switch-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            Preview
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#custom-switch-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Code
                                                        </a>
                                                    </li>
                                                </ul> <!-- end nav-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="custom-switch-preview">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" id="customSwitch1">
                                                            <label class="form-check-label" for="customSwitch1">Toggle this switch element</label>
                                                        </div>
                                                        <div class="form-check form-switch mt-1">
                                                            <input type="checkbox" class="form-check-input" disabled id="customSwitch2">
                                                            <label class="form-check-label" for="customSwitch2">Disabled switch element</label>
                                                        </div>                                           
                                                    </div> <!-- end preview-->
                                                
                                                    <div class="tab-pane" id="custom-switch-code">
                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;!-- Custom Switch --&gt;
                                                                &lt;div class=&quot;form-check form-switch&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customSwitch1&quot;&gt;
                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customSwitch1&quot;&gt;Toggle this switch element&lt;/label&gt;
                                                                &lt;/div&gt;
                                                                
                                                                &lt;!-- Custom Switch Disabled --&gt;
                                                                &lt;div class=&quot;form-check form-switch&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; disabled id=&quot;customSwitch2&quot;&gt;
                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customSwitch2&quot;&gt;Disabled switch element&lt;/label&gt;
                                                                &lt;/div&gt; 
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                    </div> <!-- end preview code-->
                                                </div> <!-- end tab-content-->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-5 mt-lg-0">Checkboxes </h4>
                                        <p class="text-muted font-14">
                                            Each checkbox and radio <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code> pairing is wrapped in a <code>&lt;div&gt;</code> to create our custom control. Structurally, this is the same approach as our default <code>.form-check</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#checkbox-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#checkbox-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="checkbox-preview">
                                                <h6 class="font-15">Checkboxes</h6>
                                                <div class="mt-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                        <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">Check this custom checkbox</label>
                                                    </div>
                                                </div>

                                                <h6 class="font-15 mt-3">Inline</h6>

                                                <div class="mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                                        <label class="form-check-label" for="customCheck3">Check this custom checkbox</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                                        <label class="form-check-label" for="customCheck4">Check this custom checkbox</label>
                                                    </div>
                                                </div>

                                                <h6 class="font-15 mt-3">Disabled</h6>

                                                <div class="mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="customCheck5" checked disabled>
                                                        <label class="form-check-label" for="customCheck5">Check this custom checkbox</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="customCheck6" disabled>
                                                        <label class="form-check-label" for="customCheck6">Check this custom checkbox</label>
                                                    </div>
                                                </div>

                                                <h6 class="font-15 mt-3">Colors</h6>

                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked>
                                                    <label class="form-check-label" for="customCheckcolor1">Default Checkbox</label>
                                                </div>
                                                <div class="form-check form-checkbox-success mb-2">
                                                    <input type="checkbox" class="form-check-input" id="customCheckcolor2" checked>
                                                    <label class="form-check-label" for="customCheckcolor2">Success Checkbox</label>
                                                </div>
                                                <div class="form-check form-checkbox-info mb-2">
                                                    <input type="checkbox" class="form-check-input" id="customCheckcolor3" checked>
                                                    <label class="form-check-label" for="customCheckcolor3">Info Checkbox</label>
                                                </div>
                                                <div class="form-check form-checkbox-secondary mb-2">
                                                    <input type="checkbox" class="form-check-input" id="customCheckcolor6" checked>
                                                    <label class="form-check-label" for="customCheckcolor6">Secondary Checkbox</label>
                                                </div>
                                                <div class="form-check  form-checkbox-warning mb-2">
                                                    <input type="checkbox" class="form-check-input" id="customCheckcolor4" checked>
                                                    <label class="form-check-label" for="customCheckcolor4">Warning Checkbox</label>
                                                </div>
                                                <div class="form-check form-checkbox-danger mb-2">
                                                    <input type="checkbox" class="form-check-input" id="customCheckcolor5" checked>
                                                    <label class="form-check-label" for="customCheckcolor5">Danger Checkbox</label>
                                                </div>
                                                <div class="form-check form-checkbox-dark">
                                                    <input type="checkbox" class="form-check-input" id="customCheckcolor7" checked>
                                                    <label class="form-check-label" for="customCheckcolor7">Dark Checkbox</label>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="checkbox-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Checkboxes--&gt; 
                                                        &lt;div class=&quot;mt-3&quot;&gt;
                                                            &lt;div class=&quot;form-check&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck1&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck1&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-check&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck2&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck2&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Inline--&gt; 

                                                        &lt;div class=&quot;mt-2&quot;&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck3&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck3&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck4&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck4&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Disabled--&gt;

                                                        &lt;div class=&quot;mt-2&quot;&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck5&quot; checked disabled&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck5&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck6&quot; disabled&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck6&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Colors--&gt;

                                                        &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheckcolor1&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customCheckcolor1&quot;&gt;Default Checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-checkbox-success mb-2&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheckcolor2&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customCheckcolor2&quot;&gt;Success Checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-checkbox-info mb-2&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheckcolor3&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customCheckcolor3&quot;&gt;Info Checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-checkbox-secondary mb-2&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheckcolor6&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customCheckcolor6&quot;&gt;Secondary Checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-checkbox-warning mb-2&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheckcolor4&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customCheckcolor4&quot;&gt;Warning Checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-checkbox-danger mb-2&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheckcolor5&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customCheckcolor5&quot;&gt;Danger Checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-checkbox-dark&quot;&gt;
                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheckcolor7&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customCheckcolor7&quot;&gt;Dark Checkbox&lt;/label&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-5 mt-lg-0">radios</h4>
                                        <p class="text-muted font-14">
                                            Each checkbox and radio <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code> pairing is wrapped in a <code>&lt;div&gt;</code> to create our custom control. Structurally, this is the same approach as our default <code>.form-check</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#radio-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#radio-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="radio-preview">
                                                
                                                <h6 class="font-15 mt-3">Radios</h6>

                                                <div class="mt-3">
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2">Or toggle this other custom radio</label>
                                                    </div>
                                                </div> 
                                                
                                                <h6 class="font-15 mt-3">Inline</h6>

                                                <div class="mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio3" name="customRadio1" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio3">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio4" name="customRadio1" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio4">Or toggle this other custom radio</label>
                                                    </div>
                                                </div>

                                                <h6 class="font-15 mt-3">Disabled</h6>

                                                <div class="mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio5" name="customRadio2" class="form-check-input" disabled>
                                                        <label class="form-check-label" for="customRadio5">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio6" name="customRadio2" class="form-check-input" checked disabled>
                                                        <label class="form-check-label" for="customRadio6">Or toggle this other custom radio</label>
                                                    </div>
                                                </div>

                                                <h6 class="font-15 mt-3">Colors</h6>

                                                <div class="form-check mb-2">
                                                    <input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadiocolor1">Default Radio</label>
                                                </div>
                                                <div class="form-check form-radio-success mb-2">
                                                    <input type="radio" id="customRadiocolor2" name="customRadiocolor2" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadiocolor2">Success Radio</label>
                                                </div>
                                                <div class="form-check form-radio-info mb-2">
                                                    <input type="radio" id="customRadiocolor3" name="customRadiocolor3" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadiocolor3">Info Radio</label>
                                                </div>
                                                <div class="form-check form-radio-secondary mb-2">
                                                    <input type="radio" id="customRadiocolor6" name="customRadiocolor6" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadiocolor6">Secondary Radio</label>
                                                </div>
                                                <div class="form-check form-radio-warning mb-2">
                                                    <input type="radio" id="customRadiocolor4" name="customRadiocolor4" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadiocolor4">Warning Radio</label>
                                                </div>
                                                <div class="form-check form-radio-danger mb-2">
                                                    <input type="radio" id="customRadiocolor5" name="customRadiocolor5" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadiocolor5">Danger Radio</label>
                                                </div>
                                                <div class="form-check form-radio-dark">
                                                    <input type="radio" id="customRadiocolor7" name="customRadiocolor7" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadiocolor7">Dark Radio</label>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="radio-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Radios--&gt; 

                                                        &lt;div class=&quot;mt-3&quot;&gt;
                                                            &lt;div class=&quot;form-check&quot;&gt;
                                                                &lt;input type=&quot;radio&quot; id=&quot;customRadio1&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio1&quot;&gt;Toggle this custom radio&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-check&quot;&gt;
                                                                &lt;input type=&quot;radio&quot; id=&quot;customRadio2&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio2&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt; 

                                                        &lt;!-- Inline--&gt;

                                                        &lt;div class=&quot;mt-2&quot;&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;radio&quot; id=&quot;customRadio3&quot; name=&quot;customRadio1&quot; class=&quot;form-check-input&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio3&quot;&gt;Toggle this custom radio&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;radio&quot; id=&quot;customRadio4&quot; name=&quot;customRadio1&quot; class=&quot;form-check-input&quot;&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio4&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Disabled--&gt; 

                                                        &lt;div class=&quot;mt-2&quot;&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;radio&quot; id=&quot;customRadio5&quot; name=&quot;customRadio2&quot; class=&quot;form-check-input&quot; disabled&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio5&quot;&gt;Toggle this custom radio&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                                &lt;input type=&quot;radio&quot; id=&quot;customRadio6&quot; name=&quot;customRadio2&quot; class=&quot;form-check-input&quot; checked disabled&gt;
                                                                &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio6&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Colors --&gt; 

                                                        &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; id=&quot;customRadiocolor1&quot; name=&quot;customRadiocolor1&quot; class=&quot;form-check-input&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadiocolor1&quot;&gt;Default Radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-radio-success mb-2&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; id=&quot;customRadiocolor2&quot; name=&quot;customRadiocolor2&quot; class=&quot;form-check-input&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadiocolor2&quot;&gt;Success Radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-radio-info mb-2&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; id=&quot;customRadiocolor3&quot; name=&quot;customRadiocolor3&quot; class=&quot;form-check-input&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadiocolor3&quot;&gt;Info Radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-radio-secondary mb-2&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; id=&quot;customRadiocolor6&quot; name=&quot;customRadiocolor6&quot; class=&quot;form-check-input&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadiocolor6&quot;&gt;Secondary Radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-radio-warning mb-2&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; id=&quot;customRadiocolor4&quot; name=&quot;customRadiocolor4&quot; class=&quot;form-check-input&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadiocolor4&quot;&gt;Warning Radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-radio-danger mb-2&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; id=&quot;customRadiocolor5&quot; name=&quot;customRadiocolor5&quot; class=&quot;form-check-input&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadiocolor5&quot;&gt;Danger Radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;form-check form-radio-dark&quot;&gt;
                                                            &lt;input type=&quot;radio&quot; id=&quot;customRadiocolor7&quot; name=&quot;customRadiocolor7&quot; class=&quot;form-check-input&quot; checked&gt;
                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadiocolor7&quot;&gt;Dark Radio&lt;/label&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Input Sizes</h4>
                                        <p class="text-muted font-14">
                                            Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#input-sizes-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#input-sizes-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-sizes-preview">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="example-input-small" class="form-label">Small</label>
                                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label for="example-input-normal" class="form-label">Normal</label>
                                                        <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label for="example-input-large" class="form-label">Large</label>
                                                        <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                                    </div>
        
                                                    <div class="mb-2">
                                                        <label for="example-gridsize" class="form-label">Grid Sizes</label>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input type="text" id="example-gridsize" class="form-control" placeholder=".col-sm-4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="input-sizes-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-input-small&quot; class=&quot;form-label&quot;&gt;Small&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-input-small&quot; name=&quot;example-input-small&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;.input-sm&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-input-normal&quot; class=&quot;form-label&quot;&gt;Normal&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-input-normal&quot; name=&quot;example-input-normal&quot; class=&quot;form-control&quot; placeholder=&quot;Normal&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-input-large&quot; class=&quot;form-label&quot;&gt;Large&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-input-large&quot; name=&quot;example-input-large&quot; class=&quot;form-control form-control-lg&quot; placeholder=&quot;.input-lg&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;mb-2&quot;&gt;
                                                            &lt;label for=&quot;example-gridsize&quot; class=&quot;form-label&quot;&gt;Grid Sizes&lt;/label&gt;
                                                            &lt;div class=&quot;row&quot;&gt;
                                                                &lt;div class=&quot;col-sm-4&quot;&gt;
                                                                    &lt;input type=&quot;text&quot; id=&quot;example-gridsize&quot; class=&quot;form-control&quot; placeholder=&quot;.col-sm-4&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Input Group</h4>
                                        <p class="text-muted font-14">
                                            Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#input-group-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#input-group-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-group-preview">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="form-label">Static</label>
                                                        <div class="input-group flex-nowrap">
                                                            <span class="input-group-text" id="basic-addon1">@</span>
                                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label class="form-label">Dropdowns</label>
                                                        <div class="input-group">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label class="form-label">Buttons</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                                            <button class="btn btn-dark" type="button">Button</button>
                                                        </div>
                                                    </div>
        
                                                    <div class="row g-2">
                                                        <div class="col-sm-6">
                                                            <label class="form-label">File input</label>
                                                            <input class="form-control" type="file" id="inputGroupFile04">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="formFileMultiple01" class="form-label">Multiple files input</label>
                                                            <input class="form-control" type="file" id="formFileMultiple01" multiple>
                                                        </div>
                                                    </div>
                                                </form>                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="input-group-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot;&gt;Static&lt;/label&gt;
                                                                &lt;div class=&quot;input-group flex-nowrap&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot;&gt;Dropdowns&lt;/label&gt;
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
                                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot;&gt;Buttons&lt;/label&gt;
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot;&gt;
                                                                    &lt;button class=&quot;btn btn-dark&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;row g-2&quot;&gt;
                                                                &lt;div class=&quot;col-sm-6&quot;&gt;
                                                                    &lt;label class=&quot;form-label&quot;&gt;File input&lt;/label&gt;
                                                                    &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;inputGroupFile04&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;col-sm-6&quot;&gt;
                                                                    &lt;label for=&quot;formFileMultiple&quot; class=&quot;form-label&quot;&gt;Multiple files input&lt;/label&gt;
                                                                    &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFileMultiple&quot; multiple&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt; 
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Basic Example</h4>
                                        <p class="text-muted font-14">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#basic-form-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basic-form-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="checkmeout0">
                                                            <label class="form-check-label" for="checkmeout0">Check me out !</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>                                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="basic-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
                                                                &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else.&lt;/small&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;exampleInputPassword1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkmeout0&quot;&gt;
                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;checkmeout0&quot;&gt;Check me out !&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Horizontal form</h4>
                                        <p class="text-muted font-14">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#horizontal-form-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#horizontal-form-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="horizontal-form-preview">
                                                <form class="form-horizontal">
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                                        <div class="col-9">
                                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                                        <div class="col-9">
                                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                                        <div class="col-9">
                                                            <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-end">
                                                        <div class="col-9">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="checkmeout">
                                                                <label class="form-check-label" for="checkmeout">Check me out !</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="justify-content-end row">
                                                        <div class="col-9">
                                                            <button type="submit" class="btn btn-info">Sign in</button>
                                                        </div>
                                                    </div>
                                                </form>                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="horizontal-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;form-horizontal&quot;&gt;
                                                            &lt;div class=&quot;row mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputEmail3&quot; class=&quot;col-3 col-form-label&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail3&quot; placeholder=&quot;Email&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;row mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputPassword3&quot; class=&quot;col-3 col-form-label&quot;&gt;Password&lt;/label&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot; placeholder=&quot;Password&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;row mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputPassword5&quot; class=&quot;col-3 col-form-label&quot;&gt;Re Password&lt;/label&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword5&quot; placeholder=&quot;Retype Password&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;row mb-3 justify-content-end&quot;&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;div class=&quot;form-check&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkmeout&quot;&gt;
                                                                        &lt;label class=&quot;form-check-label&quot; for=&quot;checkmeout&quot;&gt;Check me out !&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;justify-content-end row&quot;&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-info&quot;&gt;Sign in&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt; 
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>  <!-- end col -->

                        </div>
                        <!-- end row -->


                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Inline Form</h4>
                                        <p class="text-muted font-14">
                                            Use the <code>.row-cols-lg-auto</code>, <code>.g-3</code> & <code>.align-items-center</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms vary slightly from their default states. Controls only appear inline in viewports that are at least 576px wide to account for narrow viewports on mobile devices.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#inline-form-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#inline-form-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="inline-form-preview">
                                                <form class="row row-cols-lg-auto g-3 align-items-center">
                                                    <div class="col-12">
                                                        <label for="staticEmail2" class="visually-hidden">Email</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputPassword2" class="visually-hidden">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary">Confirm identity</button>
                                                    </div>
                                                </form>
            
                                                <h6 class="font-13 mt-3">Auto-sizing</h6>
                                                <form>
                                                    <div class="row gy-2 gx-2 align-items-center">
                                                        <div class="col-auto">
                                                            <label class="visually-hidden" for="inlineFormInput">Name</label>
                                                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="visually-hidden" for="inlineFormInputGroup">Username</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-text">@</div>
                                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" id="autoSizingCheck">
                                                                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="inline-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;row row-cols-lg-auto g-3 align-items-center&quot;&gt;
                                                            &lt;div class=&quot;col-12&quot;&gt;
                                                                &lt;label for=&quot;staticEmail2&quot; class=&quot;visually-hidden&quot;&gt;Email&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;staticEmail2&quot; value=&quot;email@example.com&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col-12&quot;&gt;
                                                                &lt;label for=&quot;inputPassword2&quot; class=&quot;visually-hidden&quot;&gt;Password&lt;/label&gt;
                                                                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword2&quot; placeholder=&quot;Password&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col-12&quot;&gt;
                                                                &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Confirm identity&lt;/button&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                    
                                                        &lt;h6 class=&quot;font-13 mt-3&quot;&gt;Auto-sizing&lt;/h6&gt;
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;row gy-2 gx-2 align-items-center&quot;&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormInput&quot;&gt;Name&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control mb-2&quot; id=&quot;inlineFormInput&quot; placeholder=&quot;Jane Doe&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormInputGroup&quot;&gt;Username&lt;/label&gt;
                                                                    &lt;div class=&quot;input-group mb-2&quot;&gt;
                                                                        &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
                                                                        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inlineFormInputGroup&quot; placeholder=&quot;Username&quot;&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;autoSizingCheck&quot;&gt;
                                                                        &lt;label class=&quot;form-check-label&quot; for=&quot;autoSizingCheck&quot;&gt;Remember me&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mb-2&quot;&gt;Submit&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;  
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Horizontal form label sizing</h4>
                                        <p class="text-muted font-14">Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#label-sizing-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#label-sizing-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="label-sizing-preview">
                                                <form>
                                                    <div class="mb-2 row">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                                        <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                                        <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                                        </div>
                                                    </div>
                                                </form>                                        
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="label-sizing-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;mb-2 row&quot;&gt;
                                                                &lt;label for=&quot;colFormLabelSm&quot; class=&quot;col-sm-2 col-form-label col-form-label-sm&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-sm-10&quot;&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control form-control-sm&quot; id=&quot;colFormLabelSm&quot; placeholder=&quot;col-form-label-sm&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-2 row&quot;&gt;
                                                                &lt;label for=&quot;colFormLabel&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-sm-10&quot;&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;colFormLabel&quot; placeholder=&quot;col-form-label&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;row&quot;&gt;
                                                                &lt;label for=&quot;colFormLabelLg&quot; class=&quot;col-sm-2 col-form-label col-form-label-lg&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-sm-10&quot;&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control form-control-lg&quot; id=&quot;colFormLabelLg&quot; placeholder=&quot;col-form-label-lg&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form Row</h4>
                                        <p class="text-muted font-14">
                                            By adding <code>.row</code> & <code>.g-2</code>, you can have control over the gutter width in as well the inline as block direction.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#form-row-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#form-row-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="form-row-preview">
                                                <form>
                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inputEmail4" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inputPassword4" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                        </div>
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label for="inputAddress" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
        
                                                    <div class="row g-2">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="inputCity" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label for="inputState" class="form-label">State</label>
                                                            <select id="inputState" class="form-select">
                                                                <option>Choose</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-2">
                                                            <label for="inputZip" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                        </div>
                                                    </div>

                                                    <div class="mb-2">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customCheck11">
                                                            <label class="form-check-label" for="customCheck11">Check this custom checkbox</label>
                                                        </div>
                                                    </div>
        
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                </form>                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="form-row-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;row g-2&quot;&gt;
                                                                &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                                                                    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot; placeholder=&quot;Email&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot; placeholder=&quot;Password&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputAddress&quot; class=&quot;form-label&quot;&gt;Address&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;
                                                            &lt;/div&gt;
                                                            
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputAddress2&quot; class=&quot;form-label&quot;&gt;Address 2&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;row g-2&quot;&gt;
                                                                &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputCity&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;mb-3 col-md-4&quot;&gt;
                                                                    &lt;label for=&quot;inputState&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
                                                                    &lt;select id=&quot;inputState&quot; class=&quot;form-select&quot;&gt;
                                                                        &lt;option&gt;Choose&lt;/option&gt;
                                                                        &lt;option&gt;Option 1&lt;/option&gt;
                                                                        &lt;option&gt;Option 2&lt;/option&gt;
                                                                        &lt;option&gt;Option 3&lt;/option&gt;
                                                                    &lt;/select&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;mb-3 col-md-2&quot;&gt;
                                                                    &lt;label for=&quot;inputZip&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;mb-2&quot;&gt;
                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck11&quot;&gt;
                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck11&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                                                        &lt;/form&gt;  
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © GNACC - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0">Theme Settings</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="card mb-0 p-3">
                        <h5 class="mt-0 font-16 fw-bold mb-3">Choose Layout</h5>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Vertical</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span class="d-block border border-3 ms-auto"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Horizontal</h5>
                            </div>
                        </div>

                        <h5 class="my-3 font-16 fw-bold">Color Scheme</h5>

                        <div class="colorscheme-cardradio">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-theme" id="layout-color-light"
                                            value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-color-light">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-theme" id="layout-color-dark"
                                            value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100 bg-black" for="layout-color-dark">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light-lighten d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light-lighten d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h5 class="my-3 font-16 fw-bold">Layout Mode</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="layout-mode-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-fluid">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                                </div>
                                <div class="col-4" id="layout-boxed">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="layout-mode-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-mode-boxed">
                                            <span class="d-flex h-100 border-start border-end">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                                </div>

                                <div class="col-4" id="layout-detached">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="data-layout-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-md w-100" for="data-layout-detached">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span class="d-block border border-3 ms-auto"></span>
                                                    <span class="d-block border border-3 ms-1"></span>
                                                    <span class="d-block border border-3 ms-1"></span>
                                                    <span class="d-block border border-3 ms-1"></span>
                                                </span>
                                                <span class="d-flex h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                            <span class="d-block border border-3 w-100 mb-1"></span>
                                                            <span class="d-block border border-3 w-100 mb-1"></span>
                                                            <span class="d-block border border-3 w-100"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>

                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>

                        <h5 class="my-3 font-16 fw-bold">Topbar Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark"
                                        value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-dark d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="sidebar-color">
                            <h5 class="my-3 font-16 fw-bold">Sidebar Color</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-color"
                                            id="leftbar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-light">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-color"
                                            id="leftbar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-dark">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-dark d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-color"
                                            id="leftbar-color-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-default">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-primary bg-gradient d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h5 class="my-3 font-16 fw-bold">Sidebar Size</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-default">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-compact" value="compact">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-compact">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-small" value="condensed">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column">
                                                        <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small-hover">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column">
                                                        <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Hover View</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-full">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="d-flex h-100 border-end  flex-column">
                                                        <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>

                        <div id="sidebar-user">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <label class="font-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check">
                                </div>  
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Code Highlight js -->
        <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="assets/js/hyper-syntax.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/form-elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:56 GMT -->
</html>
