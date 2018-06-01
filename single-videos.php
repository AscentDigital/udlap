<?php  
	get_header();
  the_post();
?>
<section class="white-block container video-section">
      <div class="basic-block">
        <div class="text-box">
          <div class="black-text">
            <?php the_title(); ?>
          </div>
          <hr class ="basic-hr">
          <p class = "video-date"><?php echo get_field('date'); ?></p>
        </div>
      </div>
      <div class="row video-box">
        <div class="col-md-12">
          <div class="video">
          <iframe width="100%" height="100%" src="<?php echo get_field('youtube_link'); ?>" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>  
    </section>
<?php
	get_footer();
?>