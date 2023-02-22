<?php 
if (has_post_thumbnail()):
    the_post_thumbnail('' , ['class' => 'img-responsive img-thumbnail' , 'title' => 'post-Image']);
else :
    echo ''; 
endif ; ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col"><?php _e('type','hamzoooz'); ?></th>
      <th scope="col"><?php _e('title','hamzoooz'); ?></th>
      <th scope="col"><?php _e('description','hamzoooz'); ?> </th>
      <th scope="col"><?php _e('writer','hamzoooz'); ?> </th>
      <th scope="col"><?php _e('publsher','hamzoooz'); ?> </th>
    </tr>
  </thead> 
  <tbody>
    <tr>
      <td><?php the_terms($post->ID,'book', '','-','') ?></td>
      <td><?php the_title(); ?></td>
      <td> <?php the_terms($post->ID,'book_type', '','-','') ?></td>
      <td><?php the_terms($post->ID,'writers', '','-','') ?></td>
      <td><?php the_terms($post->ID,'publishers', '','-','') ?></td>
    </tr>
  </tbody>
</table>

<div class="post-content" ><?php the_content() ?></div>