<?php 
get_header(); 
?>

<div class="container-hero" style="background-image: url(<?php $homepage_Hero_Url = get_field('homepage_hero_image'); echo $homepage_Hero_Url['url']?>);">
    <div class="hero-message">
        <h3>Now leasing for Fall 2019 at</h3>
        <img src="<?php bloginfo('template_url');?>/images/sawyer-logo.png">
        <div class="tour-button">
          <a href="#">Schedule a hard hat tour</a> 
        </div>
    </div>
</div>
<div class="hero2" style="background-image: url(<?php $homepage_Image_Url = get_field('homepage_about_blurb_image'); echo $homepage_Image_Url['url']?>);">
      <div class="hero2-message">
          <p>
          <?php the_field('homepage_about_blurb') ?>
          </p>
      </div>
</div>
<div class="home-section outer-div-inverse">
    <div class="clip-path inner-div-inverse">
    </div>
</div>
<div class="slider-top">
    <div class="top-image">
      <img src="<?php bloginfo('template_url'); ?>/images/sawyer-vertical-logo.png">
    </div>
</div>
<div class="hero-slider">
  <div class="hero-slider__slide">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <div class="inner-slide">
          <span class="image">
            <img src="<?php bloginfo('template_url'); ?>/images/unit_layout.jpg">
          </span>
          <span class="slide-text">
            <h1 class="headline headline--medium t-center">Floor Plans</h1>
            <p class="t-center">Designated for students, inspired by Missoula, and outfited with brand new furniture and appliances. </p>
            <hr>
            <p class="t-center no-margin button"><a href="#" class="btn btn--blue">See Now</a></p>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <div class="inner-slide">
          <span class="image">
            <img src="<?php bloginfo('template_url'); ?>/images/small-blurb-2.jpg">
          </span>
          <span class="slide-text">
            <h1 class="headline headline--medium t-center">Gallery</h1>
            <p class="t-center">Picture yourself in our mind-body fitness studio, top-floor clubhouse and luxuriously detailed apartments for rent in Missoula, MT. </p>
            <hr>
            <p class="t-center no-margin button"><a href="#" class="btn btn--blue">See Now</a></p>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <div class="inner-slide">
          <span class="image">
              <img src="<?php bloginfo('template_url'); ?>/images/small-blurb-3.jpg">
          </span>
          <span class="slide-text">
            <h1 class="headline headline--medium t-center">Gallery</h1>
            <p class="t-center">Learn about the pioneering spirit that has inspired The Sawyer and is responsible for our vibrant Missoula community. </p>
            <hr>
            <p class="t-center no-margin button"><a href="#" class="btn btn--blue">See Now</a></p>
          </span>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="home-building-render"></div>
<div class="home-amenity-container">
  <div class="amenity-icons">
      <span class="icon">
          <img src="<?php bloginfo('template_url');?>/images/dumbell-big-e1523938813105.png">
          <h2>Neighborhood Fitness Center</h2>
          <p>Sweat out stress without driving to the gym</p>
      </span>
      <span class="icon">
          <img src="<?php bloginfo('template_url');?>/images/hmmm.png">
          <h2>Clubhouse Lounge</h2>
          <p>Meet your neighbors, play pool and kick back after class</p>
      </span>
      <span class="icon">
          <img src="<?php bloginfo('template_url');?>/images/saw-blade.png">
          <h2>Located in the Old Sawmill District</h2>
          <p>Live steps from cafes, restaurants and boutiques</p>
      </span>
  </div>
  <div class="amenity-button">
      <a href="#"> View Amenities </a>
  </div>
</div>

<div class="footer-top">
  <span> Start your journey! <a href="#" class="footer-apply-now">Apply Now</a></span>
</div>


<?php get_footer();

?>