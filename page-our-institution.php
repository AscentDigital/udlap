<?php  
	get_header();
  the_post();
  $image1 = get_field('image1');
  $image2 = get_field('image2');
  $image3 = get_field('image3');
  $image4 = get_field('image4');
?>
    <section class="white-block container institution-section">
      <div class="basic-block">
        <div class="text-box">
          <div class="black-text">
            <?php echo get_field('heading'); ?>
          </div>
          <div class="gray-text">
            <?php echo get_field('sub_heading'); ?>
          </div>
          <div class="details-text">
            <?php echo get_field('details'); ?></div>
        </div>
      </div>  
      <div class="image-block">
        <div class="row">
          <div class="col-md-6 col-sm-6 text-center">
            <div class="image-box">
              <img src="<?php echo $image1['url']; ?>">
            </div>
          </div>
          <div class="col-md-6 col-sm-6 text-center">
            <div class="image-box">
              <img src="<?php echo $image2['url']; ?>">
            </div>
          </div>
          <div class="col-md-6 col-sm-6 text-center">
            <div class="image-box">
              <img src="<?php echo $image3['url']; ?>">
            </div>
          </div>
          <div class="col-md-6 col-sm-6 text-center">
            <div class="image-box">
              <img src="<?php echo $image4['url']; ?>">
            </div>
          </div>
        </div>
      </div>
      <div class="content-text">
        <?php the_content(); ?>
      </div>
    </section>

<?php
	get_footer();
?>