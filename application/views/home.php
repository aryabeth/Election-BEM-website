<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pemilu Untuk pemilihan presiden BEMU 2015">
    <meta name="author" content="I Made Arya Beta Widyatmika, Michael Abadi, Jems Naban, Widnyana Santika, Teknik Informatika UKDW 2012">
    <title>PEMILU BEMU UKDW</title>
  <!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/slider/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
        /*countdown*/
        .countdown {
          display: block;
          overflow: hidden;
          text-align: center;
          padding: 0;
          color: #fff;
        }

        .countdown li {
          list-style: none;
          display:inline-block;
          margin-right: 40px;
          text-align: center;
          text-transform: uppercase;
          font-size: 15px;
          position: relative;
        }

        .countdown li:last-child {
          margin-right: 0
        }

        .countdown li span {
          display: block;
          font-size: 30px;
          font-weight: 700;
          padding: 10px;
          width: 70px;
          border-radius: 60%;
          border: 2px solid #ccc;
        }
    </style>
</head><!--/head-->

<body id="home" class="homepage">


    <header id="top-header" class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a class="smooth-scroll" data-section="#home" href="#home">
                            <!-- <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""> -->
                            <div style="margin-top:10px;"><div style="color:white; font-size:30px;float:left;">Pemilu&nbsp;&nbsp;</div><div style="float:right;color:#2c3e50;font-size:30px;font-weight:bold;">BEMU UKDW</div> </div>
                        </a>
                    </div>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    
                    <ul id="nav" class="nav navbar-nav">
                        <li class="scroll"><a href="#home" class="smooth-scroll" data-section="#home">Home</a></li>
                        <li class="scroll"><a href="#about" class="smooth-scroll" data-section="#about">Kandidat</a></li>
                        <li class="scroll"><a href="<?php echo base_url()?>pilihcalon/result">Hasil</a></li>
                        <!-- <li class="scroll"><a href="#services" class="smooth-scroll" data-section="#services">Timeline</a></li> -->
                        <!-- <li class="scroll"><a href="#features" class="smooth-scroll" data-section="#features">Syarat</a></li> -->
                        <!-- <li class="scroll"><a href="#contact-area" class="smooth-scroll" data-section="#contact-area">Kontak</a></li>    -->
                        <?php if (isset($this->session->userdata('user_data')['username'])) {
                          echo "<li class='dropdown scroll'><a href='#data' class='dropdown-toggle' data-toggle='dropdown'><i class='icon-user'></i>"; 
                          echo "[".$this->session->userdata('user_data')['nim']."]  "; 
                          echo $this->session->userdata('user_data')['username']; 
                          echo "<b class='caret'></b></a>
                            <ul class='dropdown-menu'>
                                <li><a href='".base_url()."login/logout'>Logout</a></li>
                            </ul>
                          </li>";
                        }else{
                          echo "<li><a href='".base_url()."login'>Login</a></li>";
                        }

                        ?>
                        
                        
                    </ul>
                
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(<?php echo base_url(); ?>assets/img/slider/bpmu1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2><div style="color:#34495e">First say to yourself what you would be, and then do what you have to <span>do</span>.</div></h2>
                                    <p><span style="color:#8e44ad">Katakan pada diri kamu sendiri cita-cita kamu dan lakukan yang harus dilakukan</span> </p>
                                    <?php if (isset($this->session->userdata('user_data')['username'])) {
                                      echo '<a class="btn btn-primary btn-lg" href="'.base_url().'pilihcalon">Pilih Calon</a>';
                                    }else{
                                      echo '<a class="btn btn-primary btn-lg" href="'.base_url().'login">Pilih Calon</a>';
                                    }

                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(<?php echo base_url(); ?>assets/img/slider/bg6.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">

                                    <h2><span>Try not to </span> become a man of success but a man of <span>value</span> </h2>
                                    <p>Cobalah untuk tidak hanya menjadi manusia sukses namun menjadi manusia penuh makna dan arti </p>
                                    <?php if (isset($this->session->userdata('user_data')['username'])) {
                                      echo '<a class="btn btn-primary btn-lg" href="'.base_url().'pilihcalon">Pilih Calon</a>';
                                    }else{
                                      echo '<a class="btn btn-primary btn-lg" href="'.base_url().'login">Pilih Calon</a>';
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url(); ?>assets/img/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2>Don't Stop When You Are Tired. Stop When You Are <span>Done</span>.</h2>
                                    <p>Jangan pernah berhenti walaupun kamu lelah. Berhentilah di saat kamu selesai. </p>
                                    <?php if (isset($this->session->userdata('user_data')['username'])) {
                                      echo '<a class="btn btn-primary btn-lg" href="'.base_url().'pilihcalon">Pilih Calon</a>';
                                    }else{
                                      echo '<a class="btn btn-primary btn-lg" href="'.base_url().'login">Pilih Calon</a>';
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <div class="row">
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $sekarang = date('Y-m-d H:i:s'); 
                    $batas = '2015-11-26 08:00:00';
                    ?>

                    <?php if ($sekarang <= $batas): ?>
                        <div class="col-sm-6 col-md-6 col-md-offset-3"> 
                            <ul class="countdown" id="maincountdown">
                                <li>                    
                                    <span class="days time-font">00</span>
                                    <p>Hari </p>
                                </li>
                                <li>
                                    <span class="hours time-font">00</span>
                                    <p class="">Jam </p>
                                </li>
                                <li>
                                    <span class="minutes time-font">00</span>
                                    <p class="">Menit</p>
                                </li>
                                <li>
                                    <span class="seconds time-font">00</span>
                                    <p class="">Detik</p>
                                </li>               
                            </ul>
                            <center><h5  style="color:#fff">Menuju Pemilihan ... </h5></center>
                        </div>                    
                    <?php endif ?>
                </div>
                <h2 class="wow fadeInUp" data-wow-duration="250ms" data-wow-delay="0ms" style="font-size:25pt">GUNAKAN HAK PILIH MU UNTUK MASA DEPAN YANG <span> LEBIH BAIK </span></h2>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Kandidat
                    <center><img class="img-responsive" src="<?php echo base_url(); ?>assets/img/BEM.PNG" alt=""></center>
                </h2>

                <p class="text-center wow fadeInDown">Berikut dua kandidat dari BEMU yang sudah mendaftar yang nantinya dapat dipilih langsung. </p>
            </div>

            <div class="row">
                

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">1. Dea - Raka 
                      <!-- (Suara Sementara = 
                        <?php
                          $aa = $this->db->query("SELECT * FROM user WHERE pilihan = 1");
                          echo $aa->num_rows();

                          ?>
                        ) -->
                    </h3>
                    <p><b>Visi </b>
                      <ul>
                        <li>Menjadi Badan Eksekutif Mahasiswa UKDW sebagai lembaga yang mempersatukan serta membentuk generasi yang aktif, aspiratif, serta edukatif berdasarkan kasih .
                        </li>
                      </ul>
                    </p>

                    <p><b>Misi </b>
                      <ul>
                        <li>Mendukung kegiatan serta program kerja yang dijalankan mahasiswa UKDW</li>
                        <li>Mendukung minat dan bakat mahasiswa UKDW bidang akademis dan non akademis</li>
                        <li>Meningkatkan solidaritas antar mahasiswa UKDW melalui kegiatan penyalur minat dan bakat mahasiswa</li>
                        <li>Meningkatkan kesadaran mahasiswa UKDW untuk menjaga lingkungan </li>
                      </ul>
                    </p>

                    <!-- <a class="btn btn-primary" href="#">Discover Us</a> -->

                </div>
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" style="border-radius:50px" src="<?php echo base_url(); ?>assets/uploads/no1.jpg" alt="">
                </div>
            </div>

            <div class="row" style="margin-top:100px">
                <div class="col-sm-6 wow fadeInRight">
                    <img class="img-responsive" style="border-radius:50px" src="<?php echo base_url(); ?>assets/uploads/no2.jpg" alt="">
                </div>

                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">2. Yosafat - Stephanie 
                    </h3>
                    <p><b>Visi </b>
                      <ul>
                        <li>Mewujudkan Mahasiswa UKDW yang proaktif, cerdas, dan bertanggung jawab dalam kegiatan di dalam dan di luar UKDW berdasarkan kasih</li>
                      </ul>
                    </p>

                    <p><b>Misi </b>
                      <ul>
                        <li>Mewujudkan kesadaran mahasiswa UKDW untuk dapat aktif berorganisasi sedini-dininya</li>
                        <li>Menjadikan BEMU sebagai wadah beraktifitas melalui berbagai kegiatan akademik dan non-akademik</li>
                        <li>Menjadikan OK sebagai wadah pengembangan diri</li>
                      </ul>
                    </p>
                    <!-- <a class="btn btn-primary" href="#">Discover Us</a> -->

                </div>
                
            </div>
        </div>
    </section> 

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">
                        &copy; 2015 Pemilu BEMU UKDW. 
                    </p>
                    
                    <ul class="social-icons text-center">
                        <li><a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com"><i class="fa fa-twitter" target="blank"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/mousescroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/coundown-timer.js"></script>
        <script type="text/javascript">
            jQuery(function($) {'use strict',
                $("#maincountdown").countdown({
                    date: "26 November 2015 08:00:00",
                    format: "on"
                },
                
                function() {
                    // callback function
                });
            });

        </script>
</body>
</html>