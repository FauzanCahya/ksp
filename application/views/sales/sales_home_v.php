<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>sales/plugins/images/favicon.png">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>sales/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>sales/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>sales/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url()?>sales/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url()?>sales/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>sales/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url()?>sales/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?php echo base_url()?>sales/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url()?>css-devan/warna.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
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
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="<?php echo base_url()?>sales/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="<?php echo base_url()?>sales/plugins/images/eliteadmin-text.png" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> 
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url()?>sales/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url()?>sales/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url()?>sales/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url()?>sales/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
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
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url()?>sales/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> 
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span> 
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>sales/sales_home" class="<?php if($view == 'home'){echo 'waves-effect active';}else{echo 'waves-effect';}?>">
                            <i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                            <span class="hide-menu"> Dashboard </span>
                        </a>
                    </li>
                    <li> 
                        <a href="<?php echo base_url(); ?>sales/sales_customer" class="<?php if($view == 'customer'){echo 'waves-effect active';}else{echo 'waves-effect';}?>">
                            <i data-icon="P" class="linea-icon linea-basic fa-fw"></i> 
                            <span class="hide-menu">Master Customer</span>
                        </a> 
                    </li>
                    <li> 
                        <a href="<?php echo base_url(); ?>sales/sales_pesanan" class="<?php if($view == 'pesanan'){echo 'waves-effect active';}else{echo 'waves-effect';}?>">
                            <i data-icon="P" class="linea-icon linea-basic fa-fw"></i> 
                            <span class="hide-menu">Input Pesanan</span>
                        </a> 
                    </li>
                    <li> 
                        <a href="<?php echo base_url(); ?>sales/sales_data_pesanan" class="<?php if($view == 'data_pesanan'){echo 'waves-effect active';}else{echo 'waves-effect';}?>">
                            <i data-icon="P" class="linea-icon linea-basic fa-fw"></i> 
                            <span class="hide-menu">Data Pesanan</span>
                        </a> 
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $title; ?></h4> 
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>sales/sales_home">Home</a></li>
                            <li class="active"><?php echo $title; ?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                <?php $this->load->view($page); ?>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Karya Sukses Polikemasindo </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>sales/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url()?>sales/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>sales/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url()?>sales/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>sales/js/waves.js"></script>
    <!--weather icon -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/skycons/skycons.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url()?>sales/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url()?>sales/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>sales/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>sales/js/dashboard4.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()?>sales/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?php echo base_url()?>sales/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url()?>js-devan/js-form.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        jQuery('.datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "dd-mm-yyyy"
        });
    });
    </script>
</body>

</html>