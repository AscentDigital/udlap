<?php  
	get_header();
  the_post();
?>
<section class="white-block container gallery-section">
      <div class="gallery-pad">
        <div class="basic-block">
          <div class="text-box">
            <div class="black-text">
              <?php the_title(); ?>
            </div>
            <p class = "video-date"><?php echo get_field('date'); ?></p>
          </div>
        </div>
      </div>
      <div class="row image-box">
        <?php 
          $images = get_field('gallery');
          foreach ($images as $image) {
        ?>
        <div class="col-md-3">
            <a href="<?php echo $image['url']; ?>" data-lightbox="gallery-img" data-title="<?php echo $image['title']; ?>">
            <img src="<?php echo $image['url']; ?>">
            </a>
        </div>
        <?php } ?>
      </div>  
</section>
<?php
	get_footer();
?>