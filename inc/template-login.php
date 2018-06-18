<?php
/*
Template Name: Connexion
*/
get_header('connexion');
?>

<div id="page-login">
    <section>
        <h1>Passez une certification de qualité</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt magna vitae mattis vestibulum. Quisque ipsum ante,
            tristique a metus eu, cursus imperdiet nisl. Cras sed tincidunt erat. Pellentesque habitant morbi tristique senectus et netus
            et malesuada fames ac turpis egestas. Vivamus id nisl nulla. Orci varius natoque penatibus et magnis dis parturient montes,
            nascetur ridiculus mus. Ut ut diam pharetra, varius sem id, auctor odio. Sed eget neque a urna aliquam sollicitudin et vulputate nisi.
            In hac habitasse platea dictumst. Nulla lobortis ex at scelerisque sodales. Nullam vitae malesuada massa. Aliquam ultricies varius
            ante nec viverra. Pellentesque lacinia sit amet nunc vitae laoreet. Curabitur tincidunt urna in pharetra faucibus.
        </p>
    </section>
    <section>
        <h3>Connectez-vous</h3>
        <form method="post" action="<?php echo get_site_url() ?>/wp-login.php" id="loginform" name="loginform">
            <input type="text" tabindex="10" size="20" value="" id="user_login" name="log" placeholder="Email">
            <input type="password" tabindex="20" size="20" value="" id="user_pass" name="pwd" placeholder="Mot de passe">
            <label>
                <input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">
                <p>Se souvenir de moi</p>
            </label>
            <p class="forgotmdp">
                <a href="<?php echo get_site_url() ?>/wp-login.php?action=lostpassword">Mot de passe oublié ?</a>
            </p>
            <input class="uppercase" type="submit" tabindex="100" value="Se connecter" id="wp-submit" name="wp-submit">
            <input class="grey uppercase" type="submit" tabindex="100" value="Connexion via Google">
            <input type="hidden" value="<?php echo get_site_url() ?>" name="redirect_to">
        </form>
    </section>
</div>

<?php get_footer('connexion'); ?>

