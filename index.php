<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dist/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="dist/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.html">
                    <span class="brand">Admin
                        <span class="brand-tip">CAST</span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="dist/assets/img/admin-avatar.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="dist/assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">James Brown</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Menú principal</span>
                        </a>
                    </li>
                    <li class="heading">Mantenimientos</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Mantenimientos contables</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="colors.html">Cuentas contables</a>
                            </li>
                            <li>
                                <a href="typography.html">Cuentas Bancarias</a>
                            </li>
                            <li>
                                <a href="panels.html">Gastos</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="tabs.html">Tabs</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Forms</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="form_basic.html">Basic Forms</a>
                            </li>
                            <li>
                                <a href="form_advanced.html">Advanced Plugins</a>
                            </li>
                            <li>
                                <a href="form_masks.html">Form input masks</a>
                            </li>
                            <li>
                                <a href="form_validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="text_editors.html">Text Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="table_basic.html">Basic Tables</a>
                            </li>
                            <li>
                                <a href="datatables.html">Datatables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                            <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="charts_flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="charts_morris.html">Morris Charts</a>
                            </li>
                            <li>
                                <a href="chartjs.html">Chart.js</a>
                            </li>
                            <li>
                                <a href="charts_sparkline.html">Sparkline Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
                            <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="maps_vector.html">Vector maps</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Icons</span>
                        </a>
                    </li>
                    <li class="heading">PAGES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="mail_view.html">Mail view</a>
                            </li>
                            <li>
                                <a href="mail_compose.html">Compose mail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html"><i class="sidebar-item-icon fa fa-calendar"></i>
                            <span class="nav-label">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="lockscreen.html">Lockscreen</a>
                            </li>
                            <li>
                                <a href="forgot_password.html">Forgot password</a>
                            </li>
                            <li>
                                <a href="error_404.html">404 error</a>
                            </li>
                            <li>
                                <a href="error_500.html">500 error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                            <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="javascript:;">Level 2</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="javascript:;">Level 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Level 3</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
              <style>
                .boton {
                border: none;
                color: white;
                opacity: 1;
                transition: 0.3s;
                }

                .boton:hover {opacity: 0.4}
              </style>
                <div class="row">

                  <div class="col-lg-3 col-md-6 boton">
                    <a href="login.php">
                      <div class="ibox bg-dark color-white widget-stat">
                          <div class="ibox-body">
                              <h2 class="m-b-5 font-strong"><br></h2>
                              <div class="m-b-5"><h4>UNIQUE VIEWS</h4></div><i class="ti-bar-chart widget-stat-icon"></i>
                              <div><i class=" m-r-5"></i><small></small></div>
                          </div>
                      </div>
                    </a>
                  </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-yellow color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>Planillas</h4></div><i class="ti-shopping-cart widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-silver color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>UNIQUE VIEWS</h4></div><i class="ti-bar-chart widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>TOTAL INCOME</h4></div><i class="fa fa-money widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>



                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>Planillas</h4></div><i class="ti-shopping-cart widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-pink color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>NEW USERS</h4></div><i class="ti-user widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-primary color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>TOTAL INCOME</h4></div><i class="fa fa-money widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-purple color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>NEW USERS</h4></div><i class="ti-user widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>



                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-secondary color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>Planillas</h4></div><i class="ti-shopping-cart widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>NEW USERS</h4></div><i class="ti-user widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>TOTAL INCOME</h4></div><i class="fa fa-money widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 boton">
                      <a href="login.php">
                        <div class="ibox bg-teal color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><br></h2>
                                <div class="m-b-5"><h4>NEW USERS</h4></div><i class="ti-user widget-stat-icon"></i>
                                <div><i class=" m-r-5"></i><small></small></div>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>
              </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Cargando</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="dist/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="dist/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="dist/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="dist/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
</body>

</html>
