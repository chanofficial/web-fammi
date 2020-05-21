<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FAMMI | HOME</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/fammi.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
    <style>[style*="--aspect-ratio"] > :first-child {
  width: 100%;
}
[style*="--aspect-ratio"] > img {  
  height: auto;
}
@supports (--custom:property) {
  [style*="--aspect-ratio"] {
    position: relative;
  }
  [style*="--aspect-ratio"]::before {
    content: "";
    display: block;
    padding-bottom: calc(100% / (var(--aspect-ratio)));
  }  
  [style*="--aspect-ratio"] > :first-child {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
  }  
}
</style>
</head>

<body>
    <!--============================= HEADER =============================-->
   
    <div data-toggle="affix">
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
                                </li>
                               
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
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/4.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/2.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                           
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/3.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="fa fa-chevron-circle-left" style="font-size:48px" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="fa fa-chevron-circle-right" style="font-size:48px" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
		<div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/fammi.png'?>" class="img-fluid about-img" alt="#">
            </div>
            <div class="col-md-8">
               <h2>ABOUT FAMMI</h2>
               <p> FAMMI (forum anak muda masjid indonesia) adalah suatu organisasi yang bergerak di bidang agama yang bertujuan untuk mengajak anak anak muda di indonesia </p>
				
                <div class="w3-container">
                                 <a href="<?php echo site_url('about');?>" class="w3-btn w3-white w3-border w3-border-black w3-round-large">MORE INFO</a>
                            </div>
            </div>
            
        </div>
    </div>
</section>

<!--//END ABOUT -->
<section class="bph">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center;"><br><br>PROGRAM KERJA</h2>
            </div>
        </div>
        </div>
        <!-- pengurus -->
    </section>
<div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><img src="<?php echo base_url().'theme/images/speak.png'?>"> PELATIHAN DAKWAH <br><i class="fa fa-chevron-down" style="font-size:24px; text-align:right; "></i></div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><img src="<?php echo base_url().'theme/images/speaking.png'?>"> KAJIAN ISLAMI <br><i class="fa fa-chevron-down" style="font-size:24px; text-align:right; "></i></div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><img src="<?php echo base_url().'theme/images/help.png'?>"> BAKTI SOSIAL <br><i class="fa fa-chevron-down" style="font-size:24px; text-align:right; "></i></div>
    </a>
  </div>

  <div id="London" class="w3-container city" style="display:none">
    <section class="clearfix about">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="about-img" alt="#">
            </div>
            <div class="col-md-8">
               <h3>ABOUT FAMMI</h3>
               <p style="text-align: left;"> FAMMI (forum anak muda masjid indonesia) adalah suatu organisasi yang bergerak di bidang agama yang bertujuan untuk mengajak anak anak muda di indonesia </p>
                
            </div>
            
        </div>
    </div>
</section>
  </div>

<!-- ----------------------- -->
  <div id="Paris" class="w3-container city" style="display:none">
   <section class="clearfix about">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/student-1.png'?>" class="about-img" alt="#">
            </div>
            <div class="col-md-8">
               <h3>ABOUT FAMMI</h3>
               <p style="text-align: left;"> FAMMI (forum anak muda masjid indonesia) adalah suatu organisasi yang bergerak di bidang agama yang bertujuan untuk mengajak anak anak muda di indonesia </p>
                
            </div>
            
        </div>
    </div>
</section>
  </div>

  <div id="Tokyo" class="w3-container city" style="display:none">
    <section class="clearfix about">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/welcome .png'?>" class="about-img" alt="#">
            </div>
            <div class="col-md-8">
               <h3>ABOUT FAMMI</h3>
               <p style="text-align: left;"> FAMMI (forum anak muda masjid indonesia) adalah suatu organisasi yang bergerak di bidang agama yang bertujuan untuk mengajak anak anak muda di indonesia </p>
                
            </div>
            
        </div>
    </div>
</section>
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>
<section class="bph">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
        </div>
    </section>
<section class="our-teachers">
   
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center;">BADAN PENGURUS HARIAN (BPH)</h2>
                </div>
            </div>
            
            <div class="row">

                            <?php
                                
                                $query = $this->db->get('tbl_guru', 4);
                                foreach ($query->result() as $row):
                            ?>
                            
                             <div class="col-xs-1 col-sm-1 col-md-3">
                        <div class="admission_insruction">
                          <?php if(empty($row->guru_photo)):?>
                            <img src="<?php echo base_url().'assets/images/blank.png';?>" class="img-fluid rounded-circle" alt="#">
                          <?php else:?>
                            <img src="<?php echo base_url().'assets/images/'.$row->guru_photo;?>" class="img-fluid rounded-circle" styalt="#">
                          <?php endif;?>
                            <p class="text-center mt-3"><span><?php echo $row->guru_nama;?></span>
                                <br>
                                <?php echo $row->guru_mapel;?></p>
                        </div>
                    </div>
                            <?php endforeach;?>

                </div>
            </div>
        
                <br><br>
                    <div class="w3-container" style="padding-bottom: 50px; text-align: center;">
                                 <a href="<?php echo site_url('pengurus');?>" class="w3-btn w3-white w3-border w3-border-black w3-round-large w3-center">MORE...</a>
                            </div>
                
            </div>
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>BERITA TERBARU</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-100 col-sm-6 col-md-60 col-lg-30">
                <div class="courses_box mb-3">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;">
                            <?php 
                            echo $row->tulisan_judul;
                            ?></h3>
                            
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
               <div class="w3-container">
                                 <a href="<?php echo site_url('berita');?>" class="w3-btn w3-white w3-border w3-border-black w3-round-large">VIEW MORE</a>
                            </div>
            </div>
        </div>
    </div>
</section>

<!--//END OUR COURSES -->
<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
			<center><h2>PENGUMUMAN</h2></center>
			
                <div class="event-img2">
                <?php foreach ($pengumuman->result() as $row) :?>
                <div class="row">
                    <div class="col-sm-3"> <center><img src="<?php echo base_url().'theme/images/poster.png'?>" class="img-fluid" alt="event-img" style="width: 100px; height: 100px"></center></div><!-- // end .col-sm-3 -->
                    <div class="col-sm-9"> <h3><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                      <span><?php echo $row->tanggal;?></span>
                      <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>
                      <hr class="event_line">

                    </div><!-- // end .col-sm-7 -->
                </div><!-- // end .row -->
                <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-6">
			<center><h2>AGENDA</h2></center>
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row):?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                            <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->
 <!--============================= hadist =============================-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text"> …يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنْكُمْ وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ..<br>
                            “…Niscaya Allah akan meninggikan orang-orang yang beriman di antaramu dan orang-orang yang diberi ilmu pengetahuan beberapa derajat…” (QS. Al-Mujadilah [58]: 11).
                            </p>
                            
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">طَلَبُ الْعِلْمِ فَرِيْضَةٌ عَلَى كُلِّ مُسْلِمٍ<br>

“Menuntut ilmu itu wajib atas setiap Muslim” (HR. Ibnu Majah no. 224, dari sahabat Anas bin Malik radhiyallahu ‘anhu, dishahihkan Al Albani dalam Shahiih al-Jaami’ish Shaghiir no. 3913)
 </p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END TESTIMONIAL -->
<!-- maps -->
      
    <div class="container">
        <div class="row">
             <div class="col-md-12">
                <h2><br>PETA SEKRETARIAT</h2>
            </div>
            <div class="col-md-12">
            <div style="--aspect-ratio: 16/9;">
  <iframe
   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15926.112931204118!2d98.6843353437567!3d3.694161310966396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303133cb95fe0139%3A0xb0eb30a3bc89d340!2sToko%20Hidayah!5e0!3m2!1sid!2sid!4v1586710758914!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
</iframe>
</div>
</div>
</div>
</div>
</section>
  

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
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
