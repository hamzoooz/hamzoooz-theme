<div class="clearfix"></div>

<?php 

if (has_post_thumbnail()):
    the_post_thumbnail('' , ['class' => 'img-responsive img-thumbnail' , 'title' => 'post-Image']);
else : 
    $default_thumbnail = hamzoooz_customize_medai_1()['default_thumbnail'];?>
    <?php echo wp_get_attachment_image($default_thumbnail) ; ?>
    <!-- <img src=" <?php // echo $default_thumbnail; ?>" alt="" srcset=""> -->
<?php 
endif ; ?>

<div class="post-content" ><?php the_content() ?></div>