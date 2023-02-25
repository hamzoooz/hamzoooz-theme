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

<?php 
$book_args = array(
'post-type' => 'book',
'post_per_page' => 5
);

$the_book = new WP_Query($book_args);


?>


<?php echo get_template_part('/template-part/slider/slider-with-title' ); ?>
<?php
    if($the_book->have_posts()){
        while($the_book->have_posts()){
            $the_book->the_post(); ?>
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