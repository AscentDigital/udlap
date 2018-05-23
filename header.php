<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>UDLAP International</title>
  <?php wp_head(); ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- Leave those next 4 lines if you care about users using IE8 -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>  

  <!-- Mobile Nav-->
  <div class="mobile-nav-trigger">
    <i class="fa fa-bars"></i>
  </div> 
  <div class="mobile-nav">
    <div class="mobile-nav-close-trigger">
      <i class="fa fa-times"></i>
    </div> 
    <div class="social-block-menu">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/study.png" alt="">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons1.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons2.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons3.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons4.png" alt=""></a>
    </div>
    <div class="nav-block"> 
      <div class="active"> 
        <a href="javascript:void(0);">HOME</a>  
      </div>
      <div  data-toggle="collapse" data-target="#about"> 
        <a href="javascript:void(0);">ABOUT</a>
        <div id="about" class="collapse">
          <a href="./our-institution.html">Our institution</a>
          <a href="./acreditations.html">accredidations</a>
          <a href="./campus-map.html">campus tour</a>
          <a href="./videos.html">videos</a>
          <a href="./gallery.html">gallery</a>
          <a href="./brochures.html">Brochures</a>
        </div>  
      </div>
      <div data-toggle="collapse" data-target="#menu2"> 
        <a href="javascript:void(0);">Programs</a>
        <div id="menu2" class="collapse">
          <a href="./index.html">Menu 1</a>
          <a href="./index.html">Menu 2</a>  
          <a href="./index.html">Menu 3</a>  
          <a href="./index.html">Menu 4</a>  
          <a href="./index.html">Menu 5</a>  
          <a href="./index.html">Menu 6</a>  
        </div> 
      </div>
      <div> <a href="javascript:void(0);">student life</a> </div>
      <div data-toggle="collapse" data-target="#menu3"> <a href="javascript:void(0);">Financial Aid</a> 
        <div id="menu3" class="collapse">
          <a href="./index.html">Menu 1</a>
          <a href="./index.html">Menu 2</a>  
          <a href="./index.html">Menu 3</a>  
          <a href="./index.html">Menu 4</a>  
          <a href="./index.html">Menu 5</a>  
          <a href="./index.html">Menu 6</a>  
        </div> </div> 
        <div> <a href="javascript:void(0);">Contact</a> </div>
      </div>
    </div>

    <!-- Header -->
    <header class="banner wide home">
      <nav class="container">
        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotop.png" alt="UDLAP Logo"></div>
        <div class="nav-proper">
          <div class="social-block-menu">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons1.png" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons2.png" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons3.png" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons4.png" alt=""></a>
          </div>
          <div class="nav-block"> 
            <div class="active"> 
              <a href="javascript:void(0);">HOME</a>  
            </div>
            <div class="has-sub"> 
              <a href="javascript:void(0);">ABOUT</a>
              <div class="submenu">
                <a href="#">Our institution</a>
                <a href="#">accredidations</a>
                <a href="#">campus tour</a>
                <a href="#">videos</a>
                <a href="#">gallery</a>
                <a href="#">Brochures</a>
              </div>  
            </div>
            <div class="has-sub"> <a href="javascript:void(0);">Programs</a>
              <div class="submenu">
                <a href="#">Menu 1</a>
                <a href="#">Menu 2</a>  
              </div> 
            </div>
            <div> <a href="javascript:void(0);">student life</a> </div>
            <div> <a href="javascript:void(0);">Financial Aid</a> </div>
            <div> <a href="javascript:void(0);">Financial Aid</a> </div>
            <div> <a href="javascript:void(0);">Contact</a> </div>
          </div>
        </div>
      </nav>
      <div class="headline container">
        <div class="text-center">
          <span class="main-title">WELCOME TO</span> <br>
          <span class="main-title strong">
            UNIVERSIDAD DE LAS <br>AMÉRICAS PUEBLA
          </span>
        </div>
      </div>
    </header>