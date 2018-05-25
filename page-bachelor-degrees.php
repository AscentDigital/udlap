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
             <?php the_content(); ?>
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
       <div class="row bs-block">

        <?php  
        if( have_rows('degree') ):
        while ( have_rows('degree') ) : the_row();
        ?>
        <div class="col-md-6">
          <div class="panel panel-default panel-course">
            <div class="panel-heading"><?php echo get_sub_field('abbreviation'); ?> <small><?php echo get_sub_field('title'); ?></small></div>
            <div class="panel-body">
              <ul>
                <?php  
                if( have_rows('course_list') ):
                while ( have_rows('course_list') ) : the_row();
                ?>
                <li><?php echo get_sub_field('details'); ?></li>
                <?php 
                endwhile;
                else :
                    // no layouts found
                endif;
                ?> 
              </ul>
            </div>
          </div>
        </div>
        <?php 
        endwhile;
        else :
            // no layouts found
        endif;
        ?> 
       </div>
</section>
<?php
	get_footer();
?>