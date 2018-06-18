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


<header class="wrap-header wrap-header-connexion">
    <div>
        <a href="<?php echo get_site_url() ?>" class="link-home">
            <img src="<?php echo get_site_url() ?>/wp-content/uploads/2018/06/logo_opquast_no-baseline_white.png" alt="Logotype Opquast" class="img-logo">
        </a>
    </div>

    <div>
        <a href="<?php echo get_site_url() ?>/inscription/" class="link-login btn btn-primary">Inscription</a>
    </div>
</header>
