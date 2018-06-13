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

        <a href="http://127.0.0.1:8080/edsa-opquast-brown/" class="link-home">
            <img src="http://localhost/_ECVDigital/opquast/wp-content/uploads/2018/06/logo_opquast_no-baseline.png" alt="Logotype Opquast" class="img-logo">
        </a>

        <nav role="navigation" class="wrap-navigation"
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
    </div>
</header>
