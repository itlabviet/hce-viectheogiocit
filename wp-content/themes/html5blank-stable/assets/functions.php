<?php

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Part time', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Part time', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Part time', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Part time', 'twentythirteen' ),
        'all_items'           => __( 'All Part time', 'twentythirteen' ),
        'view_item'           => __( 'View Part time', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Part time', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Part time', 'twentythirteen' ),
        'update_item'         => __( 'Update Part time', 'twentythirteen' ),
        'search_items'        => __( 'Search Part time', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Part times', 'twentythirteen' ),
        'description'         => __( 'Part time news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'parttime', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

// filer title-limit WordPress title length
function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();
    if( strlen($title) <= $length )
         $after = '';
    if ( $length && is_numeric($length) ) {
        $title = substr( $title, 0, $length );
    }

    if ( strlen($title)> 0 ) {
        $title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
        if ( $echo )
            echo $title;
        else
            return $title;
    }

}


//================= pagination =================
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'          => __('«'),
            'next_text'          => __('»'),
        ));
    }
}

//================= Menu =================
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}