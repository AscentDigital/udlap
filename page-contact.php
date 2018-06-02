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
                    <option value="None">What is your interest of study?</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Summer Immersion">Summer Immersion</option>
                  </select>
                </div>
                <div class="input-proper custom-select">
                  <select name="study">
                    <option value="None">When would you like to pursue your area of study?</option>
                    <option value="Spring">Spring</option>
                    <option value="Fall">Fall</option>
                  </select>
                </div> 
                <div class="input-proper custom-select">
                  <select name="major">
                    <option value="0">Major(s) of interest</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Art History and Curatorship">Art History and Curatorship</option>
                    <option value="Dance">Dance</option>
                    <option value="Digital Animation">Digital Animation</option>
                    <option value="Fine Arts">Fine Arts</option>
                    <option value="Interior Architecture">Interior Architecture</option>
                    <option value="Language Studies">Language Studies</option>
                    <option value="Literature">Literature</option>
                    <option value="Music">Music</option>
                    <option value="Theater">Theater</option>
                    <option value="Visual Information Design">Visual Information Design</option>
                    <option value="Anthropology">Anthropology</option>
                    <option value="Clinical Psychology">Clinical Psychology</option>
                    <option value="Communication and Public Relations">Communication and Public Relations</option>
                    <option value="Communications and Media Production">Communications and Media Production</option>
                    <option value="International Relations">International Relations</option>
                    <option value="Law">Law</option>
                    <option value="Multicultural Relations">Multicultural Relations</option>
                    <option value="Organizational Psychology">Organizational Psychology</option>
                    <option value="Pedagogy">Pedagogy</option>
                    <option value="Political Science">Political Science</option>
                    <option value="Actuarial Sciences">Actuarial Sciences</option>
                    <option value="Biology">Biology</option>
                    <option value="Clinical Biochemistry">Clinical Biochemistry</option>
                    <option value="Dental Surgeon">Dental Surgeon</option>
                    <option value="Medical Surgeon">Medical Surgeon</option>
                    <option value="Nanotechnology and Molecular Engineering">Nanotechnology and Molecular Engineering</option>
                    <option value="Nursing">Nursing</option>
                    <option value="Nutrition Science">Nutrition Science</option>
                    <option value="Pharmaceutical and Biological Chemistry">Pharmaceutical and Biological Chemistry</option>
                    <option value="Physics">Physics</option>
                    <option value="Energy Engineering">Energy Engineering</option>
                    <option value="Biomedical Engineering">Biomedical Engineering</option>
                    <option value="Chemical Engineering">Chemical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Computer Systems Engineering">Computer Systems Engineering</option>
                    <option value="Environmental Engineering">Environmental Engineering</option>
                    <option value="Food Industry Engineering">Food Industry Engineering</option>
                    <option value="Industrial Engineering">Industrial Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Mechatronics Engineering">Mechatronics Engineering</option>
                    <option value="Robotics and Telecommunications Engineering">Robotics and Telecommunications Engineering</option>
                    <option value="Supply Chain and Logistics Engineering">Supply Chain and Logistics Engineering</option>
                    <option value="Banking and Investments">Banking and Investments</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Culinary Arts">Culinary Arts</option>
                    <option value="Economics">Economics</option>
                    <option value="Financial Strategies and Public Accounting">Financial Strategies and Public Accounting</option>
                    <option value="Hotel and Restaurant Administration">Hotel and Restaurant Administration</option>
                    <option value="International Business Administration">International Business Administration</option>
                    <option value="Marketing">Marketing</option>
                  </select>
                </div>  
                <div class="input-proper custom-select">
                  <select name="campus">
                    <option value="0">Are you interested in visiting our campus?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
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