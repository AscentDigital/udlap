<?php  
	get_header();
  the_post();
  $image1 = get_field('image1');
  $image2 = get_field('image2');
?>
 <!-- Contact -->
    <section class="white-block more-below gridpanel-proper connect-proper container"> 
       

       <!-- Connect with us Block -->
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


       <!-- Connect more -->
       <div class="row">
         <div class="col-md-6 col-sm-12">
             <?php  
             if( have_rows('listing') ):
             while ( have_rows('listing') ) : the_row();
             ?>
             <div class="contactlist-proper"> 
                <div class="title"><?php echo get_sub_field('listing_title'); ?></div> 
                  <?php  
                  if( have_rows('listing_details') ):
                  while ( have_rows('listing_details') ) : the_row();
                  ?>
                  <div class="contact-block">
                    <div class="title"><?php echo get_sub_field('main_detail'); ?></div>
                    <div class="info-block"><?php echo get_sub_field('sub_detail'); ?></div>
                  </div> 
                  <?php 
                  endwhile;
                  else :
                      // no layouts found
                  endif;
                  ?>
             </div>
              <?php 
              endwhile;
              else :
                  // no layouts found
              endif;
              ?> 
         </div>
         <div class="col-md-6 col-sm-12 contact-section form-section">
           <div class="form-proper">
            <form id="contact-form">
             <div class="form-block">
                <div class="title">Are you ready to UDLAP</div>
                <div class="alert alert-success" id="contact-success" style="display: none;">Your submission has been sent.</div>
                <div class="input-proper">
                  <input type="text" placeholder="Full Name" name="name">
                </div>
                <div class="input-proper">
                  <input type="email" placeholder="Email" name="email">
                </div>
                <div class="input-proper">
                  <input type="tel" placeholder="Phone Number" name="phone">
                </div>
                <div class="input-proper">
                  <input type="text" placeholder="City and State" name="citystate">
                </div>
                <div class="input-proper custom-select">
                  <select name="interest">
                    <option value="0">What is your interest of study?</option>
                    <option value="1">Select 1</option>
                    <option value="2">Select 2</option>
                    <option value="3">Select 3</option>
                    <option value="4">Select 4</option>
                    <option value="5">Select 5</option> 
                  </select>
                </div>
                <div class="input-proper custom-select">
                  <select name="study">
                    <option value="0">When would you like to pursue your area of study?</option>
                    <option value="1">Select 1</option>
                    <option value="2">Select 2</option>
                    <option value="3">Select 3</option>
                    <option value="4">Select 4</option>
                    <option value="5">Select 5</option> 
                  </select>
                </div> 
                <div class="input-proper custom-select">
                  <select name="major">
                    <option value="0">Major(s) of interest</option>
                    <option value="1">Select 1</option>
                    <option value="2">Select 2</option>
                    <option value="3">Select 3</option>
                    <option value="4">Select 4</option>
                    <option value="5">Select 5</option> 
                  </select>
                </div>  
                <div class="input-proper custom-select">
                  <select name="campus">
                    <option value="0">Are you interested in visiting our campus?</option>
                    <option value="1">Select 1</option>
                    <option value="2">Select 2</option>
                    <option value="3">Select 3</option>
                    <option value="4">Select 4</option>
                    <option value="5">Select 5</option> 
                  </select>
                </div>  

                <button id="contact-submit" type="submit" class="udlap-btn udlap-teal sticky-btn sticky-inquiry">SUBMIT</button>

             </div>
            </form>
           </div>
         </div>
       </div>

    </section>
<?php
	get_footer();
?>