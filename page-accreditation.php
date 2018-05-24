<?php  
	get_header();
  the_post();
?>

 <section class="white-block container accreditation-section">
      <div class="basic-block">
        <div class="text-box">
          <div class="black-text">
            ACCREDITATIONS
          </div>
          <div class="details-text">
            <?php echo get_field('details'); ?>  
          </div>
        </div>
      </div>  
      <div class="content-text">
        <?php the_content(); ?>
      </div>
      <?php  
                if( have_rows('general_description') ):

                   // loop through the rows of data
                  while ( have_rows('general_description') ) : the_row();
                $img = get_sub_field('image');
      ?>
              <div class="accreditators">
                <h1><?php echo get_sub_field('heading'); ?></h1>
                <h2><?php echo get_sub_field('sub_heading'); ?></h2>
                <p>
                  <?php echo get_sub_field('content'); ?>
                </p>
                <img src="<?php echo $img['url']; ?>">
              </div>
      <?php 
              endwhile;

              else :

                  // no layouts found

              endif;
              ?> ?>
    </section>
    
<?php
	get_footer();
?>