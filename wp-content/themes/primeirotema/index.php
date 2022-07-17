<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <h1>Meu Primeiro Tema</h1>
    <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'fallback_cb' => false
        ));
    }
    ?>

    <?php wp_footer(); ?>
</body>

</html>