<?php
    global $post;
    $post_slug=$post->post_name;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_enqueue_script("jquery"); ?>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/src/js/jquery-3.3.1.min.js"></script>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/src/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/src/js/detectmobilebrowser.js"></script>
        <?php wp_enqueue_script('snap.svg-min', get_template_directory_uri().'dist/library/off-canvas-menu-effects/snap.svg-min.js'); ?>
    </head>
    <body>
        <div class="header<?php if($post_slug != "accueil") echo ' header-inverse'; ?>">
        <?php
        switch ($post_slug) {
            case 'accueil':
                echo ' <video autoplay loop muted id="bg-video" data-src="'.get_site_url().'/wp-content/uploads/2018/06/White-Keyboard">
                       </video>';
                break;
        }
        ?>

        <header class="wrap-header">
            <div class="container">
                <a href="<?php echo get_site_url() ?>" class="brand">
                    <?php
                    switch ($post_slug){
                        case 'certification':
                        case 'certification-particulier':
                        case 'certification-professionnels':
                        case 'certification-ecole':
                            echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline_blue.png' alt='Logotype Opquast' class='img-logo'>";
                            break;
                        case 'certification-2':
                            echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline-1.png' alt='Logotype Opquast' class='img-logo'>";
                            break;
                        case 'accueil':
                            echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline.png' alt='Logotype Opquast' class='img-logo'>";
                            break;
                    }
                    ?>
                </a>

                <div class="wrap-links">
                    <nav role="navigation" class="primary-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu' => 'Menu 1') ); ?>
                    </nav>

                    <a href="<?php echo get_site_url() ?>/login/" class="link-login btn btn-primary">Connexion</a>

                    <div id="menu-btn">
                        <span class="icon"></span>
                        <span class="text">MENU</span>
                    </div>
                    <div id="menu-burger">
                        <button class="menu-button" id="open-button">Open Menu</button>
                    </div>
                    <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                            <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
                        </svg>
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
