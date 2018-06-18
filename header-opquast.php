<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_enqueue_script("jquery"); ?>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/src/js/jquery-3.3.1.min.js"></script>
        <?php wp_head(); ?>

    </head>
<body>
    <div class="header">
        <video autoplay loop muted id="bg-video">
            <source src="http://127.0.0.1:8080/edsa-opquast-brown/wp-content/uploads/2018/06/White-Keyboard.mp4" type="video/mp4">
        </video>

        <header class="wrap-header">
            <div class="container">
                <a href="<?php echo get_site_url() ?>" class="brand">
                    <img src="<?php echo get_site_url() ?>/wp-content/uploads/2018/06/logo_opquast_no-baseline.png" alt="Logotype Opquast" class="img-logo">
                </a>

                <div class="wrap-links">
                    <nav role="navigation" class="primary-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </nav>

                    <a href="<?php echo get_site_url() ?>/login/" class="link-login btn btn-primary">Connexion</a>

                    <div id="menu-btn">
                        <span class="icon"></span>
                        <span class="text">MENU</span>
                    </div>
                </div>

        <!--        <form role="search" method="get" id="searchform" class="searchform"-->
        <!--              action="--><?php //echo get_site_url() ?><!--">-->
        <!--            <!--<label class="screen-reader-text" for="s">Search for:</label>-->
        <!--            <input type="search" value="" name="s" id="s" placeholder="Recherche"/>-->
        <!--            <!--<input type="submit" id="searchsubmit" value="Search" />-->
        <!--        </form>-->
            </div>
        </header>
