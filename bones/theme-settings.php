<?php
/**
 * @param WP_Customize_Manager $wp_customize
 */
add_action( 'customize_register', 'bones_customizer_settings' );
function bones_customizer_settings( $wp_customize ) {
$wp_customize->add_section( 'cd_colors' , array(// colors settings
    'title'      => 'Colors',
    'priority'   => 30,
) );
$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

$wp_customize->add_setting( 'background_color' , array(
    'default'     => '#43C6E4',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
	'label'        => 'Background Color',
	'section'    => 'cd_colors',
	'settings'   => 'background_color',
) ));


$wp_customize->add_setting( 'header_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
	'label'        => 'Font Color',
	'section'    => 'cd_colors',
	'settings'   => 'header_color',
) ));
$wp_customize->add_setting( 'link_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'        => 'Link Color',
	'section'    => 'cd_colors',
	'settings'   => 'link_color',
) ));
$wp_customize->add_setting( 'h1_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h1_color', array(
	'label'        => 'Header 1 Color',
	'section'    => 'cd_colors',
	'settings'   => 'h1_color',
) ));

$wp_customize->add_setting( 'h1_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h1_color', array(
	'label'        => 'Header 1 Color',
	'section'    => 'cd_colors',
	'settings'   => 'h1_color',
) ));
$wp_customize->add_setting( 'h2_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h2_color', array(
	'label'        => 'Header 2 Color',
	'section'    => 'cd_colors',
	'settings'   => 'h2_color',
) ));
$wp_customize->add_setting( 'h3_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h3_color', array(
	'label'        => 'Header 3 Color',
	'section'    => 'cd_colors',
	'settings'   => 'h3_color',
) ));
$wp_customize->add_setting( 'h4_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h4_color', array(
	'label'        => 'Header 4 Color',
	'section'    => 'cd_colors',
	'settings'   => 'h4_color',
) ));
$wp_customize->add_setting( 'h5_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h5_color', array(
	'label'        => 'Header 5 Color',
	'section'    => 'cd_colors',
	'settings'   => 'h5_color',
) ));
$wp_customize->add_setting( 'h6_color' , array(
    'default'     => '#fff',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h6_color', array(
	'label'        => 'Header 6 Color',
	'section'    => 'cd_colors',
	'settings'   => 'h6_color',
) ));

}