<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://www.hamzoooz.com
 * @package WordPress
 * @subpackage hamzooo
 * @since 2020 
 */

get_header();?>
<?php echo 'this front page'; ?>
<?php echo get_template_part('/template-part/slider/slider-with-title' ); ?>

<?php 
if(hamzoooz_display_theme_modification()["boxes_options"]){ ?>
    <div class="container">
        <div class="row ">
        <?php
        $number_of_boxex =  hamzoooz_display_theme_modification()["number_of_boxex"];

        for($i=1; $i<=$number_of_boxex; $i++){
            $title_box_in_front = 'title_box'. $i;
            $content_box_in_front = 'p_box'. $i;?>
            
            <div class="col-<?php echo 12/$number_of_boxex; ?> main-post p-2 ">
            
            <h2><?php //echo hamzoooz_display_theme_modification()[$title_box_in_front] ?></h2>
            <h2><?php echo get_theme_mod('hamzoooz_add_box' . $i) ?></h2>
            <p><?php echo get_theme_mod('hamzoooz_add_box_desc' . $i) ?></p>
            
            <p><?php //echo hamzoooz_display_theme_modification()[$content_box_in_front] ?></p>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>

<!-- <?php // echo get_template_part('/template-part/slider/slider-with-title-coustoum' ); ?> -->
<?php
    if(have_posts()){
        while(have_posts()){
            the_post(); ?>
                <div class="container">
                    <div class="main-post ">
                        <h3><a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></h3>
                        <?php  get_template_part('/template-part/meta/meta', 'header' ) ?>
                        <?php  get_template_part('/template-part/content/content-index' ) ?>
                        <?php  get_template_part('/template-part/meta/meta', 'footer' ) ?>
                    </div>
                </div>
                <?php                    
        }
    }else{
        get_template_part('/template-part/content/content-none' );  
    }?>

    <div class="clearfix"></div>
    <?php  get_template_part('/template-part/pagination/pagination', '' ); ?>

    <?php get_footer();?> 