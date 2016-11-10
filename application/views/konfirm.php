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

                            <div style="margin-top:10px;"><div style="color:white; font-size:30px;float:left;">Pemilu&nbsp;&nbsp;</div><div style="float:right;color:#EF662F;font-size:30px;font-weight:bold;">BEMU UKDW</div> </div>

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

                    <h2 class="section-title text-center animated wow fadeInDown " style="visibility: visible;">Pemilu Presiden & Wakil Presiden BEMU UKDW </h2>

                    <p class="text-center animated wow fadeInDown " style="visibility: visible;">Terimakasih sudah berpartisipasi dalam pemilihan ketua dan wakil ketua BEMU periode 2016.</p>

                </div>



                <!-- <div class="col-md-12"><div class="alert alert-danger" id="alert">MOHON MAAF BATAS WAKTU PEMILIHAN SUDAH HABIS.</div></div> -->

                <div class="col-md-12"><div class="alert alert-success" id="alert">Anda sudah memilih, Terimakasih sudah berpartisipasi.</div></div>

                <form id="formpilih1" action="<?php echo base_url();?>pilihcalon/vote1" method="post">

                    <div class="col-lg-6 animated wow fadeInLeft" style="opacity: 1; left: 0px;">

                        <div class="form-group">

                            <center>

                                <h3>

                                    ( Perolehan Suara = 

                                    <?php

                                      $aa = $this->db->query("SELECT * FROM hasil_pemilu WHERE pilihan = 1");

                                      echo $aa->num_rows();



                                      ?>

                                    )



                                </h3>

                                <img class="img-responsive" style="border-radius:10px" src="<?php echo base_url(); ?>assets/uploads/cal1.jpg" alt="">

                                

                            </center>

                        </div>

                        <!-- <div class="text-center">

                            <button type="submit" class="btn btn-success" style="margin-top:10px;width:100px:height:80px;padding:10px;font-size:12pt">Pilih</button>

                        </div> -->

                    </div>

                </form>



                <form id="formpilih2" action="<?php echo base_url();?>pilihcalon/vote2" method="post">

                    <div class="col-lg-6 animated wow fadeInRight" style="opacity: 1; right: 0px;">

                        <div class="form-group" >

                            <center>

                                <h3>

                                    ( Perolehan Suara = 

                                    <?php

                                      $aa = $this->db->query("SELECT * FROM hasil_pemilu WHERE pilihan = 2");

                                      echo $aa->num_rows();



                                      ?>

                                    )

                                </h3>

                                <img class="img-responsive" style="border-radius:10px" src="<?php echo base_url(); ?>assets/uploads/cal2.jpg" alt="">

                                

                            </center>

                        </div>

                    

                        <!-- <div class="text-center">

                            <button type="submit" class="btn btn-success" style="margin-top:10px;width:100px:height:80px;padding:10px;font-size:12pt">Pilih</button>

                        </div> -->

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

</body>

</html>

