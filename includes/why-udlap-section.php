<!-- Por que UDLAP -->
<?php $why_udlap = get_field('why_udlap_section'); ?>
<section class="white-block container grid grid-lg grid-left about-proper">  
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/UDLAP_Studyinmex.jpg" alt="studyinmx">
  <div class="about-block">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrows1.jpg" alt="" class="arrow">
    <div class="headliner">
      <?php echo $why_udlap['title']; ?>
    </div>
    <div class="copy">
      <?php echo $why_udlap['description']; ?>
    </div>
    <a href="<?php echo $why_udlap['button_link']; ?>" class="sticky-btn sticky-about">
      <?php echo $why_udlap['button_text']; ?>
    </a>
  </div> 
</section>