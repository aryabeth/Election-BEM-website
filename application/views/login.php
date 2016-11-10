<style type="text/css">

    @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700);

    fieldset {

      margin: 1em auto;

      padding: 2em;

      width: 22em;

      position: relative;

      border-radius: 2px;

      border-color: #2d333b;

      background: #1b1f24;

      box-shadow: 0 2px 2px #131518;

    }

    fieldset legend {

      font-weight: 700;

      font-size: 2em;

      text-transform: uppercase;

      letter-spacing: 0.12em;

      padding: 0.5em 2em;

      background: #171a1e;

      -webkit-border-image: -webkit-linear-gradient(270deg, rgba(255, 255, 255, 0) 50%, #2d333b 50%) 1 round;

           -o-border-image: linear-gradient(180deg, rgba(255, 255, 255, 0) 50%, #2d333b 50%) 1 round;

              border-image: linear-gradient(180deg, rgba(255, 255, 255, 0) 50%, #2d333b 50%) 1 round;

      border-width: 1px;

      border-style: solid;

      display: block;

      width: 100%;

      margin: 0 auto;

    }



    input, input + label > i {

      border-radius: 5px;

      box-shadow: none;

      border: 1px solid #384049;

      background: #FFF;

      display: block;

      width: 100%;

      -webkit-transition: all 0.3s ease;

              transition: all 0.3s ease;

    }

    input[type=text] {

      font-size: 1.5em;

      line-height: 1;

      padding: 0.3em 0.4em;

      margin: 0 0.5em 1em 0;

    }

    input[type=text]::-webkit-input-placeholder {

      color: #343b44;

      line-height: 1.2;

      -webkit-transition: all 0.2s ease;

              transition: all 0.2s ease;

    }

    input[type=text]:-moz-placeholder {

      color: #343b44;

      line-height: 1.2;

      transition: all 0.2s ease;

    }

    input[type=text]::-moz-placeholder {

      color: #343b44;

      line-height: 1.2;

      transition: all 0.2s ease;

    }

    input[type=text]:-ms-input-placeholder {

      color: #343b44;

      line-height: 1.2;

      transition: all 0.2s ease;

    }

    input[type=text] + label.error {

      color: #d84966;

      margin: -1em 0 2em;

      display: block;

      -webkit-transition: all 0.2s ease;

              transition: all 0.2s ease;

    }

    input[type=text]:hover {

      border-color: #4e5966;

    }

    input[type=text]:hover::-webkit-input-placeholder {

      color: #3f4752;

    }

    input[type=text]:hover:-moz-placeholder {

      color: #3f4752;

    }

    input[type=text]:hover::-moz-placeholder {

      color: #3f4752;

    }

    input[type=text]:hover:-ms-input-placeholder {

      color: #3f4752;

    }

    input[type=text].error {

      border-color: #d84966;

    }

    input[type=text].error:hover, input[type=text].error:focus {

      border-color: #b27b1c;

    }

    input[type=text].error:hover + label.error, input[type=text].error:focus + label.error {

      color: #b27b1c;

    }

    input[type=text]:focus {

      outline: none;

      border-color: #39a086;

    }

    input[type=text]:focus::-webkit-input-placeholder {

      -webkit-transform: translateX(20px);

              transform: translateX(20px);

      opacity: 0;

    }

    input[type=text]:focus:-moz-placeholder {

      transform: translateX(20px);

      opacity: 0;

    }

    input[type=text]:focus::-moz-placeholder {

      transform: translateX(20px);

      opacity: 0;

    }

    input[type=text]:focus:-ms-input-placeholder {

      -ms-transform: translateX(20px);

          transform: translateX(20px);

      opacity: 0;

    }

    input[type=password] {

      font-size: 1.5em;

      line-height: 1;

      padding: 0.3em 0.4em;

      margin: 0 0.5em 1em 0;

    }

    input[type=password]::-webkit-input-placeholder {

      color: #343b44;

      line-height: 1.2;

      -webkit-transition: all 0.2s ease;

              transition: all 0.2s ease;

    }

    input[type=password]:-moz-placeholder {

      color: #343b44;

      line-height: 1.2;

      transition: all 0.2s ease;

    }

    input[type=password]::-moz-placeholder {

      color: #343b44;

      line-height: 1.2;

      transition: all 0.2s ease;

    }

    input[type=password]:-ms-input-placeholder {

      color: #343b44;

      line-height: 1.2;

      transition: all 0.2s ease;

    }

    input[type=password] + label.error {

      color: #d84966;

      margin: -1em 0 2em;

      display: block;

      -webkit-transition: all 0.2s ease;

              transition: all 0.2s ease;

    }

    input[type=password]:hover {

      border-color: #4e5966;

    }

    input[type=password]:hover::-webkit-input-placeholder {

      color: #3f4752;

    }

    input[type=password]:hover:-moz-placeholder {

      color: #3f4752;

    }

    input[type=password]:hover::-moz-placeholder {

      color: #3f4752;

    }

    input[type=password]:hover:-ms-input-placeholder {

      color: #3f4752;

    }

    input[type=password].error {

      border-color: #d84966;

    }

    input[type=password].error:hover, input[type=password].error:focus {

      border-color: #b27b1c;

    }

    input[type=password].error:hover + label.error, input[type=password].error:focus + label.error {

      color: #b27b1c;

    }

    input[type=password]:focus {

      outline: none;

      border-color: #39a086;

    }

    input[type=password]:focus::-webkit-input-placeholder {

      -webkit-transform: translateX(20px);

              transform: translateX(20px);

      opacity: 0;

    }

    input[type=password]:focus:-moz-placeholder {

      transform: translateX(20px);

      opacity: 0;

    }

    input[type=password]:focus::-moz-placeholder {

      transform: translateX(20px);

      opacity: 0;

    }

    input[type=password]:focus:-ms-input-placeholder {

      -ms-transform: translateX(20px);

          transform: translateX(20px);

      opacity: 0;

    }



    .signin {

      font-size: 1.2em;

      font-weight: 700;

      text-transform: uppercase;

      background: #24d6a6;

      border: 1px solid transparent;

      color: #171a1e;

      padding: 0.5em 2em;

      margin: 2em 0 0;

      vertical-align: middle;

      display: block;

      width: 15%;

      border-radius: 3px;

      opacity: 0.8;

      -webkit-transition: all 0.2s ease;

              transition: all 0.2s ease;

    }

    .signin:hover {

      opacity: 1;

    }



    .vhide {

      opacity: 0;

      position: absolute;

      width: 0px;

      height: 0px;

      overflow: hidden;

    }



    * {

      box-sizing: border-box;

    }

</style>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Pemilu Untuk pemilihan presiden BEMU 2015">
    <meta name="author" content="I Made Arya Beta Widyatmika, Michael Abadi, Jems Naban, Widnyana Santika">

    <title>LOGIN</title>

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

                            <div style="margin-top:10px;"><div style="color:white; font-size:30px;float:left;">Pemilu&nbsp;&nbsp;</div><div style="float:right;color:#2c3e50;font-size:30px;font-weight:bold;">BEMU UKDW</div> </div>

                        </a>

                    </div>

                    <!-- /logo -->

                </div>



                <!-- main nav -->

                <nav class="collapse navbar-collapse navbar-right" role="navigation">

                  <ul id="nav" class="nav navbar-nav">

                        <li><a href="<?php echo base_url();?>welcome#home">Home</a></li>

                        <li><a href="<?php echo base_url();?>welcome#about">Kandidat</a></li>

                        <!-- <li><a href="<?php echo base_url();?>welcome#features">Syarat</a></li> -->

                        <!-- <li><a href="<?php echo base_url();?>welcome#services">Timeline</a></li> -->

                        <!-- <li><a href="<?php echo base_url();?>welcome#contact-area">Kontak</a></li>    -->

                        <li><a href="<?php echo base_url(); ?>login">Login</a></li>

                    </ul>

                    

                </nav>

                <!-- /main nav -->

                

            </div>

        </header>



    <section id="contact-area">

        <div class="container" style="margin-top:-100px">

            <div class="row">

                <div class="section-header">

                    <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Login </h2>

                    <p class="text-center wow fadeInDown animated" style="visibility: visible;">Gunakan Username dan Password E-class UKDW</p>

                </div>

                <form class="wow fadeInUp animated" action="<?php echo base_url()?>login/login_validation" method="post">

                    <div class="col-lg-4"></div>

                    <div class="col-lg-4" style="opacity: 1; left: 0px;">



                        <div class="form-group">



                            <label for="name">NIM</label>

                            <label for="username" class="vhide">NIM</label>

                            <input id="username" name="username" type="text"  class="form-control" placeholder="NIM" required >



                        </div>

                        

                        <div class="form-group">



                            <label for="name">Password</label>

                            <label for="password" class="vhide">Password</label>

                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>



                        </div>

                    </div>

                    

                    <div class="clearfix"></div>

                    <div class="text-center">

                        <button type="submit" class="signin btn btn-primary btn-lg btn-send-msg">Login</button>

                    

            <!-- <button type="submit" class="btn btn-primary btn-lg btn-send-msg">Login</button> -->

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