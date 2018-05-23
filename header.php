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
        <a href="http://udlap.seventy4media.com/">HOME</a>  
      </div>
      <div  data-toggle="collapse" data-target="#about"> 
        <a href="javascript:void(0);">ABOUT</a>
        <div id="about" class="collapse">
          <a href="http://udlap.seventy4media.com/our-institution/">Our institution</a>
          <a href="http://udlap.seventy4media.com/accreditation/">Accreditations</a>
          <a href="#">Campus tour</a>
          <a href="http://udlap.seventy4media.com/videos/">Videos</a>
          <a href="./gallery.html">gallery</a>
          <a href="./brochures.html">Brochures</a>
        </div>  
      </div>
      <div data-toggle="collapse" data-target="#menu2"> 
        <a href="javascript:void(0);">Programs</a>
        <div id="menu2" class="collapse">
          <a href="#">Bachelor Degrees</a>
          <a href="#">Transfer Students</a>  
          <a href="#">Summer Immersion</a>  
        </div> 
      </div>
      <div data-toggle="collapse" data-target="#menu3"> <a href="javascript:void(0);">Student life</a> 
        <div id="menu3" class="collapse">
          <a href="#">Facilities</a>
          <a href="#">Activities</a>
          <a href="#">Living Costs</a>
          <a href="#">Safety in Puebla</a>
          <a href="#">Campus Map</a>
        </div> 
      </div> 
        <div> <a href="javascript:void(0);"></a>Financial Aid</div>
        <div> <a href="javascript:void(0);">Contact</a> </div>
      </div>
    </div>

    <!-- Header -->
    <header class=" <?php if(is_front_page()){ echo 'banner wide home'; }else { echo 'banner default inner'; } ?>">
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
              <a href="http://udlap.seventy4media.com/">HOME</a>  
            </div>
            <div class="has-sub"> 
              <a href="javascript:void(0);">ABOUT</a>
              <div class="submenu">
                <a href="http://udlap.seventy4media.com/our-institution/">Our institution</a>
                <a href="http://udlap.seventy4media.com/accreditation/">Accreditations</a>
                <a href="#">Campus tour</a>
                <a href="http://udlap.seventy4media.com/videos/">Videos</a>
                <a href="#">Gallery</a>
                <a href="#">Brochures</a>
              </div>  
            </div>
            <div class="has-sub"> <a href="javascript:void(0);">Programs</a>
              <div class="submenu">
                <a href="#">Bachelor Degrees</a>
                <a href="#">Transfer Students</a>  
                <a href="#">Summer Immersion</a>  
              </div> 
            </div>
            <div class="has-sub"> <a href="javascript:void(0);">Student Life</a>
              <div class="submenu">
                <a href="#">Facilities</a>
                <a href="#">Activities</a>
                <a href="#">Living Costs</a>
                <a href="#">Safety in Puebla</a>
                <a href="#">Campus Map</a>
              </div> 
            </div>
            <div> <a href="javascript:void(0);">Financial Aid</a> </div>
            <div> <a href="javascript:void(0);">Contact</a> </div>
          </div>
        </div>
      </nav>
      <?php 
      if(is_front_page()){
       ?>
      <div class="headline container">
        <div class="text-center">
          <span class="main-title">WELCOME TO</span> <br>
          <span class="main-title strong">
            UNIVERSIDAD DE LAS <br>AMÉRICAS PUEBLA
          </span>
        </div>
      </div>
      <?php }else{ ?>
      <div class="headline">
            <div class ="container head-arrow">
               <p><?php the_title(); ?></p> 
            </div>
        </div>
      <?php } ?>
    </header>