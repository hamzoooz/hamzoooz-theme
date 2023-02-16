<?php

?>


<h2>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</h2>
<small> 
    <span class="post-date" > <i class="fa fa-calendar "></i> <?php the_time('F jS, Y'); ?> by  <i class="fa fa-user "></i> <?php the_author_posts_link(); ?></span> 
    <span > <i class="fa fa-comments "></i> <?php comments_popup_link('no comments' ,'one comment' , '% comments' , 'comment-url' , 'comment disabled') ?></span>
</small>
