<!-- get header start -->
<?php get_header(); ?> 
 <div class="container">
<!--  start content -->
    <?php
        if(have_posts()){
            while(have_posts()){ the_post();
                get_template_part('template-part/content/content-page' ,'');
            }
        } ?>
    <br> 
</div>
</div><!-- get_footer start -->
<?php get_footer();?>
<!-- get_footer end -->