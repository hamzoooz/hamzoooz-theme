<?php 
if (has_post_thumbnail()):
    the_post_thumbnail('' , ['class' => 'img-responsive img-thumbnail' , 'title' => 'post-Image']);
else :
    echo ''; 
endif ; ?>

<div class="post-content" ><?php the_content() ?></div>