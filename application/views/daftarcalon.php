<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DAFTAR CALON</title>
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
                            <div style="margin-top:10px;"><div style="color:white; font-size:30px;float:left;">Pemilu&nbsp;&nbsp;</div><div style="float:right;color:#EF662F;font-size:30px;font-weight:bold;">FTI UKDW</div> </div>
                        </a>
                    </div>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    
                    <ul id="nav" class="nav navbar-nav">
                        <li class="scroll"><a href="<?php echo base_url(); ?>welcome">Home</a></li>
                        <li><a href="<?php echo base_url();?>welcome#features">Syarat</a></li>
                        <li><a href="<?php echo base_url();?>welcome#services">Timeline</a></li>
                        <li><a href="<?php echo base_url();?>welcome#contact-area">Kontak</a></li>  
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
                    <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Daftar Calon </h2>
                    <p class="text-center wow fadeInDown animated" style="visibility: visible;">Isikan form berikut dengan data yang benar</p>
                </div>

                <?=$this->session->flashdata('pesan')?>
                <form id="daftar_form" class="wow fadeInUp animated" action="<?php echo base_url();?>daftarcalon/submit_calon" method="post">
                    <div class="col-lg-6 animated animate-from-left" style="opacity: 1; left: 0px;">
                        <div class="form-group">
                            <label for="name">Pilih Lembaga Kemahasiswaan</label>
                            <select class="form-control" name="lk" id="lk" required style="border-radius:0px">
                                <option value="" selected>- Pilih -</option>
                                <option value="BEM">BEM</option>
                                <option value="HMTI">HMTI</option>
                                <option value="HMSI">HMSI</option>
                            </select>    
                        </div>

                        <div class="form-group">
                            <label for="name">Nama Ketua</label>
                            <input id="namaketua" type="text" name="namaketua" class="form-control" placeholder="Nama Ketua" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Nama Wakil</label>
                            <input id="namawakil" type="text" name="namawakil" class="form-control" placeholder="Nama Wakil" required>
                        </div>
                    
                        <div class="form-group">
                            <label>Nama Gabungan</label>
                            <input id="namagabungan" name="namagabungan" class="form-control" placeholder="Contoh : Jokowi - JK" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Nomor HP Ketua</label>
                            <input id="nohp" name="nohp" class="form-control" placeholder="Masukan nomor aktif" required>
                        </div>

                        <div class="form-group">
                            <label>Foto Calon (Foto bebas dengan pose berdua)</label>
                            <input id="foto" type="file" name="foto" class="form-control"required>
                        </div>
                        
                    </div>

                    <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                        <div class="form-group">
                            <label>Pengalaman Beroganisasi</label>
                            <textarea name="pengalaman" id="pengalaman" class="form-control" rows="3" placeholder="Pengalaman organisasi ketua & wakil " required></textarea>
                        </div>
                    </div>        

                    <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                        <div class="form-group">
                            <label>Visi</label>
                            <textarea name="visi" id="visi" class="form-control" rows="3" placeholder="Visi" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea name="misi" id="misi" class="form-control" rows="3" placeholder="Misi" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                        <div class="form-group">
                            <label>Motivasi Menjadi Pemimpin LK</label>
                            <textarea name="motivasi" id="motivasi" class="form-control" rows="3" placeholder="Motivasi Menjadi Pemimpin LK " required></textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">

                          <button type="submit" class="btn btn-success" style="margin-top:10px;width:100px:height:80px;padding:10px;font-size:12pt">Daftar</button>

                    </div>

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
