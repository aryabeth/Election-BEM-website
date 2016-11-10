<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Pemilu Untuk pemilihan presiden BEMU 2015">
    <meta name="author" content="I Made Arya Beta Widyatmika, Michael Abadi, Jems Naban, Widnyana Santika, Teknik Informatika UKDW 2012">



    <title>Pemilu BEMUKDW | Result</title>



    <!-- Bootstrap Core CSS -->

    <link href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="<?php echo base_url() ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="<?php echo base_url() ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="<?php echo base_url() ?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



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



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>



<body>



    <div id="wrapper">



        <!-- Navigation -->

        <header id="top-header" class="navbar-inverse navbar-fixed-top">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">



                        <span class="sr-only">Toggle navigation</span>



                        <span class="icon-bar"></span>



                        <span class="icon-bar"></span>



                        <span class="icon-bar"></span>



                    </button>

                    <div class="navbar-brand">

                        <a href="<?php echo base_url(); ?>welcome">

                            <!-- <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""> -->

                            <div style="margin-top:10px;"><div style="color:white; font-size:30px;float:left;">Pemilu&nbsp;&nbsp;</div><div style="float:right;color:#2c3e50;font-size:30px;font-weight:bold;">BEMU UKDW</div> </div>

                        </a>

                    </div>

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

            </div>

        </header>



        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-6">

                    <h1 class="page-header">Pemilu BEM UKDW 2015 <small> - Hasil</small></h1>

                </div>
                <div class="col-lg-6">
                    
                </div>

                <!-- /.col-lg-12 -->

            </div>

            <!-- /.row -->

            <div class="row">

                <div class="col-lg-6">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            Suara Sementara

                        </div>

                        <!-- /.panel-heading -->

                        <div class="panel-body mypemilu">

                            <div id="morris-donut-chart"></div>

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->

                </div>

                <!-- /.col-lg-6 -->

                <div class="col-lg-6">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            Partisipasi Per Angkatan

                        </div>

                        <!-- /.panel-heading -->

                        <div class="panel-body linechart">

                            <div id="morris-bar-chart"></div>

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->

                </div>

                <!-- /.col-lg-6 -->

                <div class="col-lg-6 col-lg-offset-3">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            Partisipasi Per Prodi

                        </div>

                        <!-- /.panel-heading -->

                        <div class="panel-body">

                            <div id="morris-line-chart">

                                <table class="table" id="tabelpartisipasi">

                                    <thead>

                                        <th>no</th>

                                        <th>prodi</th>

                                        <th>jumlah partisipan</th>

                                    </thead>
                                    <tbody>

                                        

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->

                </div>

                <!-- /.col-lg-6 -->

            </div>

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->



    </div>

    <!-- /#wrapper -->



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



    <!-- jQuery -->

    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="<?php echo base_url() ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>



    <!-- Morris Charts JavaScript -->

    <script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael-min.js"></script>

    <script src="<?php echo base_url() ?>assets/bower_components/morrisjs/morris.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/morris-data.js"></script>



    <!-- Custom Theme JavaScript -->

    <script src="<?php echo base_url() ?>assets/dist/js/sb-admin-2.js"></script>



    <script type="text/javascript">

        $(document).ready(function () {
            count_result();

            function count_result () {
                $.ajax({

                    type:'POST',

                    url:'<?php echo base_url() ?>pilihcalon/getdonutchart/',

                    success:function(data){
                    $(".mypemilu").empty();
                    var moriss= "<div id='morris-donut-chart'></div>";
                    $(".mypemilu").append(moriss);
                        Morris.Donut({

                            element: 'morris-donut-chart',

                            data: [{

                                label: "Dea - Raka",

                                value: data['satu']

                            }, {

                                label: "Yoshi - Stefy",

                                value: data['dua']

                            }],

                            resize: true

                        });

                    }, error:function(data){

                        

                    }

                });



                $.ajax({

                    type:'POST',

                    url:'<?php echo base_url() ?>pilihcalon/getbarchart/',

                    success:function(data){
                        $('.linechart').empty();
                        $('.linechart').append('<div id="morris-bar-chart"></div>');

                       Morris.Bar({

                        element: 'morris-bar-chart',

                        data: [{

                            y: '< 2010',

                            a: data['bwh_10_satu'],

                            b: data['bwh_10_dua']

                        }, {

                            y: '2010',

                            a: data['10_satu'],

                            b: data['10_dua']

                        }, {

                            y: '2011',

                            a: data['11_satu'],

                            b: data['11_dua']

                        }, {

                            y: '2012',

                            a: data['12_satu'],

                            b: data['12_dua']

                        }, {

                            y: '2013',

                            a: data['13_satu'],

                            b: data['13_dua']

                        }, {

                            y: '2014',

                            a: data['14_satu'],

                            b: data['14_dua']

                        }, {

                            y: '2015',

                            a: data['15_satu'],

                            b: data['15_dua']

                        }],

                        xkey: 'y',

                        ykeys: ['a', 'b'],

                        labels: ['Dea-Raka', 'Yoshi-Stefy'],

                        hideHover: 'auto',

                        resize: true

                    });

                    }, error:function(data){

                        

                    }

                });



                $.ajax({

                    type:'POST',

                    url:'<?php echo base_url() ?>pilihcalon/getperprodi/',

                    success:function(data){

                        console.log(data);

                        $('#tabelpartisipasi tbody').empty();

                        $('#tabelpartisipasi tbody').append('<tr><td>1</td><td>Teknik Informatika</td><td>'+data['ti']+' orang</td></tr>');

                        $('#tabelpartisipasi tbody').append('<tr><td>2</td><td>Sistem Informasi</td><td>'+data['si']+' orang</td></tr>');

                        $('#tabelpartisipasi tbody').append('<tr><td>3</td><td>Kedokteran</td><td>'+data['kedokteran']+' orang</td></tr>');

                        $('#tabelpartisipasi tbody').append('<tr><td>4</td><td>Akuntasi</td><td>'+data['akuntansi']+' orang</td></tr>');

                        $('#tabelpartisipasi tbody').append('<tr><td>5</td><td>Manajemen</td><td>'+data['manajemen']+' orang</td></tr>');

                        $('#tabelpartisipasi tbody').append('<tr><td>6</td><td>Teologi</td><td>'+data['teologi']+' orang</td></tr>');

                        $('#tabelpartisipasi tbody').append('<tr><td>7</td><td>Desain Produk</td><td>'+data['despro']+' orang</td></tr>');

                        $('#tabelpartisipasi tbody').append('<tr><td>8</td><td>Arsitek</td><td>'+data['arsitek']+' orang</td></tr>');
                        $('#tabelpartisipasi tbody').append('<tr><td>9</td><td>Bioteknologi</td><td>'+data['biotek']+' orang</td></tr>');



                    }, error:function(data){

                        

                    }

                });
            }

            setInterval(count_result, 10000);

        })

    </script>



</body>



</html>

