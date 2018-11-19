<?php 

	$sess_user = $this->session->userdata('sign_in');
	$nama = $sess_user['nama_user'];
	$level = $sess_user['level'];
	$id_user = $sess_user['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>plugins/images/fav.png">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url(); ?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>plugins/bower_components/morrisjs/morris.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />


    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- .Logo -->
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <!--This is logo icon--><img src="<?php echo base_url(); ?>plugins/images/ksp.png" alt="home" class="light-logo" width="60" height="60" /></a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="logotext">
                            <img src="<?php echo base_url(); ?>plugins/images/kspi.png" alt="home" height="21" class="light-logo" alt="home" /></a>
                    </li>
                </ul>
                <!-- /.Logo -->
                <!-- top right panel -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- .dropdown -->
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
                                        <div class="user-img"> <img src="<?php echo base_url(); ?>plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url(); ?>plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url(); ?>plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url(); ?>plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
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
                    <!-- .dropdown -->
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
                    <!-- .dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url(); ?>plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
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
                    <!-- /.dropdown -->
                    <!-- .right toggle -->
                    <li class="right-side-toggle"><a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-arrow-right"></i></a></li>
                    <!-- /.right toggle -->
                </ul>
                <!-- top right panel -->
            </div>
        </nav>
        <!-- End Top Navigation -->
        <!-- .Side panel -->
        <div class="side-mini-panel">
            <ul class="mini-nav">
                <div class="togglediv"><a href="javascript:void(0)" id="togglebtn"><i class="ti-menu"></i></a></div>
                <!-- .Dashboard -->
                <li class="selected">
                    <a href="javascript:void(0)"><i class="linea-icon linea-basic" data-icon="v"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title">Master Data</h3>
                        
                        <ul class="sidebar-menu">
                            
                            <h3 class="menu-title">Menu</h3>
                            <li><a href="<?php echo base_url(); ?>grub_kode_akuntansi_c">Master Grup Kode Akun</a></li>
                            <li><a href="<?php echo base_url(); ?>kode_akuntansi_c" >Master Sub Kode Akun</a></li>
                            <li><a href="<?php echo base_url(); ?>m_departemen_c" >Master Departemen</a></li>
                            <li><a href="<?php echo base_url(); ?>pegawai_c" >Master Pegawai</a></li>
                            <li><a href="<?php echo base_url(); ?>kategori_barang_c" >Master Kategori Barang</a></li>
                            <li><a href="<?php echo base_url(); ?>satuan_c" >Master Satuan</a></li>
                            <li><a href="<?php echo base_url(); ?>barang_c" >Master Barang</a></li>
                            <li><a href="<?php echo base_url(); ?>supplier_c" >Master Supplier</a></li>
                            <li><a href="<?php echo base_url(); ?>pelanggan_c" >Master Pelanggan</a></li>
                            <li><a href="<?php echo base_url(); ?>pelanggan_c" >Master Mesin</a></li>
                            <!-- <li><a href="<?php echo base_url(); ?>konversi_c" >Master Konversi</a></li> -->
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.Dashboard -->
                <!-- .multi -->
                <li class=""><a href="javascript:void(0)"><i data-icon="7" class="linea-icon linea-basic text-danger"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title text-danger">Warehoouse</h3>
                        
                        <ul class="sidebar-menu">
                        	<h3 class="menu-title">Menu</h3>
                            <li> <a href="<?php echo base_url(); ?>eliteadmin-hospital/index.html">Input Bahan Baku</a> </li>
                            <li> <a href="<?php echo base_url(); ?>eliteadmin-crm/index.html">Input Barang Setengah Jadi</a> </li>
                            <li> <a href="<?php echo base_url(); ?>eliteadmin-university/index.html">Input dan Output Barang Jadi</a> </li>
                            
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.multi -->
                <!-- .Apps -->
                <li class=""><a href="javascript:void(0)"><i data-icon=")" class="linea-icon linea-basic"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title">Marketing</h3>
                        
                        <ul class="sidebar-menu">
                        	<h3 class="menu-title">Menu</h3>
                            <li><a href="<?php echo base_url(); ?>order_pembelian_c">Input Sales Order</a></li>
                            <li><a href="calendar.html">Data Sales Order</a></li>
                            <li><a href="inbox.html">Realisasi Sales Order</a></li>
                            <li><a href="inbox-detail.html">Faktur</a></li>
                            <li><a href="compose.html">Surat Jalan</a></li>
                            <li><a href="compose.html">Invoice</a></li>
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.Apps -->
                <!-- .Ui Elemtns -->
                <li><a href="javascript:void(0)"><i data-icon="/" class="linea-icon linea-basic"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title">Purchasing</h3>
                        
                        <ul class="sidebar-menu">
                        	<h3 class="menu-title">Menu</h3>
                            <li><a href="<?php echo base_url(); ?>permintaan_barang_c">Input PO Produksi</a></li>
                            <li><a href="<?php echo base_url(); ?>po_non_produksi_c">Input PO Non Produksi</a></li>
                            <li><a href="<?php echo base_url(); ?>po_jasa_c">Input PO Jasa</a></li>
                            <li><a href="panel-draggable.html">Iput Penyelesaian PO</a></li>
                            <li><a href="portlet-draggable.html">Rekap Data Pembelian</a></li>
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.Ui Elemtns -->
                <!-- .Forms -->
                <li class=""><a href="javascript:void(0)"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title">Keuangan</h3>
                        
                        <ul class="sidebar-menu">
                        	<h3 class="menu-title">Menu</h3>
                            <!-- <li><a href="form-basic.html">Transaksi Akuntansi</a></li> -->
                            <li><a href="<?php echo base_url(); ?>jurnal_umum_c">Input Jurnal Umum</a></li>
                            <li><a href="<?php echo base_url(); ?>kas_kecil_c">Input Kas Masuk</a></li>
                            <li><a href="<?php echo base_url(); ?>pengeluaran_kas_c">Input Kas Keluar</a></li>
                            <li><a href="form-float-input.html">Jurnal Penyesuaian</a></li>
                            <li><a href="form-upload.html">Input Saldo Awal</a></li>
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.Forms -->
                <!-- .Sample Pages -->
                <li class=""><a href="javascript:void(0)"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title">SAP</h3>
                        
                        <ul class="sidebar-menu">
                           <h3 class="menu-title">Menu</h3>
                            <!-- <li><a href="form-basic.html">Transaksi Akuntansi</a></li> -->
                            <li><a href="<?php echo base_url(); ?>sap/perintah_kerja_c">Perintah Kerja (PK)</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/mass_pro_c">Master Produksi</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/so_c">SO</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/perintah_kerja_roll_c">Perintah Kerja Roll</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/perintah_kerja_printing_c">Perintah Kerja Printing</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/perintah_kerja_potong_c">Perintah Kerja Potong</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/perintah_kerja_campur_c">Perintah Kerja Campur</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/perintah_kerja_crusher_c">Perintah Kerja Crusher</a></li>
                            <li><a href="<?php echo base_url(); ?>sap/perintah_kerja_bungkus_c">Perintah Kerja Bungkus</a></li>
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.Sample Pages -->
                <!-- .Charts -->
                <li class=""><a href="javascript:void(0)"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title">Produksi</h3>
                        <div class="searchable-menu">
                            <form role="search" class="menu-search">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </div>
                        <ul class="sidebar-menu">
                            
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.Charts -->
                <!-- .Tables -->
                <li class=""><a href="javascript:void(0)"><i data-icon="O" class="linea-icon linea-software fa-fw"></i></a>
                    <div class="sidebarmenu">
                        <!-- Left navbar-header -->
                        <h3 class="menu-title">HRIS</h3>
                        <div class="searchable-menu">
                            <form role="search" class="menu-search">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </div>
                        <ul class="sidebar-menu">
                            
                        </ul>
                        <!-- Left navbar-header end -->
                    </div>
                </li>
                <!-- /.Tables -->
                <!-- .Widgets -->
                
                <!-- .Multi level -->
            </ul>
        </div>
        <!-- /.Side panel -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url(<?php echo base_url(); ?>plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title"><?php echo $title; ?></h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Minimal Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <form role="search" class="app-search hidden-xs pull-right">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                <?php if ($page != '') {
				$this->load->view($page);
				}else{

				}
				?>
                
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
        <!-- .right panel -->
        
        <!-- /.right panel -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>js/dashboard1.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    	 $('#myTable').DataTable();
         $(".select2").select2();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });

    });


    </script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>