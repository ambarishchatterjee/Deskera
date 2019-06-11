<?php
/*
*Template Name: Home page
*/
get_header(); ?>

<div class="site-inner container">


<div id="content" class="site-content">


<div id="primary" class="content-area">

<!--Banner Section-->
    <div id="banner_section">
        <div class="col-sm-6">
            <h1>Run your business on the cloud, all in one place.</h1>
            <p>An award-winning integrated business platform that helps you run your business.</p>
            <div class="subscribeform">
                <input type="email" name="subemail" class="subemail" placeholder="Your email address">
                <input class="subbtn" type="submit" value="Get started">
            </div>
        </div>
        <div class="col-sm-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner_home.png" alt="Homepage Banner">
        </div>
    </div>
<!--Banner Section end-->
<div class="clearfix"></div>
<!--Service section-->
    <div id="service_section">
        <h2 class="section_heading text-center">A real-time data hub for your team</h2>
        <p class="text-center">Gain insight into day-to-day business operations in real-time, as Deskera apps come together to help you manage your time and efforts more efficiently.</p>
        <div class="services_blocks row">
            <div class="service_block col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service1.png" alt="Integrated All-in-one Platform">
                <h3>Integrated All-in-one Platform</h3>
                <p>Business apps all in one place, so that you can manage every aspect of your business with ease.</p>
            </div>
            <div class="service_block col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service2.png" alt="Quick to deploy">
                <h3>Quick to deploy</h3>
                <p>Avoid long waits and downtime as Deskera apps fit into your workplace seamlessly and quickly.</p>
            </div>
            <div class="service_block col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service3.png" alt="Cloud-based software">
                <h3>Cloud-based software</h3>
                <p>Access the information anytime, anywhere, on any connected device, so you can work on the go.</p>
            </div>
        </div>
    </div>
<!--Service section end-->
<!--Testimonials section-->
    <div id="testimonial_section">
        <h2 class="section_heading text-center">Organizations love us</h2>
        <p class="text-center">Hear from customers that use Deskera  to maximize their efficiency in the business.</p>
        <div class="testimonial_blocks row">
            <div class=" col-sm-4">
                <div class="testimonial_block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial1.png" alt="">
                <p>Revolutionizing  the way business is run</p>
                <a href="#" class="gourl"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt=""></a>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="testimonial_block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial2.png" alt="">
                <p>Making workflow easier for everyone</p>
                <a href="#" class="gourl"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt=""></a>
                </div>
            </div>
            <div class=" col-sm-4">
                <div class="testimonial_block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial3.png" alt="">
                <p>Focusing on the important things</p>
                <a href="#" class="gourl"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
<!--Testimonials section end-->
<!--client section-->
    <div id="client_section">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sushitei.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Mitsubishi_Electric_logo.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sicci-logo-transparent.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Telkomsel.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/fb-gic.png" alt="">
    </div>
<!--client section end-->
</div>



</div>
</div>

<!--CTA section-->
<div id="cta_section">
    <div class="container">
        <div class="ctaarea">
            <div class="col-sm-7">
            <h3>Let us free up your time for you. Free 14-day trial.</h3>
            </div>
            <div class="col-sm-5">
            <div class="ctaform">
                <input type="email" name="subemail" class="ctaemail" placeholder="Your email address">
                <input class="ctabtn" type="submit" value="Get started">
            </div>

            </div>
        </div>

    </div>
    </div>
<!--CTA section end-->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
