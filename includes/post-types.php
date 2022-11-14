<?php


// Register customs Post Type
function customs_post() {
    register_post_type( 'custom',
        array(
            'labels'    => array(
                'name' => __( 'customs' ),
                'singular_name' => __('custom')
            ),
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'menu_position' => 20,
            'with_front' => true,
            'supports'      =>  array('title', 'editor', 'page-attributes', 'thumbnail'),
            'menu_icon'     => 'dashicons-editor-paragraph',
        )
    );

    register_taxonomy(  
        'customs',
        'custom',
        array(
            'hierarchical' => true,         
            'has_archive' => true,
            'label' => 'Categories',            
            'query_var' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            /*'rewrite' => array(
                'slug' => 'customs',
                'with_front' => true  
            )*/
        )
    );
}
//add_action( 'init', 'customs_post' ); 
