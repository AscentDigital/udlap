<?php  
	get_header();
?>
<section class="white-block container brochures-section">
          <div class="row">
            <?php  
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'post_type' => 'brochures',
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
                $file = get_field('file');
            ?>
            <div class="col-md-4">
              <div class="panel panel-default panel-brochures">
                  <div class="panel-body">
                    <p class="brochure-title">
                      <?php the_title(); ?>
                    </p>
                    <div class="brochure-image">
                      <img src="<?php echo $image['url']; ?>">
                    </div>
                  </div>
                  <a href="<?php echo $file['url']; ?>" target = "_blank" download>
                  <div class="panel-footer">
                    Download Here
                  </div>
                  </a>
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