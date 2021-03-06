<?php  
  get_header();
  the_post();
  $image = get_field('image');
?>
<section class="white-block container post-section">
      <div class="basic-block">
        <div class="text-box">
          <div class="black-text">
            <?php the_title(); ?>
          </div>
          <div class="gray-text">
            <?php echo get_the_date('F j, Y'); ?>
          </div>
          <div class="details-text">
            <?php echo the_field('details'); ?>
          </div>
        </div>
      </div>  
      <div class="image-block">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="image-box">
              <img src="<?php echo $image['url']; ?>">
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