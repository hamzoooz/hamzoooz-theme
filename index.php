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
// echo get_template_part('templates/test', 'test');
// wp_die();
get_header();?>
<div class="container">
<?php  get_template_part('/templates/slider/slider-with-title.php', '' ) ?>
<?php
    if(have_posts()){
        while(have_posts()){
            the_post(); ?>
                <div class="main-post ">
                <?php  get_template_part('/templates/meat', 'header' ) ?>
                
                    <?php the_post_thumbnail('' , ['class' => 'img-responsive img-thumbnail' , 'title' => 'post-Image']) ?>
                    <hr>
                    <div class="post-content" ><?php content() ?></div>
                    <hr>
                    <?php  get_template_part('/templates/meat', 'footer' ) ?>

                </div>
            <?php                    
        }
    }

    echo '<div class="clearfix"></div>';
    
    // Add next and previous
    echo '<div class="post-pagination">';
        if(get_previous_posts_link() ){
            previous_posts_link('<i class="fa fa-chevron-left fa-fw fa-lg" aria-hidden="true"></i> Prev');
        }else{
            echo '<span class="d-none  pagination-prev-span" >prev</span>';
        }
        if (get_next_posts_link() ){
            next_posts_link( ' Next <i class="fa fa-chevron-right fa-fw fa-lg" aria-hidden="true"></i>');
        } else {
            echo '<span class="d-none pagination-next-span" > Next </span>';
        }
    echo '</div>';  

    echo '<div class="numbering_pagination">';
    echo numbering_pagination(); //Get Current Page 
    echo '</div>';?>

</div>

<?php get_footer();?>