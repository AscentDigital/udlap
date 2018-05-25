<?php  
	get_header();
  the_post();
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
          <?php  
            $images = get_field('images');
            foreach ($images as $image) {
          ?>
          <div class="col-md-6 col-sm-6 text-center">
            <div class="image-box">
              <img src="<?php echo $image['url']; ?>">
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="content-text">
        <?php the_content(); ?>
      </div>
    </section>

<?php
	get_footer();
?>