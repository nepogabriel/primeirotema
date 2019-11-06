<?php
// ****PASTA INCLUDE****
//Chamando arquivo setup.php
require get_template_directory().'/include/setup.php';

// ****HOOKS****
// 1-Inserindo Css e Js
add_action('wp_enqueue_scripts', 'gp_theme_styles');

// 2-Habilitando a Menu / Miniaturas dos posts
add_action('after_setup_theme', 'gp_after_setup');

// 3-Criando Widgets 
add_action('widgets_init', 'gp_widgets');