<?php

/*
 * LOAD THE CUSTOM NAVIGATION
*/
function la_navigation(){

    $args = array(
        'container'       => '',
        'menu'            => 'primary',
        'menu_class'      => 'main-nav',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'walker'          => new MV_Cleaner_Walker_Nav_Menu()
    );

    wp_nav_menu( $args );

    echo "\n";
}

/*
 * LOAD THE CUSTOM NAVIGATION II
 * NAVIGATION WALKER - LA Customized
*/
class MV_Cleaner_Walker_Nav_Menu extends Walker {

    var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    function start_lvl(&$output, $depth = 0, $args = []) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = []) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 1, $args = [], $current_object_id = 0) {

        global $wp_query;

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : str_repeat( " ", 12 );

        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = in_array( 'current-menu-item', $classes ) ? array( 'current' ) : array();
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', '', $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= "\n". $indent . '<li' . $id . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el(&$output, $object, $depth = 0, $args = []) {
        $output .= "</li>";

        // Last menu item needs to have the class "last" added for this to work
        if ($object->classes[0] == "last") {
            $output .= "\n        ";
        }

    }
}

/*
 * Unset the standard thumbnail sizes we're not using anyway
*/
function filter_image_sizes($sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'filter_image_sizes');