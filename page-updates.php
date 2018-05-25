<?php  
  get_header();
?>
<!-- Updates -->
<section class="white-block more-below update-proper container grid grid-lg grid-left">   
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php  
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'post_type' => 'updates',
                'paged' => $paged,
                'posts_per_page' => 9,
                'order' => 'DESC',
                'orderby' => 'post_date'
            );
            $query = new WP_Query($args);
            if($query->have_posts()){
              while($query->have_posts()){
                $query->the_post();
                $image = get_field('image');
            ?>
            <!--  -->
            <a href="<?php the_permalink(); ?>">
            <div class="row update-block"> 
                <div class="col-md-4">
                  <div class="picture-block" style="background-image: url('<?php echo $image['url']; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mas.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="copy-block">
                    <a href="#">
                      <div class="title"><?php the_title(); ?></div>
                    </a>
                    <div class="date"><?php get_the_date(); ?></div>

                    <div class="copy">
                        <?php echo the_field('details'); ?>
                    </div>
                  </div>
                  
                </div> 
            </div>
            </a>
            <?php
              }
              }
              wp_reset_query();
            ?>
        </div>
        <?php get_template_part('pagination'); ?> 
      </div>
 
</section>
<?php
  get_footer();
?>