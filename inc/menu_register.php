<?php

// =============== 
// nav menu register 
// ================

register_nav_menu('primary',__('Main Menu', 'test-theme')) ;


// Walker Menu Properties
function nav_description( $item_output, $item, $args){
    $link_after = isset($args->link_after) ? $args->link_after : '';

    if( !empty($item->description)){
        $item_output = str_replace(
            $link_after . '</a>', 
            '<span class="walker_nav">' . $item->description . '</span>' . $link_after . '</a>', 
            $item_output
        );
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'nav_description', 10, 3);