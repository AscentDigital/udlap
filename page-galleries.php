<?php  
	get_header();
?>
<section class="white-block container galleries-section">
          <div class="row">
            <?php  
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'post_type' => 'gallery',
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
              <div class="gallery-box">
                <div class="gallery-thumbnail">
                  <a href="#" class ="gallery-link">
                  <img src="<?php echo $image['url']; ?>" class ="gallery">
                  </a>
                  <div class="text-box">
                    <p class ="gallery-title"><a href="">Title of the gallery</a></p>
                    <p class ="gallery-date">April 2018</p>
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