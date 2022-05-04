<?php


// Our custom post type function
function create_posttype() {

    register_post_type( 'businesses',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Businesses' ),
                'singular_name' => __( 'Business' )
            ),
            'public' => true,
            'has_archive' => false,
            'taxonomies'         => array( 'category' ),
            'query_var'          => true,
            'publicly_queryable'  => true,
        )
    );


}
// Hooking up our function to theme setup
//add_action( 'init', 'create_posttype' );

