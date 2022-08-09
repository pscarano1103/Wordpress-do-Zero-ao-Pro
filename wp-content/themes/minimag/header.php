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
                    <div class="search_area">
                        <?php get_search_form(); ?>
                    </div>
                </div>

                <div class="main_info">
                    <div class="row">
                        <div class="col-sm-8 randompost">
                            <strong>Você Ja viu?</strong>
                            <?php
                            $pm_query = new WP_Query(array(
                                'posts_per_page' => 1,
                                'post_type' => 'post',
                                'orderby' => 'rand'
                            ));
                            if ($pm_query->have_posts()) {
                                while ($pm_query->have_posts()) {
                                    $pm_query->the_post();
                            ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php


                                }

                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                        <div class="col-sm-4 socialarea">
                            <div class="socilatxt">
                                SIGA:
                            </div>
                            <div class="socialicons">
                                <a href="https://facebook.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="" target="_blank" />
                                </a>
                                <a href="https://google.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gplus.png" alt="" target="_blank" />
                                </a>
                                <a href="https://instagram.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="" target="_blank" />
                                </a>
                                <a href="https://twitter.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="" target="_blank" />
                                </a>
                                <a href="https://youtube.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt="" target="_blank" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</body>