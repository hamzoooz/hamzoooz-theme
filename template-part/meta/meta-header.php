<?php

// $GLOBALE ['text_domain'];
?>

<small> 
    <span class="post-date" > <i class="fa fa-calendar "></i> <?php the_time('F jS, Y'); ?> by  <i class="fa fa-user "></i> <?php the_author_posts_link(); ?></span> 
    <span > <i class="fa fa-comments "></i> <?php comments_popup_link( __('no comments', 'hamzoooz' ) ,__('one comment', 'hamzoooz') , __('% comments', 'hamzoooz') , __('comment-url','hamzoooz') , __('comment disabled','hamzoooz')) ?></span>
</small>
