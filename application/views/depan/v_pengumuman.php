<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FAMMI | Pengumuman</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/fammi.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Calendar Css -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/fullcalendar.min.css'?>" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <!--============================= HEADER =============================-->
 
  <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
      <div class="container nav-menu2">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                      <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                          <span class="icon-menu"></span>
                      </button>
                      <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/logo.png'?>"></a>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('pengurus');?>">Pengurus</a>
                              
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('berita');?>">Berita</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                              </li>
                             
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                              </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('jadwal-sholat');?>">Jadwal Sholat</a>
                                </li>
                              <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                              </li>
                        </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    <section>
</section>
<!--//END HEADER -->
<!--============================= EVENTS =============================-->
<section class="events" style="padding-top: 20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="event-title" style="text-align: center">PENGUMUMAN</h2>
                <hr>
            </div>
           
        </div>
        <br>
        <div class="row">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                  <?php foreach($data->result() as $row):?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="event-date">
                                    <h4><?php echo date("d", strtotime($row->pengumuman_tanggal));?></h4> <span><?php echo date("M Y", strtotime($row->pengumuman_tanggal));?></span>
                                </div>
                                <span class="event-time"><?php echo date("H:i", strtotime($row->pengumuman_tanggal)).' WIB';?></span>
                            </div>
                            <div class="col-md-10">
                                <div class="event-heading">
                                    <h3><?php echo $row->pengumuman_judul;?></h3>
                                    <p><?php echo $row->pengumuman_deskripsi;?></p>
                                </div>
                          </div>
                      </div>
                      <hr class="event-underline">
                  </div>
                <?php endforeach;?>

      <div class="col-md-12 text-center">
        <?php echo $page;?>
    </div>
</div>

</div>
</div>
</div>
</section>
<!--//END EVENTS -->
<!--============================= FOOTER =============================-->
 <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3" color="white">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <h2 style="padding-top: 0px;"><b>© 2020. FAMMI</b></h2>

                    </a>
                     <p><i>forum anak muda masjid indonesia</i><br><small>Powered By: <a href="http://chanofficial.rf.gd">chanofficial</a></small>
                     </p>
                    </div>
                </div>
                
                <div class="col-md-3">
                  <div class="sitemap">
                        <h3><b>Menu Utama</b></h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">About</a></li>
                            <li><a href="<?php echo site_url('berita');?>">Berita </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
               <li><a href="<?php echo site_url('pengurus');?>">Pengurus</a></li>
                          
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                          <li><a href="<?php echo site_url('jadwal-sholat');?>">Jadwal Sholat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                   <h3><b>BERITA TERBARU</b></h3>
                            <?php
                                $this->db->order_by('tulisan_id', 'DESC');
                                $query = $this->db->get('tbl_tulisan', 2);
                                foreach ($query->result() as $row):
                            ?>
                            <div>

                               <li style="color: white;"> <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo $row->tulisan_judul;?></a>
                                <h6 style="color: white;"><?php echo date('d M Y',strtotime($row->tulisan_tanggal));?></h6></li>
                            </div>
                            <?php endforeach;?>
                </div>
            </div>
                <div class="col-md-3">
                     <div class="address">
                        <h3><b>SEKRETARIAT</b></h3>
                        <p><span>Alamat: </span> Medan, Sumatera Utara, INA. 20253<br><br></p>
                            <div class="w3-container">
                                 <a href="<?php echo site_url('contact');?>" class="w3-btn w3-pale-yellow">contact me</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url().'theme/js/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/fullcalendar.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>
