<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <img src="<?php echo get_site_url() ?>/wp-content/uploads/2018/06/logo_opquast_no-baseline.png" alt="Logotype Opquast" class="img-logo">
        </a>

        <nav role="navigation" class="wrap-navigation"
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>

        <a href="<?php echo get_site_url() ?>/login">
            <button>Connexion</button>
        </a>

        <form role="search" method="get" id="searchform" class="searchform"
              action="<?php echo get_site_url() ?>">
            <!--<label class="screen-reader-text" for="s">Search for:</label>-->
            <input type="search" value="" name="s" id="s" placeholder="Recherche"/>
            <!--<input type="submit" id="searchsubmit" value="Search" />-->
        </form>
    </div>
</header>
