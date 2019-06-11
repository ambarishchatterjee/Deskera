<?php if (is_active_sidebar('footer-widget-1') || is_active_sidebar('footer-widget-2') || is_active_sidebar('footer-widget-3')) : ?>
    <div id="footer-widget">
        <div class="footer-widget-area">
            <div class="container">
                <div class="footer-widget-content">
                    <div class="col-sm-4 widget-col">
                        <?php if (is_active_sidebar('footer-widget-1')) : ?>
                            <aside id="footer-widget" class="footer widget-area" role="complementary">
                                <?php dynamic_sidebar('footer-widget-1'); ?>
                            </aside>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4 widget-col">
                        <?php if (is_active_sidebar('footer-widget-2')) : ?>
                            <aside id="footer-widget" class="footer widget-area" role="complementary">
                                <?php dynamic_sidebar('footer-widget-2'); ?>
                            </aside>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4 widget-col">
                        <?php if (is_active_sidebar('footer-widget-3')) : ?>
                            <aside id="footer-widget" class="footer widget-area" role="complementary">
                                <?php dynamic_sidebar('footer-widget-3'); ?>
                            </aside>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-wrap">
        <div class="col-sm-3">
            <h4>Products</h4>
            <ul>
                <li>Enterprise Resource Planning</li>
                <li>Manufacturing Resource Planning</li>
                <li>Customer Relationship Management</li>
                <li>Human Resource Management System</li>
                <li>eLeave</li>
                <li>eClaims</li>
                <li>eTraining</li>
                <li>Project Management</li>
                <li>Learning Management System</li>
            </ul>
                 	 	 	   
        </div>
        <div class="col-sm-9">
            <div class="row">
            <div class="col-sm-3">
            <h4>Resources</h4>
            <ul>
                <li>Customer Stories   </li>
                <li>Case Studies</li>
                <li>Factsheets</li>
                <li>Blog</li>
            </ul>

            </div>
            <div class="col-sm-4">
            <h4>Partners</h4>
            <ul>
                <li>Enterprise Resource Planning</li>
                <li>Manufacturing Resource Planning</li>
                <li>Customer Relationship Management</li>
                <li>Human Resource Management </li>
            </ul>

            </div>
            <div class="col-sm-2">
            <h4>Company</h4>
            <ul>
                <li>About Us    </li>
                <li>Events</li>
                <li>Newsroom</li>
                <li>Careers</li>
            </ul>

            </div>
            <div class="col-sm-3">
                <img src="http://localhost/deskera/wp-content/uploads/2019/06/Deskera-White-Logo.png" alt="">
            </div>

            </div>
            <br>
            <hr>

            <div class="row">
                <div class="col-sm-2">
                    subscribe
                </div>
                <div class="col-sm-6">
                    <div class="ctaform">
                        <input type="email" name="subemail" class="ctaemail" placeholder="Your email address">
                        <input class="ctabtn" type="submit" value="Get started">
                    </div>

                </div>
                <div class="col-sm-4 text-right">
                    <div class="social-icons">
                        <img src="http://localhost/deskera/wp-content/uploads/2019/06/Group-304.png" alt="">
                        <img src="http://localhost/deskera/wp-content/uploads/2019/06/Path-2755.png" alt="">
                        <img src="http://localhost/deskera/wp-content/uploads/2019/06/Path-2756.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function(){
        jQuery("#europe").click(function(){
            jQuery('.site-header').css('background', '#9400D3');
            jQuery('.learnform .learnbtn').css('background', '#9400D3');
            jQuery('.subscribeform input.subbtn').css('background', '#9400D3');
            jQuery('#cta_section').css('background', '#9400D3');
        })
        jQuery("#singapore").click(function(){
            jQuery('.site-header').css('background', '#ff3c00');
            jQuery('.learnform .learnbtn').css('background', '#ff3c00');
            jQuery('.subscribeform input.subbtn').css('background', '#ff3c00');
            jQuery('#cta_section').css('background', '#ff3c00');
        })
    });
</script>
</body>
</html>
