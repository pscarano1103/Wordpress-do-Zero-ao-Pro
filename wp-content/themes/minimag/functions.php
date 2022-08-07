<?php

//Include
require get_template_directory() . '/include/setup.php';
//Hooks

add_action("wp_enqueue_scripts", "pm_theme_styles");
add_action("after_setup_theme", "pm_after_setup");
add_action("widgets_init", "pm_widgets");
