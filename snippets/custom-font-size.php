<?php
	add_theme_support( 'editor-font-sizes', array(
    array(
        'name' => __( 'extra small', 'themeLangDomain' ),
        'shortName' => __( 'XS', 'themeLangDomain' ),
		'size' => 8,
		'slug' => 'extra-small'
    ),
    array(
        'name' => __( 'small', 'themeLangDomain' ),
        'shortName' => __( 'S', 'themeLangDomain' ),
		'size' => 12,
		'slug' => 'small'
    ),
    array(
        'name' => __( 'regular', 'themeLangDomain' ),
        'shortName' => __( 'M', 'themeLangDomain' ),
		'size' => 16,
		'slug' => 'regular'
    ),
    array(
        'name' => __( 'large', 'themeLangDomain' ),
        'shortName' => __( 'L', 'themeLangDomain' ),
		'size' => 36,
		'slug' => 'large'
    )
) );