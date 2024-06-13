<?php

//registrar menu
function register_my_menus()
{
    register_nav_menus(
        array(
            //creando menu
            'menu_izquierdo' => __('Menu Principal Izquierdo'),

        )
    );
}
add_action('init', 'register_my_menus');

//agregar estilos a las <a> del menu
add_filter('nav_menu_link_attributes', 'clases_menu', 10, 3);

function clases_menu($atts, $item, $args)
{
    $class = 'waves-effect';
    $atts['class'] = $class;
    return $atts;
}


?>