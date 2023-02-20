<?php
?>

<p class="categories"> <i class="fa fa-tags fa-fw"></i><?php the_category(' , ') ?></p>
<p class="post-tags"> <?php if (has_tag() ){ the_tags();} else { echo __('no tag wirte someone on comments' , 'hamzoooz' );}?></p>

