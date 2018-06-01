<?php  
  get_header();
  the_post();
  $image1 = get_field('image1');
  $image2 = get_field('image2');
  $image3 = get_field('image3');
  $image4 = get_field('image4');
  $image5 = get_field('image5');
  $image6 = get_field('image6');
?>
   <section class="white-block container facilities-section">
      <div class="basic-block">
        <div class="text-box">
          <div class="black-text">
            <?php the_title(); ?>
          </div>
          <div class="details-text">
            <?php the_content(); ?>
          </div>
          <a href="<?php echo the_field('url') ?>">
          <div class="gallery-link">
             Visit Facilities Gallery 
          </div>
          </a>
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
          <div class="col-md-6 col-sm-6 text-center">
            <div class="image-box">
              <img src="<?php echo $image5['url']; ?>">
            </div>
          </div>
          <div class="col-md-6 col-sm-6 text-center">
            <div class="image-box">
              <img src="<?php echo $image6['url']; ?>">
            </div>
          </div>
        </div>
      </div>
       <?php  
       if( have_rows('listing') ):
       while ( have_rows('listing') ) : the_row();
       ?>
       <div class="facilities-list">
          <div class ="list-title"> <span class="orange-box">■ </span> <?php echo get_sub_field('listing_title'); ?></div>
          <ul>
            <?php  
            if( have_rows('listing_details') ):
            while ( have_rows('listing_details') ) : the_row();
            ?>
            <li><?php echo get_sub_field('detail'); ?></li>
            <?php 
            endwhile;
            else :
                // no layouts found
            endif;
            ?>
          </ul>
       </div>
        <?php 
        endwhile;
        else :
            // no layouts found
        endif;
        ?> 
    </section>
<?php
	get_footer();
?>