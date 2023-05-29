<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $judul; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css') ?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/freelancer.min.css')?>" rel="stylesheet">

  <!-- CSS BUAT SENDIRI -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>

  <!-- fungsi ajax-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/iniajax.js') ?>"></script>



  <style>
      .text_content{
        text-indent: 60px;
        text-align: justify;
      }
    </style>

  <style type="text/css">
    input[type=text] {
      width: 100px;
      padding: 0px 0px;
      margin: 0px 0;
      box-sizing: border-box;
      border: none;
      border-bottom: 1px solid black;
    }
  </style>

  <style type="text/css"> 
     .unable{ 
        pointer-events: none; 
        cursor:         default;
        text-decoration: none; 
        color:     #8a8585;
        background-color: #D3D3D3;
     }

     b{
      color: black;
     }
  </style>

  <!-- buat show hide di bagian materi ak hehehe -->
  <script>
    $(document).ready(function(){
        // $('.cobashowhide').hide();

        // // pas class show di panggil, dia bakal KELUAR
        // $('.show').click(function(){
        //   $('.cobashowhide').show();
        // })

        // pas 

        $('.cobashowhide1').hide();
        // coba Toggle
        $('.show1').click(function(){
          $('.cobashowhide1').toggle("slow");
        })


        $('.cobashowhide2').hide();
        // coba Toggle
        $('.show2').click(function(){
          $('.cobashowhide2').toggle("slow");
        })


        $('.cobashowhide3').hide();
        // coba Toggle
        $('.show3').click(function(){
          $('.cobashowhide3').toggle("slow");
        })

        $('.cobashowhide4').hide();
        // coba Toggle
        $('.show4').click(function(){
          $('.cobashowhide4').toggle("slow");
        })

    });
  </script>
</head>



<body id="page-top">

  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('siskom/utama') ?>">SISKOM</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" style="padding-right: 5px">
          
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('siskom/utama') ?>"> HALAMAN UTAMA</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('materi') ?>">MATERI</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('soal/soal') ?>">LATIHAN</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('siskom/tentang') ?>">TENTANG</a>
          </li> 

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('siskom/bantuan') ?>">BANTUAN</a>
          </li> 
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('siskom/logout') ?>">KELUAR</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

    <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
    });
    </script>

    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?...">
    </script>

