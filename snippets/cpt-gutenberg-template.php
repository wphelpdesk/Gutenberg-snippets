<?php
    /**
     * https://wordpress.org/gutenberg/handbook/templates/
     */

    function myplugin_register_book_post_type() {
        $args = array(
            'public' => true,
            'label'  => 'Books',
            'show_in_rest' => true,
            'template' => array(
                array( 'core/image', array(
                    'align' => 'left',
                ) ),
                array( 'core/heading', array(
                    'placeholder' => 'Add Author...',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Add Description...',
                ) ),
            ),
            // optional
            'template_lock' => 'all', // or 'insert' to allow moving
        );
        register_post_type( 'book', $args );
    }
    add_action( 'init', 'myplugin_register_book_post_type' );
