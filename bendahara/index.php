<?php 
error_reporting(0);

include ('koneksi/conn.php');

session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ./login.php');
}
$timeout = 60; // Set timeout satuan menit
$logout_redirect_url = "./login.php"; // Set logout URL

$timeout = $timeout * 60; // Ubah menit ke detik
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script> alert('Session Anda Telah Habis, Silahkan Login kembali!');
                                window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();

include 'helpers/Format.php';

$fm=new Format();


header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
header("Cache-Control: max-age=2592000");

$q_keluar = $conn->query("SELECT 
SUM(a.jumlah) as jumlah_pengeluaran
from pembayaran a
INNER JOIN kategori_bayar b 
ON (a.id_kategori=b.id_kategori)");
$row_keluar = $q_keluar->fetch_assoc();
$pengeluaran = $row_keluar['jumlah_pengeluaran'];

$q_masuk = $conn->query("SELECT SUM(jumlah) as dana_masuk
FROM kas_masuk");
$row_masuk=$q_masuk->fetch_assoc();
$pemasukan = $row_masuk['dana_masuk'];
$saldo = $pemasukan - $pengeluaran;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Bendahara</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url ?>assets/pixeladmin-lite/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url ?>assets/pixeladmin-lite/html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url ?>assets/pixeladmin-lite/html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url ?>assets/pixeladmin-lite/html/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/pixeladmin-lite/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/pixeladmin-lite/plugins/datepicker/css/datepicker.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
  .fs{font-size: 24px !important;}
</style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="<?= base_url ?>"><b><img src="<?php echo base_url ?>" alt="#" /></b><span class="hidden-xs">BENDAHARA</span></a></div>
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?= $_SESSION['user'] ?></b> </a>
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
                    <li style="padding: 10px 0 0;">
                        <a href="<?= base_url ?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#dana_masuk" id="kas_masuk" class="waves-effect"><i class="fa fa-bank fa-fw" aria-hidden="true"></i><span class="hide-menu">Dana Masuk</span></a>
                    </li>
                    <li>
                        <a href="#kategori_pengeluaran" id="kategori_pengeluaran" class="waves-effect"><i class="fa fa-th-large fa-fw" aria-hidden="true"></i><span class="hide-menu">Kategori Pengeluaran</span></a>
                    </li>
                    <li>
                        <a href="#pengeluaran" id="pengeluaran" class="waves-effect"><i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i><span class="hide-menu">Pengeluaran</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url ?>./logout.php"  class="waves-effect"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i><span class="hide-menu">Logout</span></a>
                    </li>
                    
                    
                
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div id="kontenku">
              
            
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-center text-muted vb"><b> Total Dana Masuk </b></h5>
                                </div> 
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-center m-t-15 text-danger fs"><?= "Rp. ".number_format($pemasukan); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-center text-muted vb"><b> Total Pengeluaran </b></h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-center m-t-15 text-megna fs"><?= "Rp. ".number_format($pengeluaran); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-center text-muted vb"><b> Total Saldo </b></h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-center m-t-15 text-primary fs"><?= "Rp. ".number_format($saldo); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-lg-12">
                      <div class="white-box">
                        <div class="col-in row">
                          <div id="crt"></div>
                        </div>
                        
                      </div>
                      
                    </div>
                </div>
            </div>
            
            <!-- end kontenku -->
          </div> 


            <!-- /.container-fluid -->
            <footer class="footer text-center">&copy; <?php echo date('Y'); ?> . FAMMI </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/html/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/html/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/raphael/raphael-min.js"></script>
    <!-- <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/morrisjs/morris.js"></script> -->
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/html/js/custom.min.js"></script>
    <!-- <script src="<?php echo base_url ?>assets/pixeladmin-lite/html/js/dashboard1.js"></script> -->
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/bower_components/toast-master/js/jquery.toast.js"></script>

    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/datepicker/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/table_export/libs/FileSaver/FileSaver.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/table_export/libs/jsPDF/jspdf.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/table_export/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>

    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/hc/highcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url ?>assets/pixeladmin-lite/plugins/hc/exporting.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        $.toast({
            heading: 'Selamat Datang di Kas Administrator',
            text: 'Aplikasi pengeloala Kas Keuangan by Administrator.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })

        Highcharts.chart('crt', {

              title: {
                  text: 'Data Chart Keuangan'
              },
              subtitle: {
                    text: 'Data On <?= $fm->formatDate(date('Y-m-d') ); ?>'
                },

              xAxis: {
                  categories: ['data']
              },

              series: [{
                  type: 'pie',
                  allowPointSelect: true,
                  keys: ['name', 'y', 'selected', 'sliced'],
                  data: [
                  <?php

                
                                echo "['Pemasukan',   ".$pemasukan.",'false'],";
                                echo "['Pengeluaran',   ".$pengeluaran.",'false'],";
                                echo "['Saldo',   ".$saldo.",'false'],";
                       
                
                  ?>
                     
                  ],
                  showInLegend: true
              }]
          });




    });

    
          
        


      $("#kas_masuk").click(function(){
        $("#kontenku").load("<?php echo base_url ?>page/kas_masuk.php");
      });
       $("#pengeluaran").click(function(){
        $("#kontenku").load("<?php echo base_url ?>page/pengeluaran.php");
      });
       $("#kategori_pengeluaran").click(function(){
        $("#kontenku").load("<?php echo base_url ?>page/kategori_pengeluaran.php");
      });
       
    </script>

</body>

</html>


