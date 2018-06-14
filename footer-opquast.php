    <footer class="wrap-footer">
        <div class="container">
            <a href="http://127.0.0.1:8080/edsa-opquast-brown/" class="link-home">
                <!--            <img src="http://localhost/_ECVDigital/opquast/wp-content/uploads/2018/06/logo_opquast_no-baseline.png" alt="Logotype Opquast" class="img-logo">-->
                <img src="http://127.0.0.1:8080/edsa-opquast-brown/wp-content/uploads/2018/06/logo_opquast_no-baseline_white.png" alt="Logotype Opquast" class="img-logo">
            </a>

            <nav role="navigation" class="wrap-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </nav>

            <section class="wrap-social">
                <ul class="social-list">
                    <li class="item-social">
                        <a href="#" class="link-social">
                            <img src="http://via.placeholder.com/15x15" alt="Facebook" class="img-social">
                        </a>
                    </li>
                    <li class="item-social">
                        <a href="#" class="link-social">
                            <img src="http://via.placeholder.com/15x15" alt="Twitter" class="img-social">
                        </a>
                    </li>
                    <li class="item-social">
                        <a href="#" class="link-social">
                            <img src="http://via.placeholder.com/15x15" alt="Linkedin" class="img-social">
                        </a>
                    </li>
                    <li class="item-social">
                        <a href="#" class="link-social">
                            <img src="http://via.placeholder.com/15x15" alt="Slack" class="img-social">
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </footer>
    <?php
    wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/main.min.js', true);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_footer();
    ?>
</body>
</html>
