<!-- get header start -->
<?php get_header();?>
<!-- get header end -->

<!--  start content -->
<div class="container">

<div class="row category-information-row">
    <div class="text-center category-information">
        <div class="col-md-4 col-lg-4 col-sm-4">
            <h1 class="category-title"><?php single_cat_title() ?></h1>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <div class="category-desciption"> <?php echo category_description() ?> </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <div class="cat-stats">
                This Uncategorize pages <br>
                <!-- focarit -->
            </div>
        </div>
    </div>
</div>
<br>
<?php
    if(have_posts()):
        while(have_posts()):
            the_post(); ?>
                    <div class="main-post">
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                        <?php  get_template_part('/template-part/meta/meta', 'header' ) ?>

                        <hr>
                        <?php 
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('' , ['class' => 'img-responsive img-thumbnail' , 'title' => 'post-Image']);
                        else :
                            echo '';
                        endif;
                            ?>
                        <hr>
                        <div class="post-content" >
                        <?php 
                        if(has_excerpt()):
                            the_excerpt();
                        else :  
                            the_content();
                        endif;
                        ?>

                        </div>
                        <hr>
                        <?php  get_template_part('/template-part/meta/meta', 'footer' ) ?>

                        <!-- <div class="clear-fix"></div> -->
                    </div>
                </div>
                <!-- <div class="clear-fix"></div> -->
            <?php                    
        endwhile;
    endif;
    get_template_part('/template-part/pagination/pagination', '' );

get_footer();
echo '</div>';
