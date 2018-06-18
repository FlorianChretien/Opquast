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


<header class="wrap-header">
    <div class="container">
        <div id="menu-btn">
            <span class="icon"></span>
            <span class="text">MENU</span>
        </div>

        <a href="<?php echo get_site_url() ?>" class="link-home">
            <?php
            if($post_slug == 'certification'){
                echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline-1.png' alt='Logotype Opquast' class='img-logo'>";
            } else {
                echo "<img src='".get_site_url()."/wp-content/uploads/2018/06/logo_opquast_no-baseline.png' alt='Logotype Opquast' class='img-logo'>";
            }
            ?>
        </a>

        <nav role="navigation" class="wrap-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>

        <a href="<?php echo get_site_url() ?>/login/" class="link-login btn btn-primary">Connexion</a>

<!--        <form role="search" method="get" id="searchform" class="searchform"-->
<!--              action="--><?php //echo get_site_url() ?><!--">-->
<!--            <!--<label class="screen-reader-text" for="s">Search for:</label>-->
<!--            <input type="search" value="" name="s" id="s" placeholder="Recherche"/>-->
<!--            <!--<input type="submit" id="searchsubmit" value="Search" />-->
<!--        </form>-->
    </div>
</header>
