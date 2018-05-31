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
      <a href="<?php echo get_option('udlap_facebook', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons1.png" target = "_blank" alt=""></a>
      <a href="<?php echo get_option('udlap_instagram', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons2.png" target = "_blank" alt=""></a>
      <a href="<?php echo get_option('udlap_twitter', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons3.png" target = "_blank" alt=""></a>
      <a href="<?php echo get_option('udlap_youtube', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons4.png" target = "_blank" alt=""></a>
    </div>
    <div class="nav-block"> 
      <?php  
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['primary'];
        $items = wp_get_nav_menu_items($menuID);
        $menus = array();
        foreach ($items as $item) {
          if($item->menu_item_parent == 0){
            $menus['item-' . $item->ID]['parent'] = $item;
          }else{
            $menus['item-' . $item->menu_item_parent]['children'][] = $item;
          }
        }

        foreach ($menus as $key => $value){
          $active = '';
          if($value['parent']->object_id == get_the_ID()){
            $active = 'active';
          }

          $has_sub = '';
          $children = '';
          if(isset($value['children'])){
            $has_sub = 'data-toggle="collapse" data-target="#menu-'.$value['parent']->object_id.'"';
            $parent_link = 'javascript:void(0);';
            $children = '<div id="menu-'.$value['parent']->object_id.'" class="collapse">';
            foreach ($value['children'] as $child) {
              if($child->object_id == get_the_ID()){
                $active = 'active';
              }
              $children .= '<a href="'.$child->url.'">'.$child->title.'</a>';
            }
            $children .= '</div>';
          }else{
            $parent_link = $value['parent']->url;
          }

          $prefix = '<div class="'.$active.'" '.$has_sub.'>';
          $parent = '<a href="'.$parent_link.'">'.strtoupper($value['parent']->title).'</a>';
          $html = $prefix . $parent . $children . '</div>';
          echo $html;
        }
      ?>
      </div>
    </div>

    <!-- Header -->
    <header class=" <?php if(is_front_page()){ echo 'banner wide home'; }else { echo 'banner default inner'; } ?>"  
    <?php if(is_front_page()){ 
      $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
      $bg = $thumb_url[0];
    ?> 
    style = "background: transparent url(<?php echo $bg; ?>) no-repeat left top;
    background-size: cover;
    background-position: center center;" 
    <?php }else{ ?> 
    style = "background: transparent url(<?php echo get_template_directory_uri(); ?>/assets/img/topbg.jpg?crc=4929004826) no-repeat left top;
    background-size: cover;
    background-position: center center;" 
    <?php } ?>
    >
      <nav class="container">
        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotop.png" alt="UDLAP Logo"></div>
        <div class="nav-proper">
          <div class="social-block-menu">
            <a href="<?php echo get_option('udlap_facebook', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons1.png" alt=""></a>
            <a href="<?php echo get_option('udlap_instagram', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons2.png" alt=""></a>
            <a href="<?php echo get_option('udlap_twitter', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons3.png" alt=""></a>
            <a href="<?php echo get_option('udlap_youtube', ''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socialicons4.png" alt=""></a>
          </div>
          <div class="nav-block"> 
            <?php
              foreach ($menus as $key => $value){
                $active = '';
                if($value['parent']->object_id == get_the_ID()){
                  $active = 'active';
                }

                $has_sub = '';
                $children = '';
                if(isset($value['children'])){
                  $has_sub = 'has-sub';
                  $parent_link = 'javascript:void(0);';
                  $children = '<div class="submenu">';
                  foreach ($value['children'] as $child) {
                    if($child->object_id == get_the_ID()){
                      $active = 'active';
                    }
                    $children .= '<a href="'.$child->url.'">'.$child->title.'</a>';
                  }
                  $children .= '</div>';
                }else{
                  $parent_link = $value['parent']->url;
                }

                $prefix = '<div class="'.$has_sub.' '.$active.'">';
                $parent = '<a href="'.$parent_link.'">'.strtoupper($value['parent']->title).'</a>';
                $html = $prefix . $parent . $children . '</div>';
                echo $html;
              }
            ?>
          </div>
        </div>
      </nav>
      <?php 
      if(is_front_page()){
        $welcome = get_field('welcome_section');
      ?>
      <div class="headline container">
        <div class="text-center">
          <span class="main-title"><?php echo $welcome['main_title']; ?></span>
          <span class="main-title strong">
            <?php echo $welcome['main_subtitle']; ?>
          </span>
        </div>
      </div>
      <?php }else{ ?>
      <div class="headline banner-headline">
          <div class="container">
            <img src="./assets/img/arrows1.jpg" alt="">
            <div class="title"><?php the_title(); ?></div>
          </div>
      </div>
      <?php } ?>
    </header>