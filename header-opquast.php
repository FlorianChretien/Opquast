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
    </head>
    <body>
        <div id="menu-burger">
            <div class="menu-wrap">
                <div>
                    <div class="morph-shape" id="morph-shape" data-morph-open="M841.9,595.3H-8.4c0,0,8.4-125.4,8.4-297.6C0,117.1-8.4,0-8.4,0l850.3,0V595.3z">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                            <path d=“M75,75H-0.8c0,0,73.4-16.2,73.4-37.9C72.6,14.4-0.8,0-0.8,0L75,0V75z”/>
                        </svg>
                    </div>
                    <nav class="menu-animation">
                        <div class="icon-list">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu' => 'Menu Burger') ); ?>

                            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_site_url() ?>">
                                <input type="search" value="" name="s" id="s" placeholder="Recherche"/>
                                <input type="submit" id="searchsubmit" value="Search" />
                            </form>
                        </div>
                    </nav>
                    <button class="close-button" id="close-button">Close Menu</button>
                </div>
            </div>
            <button class="menu-button" id="open-button">Open Menu</button>
        </div>
        <div class="content-wrap">

        <div class="header <?php if($post_slug != "accueil") echo 'header-inverse'; ?>">
        <?php
        switch ($post_slug){
            case 'accueil':
                echo ' <video autoplay loop muted id="bg-video">
                        <source src="'.get_site_url().'/wp-content/uploads/2018/06/White-Keyboard.mp4" type="video/mp4">
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
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
                    </nav>

                    <a href="<?php echo get_site_url() ?>/login/" class="link-login btn btn-primary">Connexion</a>
                </div>
            </div>
        </header>