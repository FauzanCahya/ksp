<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>gudang/plugins/images/favicon.png">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>gudang/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>gudang/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url() ?>gudang/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url() ?>gudang/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url() ?>gudang/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>gudang/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url() ?>gudang/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="<?php echo base_url() ?>gudang/plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><img src="<?php echo base_url() ?>gudang/plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><img src="<?php echo base_url() ?>gudang/plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><img src="<?php echo base_url() ?>gudang/plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url() ?>gudang/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url() ?>gudang/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url() ?>gudang/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url() ?>gudang/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Forms Elements</li>
                                    <li><a href="form-basic.html">Basic Forms</a></li>
                                    <li><a href="form-layout.html">Form Layout</a></li>
                                    <li><a href="form-advanced.html">Form Addons</a></li>
                                    <li><a href="form-material-elements.html">Form Material</a></li>
                                    <li><a href="form-float-input.html">Form Float Input</a></li>
                                    <li><a href="form-upload.html">File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Advance Forms</li>
                                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                                    <li><a href="form-pickers.html">Form-pickers</a></li>
                                    <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                                    <li><a href="form-wizard.html">Form-wizards</a></li>
                                    <li><a href="form-typehead.html">Typehead</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                    <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Table Example</li>
                                    <li><a href="basic-table.html">Basic Tables</a></li>
                                    <li><a href="table-layouts.html">Table Layouts</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                    <li class="hidden"><a href="crud-table.html">Crud Table</a></li>
                                    <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                    <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                    <li><a href="editable-tables.html">Editable Tables</a></li>
                                    <li><a href="foo-tables.html">FooTables</a></li>
                                    <li><a href="jsgrid.html">JsGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Charts</li>
                                    <li> <a href="flot.html">Flot Charts</a> </li>
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chart-js.html">Chart-js</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="knob-chart.html">Knob Charts</a></li>
                                    <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                    <li><a href="extra-charts.html">Extra Charts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-12 m-t-40 demo-box">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-purple"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-inverse/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 1</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-success"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 2</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-info"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-ecommerce/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 3</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-inverse"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-horizontal-navbar/index3.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 4</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-warning"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-iconbar/index4.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 5</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-danger"><a href="https://themeforest.net/item/elite-admin-responsive-web-app-kit-/16750820" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Buy Now</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="<?php echo base_url() ?>gudang/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>login_c/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.html" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">4</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="index.html">Minimalistic</a> </li>
                            <li> <a href="index2.html">Demographical</a> </li>
                            <li> <a href="index3.html">Analitical</a> </li>
                            <li> <a href="index4.html">Simpler</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-hospital/index.html">Hospital Admin</a> </li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-crm/index.html">CRM Admin</a> </li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-university/index.html">University Admin</a> </li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-music/index.html">Music Admin</a> </li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
                            <li role="separator" class="divider"></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-inverse/index.html">Inverse</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-colors/index.html">Colors</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin/index.html">Eliteadmin</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-wpmenu/index.html">Wpmenu</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-ecommerce/index.html">Ecommerce</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-modern/index.html">Modern</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-inverse-php/index.php">Basic PHP</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-material/index3.html">Material Design</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-dark/index.html">Dark</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-iconbar/index4.html">Iconbar</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
                            <li> <a href="<?php echo base_url() ?>gudang/eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
                        </ul>
                    </li>
                    <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html">Chat-message</a></li>
                            <li><a href="javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="inbox.html">Mail box</a></li>
                                    <li> <a href="inbox-detail.html">Inbox detail</a></li>
                                    <li> <a href="compose.html">Compose mail</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="contact.html">Contact1</a></li>
                                    <li> <a href="contact2.html">Contact2</a></li>
                                    <li> <a href="contact-detail.html">Contact Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="cards.html">Cards</a></li>
                            <li><a href="panels-wells.html">Panels and Wells</a></li>
                            <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                            <li><a href="panel-draggable.html">Draggable Panel</a></li>
                            <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="date-paginator.html">Date Paginator</a></li>
                            <li><a href="sweatalert.html">Sweat alert</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="tab-stylish.html">Stylish Tabs</a></li>
                            <li><a href="modals.html">Modals</a></li>
                            <li><a href="progressbars.html">Progress Bars</a></li>
                            <li><a href="notification.html">Notifications</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li><a href="list-style.html">List & Media object</a></li>
                            <li><a href="user-cards.html">User Cards</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                            <li><a href="nestable.html">Nesteble</a></li>
                            <li><a href="range-slider.html">Range Slider</a></li>
                            <li><a href="ribbons.html">Ribbons</a></li>
                            <li><a href="steps.html">Steps</a></li>
                            <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                            <li><a href="session-timeout.html">Session Timeout</a></li>
                            <li><a href="tooltip-stylish.html">Stylish Tooltip</a></li>
                            <li><a href="bootstrap.html">Bootstrap UI</a></li>
                        </ul>
                    </li>
                    <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form-basic.html">Basic Forms</a></li>
                            <li><a href="form-layout.html">Form Layout</a></li>
                            <li><a href="form-advanced.html">Form Addons</a></li>
                            <li><a href="form-material-elements.html">Form Material</a></li>
                            <li><a href="form-float-input.html">Form Float Input</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-img-cropper.html">Image Cropping</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-dropzone.html">File Dropzone</a></li>
                            <li><a href="form-pickers.html">Form-pickers</a></li>
                            <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                            <li><a href="form-wizard.html">Form-wizards</a></li>
                            <li><a href="form-typehead.html">Typehead</a></li>
                            <li><a href="form-xeditable.html">X-editable</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                            <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">--- Proffessional</li>
                    <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html">Starter Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                            <li><a href="javascript:void(0)" class="waves-effect">Email Templates<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo base_url() ?>gudang/email-templates/basic.html">Basic</a></li>
                                    <li> <a href="<?php echo base_url() ?>gudang/email-templates/alert.html">Alert</a></li>
                                    <li> <a href="<?php echo base_url() ?>gudang/email-templates/billing.html">Billing</a></li>
                                    <li> <a href="<?php echo base_url() ?>gudang/email-templates/password-reset.html">Reset Pwd</a></li>
                                </ul>
                            </li>
                            <li><a href="lightbox.html">Lightbox Popup</a></li>
                            <li><a href="treeview.html">Treeview</a></li>
                            <li><a href="search-result.html">Search Result</a></li>
                            <li><a href="utility-classes.html">Utility Classes</a></li>
                            <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a href="login2.html">Login v2</a></li>
                            <li><a href="animation.html">Animations</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="register2.html">Register v2</a></li>
                            <li><a href="register3.html">3 Step Registration</a></li>
                            <li><a href="recoverpw.html">Recover Password</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                            <li><a href="400.html">Error 400</a></li>
                            <li><a href="403.html">Error 403</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="500.html">Error 500</a></li>
                            <li><a href="503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="flot.html">Flot Charts</a> </li>
                            <li><a href="morris-chart.html">Morris Chart</a></li>
                            <li><a href="chart-js.html">Chart-js</a></li>
                            <li><a href="peity-chart.html">Peity Charts</a></li>
                            <li><a href="knob-chart.html">Knob Charts</a></li>
                            <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                            <li><a href="extra-charts.html">Extra Charts</a></li>
                        </ul>
                    </li>
                    <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic-table.html">Basic Tables</a></li>
                            <li><a href="table-layouts.html">Table Layouts</a></li>
                            <li><a href="data-table.html">Data Table</a></li>
                            <li class="hidden"><a href="crud-table.html">Crud Table</a></li>
                            <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                            <li><a href="responsive-tables.html">Responsive Tables</a></li>
                            <li><a href="editable-tables.html">Editable Tables</a></li>
                            <li><a href="foo-tables.html">FooTables</a></li>
                            <li><a href="jsgrid.html">JsGrid Tables</a></li>
                        </ul>
                    </li>
                    <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="fontawesome.html">Font awesome</a> </li>
                            <li> <a href="themifyicon.html">Themify Icons</a> </li>
                            <li> <a href="simple-line.html">Simple line Icons</a> </li>
                            <li><a href="linea-icon.html">Linea Icons</a></li>
                            <li><a href="weather.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li> <a href="map-google.html" class="waves-effect"><i data-icon="Q" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Google Map</span></a> </li>
                    <li> <a href="map-vector.html" class="waves-effect"><i data-icon="S" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Vector Map</span></a> </li>
                    <li> <a href="calendar.html" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="nav-small-cap">--- Support</li>
                    <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                    <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
                    <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Simpler Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Simpler Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">8659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">6011</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Bounce Rate</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h3 class="box-title">Sales in 2017</h3>
                                    <p class="m-t-30">Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. ipsumdolorsitda amet, ectetur adipiscing elit.</p>
                                    <p>
                                        <br/> Ectetur adipiscing elit. viverra tellus.ipsum dolor sit amet, dag adg ecteturadipiscingda elitdglj. vadghiverra tellus.</p>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                    <div id="morris-area-chart" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Weather</h3>
                            <div class="weather-box">
                                <div class="weather-top">
                                    <h2 class="pull-left">Monday <br>
                                    <small>7th May 2017</small></h2>
                                    <div class="today_crnt pull-right">
                                        <canvas class="sleet" width="44" height="44"></canvas> <span>32<sup>°F</sup></span> </div>
                                </div>
                                <div class="weather-info">
                                    <h5 class="font-bold">Weather info</h5>
                                    <div class="row">
                                        <div class="col-xs-6 p-r-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="pull-left">Wind</p>
                                                    <p class="pull-right font-bold">16km/h</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="pull-left">Sunrise</p>
                                                    <p class="pull-right font-bold">05:20</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="pull-left">Humanfeel</p>
                                                    <p class="pull-right font-bold">32 <sup>°F</sup></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-l-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="pull-left">Sunset</p>
                                                    <p class="pull-right font-bold">21:05</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="pull-left">Pressure </p>
                                                    <p class="pull-right font-bold">22 in</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="weather-time">
                                    <ul class="list-unstyled weather-days row">
                                        <li class="col-xs-4 col-sm-2"><span>Tue</span>
                                            <canvas class="sleet" width="30" height="30"></canvas> <span>32<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>Wed</span>
                                            <canvas class="clear-day" width="30" height="30"></canvas> <span>34<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>Thu</span>
                                            <canvas class="partly-cloudy-day" width="30" height="30"></canvas> <span>35<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>Fri</span>
                                            <canvas class="cloudy" width="30" height="30"></canvas> <span>34<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>Sat</span>
                                            <canvas class="snow" width="30" height="30"></canvas> <span>30<sup>°F</sup></span></li>
                                        <li class="col-xs-4 col-sm-2"><span>Sun</span>
                                            <canvas class="wind" width="30" height="30"></canvas> <span>26<sup>°F</sup></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">User Activity</h3>
                            <div class="steamline">
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url() ?>gudang/plugins/images/users/genu.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>Contrary to popular belief</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url() ?>gudang/plugins/images/users/ritesh.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>Lorem Ipsum is simply dummy</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url() ?>gudang/plugins/images/users/sonu.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>The standard chunk of ipsum </p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url() ?>gudang/plugins/images/users/ritesh.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>Contrary to popular belief</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url() ?>gudang/plugins/images/users/govinda.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>The generated lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Feeds</h3>
                            <ul class="feeds">
                                <li>
                                    <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-success"><i class="ti-server text-white"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                                <li>
                                    <div class="bg-warning"><i class="ti-shopping-cart text-white"></i></div> New order received.<span class="text-muted">31 May</span></li>
                                <li>
                                    <div class="bg-danger"><i class="ti-user text-white"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-inverse"><i class="fa fa-bell-o text-white"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-purple"><i class="ti-settings text-white"></i></div> You have 4 pending tasks. <span class="text-muted">27 May</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Order Status</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Order date</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tracking Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53431</a></td>
                                            <td>Steve N. Horton</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                            <td>$45.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53432</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$245.30</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53433</a></td>
                                            <td>Lucy Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$38.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53434</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                            <td>$77.99</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53435</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                            <td>$18.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link">Order #53437</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                            <td>$658.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-danger">Refunded</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link">Order #536584</a></td>
                                            <td>Scott S. Calabrese</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                            <td>$45.58</td>
                                            <td class="text-center">
                                                <div class="label label-table label-warning">Unpaid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>gudang/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; KSP </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>gudang/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url() ?>gudang/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url() ?>gudang/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>gudang/js/waves.js"></script>
    <!--weather icon -->
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/skycons/skycons.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>gudang/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>gudang/js/dashboard4.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url() ?>gudang/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>