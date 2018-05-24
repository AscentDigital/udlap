<?php  
	get_header();
?>
<section class="white-block container videos-section">
          <div class="row">
            <?php  
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'post_type' => 'videos',
                'paged' => $paged,
                'posts_per_page' => 9,
                'order' => 'DESC',
                'orderby' => 'post_date'
            );
            $query = new WP_Query($args);
            if($query->have_posts()){
              while($query->have_posts()){
                $query->the_post();
                $image = get_field('thumbnail');
            ?>
            <div class ="col-md-4">
              <div class="video-box">
                <div class="video-thumbnail">
                  <a href="<?php the_permalink(); ?>" class ="video-link">
                  <img src="<?php echo $image['url']; ?>" class ="video">
                  </a>
                  <div class="text-box">
                    <p class ="video-title"><a href=""><?php the_title(); ?></a></p>
                    <p class ="video-date"><?php echo get_field('date'); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
              }
              }
              wp_reset_query();
            ?>
          </div>
          <?php get_template_part('pagination'); ?> 
</section>

<?php
	get_footer();
?>