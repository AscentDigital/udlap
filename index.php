<?php  
	get_header();

	get_template_part('includes/why-udlap', 'section');
?>
<!-- Tres Imagenes -->
      <?php 
      $featuredbox1 = get_field('featured_box_1');
      $image1 = $featuredbox1['featured_image'];
      $featuredbox2 = get_field('featured_box_2');
      $image2 = $featuredbox2['featured_image'];
      $featuredbox3 = get_field('featured_box_3');
      $image3 = $featuredbox3['featured_image'];
      ?>
      <section class="gray-block explore-proper">
        <div class="container explore-block">
        <div>
          <img src="<?php echo $image1['url'];?>" alt="">
          <div class="title">
              <?php echo $featuredbox1['featured_title'] ?>
          </div> 
          <div class="desc">
              <?php echo $featuredbox1['featured_details'] ?>
          </div> 
          <a href="#">More</a>
        </div>
        <div>
          <img src="<?php echo $image2['url'];?>" alt="">
          <div class="title">
             <?php echo $featuredbox2['featured_title'] ?>
          </div> 
          <div class="desc">
            <?php echo $featuredbox2['featured_details'] ?>
          </div> 
          <a href="#">More</a>
        </div>
        <div>
          <img src="<?php echo $image3['url'];?>" alt="">
          <div class="title">
            <?php echo $featuredbox3['featured_title'] ?>
          </div> 
          <div class="desc">
            <?php echo $featuredbox3['featured_details'] ?>
          </div> 
          <a href="#">More</a>
        </div>
      </div>
    </section>


    <!-- Mas UDLAP -->
    <section class="white-block container discover-proper">  
      <?php $featuredvideo = get_field('featured_video'); ?>
      <!-- discover block 1 - sneakpeek -->
      <div class="discover-block sneakpeek-proper">
        <div class="sneakpeek-block grid grid-md grid-left"> 
          <div class="copy-block">
            <div class="pre-headline">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mas.jpg" alt=""> Video Tour
            </div>
            <div class="headline">
              <?php echo $featuredvideo['video_title'] ?>
            </div>
            <div class="copy">
              <?php echo $featuredvideo['video_details'] ?>
            </div>
            <a href="<?php echo get_site_url(); ?>/videos/">More Videos</a>
          </div> 
        </div>
        <div class="video-block">
          <iframe width="100%" height="100%" src="<?php echo $featuredvideo['video_url'] ?>" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <?php $featuredbrochure = get_field('featured_brochure'); 
      $file = $featuredbrochure['brochure_file'];
      ?>
      <!-- discover block 2 - downloads -->
      <div class="discover-block downloads-proper">
        <div class="copy-block">
          download<br>
          our<br>
          brochure<br>
          here
        </div>
        <div class="downloads-block grid grid-md grid-right">
          <div class="brochure-proper">
            <a href="<?php echo $file['url']; ?>" class="brochure-block" download>
              <img src="<?php echo $image['url']; ?>" alt="brochure">
            </a> 
          </div>
          <a href="<?php echo get_site_url(); ?>/brochures/">More Brochures</a>
        </div>
      </div>
    </section><!-- Mas UDLAP -->




    <!-- Galleria -->
    <?php $featuredgallery = get_field('featured_gallery'); 
      $gallery_image1 = $featuredgallery['image_1']; 
      $gallery_image2 = $featuredgallery['image_2'];
      ?>
    <section class="gray-block gallery more-below"> 
      <div class="container">

        <!-- discover block 3 - gallery proper -->
        <div class="discover-block gallery-proper">
          <div class="gallery-block"> 
            <div class="copy-proper grid grid-md grid-right"> 
              <div class="copy-block">
                <a href="<?php echo get_site_url(); ?>/galleries/">
                  <div class="headliner">
                    <?php echo $featuredgallery['gallery_title'] ?>
                  </div>
                </a>
                <div class="copy">
                  <?php echo $featuredgallery['gallery_details'] ?>
                </div>
              </div>
            </div> 
            <div class="images-block" data-items="2">
              <img src="<?php echo $gallery_image1['url']; ?>" alt="">
              <img src="<?php echo $gallery_image2['url']; ?>" alt="">
            </div> 
          </div> 
          <div class="gallery-deco"></div>  
        </div> 
        

      </div>
    </section>


    <!-- Contact UDLAP -->
    <section class="white-block container contact-proper more-below">  
      
      <!-- contact block 1 - social -->
      <div class="contact-block social-proper">
        <div class="headliner">
          GET SOCIAL
        </div>
        <div class="social-block">
          <div>
            <div class="title">facebook</div>
            <div class="social-content grid grid-sm grid-left">
              <div class="social-api" id="facebook">
                <?php if ( is_active_sidebar( 'facebook_feed' ) ) : ?>
                  <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                    <?php dynamic_sidebar( 'facebook_feed' ); ?>
                  </div><!-- #primary-sidebar -->
               <?php endif; ?>
             </div>
            </div>
          </div>
          <div>
            <div class="title">instagram</div>
            <div class="social-content grid grid-sm grid-left">
              <div class="social-api" id="instagram">
                <?php if ( is_active_sidebar( 'instagram_feed' ) ) : ?>
                  <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary" style="max-height:350px;overflow:auto;">
                    <?php dynamic_sidebar( 'instagram_feed' ); ?>
                  </div><!-- #primary-sidebar -->
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div>
            <div class="title">twitter</div>
            <div class="social-content grid grid-sm grid-left">
              <div class="social-api" id="twitter">
                <?php if ( is_active_sidebar( 'twitter_feed' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary" style="height:100%">
                  <?php dynamic_sidebar( 'twitter_feed' ); ?>
                </div><!-- #primary-sidebar -->
                <?php endif; ?>
              </div>
            </div>
          </div>

        </div>
      </div>
      

      <!-- contact block 2 - questions -->
      <?php $contact_section = get_field('contact_section'); ?>
      <div class="contact-block inquiry-proper">

        <div class="inquiry-block">

          <div class="copy-block grid grid-md grid-right">
            <div class="headliner">
            <?php echo $contact_section['headline']; ?>
              <div class="subheadline"><?php echo $contact_section['subheadline']; ?></div>
            </div>
            <div class="copy">
               <?php echo $contact_section['description']; ?>
            </div>
          </div>
          <form id="contact-form">
          <div class="form-block">
            <div class="alert alert-success" id="contact-success" style="display: none;">Your submission has been sent.</div>
            <div class="input-proper">
              <input type="text" placeholder="Enter Name" name="name">
            </div>
            <div class="input-proper">
              <input type="text" placeholder="Enter Email" name="email">
            </div>
            <div class="input-proper">
              <textarea placeholder="Enter Your Message" name="message"></textarea>
            </div>
            <button id="contact-submit" type="submit" class="udlap-btn udlap-teal sticky-btn sticky-inquiry">SEND</button>
          </div>
          </form>
        </div>

      </div>

    </section>
<?php
	get_footer();
?>