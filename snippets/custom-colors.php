<?php
	
	/*
		Define custom colors in your theme to use with the Gutenberg editor
		Source: https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
	*/
	
	function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => __( 'light grayish magenta', 'themeLangDomain' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => __( 'very light gray', 'themeLangDomain' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => __( 'very dark gray', 'themeLangDomain' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

/*
	If you want to disable other colors than defined above
*/
add_theme_support( 'disable-custom-colors' );

/*
	Don't forget to add the CSS to your theme/plugin
	
		.has-strong-magenta-background-color {
		    background-color: #a156b4;
		}
		
		.has-strong-magenta-color {
		    color: #a156b4;
		}
*/