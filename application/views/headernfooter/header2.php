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



 <!--  <style>
    .text_content{
      text-indent: 60px;
      text-align: justify;
    }
  </style>

  <style type="text/css">
    input[type=text] {
      width: 200px;
      padding: 0px 0px;
      margin: 0px 0;
      box-sizing: border-box;
      border: none;
      border-bottom: 1px solid black;
    }
    input[type=password] {
      width: 200px;
      padding: 0px 0px;
      margin: 0px 0;
      box-sizing: border-box;
      border: none;
      border-bottom: 1px solid black;
    }
  </style> -->
</head>



<body id="page-top">

  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <h3 style="color: white">SISKOM</h3>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" style="padding-right: 5px">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('siskom/logout') ?>"><?php echo $keluar; ?></a>
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

