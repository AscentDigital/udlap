<?php  
	get_header();
  the_post();
  $image1 = get_field('image1');
  $image2 = get_field('image2');
?>
 <!-- Bachelor Degrees -->
    <section class="white-block more-below gridpanel-proper bachelor-proper container">  
       <!-- bachelor Block -->
       <div class="gridpanel-block"> 
         <div class="copy-block grid grid-md grid-right">
           <div class="title">
             <?php the_title(); ?>
           </div>
           <div class="copy">
             <?php the_content(); ?>
           </div>
         </div> 
         <div class="image-grid">
            <div class="image-block">
              <div style="background-image:url('<?php echo $image1['url']; ?>')"></div>
            </div>
            <div class="image-block">
              <div style="background-image:url('<?php echo $image2['url']; ?>')"></div>
            </div>    
         </div>  
       </div> 
       <?php  
       if( have_rows('listing') ):
       while ( have_rows('listing') ) : the_row();
       ?>
       <div class="list-block">
          <span class ="list-block-title"><?php echo get_sub_field('listing_title'); ?></span>
          <ul>
            <?php  
            if( have_rows('listing_details') ):
            while ( have_rows('listing_details') ) : the_row();
            ?>
            <li>
              <span class ="list-block-main"><?php echo get_sub_field('main_detail'); ?></span>
              <span class ="list-block-sub"><?php echo get_sub_field('sub_detail'); ?></span>
            </li>
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