<?php  
	get_header();

	get_template_part('includes/why-udlap', 'section');
?>
<!-- Tres Imagenes -->
      <section class="gray-block explore-proper">
        <div class="container explore-block">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tresfotos01.jpg" alt="">
            <div class="title">
              INTERNATIONAL <br>PROGRAMS
            </div> 
            <div class="desc">
              Lorem ipsum dolor sit amet,<br>eampartiendo expetendis. Ei <br>tacimates aliquando.
            </div> 
            <a href="#">More</a>
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tresfotos02.jpg" alt="">
            <div class="title">
             TAKE A LOOK TO <br>OUR CAMPUS
           </div> 
           <div class="desc">
            Lorem ipsum dolor sit amet,<br>eampartiendo expetendis. Ei <br>tacimates aliquando.
          </div> 
          <a href="#">More</a>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tresfotos03.jpg" alt="">
          <div class="title">
            FINANCIAL<br>AID
          </div> 
          <div class="desc">
            Lorem ipsum dolor sit amet, <br>eampartiendo expetendis. Ei <br>tacimates aliquando.
          </div> 
          <a href="#">More</a>
        </div>
      </div>
    </section>


    <!-- Mas UDLAP -->
    <section class="white-block container discover-proper">  

      <!-- discover block 1 - sneakpeek -->
      <div class="discover-block sneakpeek-proper">
        <div class="sneakpeek-block grid grid-md grid-left"> 
          <div class="copy-block">
            <div class="pre-headline">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mas.jpg" alt=""> Video Tour
            </div>
            <div class="headline">
              A QUICK <br>SNEAK PEEK
            </div>
            <div class="copy">
              Lorem ipsum dolor sit amet, eam cu partiendo expetendis. Ei tacimates aliquando eam, sea vitae exerci adversarium an. Ne option adolescens eam, dolores verterem delicata ut ius.
            </div>
            <a href="<?php echo get_template_directory_uri(); ?>/videos.html">More Videos</a>
          </div> 
        </div>
        <div class="video-block">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3hjcHOvcjk4" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
        </div>
      </div>

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
            <a href="#" class="brochure-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brochure.jpg" alt="brochure">
            </a> 
          </div>
          <a href="<?php echo get_template_directory_uri(); ?>/brochures.html">More Brochures</a>
        </div>
      </div>


    </section><!-- Mas UDLAP -->




    <!-- Galleria -->
    <section class="gray-block gallery more-below"> 
      <div class="container">

        <!-- discover block 3 - gallery proper -->
        <div class="discover-block gallery-proper">
          <div class="gallery-block"> 
            <div class="copy-proper grid grid-md grid-right"> 
              <div class="copy-block">
                <a href="<?php echo get_template_directory_uri(); ?>/galleries.html">
                  <div class="headliner">
                    Picture <br>Galleries
                  </div>
                </a>
                <div class="copy">
                  Lorem ipsum dolor sit amet, eam cu partiendo expetendis. Ei tacimates aliquando eam. Lorem ipsum dolor sit amet.
                </div>
              </div>
            </div> 
            <div class="images-block" data-items="2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picgall1.jpg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picgall2.jpg" alt="">
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
              <div class="social-api" id="facebook"></div>
            </div>
          </div>
          <div>
            <div class="title">instagram</div>
            <div class="social-content grid grid-sm grid-left">
              <div class="social-api" id="instagram"></div>
            </div>
          </div>
          <div>
            <div class="title">twitter</div>
            <div class="social-content grid grid-sm grid-left">
              <div class="social-api" id="twitter"></div>
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
            <?php echo $contact_section['headline']; ?><br>
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