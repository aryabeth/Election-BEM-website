<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Pemilu Untuk pemilihan presiden BEMU 2015">
    <meta name="author" content="I Made Arya Beta Widyatmika, Michael Abadi, Jems Naban, Widnyana Santika">
    <title>PILIH CALON</title>

  <!-- core CSS -->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/owl.transitions.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">

       

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/slider/logo.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-144-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-114-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-72-precomposed.png">

    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/img/ico/apple-touch-icon-57-precomposed.png">

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

                        <a href="<?php echo base_url(); ?>welcome">

                            <!-- <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""> -->

                            <div style="margin-top:10px;"><div style="color:white; font-size:30px;float:left;">Pemilu&nbsp;&nbsp;</div><div style="float:right;color:#2c3e50;font-size:30px;font-weight:bold;">BEMU UKDW</div> </div>

                        </a>

                    </div>

                    <!-- /logo -->

                </div>



                <!-- main nav -->

                <nav class="collapse navbar-collapse navbar-right" role="navigation">

                    

                    <ul id="nav" class="nav navbar-nav">

                        <li class="scroll"><a href="<?php echo base_url(); ?>welcome">Home</a></li>

                        <li><a href="<?php echo base_url();?>welcome#about">Kandidat</a></li>

                        <li><a href="<?php echo base_url();?>pilihcalon/result">Hasil</a></li>

                        <!-- <li><a href="<?php echo base_url();?>welcome#features">Syarat</a></li> -->

                        <!-- <li><a href="<?php echo base_url();?>welcome#contact-area">Kontak</a></li>   -->

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



    <section id="contact-area">

        <div class="container" style="margin-top:-100px">

            <div class="row">

                <div class="section-header">

                    <h2 class="section-title text-center animated wow fadeInDown " style="visibility: visible;">Pilih Calon </h2>

                    <p class="text-center animated wow fadeInDown " style="visibility: visible;">Pilih Presiden BEMU dengan hati nurani tanpa adanya intimidasi</p>

                </div>

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
                            <center><h5>Menuju Pemilihan ... </h5></center>
                        </div>                    
                    <?php endif ?>
                </div>

                <?=$this->session->flashdata('pesan')?>

                <form id="formpilih1" action="<?php echo base_url();?>pilihcalon/vote1" method="post">

                    <div class="col-lg-6 animated wow fadeInLeft" style="opacity: 1; left: 0px;">

                        

                        <div class="text-center">
                        <?php if (strtotime($sekarang) > strtotime($batas)): ?>
                            <button type="submit" class="btn btn-success" style="margin-top:10px;width:100px:height:80px;padding:10px;font-size:12pt">Pilih</button>
                        <?php endif ?>
                        

                        </div>

                        <br>

                        <div class="form-group">

                            <center>

                                <img class="img-responsive" style="border-radius:10px" src="<?php echo base_url(); ?>assets/uploads/cal1.jpg" alt="">

                                

                            </center>

                        </div>

                        

                    </div>

                </form>



                <form id="formpilih2" action="<?php echo base_url();?>pilihcalon/vote2" method="post">

                    <div class="col-lg-6 animated wow fadeInRight" style="opacity: 1; right: 0px;">
                        <div class="text-center">
                            <?php if ($sekarang > $batas): ?>
                                <button type="submit" class="btn btn-success" style="margin-top:10px;width:100px:height:80px;padding:10px;font-size:12pt">Pilih</button>
                            <?php endif ?>
                        </div>
                        <br>
                        <div class="form-group" >

                            <center>

                                <img class="img-responsive" style="border-radius:10px" src="<?php echo base_url(); ?>assets/uploads/cal2.jpg" alt="">

                                

                            </center>

                        </div>

                

                    </div>        

                </form>





                </form>



            </div>

        </div>

    </section><!--/#bottom-->



    <footer id="footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-12">

                    <p class="text-center">

                        &copy; 2015 Pemilu Presiden BEMU UKDW. 

                    </p>

                    

                    <ul class="social-icons text-center">

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </footer><!--/#footer-->



    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

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

