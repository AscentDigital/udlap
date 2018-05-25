<?php  
  get_header();
  the_post();
  $image1 = get_field('image1');
  $image2 = get_field('image2');
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
       <div class="list-block">
          <div class ="list-title"><?php echo get_sub_field('listing_title'); ?></div>
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
      <div class="facilities-list">
        <div class ="list-title">BUILDING OR FACILITY CATEGORY</div>
        <ul>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
        </ul>
      </div>
      <div class="facilities-list">
        <h1>BUILDING OR FACILITY CATEGORY</h1>
        <ul>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
        </ul>
      </div>
      <div class="facilities-list">
        <h1>BUILDING OR FACILITY CATEGORY</h1>
        <ul>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
          <li>Building or facility name</li>
        </ul>
      </div>
    </section>
<?php
	get_footer();
?>