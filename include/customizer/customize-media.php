<?php

function hamzoooz_customize_media_callback($wp_customize){
    
    // =================================================
    $wp_customize->add_section('hamzoooz_media_customize',array(
        'title'         =>  __('Media Setting','hamzoooz'),
        'description'   =>  __('you can change media theme  from here','hamzoooz'),

    ));

    $wp_customize->add_setting('hamzoooz_media_setting',array(
        'default'       =>  '',
        'type'          =>  'image',
        'sanitize'      =>  'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'hamzoooz_media_setting',array(
        'section'       =>  'hamzoooz_media_customize',
        'label'         =>  __('Default Thumbnail  ', 'hamzooooz'),
        'mime_type'     => 'image',
        'flex_width'    => true,
        'flex_height'   => true,
    )));

}

add_action( 'customize_register', 'hamzoooz_customize_media_callback');



// desplay custom css 
function hamzoooz_customize_medai_1(){
        $output = array();
        $output['default_thumbnail']  =   get_theme_mod( 'hamzoooz_media_setting', '' );

    return $output;
}
add_action( 'init', 'hamzoooz_customize_medai_1' );
