<?php
/**
 * Template Name: Template-home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<html>
    <head>
        <!-- (generated server side from less/style.less) -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
      </script>
    </head>
</html>


<div class="home_banner" style="width:100%;" data-aos="fade-in"
data-aos-duration="3000"
     data-aos-easing="ease-out-cubic">
      <div class="banner banner-left-side">
            <div class="description">
            Lorem Ipsum is simply dummy text of the printing and 
            typesetting industry.
            </div>
            <a href="#" class="banner-button">
                  Join Yoga class with us
            </a>
      </div>

      <div class="banner-split">        
      </div>
      
      <div class="banner banner-right-side" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/home-banner-right.png); 
      background-size: contain; background-repeat: no-repeat; background-position:center; ">

      </div>
</div>

<div class="home-about-info"  data-aos="fade-up" data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
      <div class="container">
            <div class="home-about-info-container">
                  <h2>Healing today</h2>
                  <div class="tagline">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  </div>
                  <div class="quote">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>
                  <div class="buttons">
                        <a href="#" class="button">Online Class <i class="fa fa-chevron-right"></i></a>
                        <a href="#" class="button">Studio Class <i class="fa fa-chevron-right"></i></a>
                  </div>
            </div>
      </div>
</div>


<div class="home-feature-image">
 
</div>

<div class="class-teachers" data-aos="fade-right"
data-aos-duration="2000"
     data-aos-easing="ease-out-cubic">
      <div class="container">
            <div class="class-teacher-info-container">
                  <h2>Instructor</h2>
                  <div class="tagline">
                        Meeting up our best Instructor!
                  </div>
                  <div class="quote">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>

                  <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12">
                              <div class="circle one">
                                    <div class="image"></div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                              <div class="circle two">
                                    <div class="image"></div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                              <div class="circle three">
                                    <div class="image"></div>
                              </div>
                        </div>
                                                      
                  </div>

                  <div class="buttons">
                        <a href="#" class="button">Book Meeting <i class="fa fa-chevron-right"></i></a>
                  </div>
                        
                  </div>
            </div>
      </div>
</div>

<div class="callenge" data-aos="fade-in"
data-aos-duration="3000"
     data-aos-easing="ease-out-cubic">
      <div class="container">
            <div class="row align-items-center">

                  <div class="col-lg-6">
                        <div class="circle">
                              <div class="image"></div>
                        </div>
                  </div>

                  <div class="col-lg-5 offset-lg-1">
                        <h2>Daily Yoga Class</h2>
                        <p>
                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <a href="#" class="button">Join us! <i class="fa fa-chevron-circle-right"></i></a>
                  </div>

            </div>
      </div>
</div>

<div class="home-newsletter-background">
      <div class="container">
            <div class="home-newsletter" data-aos="fade-up" data-aos-duration="3000" data-aos-easing="ease-out-cubic">
                  <h2>
                  <i class="fa fa-envelope"></i>  <br>   
                  Get our class news letters!</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  <div class="row">
                        <div class="col-lg-8">
                              <input type="text" placeholder="E-mail">
                        </div>
                        <div class="col-lg-4">
                              <input type="submit" value="Subscribe">
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="home-field-class" data-aos="fade-in"
data-aos-duration="3000"
     data-aos-easing="ease-out-cubic">
      <div class="container">
            <div class="row align-items-center">

            <div class="col-lg-7">
            <h2>Field Yoga class</h2>
            <div class="tagline">
                 <strong>Field class: </strong> 3 Feb 2022
            </div>
                        <p>
                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <div class="buttons">
                        <a href="#" class="button">Join us! <i class="fa fa-chevron-circle-right"></i></a>
                        <a href="#" class="button alt">View more<i class="fa fa-chevron-circle-right"></i></a>
                        </div>           
                  </div>

            <div class="col-lg-5">
                  <div class="circle">
                        <div class="image">
                              
                        </div>
                  </div>
            </div>

            </div>
      </div>
</div>

<?php
get_footer();
