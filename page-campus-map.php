<?php  
	get_header();
  the_post();
  $image1 = get_field('image1');
  $file = $get_field['map_file'];
?>
<section class="white-block container campus-section">
      <div class="campus-pad">
        <div class="basic-block">
          <div class="text-box">
            <div class="black-text">
              <?php the_title(); ?>
            </div>
            <div class="details-text">
              <?php the_content(); ?>
            </div>
          </div>
        </div>  
      </div>
      <div class="map-pad">
        <div class="map-block">
          <div class="map-content">
            <a href="<?php echo $image1['url']; ?>" target ="_blank" class ="fullscreen">Click to View Fullscreen</a>
            <a href="<?php echo $file['url']; ?>" target ="_blank" class ="download">Click to Download Map</a>
          </div>
        </div>
      </div>
      <div class="map-image">
        <img src="<?php echo $image1['url']; ?>">
      </div>
    </section>
<?php
	get_footer();
?>