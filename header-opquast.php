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
        <?php do_action('website_before'); ?>
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
                        case 'tarifs':
                            echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline_blue.png' alt='Logotype Opquast' class='img-logo'>";
                            break;
                        case 'accueil':
                            echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline.png' alt='Logotype Opquast' class='img-logo'>";
                            break;
                        case 'formations':
                        case 'contact':
                            echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline_red.png' alt='Logotype Opquast' class='img-logo'>";
                            break;
                        case 'check-lists':
                            echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline_green.png' alt='Logotype Opquast' class='img-logo'>";
                            break;
                    }
                    ?>
                </a>

                <div class="wrap-links">
                    <nav role="navigation" class="primary-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu' => 'Menu 1') ); ?>
                    </nav>
                </div>
            </div>
        </header>