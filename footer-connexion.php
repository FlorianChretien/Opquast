
<?php
wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/main.min.js', true);
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

wp_footer();
?>
</body>
</html>
