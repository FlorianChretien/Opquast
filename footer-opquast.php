
    <footer class="wrap-footer">
        <div class="container">
            <a href="http://127.0.0.1:8080/edsa-opquast-brown/" class="link-home">
                <!--            <img src="http://localhost/_ECVDigital/opquast/wp-content/uploads/2018/06/logo_opquast_no-baseline.png" alt="Logotype Opquast" class="img-logo">-->
                <img src="<?php echo get_site_url() ?>/wp-content/uploads/2018/06/logo_opquast_no-baseline_white.png" alt="Logotype Opquast" class="img-logo">
            </a>

            <nav role="navigation" class="wrap-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu' => 'Menu 1') ); ?>
            </nav>

            <section class="wrap-social">
                <ul class="social-list">
                    <li class="item-social">
                        <a href="https://fr-fr.facebook.com/opquast/" title="Facebook" class="link-social">
                            <span class="img-social icon-facebook"></span>
                        </a>
                    </li>
                    <li class="item-social">
                        <a href="https://twitter.com/opquast" title="Twitter" class="link-social">
                            <span class="img-social icon-twitter"></span>
                        </a>
                    </li>
                    <li class="item-social">
                        <a href="https://fr.linkedin.com/company/opquast" title="Linkedin" class="link-social">
                            <span class="img-social icon-linkedin"></span>
                        </a>
                    </li>
                    <li class="item-social">
                        <a href="#" title="Slack" class="link-social">
                            <span class="img-social icon-slack"></span>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </footer>
    </div>
    <?php
    do_action('website_after');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/main.min.js', true);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_footer();
    ?>
    <script async
            defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgFf-er2mba4V3HG0awy_w7M13nlrNtaY&callback=initMap"></script>
</body>
</html>
