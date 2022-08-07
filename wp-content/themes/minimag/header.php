<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="top_header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <?php
                    if (has_nav_menu('top')) {
                        wp_nav_menu(array(
                            'theme_location' => 'top',
                            'container' => false,
                            'fallback_cb' => false,
                            'menu_class' => 'nav navbar-nav'
                        ));
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="main_header">
        <div class="container-fluid">
            <div class="logo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="main_nav_border">
                <div class="main_nav">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'fallback_cb' => false,
                            'menu_class' => 'nav navbar-nav'
                        ));
                    }
                    ?>
                </div>

                <div class="main_info">

                </div>
            </div>
        </div>


    </div>


</body>