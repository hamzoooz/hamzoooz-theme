<?php

function hamzoooz_customize_colors($wp_customize){
    $wp_customize->add_section('hamzoooz_primary_color_customize',array(
        'title'         =>  __('Theme Colors','hamzoooz'),
        'description'   =>  __('you can change theme color from here','hamzoooz'),
    ));

    $wp_customize->add_setting('hamzoooz_primary_color',array(
        'default'       =>  'rgb(31, 123, 166)',
        'type'          =>  'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hamzoooz_primary_color',array(
        'section'       =>  'hamzoooz_primary_color_customize',
        'label'         =>  __('Pickvtheme primary color ', 'hamzooooz')
    )));
    
    // =================================================
    // $wp_customize->add_section('hamzoooz_secondary_color_customize',array(
    //     'title'         =>  __('Theme Colors','hamzoooz'),
    //     'description'   =>  __('you can change secondary theme color from here','hamzoooz'),
    // ));

    $wp_customize->add_setting('hamzoooz_secondary_color',array(
        'default'       =>  'rgb(31, 123, 166)',
        'type'          =>  'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hamzoooz_secondary_color',array(
        'section'       =>  'hamzoooz_primary_color_customize',
        'label'         =>  __('Pickv theme secondary color ', 'hamzooooz')
    )));

}

add_action( 'customize_register', 'hamzoooz_customize_colors');



// desplay custom css 
function hamzoooz_custome_css(){
    $primary_color = get_theme_mod('hamzoooz_primary_color');
    $secondary_color = get_theme_mod('hamzoooz_secondary_color');

    echo <<<START
            <style>
                :root{
                    --primary-color:$primary_color
                    --secondary-color:$secondary_color
                }
            </style>
        START;
}
add_action( 'wp_head', 'hamzoooz_custome_css' );


// --dark-color:rgb(66, 61, 61);
// --light-color:rgb(213, 213, 213);