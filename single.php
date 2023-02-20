<!-- get header start -->
<?php
    get_header(); //Get Header
    
    include(get_template_directory() . '/include/breadcrumb.php'); //include breadcrumb
    echo '<div class="container">';?>
<!--  start content -->
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                        get_template_part('template-part/content/content-single');
                }
            }

            echo '<div class="clearfix"></div>';
            $random_post_arguments = array(
                'posts_per_page'     =>   5,
                'orderby'           =>  'rand',
                'category__in'      =>   wp_get_post_categories(get_queried_object_id()),    //ned array 
                'post__not_in'       =>  array(get_queried_object_id()),

            );?>
            <h3 class ="object-same-as"> object same as</h3><?php
            $random_posts  = new WP_Query($random_post_arguments);
                if($random_posts-> have_posts()){
                    while($random_posts-> have_posts()){
                        $random_posts->the_post(); ?>
                        <div class="author-posts">
                                <h3 class="post-title">
                                    <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                    </a>
                                </h3>
                        </div>
                        <?php 
                    }
                }
                // wp_reset_postdate();
            ?>
            <div class="row">
                <div class="col-md-2">
                    <?php
                        $avatar_arguments = array(
                            'class' => 'img-responsive img-thumbnail center-block avatar-class'
                        );
                        echo get_avatar(get_the_author_meta('ID')  , 80 , '', '' , $avatar_arguments);
                    
                    ?>
                </div>
                <div class="col-md-10 author-info">
                    <h4>
                        <?php the_author_meta('first_name') ?> 
                        <?php the_author_meta('last_name') ?> 
                        (<?php the_author_meta('nickname') ?>) 
                    </h4>
                    <?php if(get_the_author_meta('description')) { ?>
                    <p> <?php the_author_meta('description') ?> </p>
                    <?php }else{
                        echo "Thers No Biography";
                    }?>
                </div>
            </div>
            <div class="auther-stats">
                <div> <i class="fa fa-user "></i> User Post Count: <span class="post-count"><?php echo count_user_posts(get_the_author_meta('ID')) ?> </span>  </div>
                <p><i class="fa fa-tag "></i>User Profile Link: <?php the_author_posts_link() ?> </p>
            </div>
            <?php 
            echo '<div class="clearfix"></div>';
            echo '<hr class="comment-separator">';
            // Add next and previous
            echo '<div class="post-pagination">';
                echo '<div class="next-class">';
                if(get_previous_post_link() ){
                    previous_post_link();
                }else{
                    echo '<span class="pagination-prev-span" >prev</span>';
                }
                echo '</div>';
                echo '<div class="prev-class">';
                if (get_next_post_link() ){
                    next_post_link();
                } else {
                    echo '<span class="pagination-next-span" > Next </span>';
                }
                echo '</div>';

                echo '</div>' . '<br>'. '<br>'. '<br>';
                echo '<div class="numbering_pagination-in-single">';
                echo numbering_pagination(); //Get Current Page 
                echo '</div>';

            echo '<hr class="comment-separator">';
            comments_template();
        ?>
        <br> <br><br>
    </div>
</div><!-- get_footer start -->
<?php get_footer();?>
<!-- get_footer end -->