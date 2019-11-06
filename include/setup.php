<?php
/*
Todas as funções que são executadas no ínicio do tema
*/

// 1-Inserindo Css e Js função
function gp_theme_styles() {

    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js',
    array('jquery'), '1.0', true); 

}

// 2-Habilitando a Menu / Miniaturas dos posts
function gp_after_setup() {
    //suporte menu
    add_theme_support('menus');

    //registrando menu
    register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
    register_nav_menu('footer', 'Menu Rodapé');

    //miniaturas dos posts
    add_theme_support('post-thumbnail');
}

// 3-Criando Widgets
function gp_widgets() {
    register_sidebar(array(
        'name' => __('Meu Primeiro Sidebar', 'primeirotema'),
        'id' => 'gb_sidebar',
        'description' => __('Sidebar para o tema', 'primeirotema'),

        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',

        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ));
}