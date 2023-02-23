<?php 
/**
 * 
 * this function to change text in footer from customize control 
 * 
 */

function hamzoooz_customizer($wp_customize){
    $wp_customize->add_setting('hamzoooz_footer_text',array(
        "default"   =>  __("all copyright reserver",'hazmoooz'),
        'type'      => 'theme_mod',
    ));
    $wp_customize->add_control('hamzoooz_footer_text',array(
        'setting'   =>'hamzoooz_footer_text',
        'label'     => __('Footer Text', 'hamzoooz'),
        'type'      => 'text',
        "section"   =>  'hamzoooz_footer_text_section'
    ));
    $wp_customize->add_section('hamzoooz_footer_text_section',array(
        'title'     => __('Footer Text Section', 'hamzoooz'),
        'description' => __("You can customize footer text in here", 'hamzoooz'),
        'description_hidden' => true,
    ));

    // ====================================================
    // Add Boxes in Front Page 
    $number_of_boxex = hamzoooz_display_theme_modification()["number_of_boxex"];

    for( $i=1; $i<=$number_of_boxex; $i++ ){

        $add_setting_id          = 'hamzoooz_add_box' . $i; 
        $default_setting         = 'Box '  . $i;
        $label_setting_boxex     = 'Box '  . $i;
        $title_section_boxes     = 'Box '  . $i;
        $add_section_id          = 'add_section_id' . $i;
        $description_section_box = 'You can customize box ' .  $i . ' in frront page from here ^_^';
        // add boxes to front page

        $wp_customize->add_section($add_section_id,array(
            'title'                 =>      __($title_section_boxes,'hamzoooz'),
            'description'           =>      __($description_section_box, 'hamzoooz'),
            'description_hidden'    =>      true,
            'panel'                 =>      'hamzoooz_boxes_frontpage',
        )); 
        $wp_customize->add_setting($add_setting_id,array(
            'default'   =>  __($default_setting, 'hamzoooz'),
            'type'      =>  'theme_mod'
        ));
        $wp_customize->add_control($add_setting_id,array(
            // 'setting'       =>      $add_setting_id,
            'label'         =>      __($label_setting_boxex ,'hamzoooz'),
            'type'          =>      'text',
            'section'       =>      $add_section_id
        ));

        // hera the p 
        // =====================================
        $add_setting_id_desc          = 'hamzoooz_add_box_desc' . $i; 
        $label_setting_boxex_desc     = 'Box '  . $i . ' Description';

        // add boxes to front page
        $wp_customize->add_setting($add_setting_id_desc,array(
            'default'   =>  __($default_setting, 'hamzoooz'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control($add_setting_id_desc,array(
            'label'         =>      __($label_setting_boxex_desc ,'hamzoooz'),
            'type'          =>      'textarea',
            'section'       =>      $add_section_id
        ));
    }
    $wp_customize->add_panel('hamzoooz_boxes_frontpage',array(
        'title'     =>      __('Front Page Boxes', 'hamzoooz'),
        'description'    => __('You Can Edit Front Oage Boxes From Here !','hamzoooz')
    ));
    // control in Option of boxes
    $wp_customize->add_section('option_of_boxes_section',array(
        'title'               => __('Option Of Boxes Section', 'hamzoooz'),
        'description'         => __("You can customize Option in here", 'hamzoooz'),
        'description_hidden'  => true,
        'panel'               =>  'hamzoooz_boxes_frontpage'
    )); 
    $wp_customize->add_setting('option_of_boxes',array(
        "default"   =>  1,
        'type'      => 'theme_mod',
    ));
    $wp_customize->add_control('option_of_boxes',array(
        'setting'   =>'option_of_boxes',
        'label'     => __('Option Of Boxes', 'hamzoooz'),
        'type'      => 'radio',
        'choices'   => array(
            1 => "Yes",
            0   => 'No'
        ),
        "section"   =>  'option_of_boxes_section'
    ));
    

    $wp_customize->add_setting('number_of_boxex',array(
        "default"   =>  3,
        'type'      => 'theme_mod',
    ));
    $wp_customize->add_control('number_of_boxex',array(
        'setting'   =>'number_of_boxex',
        'label'     => __('Number Of Boxes', 'hamzoooz'),
        'type'      => 'select',
        'choices'   => array(
            // 0   =>  "No Boxes",
            1   =>  __("one Box",'hamzoooz'),
            2   =>  __("tow Boxes",'hamzoooz'),
            3   =>  __("three Boxes",'hamzoooz'),
            4   =>  __("four Boxes",'hamzoooz'),
            5   =>  __("five Boxes",'hamzoooz'),
            6   =>  __("six Boxes",'hamzoooz'),
            7   =>  __("seven Boxes",'hamzoooz'),
            8   =>  __("8 Boxes",'hamzoooz'),
            9   =>  __("9 Boxes",'hamzoooz'),
            10   =>  __("ten Boxes",'hamzoooz'),
            11  =>  __("11 Boxes",'hamzoooz'),
            12   =>  __("12 Boxes",'hamzoooz'),

        ),
        "section"   =>  'option_of_boxes_section'
    ));
}

add_action( 'customize_register', 'hamzoooz_customizer' );


// we Can Use This function to change the text 
// show theme mdifcations 
function hamzoooz_display_theme_modification(){
    $output = array();
    $output['footer_text']  =   get_theme_mod( 'hamzoooz_footer_text', 'all right reserve ' );


    for($i=1; $i<=3; $i++){
        $title_box = "title_box" . $i;
        $add_setting_id_in_noty = "hamzoooz_add_box" . $i;
        $p_box = 'p_box' . $i;
        $add_p_setting_id_in_noty = "hamzoooz_add_box_desc" . $i;

        $output[$title_box]  = get_theme_mod($add_setting_id_in_noty ,'About Us ');
        $output[$p_box]  = get_theme_mod($add_p_setting_id_in_noty ,'About Us ');
    }
    $output['boxes_options']  = get_theme_mod("option_of_boxes" ,'About Us ');
    $output['number_of_boxex']  = get_theme_mod("number_of_boxex" ,3);
    
    return $output;
}

add_action( 'init', 'hamzoooz_display_theme_modification' );