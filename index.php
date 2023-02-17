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
// echo get_template_part('template-part/test', 'test');
// wp_die();
get_header();?>

<!-- <?php  get_template_part('/template-part/slider/slider-with-title' ) ?> -->
<?php
    if(have_posts()){
        while(have_posts()){
            the_post(); ?>
                <div class="container">
                    <div class="main-post ">
                        <?php  get_template_part('/template-part/meta/meta', 'header' ) ?>

                        <?php the_post_thumbnail('' , ['class' => 'img-responsive img-thumbnail' , 'title' => 'post-Image']) ?>
                        <hr>

                        <div class="post-content" ><?php the_content() ?></div>
                        <hr>

                        <?php  get_template_part('/template-part/meta/meta', 'footer' ) ?>
                    </div>
                </div>
                <?php                    
        }
    }else
    get_template_part('/template-part/meta/meta', 'footer' );
    ?>
    <div class="clearfix"></div>
    <?php  get_template_part('/template-part/pagination/pagination', '' ) ?>
    <?php  ?>
    
    <?php get_footer();?>