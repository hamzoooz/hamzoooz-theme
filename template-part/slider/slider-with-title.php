<?php

$arg = array(
    'post_type'         => 'slider',
    'posts_per_page'    => 1,
    'order'             => 'ASC'
);
$the_query_slider = new WP_Query($arg);
$j = 0;
$post_count = wp_count_posts('slider')->publish;


if($the_query_slider->have_posts()):
  while($the_query_slider->have_posts()): $the_query_slider->the_post(); ?>

<div class="container">
  <div class="slider-with-title">
    
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <?php for($i=0;$i<$post_count; $i++): ?>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $i+1; ?>"></button>
      <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
      <?php endfor; ?>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item <?php echo $j==0 ? ' active': ''; ?>">
      <?php 
      if (has_post_thumbnail()): the_post_thumbnail('slider');
      else :
        echo '<img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cXVyYW58ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="d-block  " alt="...">';
      endif;
        ?>
      <div class="seperoter"></div>
      <div class="carousel-caption d-md-block">
        <h5><?php the_title(); ?></h5>
        <p><?php the_content(); ?></p>
      <?php 
      $j++;
      endwhile;
    endif;
    wp_reset_query();


      ?>
      </div>
    </div>
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
</div>